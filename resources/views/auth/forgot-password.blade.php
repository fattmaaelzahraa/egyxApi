{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
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
        .bg{
            font-family: "Poppins", sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            width: 100%;
            background-position: center;
            background-attachment: fixed;
            background-image: url('storage/sign-bg.png');
            position: absolute;
            left:0;
            top: 0;
        }
        .container .sign-in .header{
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
            font-size: 32px
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
            font-weight:700
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
            border: none;
            padding-left: 40px;
            font-size: 18px;
            margin-top: 40px;
            outline: none
        }
        /* .container form .email:active {
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
            outline: none
        } */

        .container form .email::placeholder {
            font-size: 15px;
            top: 0;
            position: absolute;
            top: 20%;
        }
        .container .button {
            width: 260px;
            height: 55px;
            margin-top: 50px;
            border-radius: 15px;
            border: none;
            font-size: 14px;
            position: absolute;
            left: 23%;
            margin-left: 20px;
            font-weight: 600;
            background-color:white;
            color: black;
            border:none;
            outline: none
        }
        .container .button:hover{
            background-color:white
        }
        @media screen and (max-width: 900px) {
            .container form .email{
                width: 90%;

    }
    .container form .email{
        width: 90%;

    }
    .container form .password{
        width: 90%;

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
        width: 100%;
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
        padding-top: 40px;
        font-size: 14px
    }
    .container .button{
        margin-left: -27px;
        width: 230px;

    }
}

@media screen and (max-width: 480px) {
    .container form .email{
        width: 100%;

    }
    .container form .email{
        width: 100%;

    }
    .container .textarea {
        font-size: 25px
    }
    .container .textarea h1{
        font-size: 25px

    }
    .container .forget-password a{
        padding-top: 40px;
        font-size: 14px
    }
    .container .button{
        margin-top: 50px;
        margin-left: -19px;

    }
}
    </style>
    <>
        <>
            <div class="bg">
                <div class="container">
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
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div>

                                    <input id="email" type="email" name="email"
                                        :value="old('email')" required autofocus autocomplete="username" placeholder='email' class="email" />
                                </div>

                                <div>
                                    <button class="button" outline="none">
                                        {{ __('Email Password Reset Link') }}
                                    </button>
                                </div>
                            </form>

                            <div class="mb-4 text-sm text-gray-600" >
                                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                            </div>

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                           

                        </div>
                </div>
                </div>
</div>
</div>

</body>

</html>
