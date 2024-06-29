<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Notifications\EmailVerificationNotification;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
//use Ichtrojan\Otp\Models\Otp;
use Ichtrojan\Otp\Otp;
class UserController extends Controller
{
    public function createUser(Request $request): JsonResponse
    {
        try {
            $validateUser = Validator::make($request->all(), [
                'name' => 'required|string',
                'email' => 'required|email|unique:users,email',
                'password' => 'required'
            ]);

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation error',
                    'errors' => $validateUser->errors()
                ], 422);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);



            return response()->json([
                'status' => true,
                $user->notify(new EmailVerificationNotification()),
                'message' => 'User created successfully, Check Your Mail to Verify your account',
                'user_id'=>$user->id,
                'token' => $user->createToken("API TOKEN")->plainTextToken,
            ], 201);

        }
        catch (\Throwable $th)
        {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function loginUser(Request $request): JsonResponse
    {
        try {
            $validateUser = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation error',
                    'errors' => $validateUser->errors()
                ], 422);
            }

            if (!Auth::attempt($request->only(['email', 'password']))) {
                return response()->json([
                    'status' => false,
                    'message' => 'Email and password do not match our records',
                ], 401);
            }

            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'message' => 'User logged in successfully',
                'user_id'=>$user->id,
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }



    public function uploadProfilePicture(Request $request)
    {
        $request->validate([
            'profile_photo_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $user = Auth::user();
        if ($request->hasFile('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = 'profile-photos/' . $fileName;

            $file->move(public_path('storage/profile-photos'), $fileName);

            $user->profile_photo_path = $filePath;
            $user->save();

            $profilePhotoUrl = url('storage/profile-photos/' . $fileName);

            return response()->json([
                'message' => 'Profile picture uploaded successfully',
                'profile_picture_url' => $profilePhotoUrl
            ]);
        }

        return response()->json(['message' => 'No file uploaded'], 400);
    }





    public function updateProfilePicture(Request $request): JsonResponse
    {
        $request->validate([
            'profile_photo_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();
        if ($request->hasFile('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = 'profile-photos/' . $fileName;
            $file->move(public_path('storage/profile-photos'), $fileName);
            if ($user->profile_photo_path) {
                $oldFilePath = public_path($user->profile_photo_path);
                if (file_exists($oldFilePath)) {
                    @unlink($oldFilePath);
                }
            }
            $user->profile_photo_path = $filePath;
            $user->save();
            $profilePhotoUrl = url('storage/profile-photos/' . $fileName);

            return response()->json([
                'message' => 'Profile picture updated successfully',
                'profile_picture_url' => $profilePhotoUrl,
            ]);
        }
        return response()->json(['message' => 'No file uploaded'], 400);
    }




    public function deleteProfilePicture(): JsonResponse
    {
        $user = Auth::user();
        if ($user->profile_photo_path) {
            Storage::disk('public')->delete($user->profile_photo_path);
            $user->profile_photo_path = null;
            $user->save();
            return response()->json(['message' => 'Profile picture deleted successfully']);
        }
        return response()->json(['message' => 'No profile picture to delete'], 400);
    }


    public function updateUserData(Request $request, $id): JsonResponse
    {
        $request->validate([
            'name' => 'required|string',
//            'email' => 'email|unique:users,email'
        ]);


        DB::table('users')
            ->where('id', $id)
            ->update([
                'name'=>$request->input('name'),
//                'email'=>$request->input('email'),
                'updated_at' => now(),
            ]);

        $updatedUser = DB::table('users')
            ->select('name', 'email', 'profile_photo_path','updated_at')
            ->where('id', $id)
            ->first();

        return response()->json([
            'message' => 'User data updated successfully',
            'user' => $updatedUser
        ]);
    }


    public function destroyAccount($id): JsonResponse
    {
        try {
            $authenticatedUserId = auth()->id();

            $user = User::findOrFail($id);

            if ($user->id !== $authenticatedUserId) {
                return response()->json([
                    'status' => false,
                    'message' => 'Unauthorized to delete this user account.'
                ], 403);
            }
            $user->delete();

            return response()->json([
                'status' => true,
                'message' => 'User account deleted successfully.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to delete user account.',
                'error' => $e->getMessage()
            ], 500);
        }
    }




    public function GetUserData(Request $request, $id): JsonResponse
    {
        $user = DB::table('users')
            ->select(
                'users.id as User_id',
                'users.name as User_name',
                'users.profile_photo_path as User_profile_photo',
                'users.email as User_email',
                'users.language as language'
            )
            ->where('users.id', '=', $id)
            ->first();

        if ($user) {
            $profilePhotoUrl = url('storage/' . $user->User_profile_photo);

            return response()->json([
                'status' => true,
                'message' => 'User data retrieved successfully',
                'profile_picture_url' => $profilePhotoUrl,
                'data' => $user
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'User not found'
            ], 404);
        }
    }



    public function logout(Request $request): JsonResponse
    {
        if ($request->user()->tokens()->delete()){
            return response()->json([
                'status' => true,
                'message' => 'User logged out successfully'
            ], 200);
        }else{
            return response()->json([
                'message'=>'Some error occurred, please try again'
            ], 500);
        }
    }
}
