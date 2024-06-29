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
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet" />
    <style>
        /*==================== GOOGLE FONTS ====================*/
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap");

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

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: "Poppins", sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-image: url('storage/sign-bg.png');
            z-index: 1;
        }

        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        h1 {
            padding-top: 30px;
            font-size: 1.5rem;
        }

        .add-product {
            max-width: 100%;
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 50%;
            margin-top: 108px;
            position: relative;
            left: 25%
        }

        .add-product .inputs {
            display: flex;
            flex-direction: column;
            margin: 0 10px 0 10px;
        }

        .container .drag-drop {
            background-color: var(--input-background-color);
            width: 100%;
            height: 150px;
            border-radius: 5px;
            border: dashed 3px black;
            position: relative;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
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
            color: black;
            font-weight: 600;
            text-align: center;
        }

        .container .loading-upload {
            text-align: center;
            padding-top: 30px;
            display: none;
        }

        .done {
            margin-top: 20px;
            width: 150px;
            height: 35px;
            border: none;
            background-color: var(--explore-more-color);
            color: white;
            border-radius: 5px;
            cursor: pointer;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
        }

        .product_name {
            margin-top: 20px;
            height: 40px;
            padding-left: 10px;
            outline: none;
            border: solid 2px var(--input-color);
            border-radius: 2.5px;
            width: 60%;
        }

        .price {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            margin: 30px 0;
            margin-right: 90%;
            gap: 30px;
        }

        .price h3 {
            margin: 0;
        }

        .price-input {
            width: 60px;
            height: 30px;
            border: solid 2px black;
            outline: none;
            border-radius: 2.5px;
            text-align: center;
        }

        .counter {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        button {
            border: none;
            background-color: white;
            cursor: pointer;
            padding: 0 50px 0 50px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .add-product {
                padding: 10px;
                width: 100%;
                margin-top: 108px;
                left: 0;
            }

            h1 {
                font-size: 1.25rem;
                padding-left: 20px;
                padding-top: 10px;
            }

            .container .drag-drop {
                height: 120px;
                padding: 10px;
            }

            .product_name {
                padding-left: 5px;
            }

            .price {
                flex-direction: column;
                align-items: flex-start;
            }

            .price h3,
            .counter {
                margin-bottom: 10px;
            }

            .price-input {
                width: 50px;
                height: 25px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 1rem;
                padding-left: 10px;
                padding-top: 5px;
            }

            .add-product {
                padding: 5px;
            }

            .price-input {
                width: 40px;
                height: 20px;
            }
        }

        h3 {
            padding: 10px 0 10px 0;
        }

        .done {
            margin-top: 0;
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
    @include('components.header-profile')
    <div class="main-content">
        <div class="container">
            <div class="add-product">
                <h1>Hi there, post your product</h1>
                <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data" class="inputs">
                    @csrf
                    <h3>Product Name</h3>
                    <input type="text" name="product_name" class="product_name" placeholder="Write product name" required>
                    <div class="price">
                        <h3>Price</h3>
                        <div class="counter">
                            <button class="counterbtn prevbtn" type="button"><h2>-</h2></button>
                            <input type="text" name="price" class="price-input" value="0" required>
                            <button class="counterbtn nextptn" type="button"><h2>+</h2></button>
                        </div>
                    </div>
                    <h3>Product Image</h3>
                    <label for="drag-droping">
                        <input type="file" name="image" class="drag-droping" hidden id="drag-droping" required>
                        <div class="drag-drop">
                            <img src="storage/backup_cloud_upload1.png" alt="" class="upload-icon" id="upload-icon">
                            <h2 class="loading-upload">Uploaded...</h2>
                        </div>
                    </label>
                    <button class="done" type="submit">Post</button>
                </form>
            </div>
        </div>
    </div>

    <footer>@include('components.footer')</footer>

    <script>
        const dragDroping = document.querySelector(".drag-droping");
        const uploadIcon = document.querySelector(".upload-icon");
        const loadingUpload = document.querySelector(".loading-upload");

        dragDroping.addEventListener("change", uploadImage);
        dragDroping.addEventListener("dragover", function (e) {
            e.preventDefault();
        });

        dragDroping.addEventListener("drop", function (e) {
            e.preventDefault();
            dragDroping.files = e.dataTransfer.files;
            uploadImage();
        });

        function uploadImage() {
            uploadIcon.style.display = "none";
            loadingUpload.style.display = "block";
        }

        (function () {
            const buttons = document.querySelectorAll('.counterbtn');
            const priceInput = document.querySelector('.price-input');
            let count = parseInt(priceInput.value) || 0;

            // Function to update the count value and the input field
            function updateCount(newValue) {
                count = newValue;
                priceInput.value = count;
            }

            buttons.forEach(function (button) {
                button.addEventListener('click', function (e) {
                    if (button.classList.contains('prevbtn')) {
                        updateCount(Math.max(0, count - 1));
                    } else if (button.classList.contains('nextptn')) {
                        updateCount(count + 1);
                    }
                });
            });
        })();
    </script>
</body>
</html>
