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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

        :root {
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
            --font-medium: 500;
            --font-semi-bold: 600;
            --font-bold: 700;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Poppins", sans-serif;
            background-color: #e3e3e3;
        }

        .container {
            margin-left: auto;
            margin-right: auto;
            padding: 15px;
            width: 100%;
            max-width: 1200px;
        }

        .bg {
            background-image: url({{asset('storage/sign-bg.png')}});
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            width: 100%;
            background-position: center;
            background-attachment: fixed;
            position: absolute;
            left: 0;
            top: 0;
        }

        .sign-in {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding-top: 30px;
        }

        .sign-in .header {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .sign-in .header .user {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #b9b9b9;
        }

        .sign-in .header h1 {
            color: white;
            font-weight: var(--font-medium);
            font-size: 32px;
        }

        .sign-in .textarea {
            margin-top: 30px;
        }

        .sign-in .textarea h1 {
            font-size: 50px;
            color: white;
            font-weight: var(--font-bold);
        }

        .sign-in .textarea p {
            font-size: 18px;
            color: white;
            margin-top: 10px;
        }

        .sign-in .textarea p a {
            color: white;
            text-decoration: underline;
        }

        form .email,
        form .password,
        form .confirmpassword {
            width: 60%;
            height: 55px;
            background-color: var(--icon-back-color);
            border-radius: 25px;
            border: none;
            padding-left: 20px;
            font-size: 18px;
            margin-top: 20px;
            outline: none;
        }

        .flex-buttons {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .button,
        .log-out {
            width: 260px;
            height: 55px;
            border-radius: 15px;
            border: none;
            font-size: 14px;
            font-weight: var(--font-semi-bold);
            margin: 10px;
            cursor: pointer;
            outline: none;
            font-size: 15px;
            font-weight: 600
        }

        .button {
            background-color: white;
            color: black;
            text-decoration: none;
            text-align: center
        }

        .button h1 {
            justify-items: center;
            margin-top: 15px;
            font-size: 15px;
            font-weight: 600
        }

        .button:hover {
            background-color: white;
            color: rgb(47, 0, 0);
        }

        .log-out {
            background-color: white;
            color: black;
        }

        .log-out:hover {
            background-color: white;
        }

        @media (max-width: 900px) {

            form .email,
            form .password,
            form .confirmpassword {
                width: 90%;
            }

            .sign-in .textarea h1 {
                font-size: 40px;
            }
        }

        @media (max-width: 480px) {

            form .email,
            form .password,
            form .confirmpassword {
                width: 100%;
            }

            .button {
                width: 90%;
            }

            .sign-in .textarea h1 {
                font-size: 30px;
            }
        }
    </style>

    <section>
        <div class="bg">
            <div class="container">
                <div class="sign-in">
                    <div class="header">
                        <div class="user"></div>
                        <h1>EgyXplore</h1>
                    </div>
                    <div class="textarea">
                        <h1>Welcome To Our App Again</h1>
                        <p>New Member? <a href="/register">Sign up</a></p>
                    </div>
                    <guest-layout>
                        <authentication-card>
                            <x-slot name="logo">
                            </x-slot>

                            {{-- <div>
                                {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                            </div> --}}

                            @if (session('status') == 'verification-link-sent')
                                <div>
                                    {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
                                </div>
                            @endif
                            <div class="mt-4 flex items-center justify-between">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf

                                    <div>
                                        <div class="flex-buttons">
                                        <button type="submit" class="button">
                                            {{ __('Resend Verification Email') }}
                                        </button>
                                    </div>
                                    </div>
                                </form>

                                <div>
                                    <div class="flex-buttons">
                                        <a href="{{ route('profile.show') }}" class="button">
                                            <h1>Edit Profile</h1>
                                        </a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="log-out">Log Out</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </authentication-card>
                    </guest-layout>
                </div>
            </div>
        </div>
    </section>
</body>

</html>





