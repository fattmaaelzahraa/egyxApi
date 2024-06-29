<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

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

        /* start global content*/
        .speachial-heading h1 {
            font-size: 30px;
            text-align: center;
            position: relative;
            margin-bottom: 80px;
        }

        .speachial-heading h1::after {
            content: "";
            position: absolute;
            width: 5%;
            height: 4px;
            bottom: -50%;
            background-color: var(--main-color);
            border-radius: 20px;
            left: 48%;
        }

        /*container*/
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
            font-family: "Poppins", sans-serif;
            scroll-behavior: smooth;
        }

        ul {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        body {
            font-family: "Poppins", sans-serif;
            height: 150vh;
        }

        /*==================== Navbar ====================*/
        .header {
            width: 100%;
            background-color: var(--main-color);
            margin-bottom: 50px;
            top: 0;
            position: absolute;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            position: relative;
        }

        .logo {
            font-size: 30px;
            color: white;
        }

        .navbar .links {
            display: flex;
            gap: 20px;
        }

        .navbar .links li {
            color: var(--title-color);
            font-weight: var(--font-semi-bold);
            cursor: pointer;
            position: relative;
            transition: color 0.3s ease;
            z-index: 10;
        }

        .navbar .links li::after {
            content: "";
            position: absolute;
            width: 0;
            height: 3.5px;
            bottom: -5px;
            left: 50%;
            background-color: black;
            border-radius: 20px;
            transition: width 0.3s ease, left 0.3s ease;
        }

        .navbar .links li:hover {
            color: black;
        }

        .navbar .links li:hover::after {
            width: 100%;
            left: 0;
        }

        .navbar .navBtns a {
            margin-left: 10px;
            padding: 7px 20px;
            border-radius: 5px;
            background-color: white;
            color: black;
            font-weight: var(--font-bold);
            text-align: center;
            /* transition: background-color 0.3s ease, color 0.3s ease; */
        }

        /* .navbar .navBtns a:hover {
            background-color: var(--main-color);
            color: var(--title-color);
        } */

        .toggle_btn {
            display: none;
        }

        .profile {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .profile .fa-user-circle {
            font-size: 50px;
            color: white;
        }

        .profile .dropdown-menu {
            display: none;
            position: absolute;
            right: 0;
            background-color:  rgba(0, 0, 0, 0.2);e;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
            padding: 10px 0;
        }
        .profile .dropdown-menu a::after {
            content: "";
            position: absolute;
            width: 0;
            height: 3.5px;
            bottom: 16px;
            left: 50%;
            background-color: black;
            border-radius: 20px;
            transition: width 0.3s ease, left 0.3s ease;
        }

        .profile .dropdown-menu a:hover {
            color: black;
        }

        .profile .dropdown-menu a:hover::after {
            width: 100%;
            left: 0;
        }
        .profile .dropdown-menu a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-weight: var(--font-semi-bold);
        }

        /* .profile .dropdown-menu a:hover {
            background-color: var(--main-color);
            color: white;
        } */

        .profile:hover .dropdown-menu {
            display: block;
        }

        @media (max-width: 1200px) {
            .header{
                height: 90px;
            }
            .logo {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                margin-top: 10px;
            }

            .navbar .links,
            .navbar .navBtns {
                display: none;
                flex-direction: column;
                background-color: var(--main-color);
                position: absolute;
                top: 60px;
                left: 0;
                right: 0;
                text-align: center;
                padding: 20px 0;
                transition: max-height 0.3s ease-in-out;
                max-height: 0;
                overflow: hidden;
            }

            .navbar .links li,
            .navbar .navBtns a {
                padding: 10px 0;
            }

            .navbar.show .links {
                display: flex;
                max-height: 500px;
                /* Adjust this as needed */
                background: rgba(0, 0, 0, .5);
                z-index: 1;
            }

            /* .navbar.show .links:hover{
                transform: scale(1)
            } */
            .navbar.show .navBtns {
                display: flex;
                max-height: 500px;
                /* Adjust this as needed */
                z-index: 1;
                background-color: transparent;
            }

            .navbar.show .navBtns a {
                background-color: transparent;
            }

            .toggle_btn {
                display: block;
                color: var(--title-color);
                font-size: 24px;
                cursor: pointer;
                position: absolute;
                left: 0;
                margin-top: 40px
            }

            .profile {
                position: absolute;
                right: 0;
                margin-top: 45px
            }
        }
    </style>
</head>

<body>
    <!--============= Nav ================ -->
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="nav-logo">
                    <a href="index.html">
                        <img src='{{asset('storage/EgyXplore.png')}}' alt="Logo" class="logo" />
                        {{-- <h1 class="logo">EgyXplore</h1> --}}
                    </a>
                </div>
                <ul class="links">
                    <li>Home</li>
                    <li>Destinations</li>
                    <li>About Us</li>
                    <li>Testimonial</li>
                    <li>Contact Us</li>
                    <li>Interests</li>
                </ul>

                <div class="profile">
                    <i class="fas fa-user-circle"></i>
                    <div class="dropdown-menu">
                        <a href="#">Log Out</a>
                    </div>
                </div>

                <div class="toggle_btn"><i class="fa-solid fa-bars"></i></div>
            </div>
        </div>
    </div>

    <script>
        const toggleBtn = document.querySelector('.toggle_btn');
        const navbar = document.querySelector('.navbar');

        toggleBtn.addEventListener('click', function() {
            navbar.classList.toggle('show');
        });
    </script>
</body>

</html>
