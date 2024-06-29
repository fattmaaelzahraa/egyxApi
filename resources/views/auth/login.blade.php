<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EgyXplore</title>
    <!--======================= CSS styling file ============================= -->
    <link rel="stylesheet" href="css/signin.css" />
    <!--======================= Icons file ============================= -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!--======================= Logo Icon ============================= -->
    <link rel="shortcut icon" href="imgs/camel.png" />
    <!--======================= Font Family ============================= -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

</head>

<body>
    <style>
        /*==================== GOOGLE FONTS ====================*/
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        :root {
            /*========= Colors =============*/
            --main-color: #8b5843;
            --text-color: #333333;
            --second-main-color: #f6dcad;
            --explore-more-color: #774936;
            --border-color: #533528;
            --title-color: #ffffff;
            --inactive-line-color: #b9b9b9;
            --cards-p-color: #5b5b5b;
            --calend-background: #b3c4d4;
            --review-background: #ffebc7;
            --views-background: #ffd8da;
            --input-color: #333333;
            --input-background-color: #e3e3e3;
            --icon-back-color: #e7bc91;
            --shadow: #40404040;
            --calend-txt-color: #03014a;
            /*========== Font weight ==========*/
            --font-medium: 500;
            --font-semi-bold: 600;
            --font-bold: 700;
        }

        /*main container*/
        .container {
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px;
            padding-right: 15px;
        }

        @media (min-width: 768px) {
            .container {
                width: 750px;
            }
        }

        @media (min-width: 992px) {
            .container {
                width: 970px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                width: 95%;
            }
        }

        /*==================== Body ====================*/
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        ul {
            list-style: none;
        }

        .bg {
            font-family: "Poppins", sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            width: 100%;
            background-position: center;
            background-attachment: fixed;
            background-image: url('storage/sign-bg.png');
            z-index: -1;
            position: absolute;
            left: 0;
            top: 0
        }

        .container .sign-in .header {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding-top: 30px;
            position: relative;
        }

        .container .header .user {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #b9b9b9;
            margin-right: 20px;
        }

        .container .header h1 {
            color: white;
            flex: 0.5;
            font-weight: 500;
        }

        .container .header ul {
            flex: 0.5;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            list-style: none;
            flex: 0.5;
            display: flex;
            flex-direction: row;
            gap: 90px;
        }

        .container .header ul li {
            display: flex;
            flex-direction: row;
            gap: 90px;
        }

        .container .header ul li a {
            color: white;
            text-decoration: none;
        }

        .container .textarea {
            padding-top: 80px;
        }

        .container .textarea h1 {
            font-size: 50px;
            color: white;
        }

        .container .textarea p {
            font-size: 18px;
            color: white;
            padding-left: 20px;
        }

        .container .textarea p a {
            color: white;
        }

        .container .textarea {
            padding-top: 80px;
        }

        .container .textarea h1 {
            font-size: 50px;
            color: white;
        }

        .container .textarea p {
            font-size: 18px;
            color: white;
            padding-left: 20px;
        }

        .container .textarea p a {
            color: white;
        }
        .container form .email {
            width: 60%;
            height: 80px;
            background-color: var(--icon-back-color);
            border-radius: 25px;
            outline: none;
            border: transparent;
            padding-left: 40px;
            font-size: 18px;
            margin-top: 260px;
            margin-left: 120px;
            min-height: 40px;
        }

        .container form .email::placeholder {
            font-size: 15px;
            top: 0;
            position: absolute;
            top: 20%;
        }

        .container form .password {
            width: 60%;
            height: 80px;
            background-color: var(--icon-back-color);
            border-radius: 25px;
            outline: none;
            border: none;
            padding-left: 40px;
            font-size: 18px;
            margin-top: 40px;
            margin-left: 120px;
        }

        .container form .password::placeholder {
            font-size: 15px;
            top: 0;
            position: absolute;
            top: 20%;
        }

        .container .textarea {
            padding-top: 40px;
            left: 8%;
            position: absolute;
            padding-bottom: 60px;
            color: white
        }

        .container.textarea h1 {
            font-size: 50px;
            color: white;
        }

        .container.textarea p {
            font-size: 18px;
            color: white;
            left: 15%;
            position: absolute
        }

        .container.textarea p a {
            color: white;
            left: 15%;
            position: absolute;
            text-decoration: none;
            cursor: pointer;
            color: white
        }

        .container.textarea a {
            text-decoration: none;
            cursor: pointer;
            color: white
        }

        .container .forget-password {
            position: absolute;
            text-decoration: none;
            left: 60%;
            transform: translateX(-60%);
            ;

        }

        .container .forget-password a {
            text-decoration: none;
            color: white
        }

        .container .button {
            width: 160px;
            height: 47px;
            margin-top: 50px;
            border-radius: 15px;
            border: none;
            font-size: 14px;
            position: absolute;
            left: 25%;
            margin-left: 20px;
            font-weight: 600;
        }

        .container .remeber-me {
            padding-top: 30px;
            padding-left: 120px;
            color: white;
        }
        @media screen and (max-width: 900px) {
            .container form .email{
                width: 90%;
        margin-left:2.5%
    }
    .container form .email{
        width: 90%;
        margin-left:2.5%
    }
    .container form .password{
        width: 90%;
        margin-left:2.5%
    }
    .container form .confirmpassword{
        width: 100%
    }
    .container .textarea {
        font-size: 25px
    }
    .container .forget-password a{
        padding-top: 40px;
        font-size: 14px
    }
    .container .button{
        margin-top: 50px
    }
    .container .textarea h1{
        font-size: 25px

    }
}
@media screen and (max-width: 360px) {
    .container form .email{
        width: 90%;
        margin-left:2.5%
    }
    .container form .email{
        width: 90%;
        margin-left:2.5%
    }
    .container form .password{
        width: 90%;
        margin-left:2.5%
    }
    .container form .confirmpassword{
        width: 100%
    }
    .container .textarea h1{
        font-size: 25px
    }
    .container .textarea h1{
        font-size: 25px

    }
    .container .forget-password a{
        /* padding-top: 40px; */
        font-size: 14px;
        width: 190px;
        display: block;
        padding-top: 10px;
        margin: 0;
    }
    .container .button{
        margin-top: 50px
    }
}

@media screen and (max-width: 480px) {
    .container form .email{
        width: 90%;
        margin-left:2.5%
    }
    .container form .email{
        width: 90%;
        margin-left:2.5%
    }
    .container form .password{
        width: 90%;
        margin-left:2.5%
    }
    .container form .confirmpassword{
        width: 100%
    }
    .container .textarea {
        font-size: 25px
    }
    .container .textarea h1{
        font-size: 25px

    }
    /* .container .forget-password a{
        padding-top: 40px;
        font-size: 14px
    } */
    .container .button{
        margin-top: 50px
    }
}
    </style>


    <div class="bg">

            <div class="container">
                <div class="sign-in">
                    <div class="header">
                        <div class="user"></div>
                        <h1>EgyXplore</h1>
                    </div>
                    <div class="textarea">
                        <h1>Welcome To Our App Again</h1>
                        <p>New Member? <a href="/register">sign up</a></p>
                    </div>
                    <form method="POST" action="{{ route('login') }}" class="bg">
                        @csrf

                        <div>
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username" placeholder="email"
                                class="email" />
                        </div>

                        <div class="mt-4">
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="current-password" placeholder='password' class="password" />
                        </div>

                        <div class="remeber-me">
                            <label for="remember_me" class="flex items-center">
                                <x-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="forget-password">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                        <div>
                            <x-button class="button">
                                {{ __('Log in') }}
                            </x-button>
                        </div>
                    </form>
                    <x-validation-errors class="mb-4" />
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>

</body>

</html>
