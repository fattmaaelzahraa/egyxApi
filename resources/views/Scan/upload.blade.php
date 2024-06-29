{{-- <h1>HI there upload your photo</h1>
<form action="{{route('image.save')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image">
    <button type="Submit">Upload</button>
</form> --}}

{{-- <form action="{{route('image.save')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image">
    <button type="Submit">Upload</button>
</form> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EgyXplore</title>
    <!--======================= CSS styling file ============================= -->
    {{-- <link rel="stylesheet" href="css/scan.css" /> --}}
    <!--======================= Icons file ============================= -->
    {{-- <link rel="stylesheet" href="css/all.min.css" /> --}}
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

        a {
            text-decoration: none;
        }

        body {
            font-family: "Poppins", sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            height: 10vh%;
            width: 100%;
            background-position: center;
            background-attachment: fixed;
            background-image: url('storage/sign-bg.png');
            left: 0;

        }
        .header{
            background-color:transparent !important
        }
        .scan-title {
            padding-top:100px;
            color: var(--title-color);
        }

        .container .scan-landing {
            background-color: var(--input-background-color);
            width: 900px;
            height: 500px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -47%);
            border-radius: 15px;
            margin-top: 80px
        }

        .container .scan-landing .icon {
            font-size: 20px;
            position: relative;
            right: 0;
            padding: 20px;
        }

        .container .scan-landing .icon>a {
            color: var(--cards-p-color);
        }

        .container .scan-landing i {
            position: absolute;
            right: 0;
        }

        .container .drag-drop p {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            padding-top: 130px;
            color: black;
            font-weight: 600;

        }

        .container .drag-drop p span {
            color: #2b5ed3;
        }

        .container .drag-drop p:nth-child(3) {
            color: var(--cards-p-color);
            padding-top: 160px;
        }

        .container .scan-landing h1 {
            text-align: center;
            color: var(--cards-p-color);
            font-size: 13px;
            padding-top: 10px;
        }

        .container .scan-landing h1::after {
            content: "";
            width: 40%;
            height: 0.5px;
            background-color: var(--cards-p-color);
            display: flex;
            margin-left: 40px;
            margin-top: -12px;
        }

        .container .scan-landing h1::before {
            content: "";
            width: 40%;
            height: 0.5px;
            background-color: var(--cards-p-color);
            display: flex;
            margin-left: 40px;
            margin-top: 8px;
            position: absolute;
            right: 5%;
        }

        .container .scan-landing .improt-url h2 {
            padding-left: 5%;
            font-size: 15px;
            padding-top: 20px;
        }

        .container .scan-landing .add-url {
            margin-top: 20px;
            margin-left: 5%;
            width: 90%;
            height: 50px;
            border: solid 2px var(--border-color);
            border-radius: 15px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .container .scan-landing .add-url .add-url-input {
            background-color: transparent;
            border: none;
            outline: none;
            padding-left: 20px;
            width: 600px;
        }

        .container .scan-landing .add-url .upload {
            background-color: transparent;
            border: none;
            outline: none;
            padding-right: 20px;
            color: #2b5ed3;
            font-weight: 600;
        }

        .container .scan-landing .last-section {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .container .scan-landing .last-section .right {
            padding-left: 9%;
            font-weight: 300;
        }

        .container .scan-landing .last-section .right a {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .container .scan-landing .last-section .right h3 {
            font-weight: 300;
            padding-top: 20px;
        }

        .container .scan-landing .last-section .right i {
            position: absolute;
            left: 0;
            padding-left: 5%;
            padding-top: 25.5px;
            font-weight: 300;
        }

        .container .scan-landing .last-section .left {
            margin-right: 5%;
            margin-top: 25px;
        }

        .last-section .left a {
            display: block;
            width: 110px;
            height: 50px;
            text-align: center;
            border-radius: 15px;
            border: none;
            box-shadow: 0px 0px 4px 2px #00000052;
            font-size: 20px;
            padding: 12px;
        }

        .last-section .left a:nth-child(1) {
            color: black;
            background-color: var(--input-background-color);
            transform: translateX(-138px);
        }

        .last-section .left a:nth-child(2) {
            background-color: var(--explore-more-color);
            color: #e3e3e3;
            transform: translateY(-56px);
        }

        .container .drag .drag-drop {
            width: 100%;
            height: 220px;
            margin-top: 20px;
            border-radius: 10px;
            border: 3px var(--border-color) solid;
            background-color: var(--icon-back-color);

        }

        .container .drag .upload-icon {
            position: absolute;
            margin-left: 42.5%;
            top: 25%
        }

        .container .drag .uploading {
            width: 110px;
            height: 50px;
            text-align: center;
            border-radius: 15px;
            border: none;
            background-color: var(--explore-more-color);
            color: #e3e3e3;
            font-size: 20px;
            padding: 12px;
            position: absolute;
            bottom: 2.5%;
            right: 5%;
        }

        .container .drag .drag-drop h2 {
            text-align: center;
            top: 30%;
            position:absolute;
            left: 42.5%;
            display: none
        }
        .footer .container{
            margin-top:100px!important;
        }
        body{
            height: 100% !important;
        }
        @media (min-width: 0px) and (max-width: 480px) {
            .container .scan-landing {
                width: 350px;
                /* margin-top: 140px; */
                height: 550px;

            }
            .container .scan-landing .last-section{
                gap: 10px;
                justify-content: space-around;
            }
            .scan-title{
                font-size: 15px
            }
            .last-section .left a:nth-child(1) {
                    margin-top: 49px;!important

            }

            .container .scan-landing .last-section .right h3{
                padding-left: 0;
                padding-top: 0;
                font-size: 15px;
                margin-top:21.5px
            }
            .container .drag .upload-icon{
                margin-left: 38%;
            }
            .container .drag .drag-drop h2{
                left: 31.5%;

            }
            .header{
            height: 80px;
        }
        .navbar {
            padding: 40px 0 !important;
        }
        @media (max-width: 1200px) {
    .logo {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        /* margin-top: -24px !important; */
}}
        }

        @media (min-width: 485px) and (max-width: 768px) {
            .container .scan-landing {
                width: 600px;
                margin-top: 60px;
                height: 500px;
            }
        }

        @media (min-width: 769px) and (max-width: 992px) {
            .container .scan-landing {
                width: 800px;
                margin-top: 45px;
            }

        }
        @media (min-width: 998px) and (max-width: 1200px) {
            .container .scan-landing {
                width: 800px;
                margin-top: 45px;
            }
            .container .drag .drag-drop{
                width: 770px
            }
        }
        .drag{
            z-index: 100;
        }
        .drag-drop{
            z-index: 200
        }
                a{
            text-decoration: none;
        }
        .footer {
            background-color: var(--border-color);
            margin-top: 80px;
            width:100%;
            margin-top:100px;
            position: absolute;
             bottom: 0;
             width: 100%;
        }

        .footer .container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        padding-top: 80px;
        gap: 90px;
        justify-content: space-between;
        padding-bottom: 60px;
        margin-top: 50px;
        position: absolute;
        /* bottom: 0; */
        background-color: var(--border-color);
        width:100%;
        margin-top:150px
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
    </style>
        @include('components.header-profile')

    <!--startt of Scan & Discover: Unveiling History header-->
    <div class="bg">
        <section>
            <div class="container">
                <!--<div class="scan-title">
                    <h1>Scan & Discover: Unveiling History</h1>
                    <p>Unlock the Mysteries of Temples and Statues</p>
                </div>
            </div>-->
        </section>
        <!--end of Scan & Discover: Unveiling History header-->
        <section>
            <div class="container">
                <div class="scan-landing">
                    <div class="container">
                        <div class="icon">
                            <a href="index.html"> <i class="fa-solid fa-xmark"></i></a>
                        </div>
                        <form action="{{ route('image.save') }}" method="post" enctype="multipart/form-data"
                            class="drag">
                            @csrf
                            <label for="drag-droping" >
                                <input type="file" name="image" class="drag-droping"hidden id="drag-droping">
                                <div class="drag-drop">
                                    <img src="storage/backup_cloud_upload1.png" alt="" class="upload-icon" id="upload-icon">
                                    {{-- <p id="choose-file" class="choose-file">Drag & Drop or <span>Choose file</span> to upload</p> --}}
                                    <p id="choose-file" class="choose-file"> <span>Choose file</span> to upload</p>
                                    <p class="png">PNG , JPG</p>
                                    <h2 class="loading-upload">uploaded......</h2>
                                </div>
                                <button class="uploading" type="Submit">Upload</button>
                            </label>
                        </form>
                    </div>
                    <h1>OR</h1>
                    <div class="improt-url">
                        <h2>Import from URL</h2>
                        <div class="add-url">
                            <input type="url" name="" id="" placeholder="Add file Url"
                                class="add-url-input" />
                            <input type="button" value="Upload" class="upload" />
                        </div>
                    </div>
                    <div class="last-section">
                        <div class="right">
                            <a href=""><i class="fa-regular fa-circle-question"></i>
                                <h3>Help Center</h3>
                            </a>
                        </div>
                        <div class="left">
                            <a href="#cancel" class="cancel">cancel</a>
                            {{-- <a href="discovering.html" class="import">import</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<a href="/Scan/uploading">uploading</a>-->
    </div>
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
    {{-- <script>
        // Selecting the first element with the class name "drag"
        const drag = document.querySelector(".drag");
        const dragDroping = document.querySelector(".drag-droping");
        const chooseFile = document.querySelector(".choose-file");
        const png = document.querySelector(".png");
        const UploadIcon = document.querySelector(".upload-icon");
        const loadingUpload = document.querySelector(".loading-upload");

        // Adding click and change event listeners
        // drag.addEventListener("change", uploadImage);
        dragDroping.addEventListener("change", uploadImage);

        // Define the function to handle the upload
        function uploadImage() {
            UploadIcon.style.display="none";
            chooseFile.style.display = "none";
            png.style.display = "none";
            loadingUpload.style.display = "block";
        }
        dragDroping.addEventListener("dragover", function (e) {
            e.preventDefault();
        });

        dragDroping.addEventListener("drop", function (e) {
            e.preventDefault();
            dragDroping.files = e.dataTransfer.files;
            uploadImage();
        });
    </script> --}}
    <script>
        // Selecting the first element with the class name "drag"
        const dragDroping = document.querySelector(".drag-droping");
        const chooseFile = document.querySelector(".choose-file");
        const png = document.querySelector(".png");
        const UploadIcon = document.querySelector(".upload-icon");
        const loadingUpload = document.querySelector(".loading-upload");

        // Adding change and drag events listeners
        dragDroping.addEventListener("change", uploadImage);
        dragDroping.addEventListener("dragover", function (e) {
            e.preventDefault();
        });

        dragDroping.addEventListener("drop", function (e) {
            e.preventDefault();
            // Setting the files directly
            dragDroping.files = e.dataTransfer.files;
            uploadImage();
        });

        // Define the function to handle the upload
        function uploadImage() {
            chooseFile.style.display = "none";
            png.style.display = "none";
            loadingUpload.style.display = "block";
            UploadIcon.style.display="none";
        }
    </script>
   

</body>

</html>
