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
        a{
            text-decoration: none;
        }
        .footer {
            background-color: var(--border-color);
            margin-top: 80px;
            width:100%;
            bottom:0;
            /* position: absolute;
            bottom: 0;
            width: 100%;; */
           
        }

        .footer .container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            padding-top: 80px;
            gap: 90px;
            justify-content: space-between;
            padding-bottom: 60px;
            bottom:0;
            
            /* margin-top: 50px; */

        }

        .footer .container .first-col {
            flex: 0.2;
            text-align: center;
            color: white;
        }

        .footer .container .first-col h1 {
            padding-bottom: 12px;
        }

        .footer .container .first-col p {
            font-size: small;
            line-height: 1.5;
        }

        .footer .container .support {
            flex: 0.2;
        }

        .footer .container .support h1 {
            color: white;
        }

        .footer .container .support li {
            padding: 5px 0 5px 0;
        }

        .footer .container .support a {
            color: white;
        }

        .footer .container .destination {
            flex: 0.2;
        }

        .footer .container .destination h1 {
            color: white;
        }

        .footer .container .destination li {
            padding: 5px 0 5px 0;
        }

        .footer .container .destination a {
            color: white;
        }

        .footer .container .blog {
            flex: 0.2;
        }

        .footer .container .blog h1 {
            color: white;
        }

        .footer .container .blog li {
            padding: 5px 0 5px 0;
            width: 200px;

        }

        .footer .container .blog a {
            color: white;
        }

        .footer .container .social-media {
            text-align: center;
            flex: 0.2;
            display: flex;
            flex-direction: column;
            color: white;
        }

        .footer .container .social-media h1 {
            font-weight: 600;
        }

        .footer .container .social-media .social-media-container {
            margin-top: 20px;
            font-size: 30px;
            color: white;
            cursor: pointer;
        }

        /*end of footer*/
    </style>
    <!--============= Footer ================ -->
    <div class="footer">
        <div class="container">
            <div class="first-col">
                <h1>egyXplore</h1>
                <p>
                    Discoer Egypt anew wirh egyXplore where every step is a stoey and
                    every story is adevnture
                </p>
            </div>
            <div class="support">
                <h1>Support</h1>
                <ul>
                    <li><a href="">&#11208; FAQs</a></li>
                    <li><a href="">&#11208; Privacy Policy</a></li>
                    <li><a href="">&#11208; Terms & Conditions</a></li>
                    <li><a href="">&#11208; Contact us</a></li>
                </ul>
            </div>
            <div class="destination">
                <h1>destination</h1>
                <ul>
                    <li><a href="">&#11208; Cairo</a></li>
                    <li><a href="">&#11208; Luxor</a></li>
                    <li><a href="">&#11208; Alexandria</a></li>
                    <li><a href="">&#11208; Sinaa</a></li>
                    <li><a href="">&#11208; New Alamin City</a></li>
                </ul>
            </div>
            <div class="blog">
                <h1>Blog</h1>
                <ul>
                    <li><a href="">&#11208; New in Egypt Today</a></li>
                    <li><a href="">&#11208; Siwa Big Article</a></li>
                    <li><a href="">&#11208; The Pyramids</a></li>
                    <li><a href="">&#11208; Egyptian People</a></li>
                    <li><a href="">&#11208; Festivals</a></li>
                </ul>
            </div>
            <div class="social-media">
                <h1>egyXplore</h1>
                <div class="social-media-container">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-square-x-twitter"></i>
                    <i class="fa-brands fa-square-instagram"></i>
                </div>
            </div>
        </div>
</body>

</html>
