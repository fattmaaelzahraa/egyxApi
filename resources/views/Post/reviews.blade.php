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
@include('components.header-profile')
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

              body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            font-family: "Poppins", sans-serif;
        }

        .container {
            flex: 1;
            margin: auto;
            /* padding: 15px; */
            width: 95%;
        }
        form {
            width: 100%;
            /* Full width for better responsiveness */
        }
        body{
            height:100vh !important
        }
        
        /*.navbar must be deleted if we replace logo section with png*/
        .review-list {
            display: flex;
            flex-wrap: wrap;
            gap: 75px;
            /* Adjust spacing between items */
            justify-content: center;
            /* Center items horizontally */
        }

        .review-item {
            flex: 1 1 1;
            /* Flexible item width, minimum width of 300px */
            border-radius: 5px;
            padding: 20px;
            background-color: antiquewhite;
            border-radius: 50px;
            max-width: 500px;
            position: relative;
            box-shadow: 1px 1px 3px 1px #88888878;
        }

        .review-item::before {
            content: "";
            position: absolute;
            border-style: solid;
            border-color: antiquewhite transparent transparent transparent;
            border-width: 15px;
            bottom: -28px;
            left: 44px;
        }

        .contento {

            position: absolute;
            bottom: -70px;

            display: flex;
            flex-direction: row;
            gap: 60px
        }

        .img {
            width: 50px;
            /* Fixed width for profile images */
            height: 50px;
            /* Fixed height for profile images */
            border-radius: 50%;
            /* border: black solid 2px; */
        }

        .review-content p {
            margin: 5px 0;
            /* Adjust paragraph margins */
            max-width: 600px;
        }



        a {
            text-decoration: none;
            padding-right: 30px;
            padding-left: 30px cursor: pointer;
            color: black;
            font-weight: bold
        }

        .intro {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            text-align: center;
            justify-content: space-around;
            padding-bottom: 50px;
            justify-content: center;
            gap: 500px;
            margin-top:120px
                }

        .intro img {
            background-image: url('storage/5c.jpg');
            /* width: 500px;
            height: 300px; */
            margin-top: 50px;
            max-width: 300px;

        }

      .intro .intro_info {
            position: relative;
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: column;
        }

        .intro .intro_info p {
            margin-bottom: 20px
        }

        button.show-popup {
            width: 190px;
            height: 40px;
            color: #fff;
            background-color: var(--explore-more-color);
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
        }

        button {
            width: 190px;
            height: 40px;
            color: #fff;
            background-color: var(--explore-more-color);
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
        }

        .popup-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .3);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            pointer-events: none;
            z-index: 10;
        }

        .popup-container.active {
            opacity: 1;
            pointer-events: auto;
            transition: .4s ease;
        }

        .popup-container .popup-box {
            width: 500px;
            background: #f2f2f2;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            padding: 30px;
            transform: scale(0);
            display: flex;
            flex-direction: column
        }

        .popup-container.active .popup-box {
            transform: scale(1);
            transition: .4s ease;
            transition-delay: .25s;
        }
        /* @media screen and (max-width: 900px) {
            .intro {
                flex-basis: calc(50% - 1rem);

                gap: 50px
            }
        }
        @media screen and (max-width: 1300px) {
            .intro {
                flex-basis: calc(50% - 1rem);

                gap: 50px
            }
        }

        @media screen and (max-width: 480px) {
            .intro {
                flex-basis: 100%;
                gap: 50px

            }

        } */
        /* @media screen and (max-width: 900px) {
            .intro{
                width: 100%;
                font-size: 15px
            }

        }
         @media screen and (max-width: 768px) {
            .intro{
                width: 100%;
                font-size: 15px
            }

        }

        @media screen and (max-width: 480px) {
            .intro  {
                width: 100%;
                font-size: 15px
            }
        } */
        @media screen and (max-width: 768px) {
            .review-item {
                flex-basis: calc(50% - 20px);
                /* Two items per row on smaller screens */
            }
            .intro{
                flex-basis: calc(50% - 20px);
                /* Two items per row on smaller screens */
                gap: 40px
            }
        }

        @media screen and (max-width: 480px) {
            .review-item {
                /* flex-basis: 100%; */
                /* One item per row on even smaller screens */
            }
            .intro{
                /* flex-basis: 100%; */
                /* One item per row on even smaller screens */
                gap: 20px
            }
            .intro img{
                max-width: 250px;
                max-height: 250px
            }
            .popup-container .popup-box{
                width: 340px
            }
            .message{
                width: 100%;
                position: relative;
            }
        }
                @media screen and (max-width: 360px) {
            .review-item {
                /* flex-basis: 100%; */
                /* One item per row on even smaller screens */
            }
            .intro{
                /* flex-basis: 100%; */
                /* One item per row on even smaller screens */
                gap: 20px
            }
            .intro img{
                max-width: 250px;
                max-height: 250px
            }
            .popup-container .popup-box{
                width: 340px
            }
            .message{
                width: 100%;
               
            }
        }
    </style>
    <div class="container">
        {{-- <form action="{{route('store.review')}}" method="post">
        @csrf
        <label for="message">Write a review:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" maxlength="500" required></textarea>
        <input type="text" name="product_id" value="{{$product->id}}" hidden>
        <button type="submit">Submit</button>
    </form> --}}
        <section>
            <div class="intro">
                <img src="{{asset('egyx/storage/app/public/' . $product->path)}}" alt="">
                <div class="intro_info">
                    <p>Egyptian souvenir</p>
                    <p>Average prices : 200EGP</p>
                    <button class="show-popup">Add review</button>
                    <div class="popup-container">
                        <div class="popup-box">
                            <form action="{{ route('store.review') }}" method="post">
                                @csrf
                                <label for="message">Write a review:</label><br>
                                <textarea class="message" id="message" name="message" rows="4" cols="50" maxlength="500" required></textarea>
                                <input type="text" name="product_id" value="{{ $product->id }}" hidden>
                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        @if ($reviews->isEmpty())
            <h3>No reviews found.</h3>
        @else
            <div class="review-list">
                @foreach ($reviews as $review)
                    <div class="review-item">
                        <div class="review-header">
                            {{-- <img src="{{asset('storage/'.$review->profile_photo_path)}}" alt="No pic" height="50px" width="50px"> --}}
                            {{-- <h3>{{ $review->name }}</h3> --}}
                        </div>
                        <div class="review-content">
                            <p>{{ $review->created_at }}</p>
                            <p class="p">{{ $review->description }}</p>
                            @if (Auth::user()->id == $review->user_id)
                                <div class="review-actions">
                                    <a href="{{ route('review.edit', $review->id) }}">Edit</a>
                                    <a href="{{ route('review.delete', $review->id) }}">Delete</a>
                                </div>
                            @endif
                            <div class="contento">
                                <img src="{{ $review->profile_photo_path ? asset('egyx/storage/app/public/' . $review->profile_photo_path) : asset('egyx/storage/app/public/default.png')}}" alt="Profile Image" height="50px" width="50px" class="img">

                                <h3>{{ $review->name }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <script>
        const showPopup = document.querySelector('.show-popup');
        const popupContainer = document.querySelector('.popup-container');
        const closeBtn = document.querySelector('.close-btn');
        showPopup.onclick = () => {
            popupContainer.classList.add('active');
        }
        closeBtn.onclick = () => {
            popupContainer.classList.remove('active');
        }
    </script>
    @include('components.footer')
</body>

</html>
