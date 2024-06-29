<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EgyXplore</title>
    <!--======================= CSS styling file ============================= -->
    <link rel="stylesheet" href="css/style.css" />
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
            /* height: 150vh;*/
        }

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
            background-color: var(--main_color);
            border-radius: 20px;
            left: 48%;
        }

        /* end global content*/
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px;
            padding-right: 15PX;

        }

        @media (min-width:768px) {
            .container {
                width: 750px;
            }
        }

        @media (min-width:992px) {
            .container {
                width: 970px;
            }
        }

        @media (min-width:1200px) {
            .container {
                width: 95%;
            }
        }

        ul {
            list-style: none;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font: "work sans";
        }

        /*start nav*/
        /* .nav{
    padding-top: 20px;
    display:flex;
    position: relative;
}
.nav .logo{

    font-size: 30px;
    color:white
}
.nav ul{

    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}
.nav ul li{
    display:inline-block;
    padding:0px 20px 0 20px;
    font-size: 18px;
    position: relative;

}
.nav ul li a{
    list-style:none;
    text-decoration: none;
    text-align: center;
    color: white;
    position: relative;
}
.nav ul li a:hover{
    color:black
}
.nav ul li a::before{
    content: "";
    position: absolute;
    width: 40%;
    height: 3px;
    top: 22px;
    background-color: black;
    border-radius: 20px;
    left: 15px;
    display: none;
}
.nav ul li a:hover::before {
    display: block;
    cursor: pointer;
    color:black

}
.nav ul li a.active {
    color: rgb(13, 5, 5);
}
.nav ul li a.active::before{
    content: "";
    display: block;
}
.nav ul li a.active :hover::before{
    display: block;
    cursor: pointer;
    color:black
}
@media (min-width:1400px) {
    .nav i{
        display: none;
    }
}
@media (min-width:0px) and (max-width:1400px) {
    .nav ul{
        width: 100%;
        display: none;
    }
.nav ul li
{
    display: flex;
    flex-direction: column;
    background-color:white;
    width: 100%;

}
.nav ul li {
    padding-bottom: 10px;
    color:black
}
.nav ul li a{
color:black
}
.nav .buttons{
    display: none;
}
.nav i{
    position: absolute;
    right: 0;
    font-size: 25px;
    color:white
}
}
.nav .buttons{
position: absolute;
right: 0;

}
.nav .buttons .sign-up{
    padding: 4px 14px 4px 14px;
    font-size: 20px;
    background-color:white;
    border: none;
    margin-left: 10px;
    border-radius: 5px;
    width: 100px;
}
.nav .buttons .sign-in{
    padding: 4px 14px 4px 14px;
    font-size: 20px;
    background-color:white;
    border: none;
    border-radius: 5px;
    width: 100px;
} */
        header{
            background-Color:transparent !important;
        }
        .header{
            background-Color:transparent !important;
        }
        .profile i{
            font-size:50px !important;
            color:white;
        }
         .profile .fas fa-user-circle {
            font-size:50px;
            color:white;
         }
        .landing-page {
            background-image: url('../imgs/Group.png');
            height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh%;
            width: 100%;
            background-position: center;
            background-attachment: fixed;
        }
        .landing-page .logos .facebook{
            background-image:url(../imgs/icons8-facebook-144);
            width:50px ;
            height: 50px;
            z-index: 12
        }
        .landing-page .logos .instgram{
            background-image:url(../imgs/icons8-instagram-144);
            width:50px ;
            height: 50px;
            z-index: 12
        }
        .landing-page .logos .twitter{
            background-image:url(../imgs/icons8-facebook-144);
            width:50px ;
            height: 50px;
            z-index: 12
        }
        .landing-page .logos {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            font-size: 40px;
            position: absolute;
            right: 10px;
            top: 40%;
            transform: translatey(-40%);
            margin-right: 50px;
        }
        .landing-page .logos img:{
            background-color:red;
            transition-duration: .3;
            transition-delay: .9
        }
        .landing-page .logos img:hover{
            scale: 1.2
        }
        .landing-page .logos i {
            padding: 10px;
            color: white
        }

        .landing-page .logos i:hover {
            color: black;
            cursor: pointer
        }

        .landing-page .landing-content {
            top: 30%;
            transform: translateY(-30%);
            position: absolute;
            color: white;
        }

        .landing-page .landing-content h1 {
            transform: translateY(-10%);
            font-size: 25px;
            position: relative;
            letter-spacing: 3px;
        }

        .landing-page .landing-content h1::before {
            content: "";
            position: absolute;
            width: 12%;
            height: 2.5px;
            bottom: -20%;
            background-color: white;
            border-radius: 20px;
            left: 6%;
        }

        .landing-page .landing-content p {
            font-size: 30px;
            word-spacing: 5px;
            padding-top: 40px;
            line-height: 1.5;
            font-weight: 200;
        }

        .landing-page .landing-content {
            font-weight: bolder;
            word-spacing: 5px;
            font-size: 80px;
            margin-left: 50px;
            margin-top: 80px

        }
        .landing-content .pragraph p{
            font-weight: 600;
            font-size: 45px;
        }
        .landing-content .pragraph h2{
            margin-top: -50px;
            font-size: 150px;
        }
        .texts {
  color: white;
  line-height: 2;
  margin: -48rem 0 0 5rem;
}
.texts > h4 {
  position: relative;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 1.8rem;
}
.texts > h4::before {
  content: "";
  position: absolute;
  width: 4%;
  height: 4px;
  bottom: 7px;
  left: 25px;
  background-color: white;
  transform: scaleX(1.1);
  transition: all 0.3s ease-in-out 0s;
}
.texts > h3 {
  font-size: 50px;
  font-weight: var(--font-semi-bold);
  position: relative;
}
.texts > h1 {
  font-size: 150px;
  margin-top: -6rem;
  position: relative;
  font-weight: var(--font-semi-bold);
}
.social-icons {
  margin: -19rem 0 0 74rem;
  font-size: 35px;
  position: relative;
}
.social-icons > a {
  color: white;
}
.fb,
.insta,
.x {
  transition: all 0.3s ease-in-out;
}
.fb:hover,
.x:hover,
.insta:hover {
  color: black;
}

.hi-slide {
  position: absolute;
  width: 754px;
  height: 292px;
  /* margin: 3rem auto 0; */
  bottom:0;
  left: 50%;
  transform: translateX(-50%)
}
.hi-slide .hi-next,
.hi-slide .hi-prev {
  position: absolute;
  top: 50%;
  width: 40px;
  height: 40px;
  margin-top: -20px;
  color: White;
  transition: all 0.6s;
  font-size: 3rem;
  font-weight: var(--font-bold);
}
.hi-slide .hi-prev {
  left: -60px;
  cursor: pointer;
}
.hi-slide .hi-next {
  right: -60px;
  cursor: pointer;
}
.hi-slide .hi-prev::before {
  content: "<";
}
.hi-slide .hi-next::before {
  content: ">";
}
.hi-slide .hi-next:hover,
.hi-slide .hi-prev:hover {
  opacity: 50%;
}
.hi-slide > ul {
  list-style: none;
  position: relative;
  width: 754px;
  height: 292px;
}
.hi-slide > ul > li {
  overflow: hidden;
  position: absolute;
  z-index: 0;
  left: 377px;
  top: 146px;
  width: 0;
  height: 0;
  margin: 0;
  padding: 14px;
  border-radius: 10px;
}
.hi-slide > ul > li > img {
  width: 100%;
  height: 100%;
  background-position: center;
}

/* @media (max-width: 1056px) {
  .social-icons {
    display: none;
  }
  .hi-slide {
    margin-top: -3rem;
  }
}
@media (max-width: 992px) {
  .social-icons {
    display: none;
  }
}
@media (max-width: 635px) {
  .hi-slide {
    display: none;
  }
}
@media (max-width: 576px) {
  .texts {
    transform: translateX(-4rem);
  }
  .texts > h1 {
    font-size: 133px;
    margin-top: -81px;
  }
} */
@media (max-width: 768px) and (min-width:480px) {
    .landing-content {
        font-size: 50px;
    }
    .logos {
        font-size: 30px;
        right: 5px;
        margin-right: 10px;
    }
}

@media (max-width: 480px) {
    .landing-content {
        font-size: 30px !important;
        margin-left: 0
    }
    .logos {
        font-size: 20px;
        margin-right: 10px !important
    }
    .landing-page .logos{

    }
    .hi-slide{
        display: none
    }
    .landing-page{
        height: 80vh;
    }
    .landing-content .pragraph p{
            font-weight: 600;
            font-size: 20px;
        }
        .landing-content .pragraph h2{
            margin-top: 0px;
            font-size: 85px;
        }
}

        /*new section start*/
        .dicovering {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 50px 0;
            gap: 20px;
        }

        .dicovering .search {
            flex: 1;
            min-width: 300px;
            max-width: 550px;
            height: 50px;
            border: solid 3px var(--border-color);
            border-radius: 25px;
            font-size: 20px;
            padding-left: 40px;
        }

        .dicovering button {
            height: 50px;
            border: none;
            border-radius: 25px;
            background-color: var(--explore-more-color);
            color: white;
            font-size: large;
            cursor: pointer;
            padding: 0 20px;
        }

        .speachial-heading {
            text-align: center;
            margin-bottom: 40px;
        }

        .speachial-heading h1 {
            font-size: 2rem;
            position: relative;
        }

        .speachial-heading h1::after {
            content: "";
            position: absolute;
            width: 50px;
            height: 4px;
            background-color: var(--main-color);
            border-radius: 20px;
            left: 50%;
            transform: translateX(-50%);
            bottom: -10px;
        }


        /* section end*/
        /*start new section*/
        /*start new section*/
        .cards {
            display: flex;
            justify-content: center;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 10px;
        }

        .cards .card-content {
            position: relative;
            border-radius: 10px;
        }

        .cards .card-content img {
            background-size: cover;
            background-color: red;
            width: 100%;
            border-radius: 10px;
            max-width: 450px;
            transition: transform 0.3s;
        }

        .cards .card-content .second {
            height: 220px;
            width: 325px;
        }

        .cards .card-content .alex {
            bottom: 120px;
            color: white;
            left: 50%;
            transform: translateX(-50%);
        }

        .cards .card-content .third {
            height: 330px;
            width: 369px;
        }

        .cards .card-content .fourth {
            height: 306px;
        }

        .cards .card-content .fifth {
            margin-top: -111px;
        }



        .cards .card-content .one:hover {
            scale: 1.02;
            overflow: hidden;
        }

        .cards .card-content .second:hover {
            scale: 1.02;
            overflow: hidden;
        }

        .cards .card-content .third:hover {
            scale: 1.02;
            overflow: hidden;
        }

        .cards .card-content .fourth:hover {
            scale: 1.02;
            overflow: hidden;
        }

        .cards .card-content .sixth:hover {
            scale: 1.02;
            overflow: hidden;
        }

        .cards .card-content .fifth:hover {
            scale: 1.02;
            overflow: hidden;
        }

        .cards {
            overflow: hidden;
            cursor: pointer;
        }

        /*
            .cards .card-content :hover {
                overflow: hidden;
                cursor: pointer;
                scale: 1;
            } */

        .cards .card-content h1 {
            position: absolute;
            bottom: 20px;
            color: white;
            left: 50%;
            transform: translateX(-50%);
        }

        .destination-section .explore-more {
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            font-size: 18px;
            font-weight: bolder;
            background-color: transparent;
            border: none;
            cursor: pointer;
            margin-bottom: 40px;
            margin-top: 40px;
            cursor: pointer;
            color: var(--explore-more-color);

        }

        /* .destination-section .exolre-more::after {
    content: "";
    position: absolute;
    width: 100%;
    transform: scaleX(0);
    height: 3px;
    bottom: -7px;
    left: 0px;
    background-color: var(--explore-more-color);
    transform-origin: right bottom;
    transition: transform 0.25s ease-out 0s;
}

.destination-section .exolre-more:hover::after,
.destination-section .exolre-more:focus::after {
    transform: scaleX(1);
    transform-origin: bottom left;
} */

        @media (min-width:600px) and (max-width:1200px) {
            .cards .card-content .alex {
                bottom: 20PX;
                color: white;
                left: 50%;
                transform: translateX(-50%);
            }

            .cards {
                display: flex;
                flex-wrap: wrap;
            }

            .cards .card-content .fifth {
                margin-top: 10px;
            }
        }

        @media (max-width:600px) {
            .cards .card-content .alex {
                bottom: 20PX;
                color: white;
                left: 50%;
                transform: translateX(-50%);
            }

            .cards {
                display: flex;
                flex-wrap: wrap;
            }

            .cards .card-content .fifth {
                margin-top: 10px;
            }

            .cards .card-content .third {
                max-width: 320px;
            }
        }

        /*end new section*/
        /*stsrt new section*/
        .servicers-card {
            display: flex;
            gap: 60px;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .servicers-card .text-div {
            border: solid 3px var(--border-color);
            position: relative;
            width: 250px;
            border-radius: 10px;
            height: 300px;
            width: 300px;
        }

        .servicers-card .text-div .circle {
            width: 100px;
            height: 100px;
            background-color: var(--icon-back-color);
            position: absolute;
            top: -50px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 50px;
            box-shadow: -4px 6px 4px 3px #a9a9a933;
        }

        .servicers-card .text-div .circle img {
            margin-left: 19px;
            margin-top: 19px;
        }

        .servicers-card .text-div:hover {
            background-color: var(--explore-more-color);
            z-index: 10;
            cursor: pointer;
        }

        /* .servicers-card .text-div i{
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    z-index: 5;
    font-size: 40px;
    bottom: 20px;
} */
        .servicers-card .text-div h1 {
            text-align: center;
            font-size: 25px;
            margin-top: 80px;
        }

        .servicers-card .text-div p {
            text-align: center;
            padding-bottom: 25px;
            padding: 20px;
            font-weight: 600;
        }

        @media (maxwidth: 768px)and (minwidth: 04px) {
            .servicers-card {
                display: flex;
                flex-direction: row;
            }
        }

        /*end new section*/
        /*start new section*/
        .container .row {
            margin-top: 150px;
            display: flex;
            align-items: center;
            padding-bottom: 100px;
            justify-content: center

        }

        .row .card-imgs-col {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            gap: 15px;
        }

        .row .card-imgs-col .card1 {
            background-image: url(../imgs/img4.png);
            width: 300px;
            height: 300px;
            background-size: cover;
            border-radius: 10px
        }

        .row .card-imgs-col .card2 {
            background-image: url(../imgs/rehla.png);
            width: 300px;
            height: 300px;
            background-size: cover;
            border-radius: 10px
        }

        .row .card-imgs-col .card3 {
            background-image: url(../imgs/luxor.png);
            width: 300px;
            height: 300px;
            background-size: cover;
            border-radius: 10px;

        }

        .row .card-imgs-col .card4 {
            background-image: url(../imgs/image.png);
            width: 300px;
            height: 300px;
            background-size: cover;
            border-radius: 10px
        }

        .row .explore-col {
            position: relative;
            justify-content: flex-end;
            width: 800px;
        }

        .row .explore-col h1 {
            text-align: center;
            font-size: 30px;
            padding-bottom: 30px;
        }

        .row .explore-col p {
            padding-left: 30px;
            padding-right: 30px;
            line-height: 2;
            text-align: center;
            font-size: 15px;
            padding-bottom: 40px;
        }

        .row .explore-col button {
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            width: 200px;
            height: 60px;
            border: none;
            background-color: var(--explore-more-color);
            color: white;
            font-size: 20px;
            border-radius: 10px;
            cursor: pointer;
        }

        /* @media (max-width:900px) {
    .row {
        display:flex;
        align-items:center;
        flex-wrap: wrap
    }
    .row .card-imgs-col{
        flex-basis: 1;
    }
    .row .explore-col{
        flex-basis: 1;
    }
} */
        @media (max-width:990px) {
            .row .card-imgs-col {
                flex-wrap: wrap;
                text-align: center;
            }

            .row {
                flex-wrap: wrap;
                justify-content: center;
                align-items: center
            }

            .row .card-imgs-col {
                align-items: center;
                justify-content: center;
                margin-bottom: 60px;
            }

            /* .row .explore-col{
        flex: 1;
    } */
        }

        /*end new section*/
        /* start new section */

        /* end new section */
        /*            strat of travler advisor      */
        .container .explore-by-special {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            flex-direction: row;
            align-items: center;
            margin-bottom: 100px
        }
        .container .explore-by-special .explore-col h1{
            font-size: 30px
        }
        .container .explore-by-special .explore-col {
            width: 350px;
            text-align: center;
            flex: 1.5;
            align-items: center;
            justify-content: center;
        }

        .container .explore-by-special .explore-col p {
            margin-top: 40px;
            padding-bottom: 40px;
        }

        .container .explore-by-special .explore-col button {
            position: relative;
            width: 200px;
            height: 60px;
            border: none;
            background-color: var(--explore-more-color);
            color: white;
            font-size: 20px;
            border-radius: 10px;
            cursor: pointer;
        }

        .container .explore-by-special .card-coulmn {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            flex: 2;
            gap: 8px;
            justify-content: flex-end;
        }

        .container .explore-by-special .card-coulmn .text-area {
            width: 324px;
            box-shadow: 0 4px 4px 0 var(--shadow);
            margin-top: -10px;
        }

        .container .explore-by-special .card-coulmn .text-area h1 {
            margin-left: 20px;
            padding-top: 20px;
        }

        .container .explore-by-special .card-coulmn .text-area p {
            margin-left: 20px;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .container .explore-by-special .card-coulmn .card-one {
            margin-top: 180px;
            margin-right: 20px;
        }

        .container .explore-by-special .card-coulmn .card-three {
            margin-top: -156px;
        }

        @media (max-width:1300px) {
            .container .explore-by-special {
                align-items: center;
                justify-content: center;
                margin-bottom: 150px
            }

            .container .explore-by-special .card-coulmn {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 30px;


            }

            .container .explore-by-special .card-coulmn .card-one {
                margin-top: 30px;
                margin-right: 0;
            }

            .container .explore-by-special .card-coulmn .card-three {
                margin-top: 0;

            }
        }

        /*           end of travler advisor      */
        .container .see-top-places-header{
            font-size: 30px
        }
        .container .See-the-top-places {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 40px;
        }

        .container .See-the-top-places .cards {
            display: flex;
            flex-direction: row;
            gap: 24px;
            justify-content: flex-start;
        }

        .container .See-the-top-places img {
            width: 55px;
            margin-left: 20px;
            margin-top: 15px;
        }

        .container .See-the-top-places h1 {
            font-size: 16px;
            text-align: center;
        }

        .container .See-the-top-places .card-one {
            width: 100px;
            height: 100px;
            background-color: var(--main-color);
            border-radius: 8px
        }

        .container .See-the-top-places .card-one:hover {
            background-color: var(--explore-more-color);
        }

        .container .See-the-top-places .card-two {
            width: 100px;
            height: 100px;
            background-color: var(--second-main-color);
            border-radius: 8px
        }

        .container .See-the-top-places .card-three {
            width: 100px;
            height: 100px;
            background-color: var(--second-main-color);
            border-radius: 8px
        }

        .container .See-the-top-places .card-four {
            width: 100px;
            height: 100px;
            background-color: var(--second-main-color);
            border-radius: 8px
        }

        .container .See-the-top-places .card-five {
            width: 100px;
            height: 100px;
            background-color: var(--second-main-color);
            border-radius: 8px
        }

        .container .See-the-top-places .card-two:hover {
            background-color: var(--explore-more-color);
        }

        .container .See-the-top-places .card-three:hover {
            background-color: var(--explore-more-color);
        }

        .container .See-the-top-places .card-four:hover {
            background-color: var(--explore-more-color);
        }

        .container .See-the-top-places .card-five:hover {
            background-color: var(--explore-more-color);
        }

        .container .cards-reveal {
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
            flex-direction: row;
            margin-top: 40px;
            justify-content: center;
        }

        .container .cards-reveal .reveal-item {
            display: none;
            gap: 100px;
            flex-wrap: wrap;
            flex-direction: row;
            margin-top: 40px;
        }

        .container .cards-reveal .reveal-item .firist {
            flex: 1;
        }

        .container .cards-reveal .reveal-item .second {
            flex: 1;
        }

        .container .cards-reveal .reveal-item img {
            width: 450px;
            height: auto;
        }

        .container .cards-reveal .reveal-item .textarea {
            width: 450px;
            text-align: center;
            padding-top: 20px;
        }

        /* @media (max-width:400px) {
            .container .cards-reveal !important {
                margin-top: 161px !important;
            }

            .container .cards-reveal !important {
                margin-top: 230px !important
            }

            .container .cards-reveal .reveal-item {
                margin-top: 230px !important
            }
        } */

        @media (max-width:1000px) and (min-width:360px) {
            .container .See-the-top-places .cards {
                justify-content: center;
            }

            .container .cards-reveal .reveal-item {
                margin-top: 50px;
            }

            .container .cards-reveal .reveal-item img {
                width: 300px;
            }

            .container .cards-reveal .reveal-item .textarea {
                width: 300px;
            }
        }

        .container .cards-reveal .reveal-item:first-child {
            display: flex;
        }

        /*==================== useful information section ====================*/
        .useful-information-section .container .speachial-heading h1 {
            margin-top: 5rem;
        }

        .useful-information-section .main-section {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: center;
            justify-content: space-around;
            margin-bottom: 80px;
        }

        .useful-information-section .main-section .card1 {
            flex: 0.4;
            max-width: 500px;
            max-height: 400px;
        }

        .useful-information-section .main-section .card1 img {
            width: 100%;
            height: 60%;
        }

        .useful-information-section .main-section .card1 h1 {
            padding: 20px 0 20px 0;
        }

        .useful-information-section .main-section .card1 p {
            line-height: 2;
        }

        .useful-information-section .main-section .card1 button {
            font-size: 15px;
            text-decoration: underline;
            background-color: transparent;
            border: none;
        }

        .useful-information-section .main-section .card2 {
            flex: 0.4;
            max-width: 500px;
            max-height: 400px;
        }

        .useful-information-section .main-section .card2 img {
            width: 100%;
            height: 60%;
        }

        .useful-information-section .main-section .card2 h1 {
            padding: 20px 0 20px 0;
        }

        .useful-information-section .main-section .card2 p {
            line-height: 2;
        }

        .useful-information-section .main-section .card2 button {
            font-size: 15px;
            text-decoration: underline;
            background-color: transparent;
            border: none;
        }

        @media (max-width: 1000px) {
            .useful-information-section .main-section {
                display: flex;
                flex-direction: column;
                gap: 40px;
            }
        }

        .second-useful-information-section .main-section {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: center;
            justify-content: space-around;
            margin-bottom: 80px;
            gap: 60px;
        }

        .second-useful-information-section .main-section .card1 {
            flex: 0.3;
            max-width: 400px;
            max-height: 700px;
        }

        .second-useful-information-section .main-section .card1 img {
            width: 100%;
            height: 60%;
        }

        .second-useful-information-section .main-section .card1 h1 {
            padding: 20px 0 20px 0;
        }

        .second-useful-information-section .main-section .card1 p {
            line-height: 2;
        }

        .second-useful-information-section .main-section .card1 button {
            font-size: 15px;
            text-decoration: underline;
            background-color: transparent;
            border: none;
        }

        .second-useful-information-section .main-section .card2 {
            flex: 0.3;
            max-width: 400px;
            max-height: 700px;
        }

        .second-useful-information-section .main-section .card2 img {
            width: 100%;
            height: 60%;
        }

        .second-useful-information-section .main-section .card2 h1 {
            padding: 20px 0 20px 0;
        }

        .second-useful-information-section .main-section .card2 p {
            line-height: 2;
        }

        .second-useful-information-section .main-section .card2 button {
            font-size: 15px;
            text-decoration: underline;
            background-color: transparent;
            border: none;
        }

        .second-useful-information-section .main-section .card3 {
            flex: 0.3;
            max-width: 400px;
            max-height: 700px;
        }

        .second-useful-information-section .main-section .card3 img {
            width: 100%;
            height: 60%;
        }

        .second-useful-information-section .main-section .card3 h1 {
            padding: 20px 0 20px 0;
        }

        .second-useful-information-section .main-section .card3 p {
            line-height: 2;
        }

        .second-useful-information-section .main-section .card3 button {
            font-size: 15px;
            text-decoration: underline;
            background-color: transparent;
            border: none;
        }

        .second-useful-information-section .exolre-more {
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            font-size: 18px;
            font-weight: bolder;
            background-color: transparent;
            border: none;
            cursor: pointer;
            color: var(--explore-more-color);
        }

        .second-useful-information-section .exolre-more::after {
            content: "";
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 3px;
            bottom: -7px;
            left: 0px;
            background-color: var(--explore-more-color);
            transform-origin: right bottom;
            transition: transform 0.25s ease-out 0s;
        }

        .second-useful-information-section .exolre-more:hover::after,
        .second-useful-information-section .exolre-more:focus::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        /* .second-useful-information-section  .exolre-more img{
    width: 20px;
    position: absolute;
    right: -30px;
  } */
        @media (max-width: 1000px) {
            .second-useful-information-section .main-section {
                display: flex;
                flex-direction: column;
                gap: 40px;
            }
        }

        /* end useful information section*/
        /* start resons*/
        .resonsons-why {
            padding: 100px 0 100px 0;
            position: relative;
        }

        .resonsons-why .container .header-resons-why  h1 {
            text-align: center;
            max-width: 400px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            font-size: 30px;
        }

        .resonsons-why .section-one {
            display: grid;
            grid-template-columns: 500px 500px;
            justify-content: center;
        }

        .resonsons-why .section-one .image {
            width: 500px;
        }

        .resonsons-why .section-one .image img {
            width: 500px;
            z-index: -5;
            position: relative;
            padding-right: 40px;
        }

        .resonsons-why .section-one .content {
            border-left: 3px solid var(--main-color);
        }

        .resonsons-why .section-one .content .span-one {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: var(--main-color);
            display: block;
            position: relative;
            left: -14px;
        }

        .resonsons-why .section-one .content .span-two {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: var(--main-color);
            display: block;
            position: relative;
            left: -14px;
            top: 70px;
        }

        .resonsons-why .section-one .content .first-line {
            max-width: 500px;
            padding-left: 40px;
        }

        .resonsons-why .section-one .content p {
            max-width: 500px;
            padding-left: 40px;
            padding-top: 37px;
        }

        .resonsons-why .section-one .content .first-elemnt {
            max-width: 500px;
            padding-left: 40px;
            padding-top: 0px;
        }

        .resonsons-why .section-two {
            display: grid;
            grid-template-columns: 500px 500px;
            justify-content: center;
            position: relative;
        }

        .resonsons-why .section-two .image {
            width: 500px;
        }

        .resonsons-why .section-two .image img {
            width: 500px;
            z-index: -5;
            position: relative;
            border-left: 3px solid var(--main-color);
            padding-left: 40px;
        }

        .resonsons-why .section-two .content .span-one {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: var(--main-color);
            display: block;
            position: relative;
            left: 100%;
            transform: translateX(-50%);
            top: 77px;
        }

        .resonsons-why .section-two .content .span-two {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: var(--main-color);
            display: block;
            max-width: 500px;
            position: relative;
            left: 100%;
            transform: translateX(-50%);
            top: 81px;
        }

        .resonsons-why .section-two .content p {
            max-width: 500px;
            padding-right: 40px;
            padding-top: 60px;
        }

        .resonsons-why .section-three {
            display: grid;
            grid-template-columns: 500px 500px;
            justify-content: center;
        }

        .resonsons-why .section-three .image {
            width: 500px;
            height: 100px;
        }

        .resonsons-why .section-three img {
            width: 400px;
            margin-top: -122px;
        }

        .resonsons-why .section-three .content {
            padding-left: 40px;
            border-left: 3px solid var(--main-color);
            margin-top: -60px;
            position: relative;
        }

        .resonsons-why .section-three .content p {
            margin-top: 90px;
            max-width: 500px;
        }

        .resonsons-why .section-three .content::before {
            content: "";
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: var(--main-color);
            display: block;
            position: absolute;
            bottom: 0;
            left: -14px;
        }

        /* @media  and (max-width: 360px) */
        @media only screen and (max-width: 765px) {
            .resonsons-why .container .header-resons-why  h1 {
                max-width: 100%;
                text-align: center;
            }

            .resonsons-why .section-one,
            .resonsons-why .section-two,
            .resonsons-why .section-three {
                grid-template-columns: 100%;
            }

            .resonsons-why .section-one .image,
            .resonsons-why .section-two .image,
            .resonsons-why .section-three .image {
                width: 100%;
                margin-bottom: 78px;
            }

            .resonsons-why .section-one .image img,
            .resonsons-why .section-two .image img,
            .resonsons-why .section-three .image img {
                width: 100%;
            }

            .resonsons-why .section-one .content,
            .resonsons-why .section-two .content,
            .resonsons-why .section-three .content {
                max-width: 100%;
                border-left: none;
            }

            .resonsons-why .section-three .content::before,
            .resonsons-why .section-two .content .span-two,
            .resonsons-why .section-two .content .span-one,
            .resonsons-why .section-one .content .span-two,
            .resonsons-why .section-one .content .span-one {
                display: none
            }

            .resonsons-why .section-two .image img {
                border: none
            }

            .resonsons-why .section-two .content p {
                padding-left: 40px
            }

            .resonsons-why .section-three .content p {
                padding-top: 100px
            }
        }


        /* @media (max-width: 1018px) and (min-width: 768px) {
    .resonsons-why .section-one {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 0;
    }

    .resonsons-why .section-one .content .first-elemnt {
        padding-left: 0;
        padding-top: 60px;
    }

    .resonsons-why .section-one .content p {
        padding-left: 0;
    }

    .resonsons-why .section-one .content {
        border: none;
    }

    .resonsons-why .section-one .content .span-two {
        display: none;
    }

    .resonsons-why .section-one .content .span-one {
        display: none;
    }

    .resonsons-why .section-one img {
        display: none;
    }

    .resonsons-why .section-two {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 0;
    }

    .resonsons-why .section-two img {
        display: none;
    }

    .resonsons-why .section-two .content .span-one {
        display: none;
    }

    .resonsons-why .section-two .content .span-two {
        display: none;
    }

    .resonsons-why .section-three {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .resonsons-why .section-three .content {
        padding: 0;
        max-width: 500px;
        border: none;
    }

    .resonsons-why .section-three .content::before {
        display: none;
    }

    .resonsons-why .section-three .image img {
        display: none;
    }
} */

        /* end resons*/
        /*start of food section*/
        .good-food {
            height: 600px;
            margin-bottom: 100px;
        }

        .good-food .container {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow: -x hidden;
        }

        .good-food .container .slider-wrapper {
            max-width: 45rem;
        }

        .good-food .container .slider-wrapper .slider {
            width: 1280px;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            overflow-y: hidden;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            -ms-overflow-style: none;
            scrollbar-width: none;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .good-food .container .slider-wrapper .slider ::-webkit-scrollbar {
            display: none;
        }

        .good-food .container .slider-wrapper .slider img {
            scroll-snap-align: start;
            width: 250px;
            height: 350px;
        }

        .good-food .container .slider-wrapper .slider-nav {
            display: flex;
            column-gap: 1rem;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            bottom: -450px;
        }

        .good-food .container .slider-wrapper .slider-nav a {
            width: 60px;
            height: 7px;
            border-radius: 15px;
            background-color: var(--border-color);
            opacity: 0.4;
            transition: opacity ease 250ms;
            margin-top: 20px;
        }

        .good-food .container .slider-wrapper .slider-nav a:hover {
            opacity: 1;
        }

        .good-food .container .slider-wrapper .slider .content {
            opacity: 0;
            transition: all 1s ease;
        }

        .good-food .container .slider-wrapper .slider .content:hover {
            opacity: 1;
        }

        .good-food .container .slider-wrapper .slider :hover {
            filter: grayscale(0.4);
        }

        .good-food .container .slider-wrapper .slider .img1 {
            background-image: url(../imgs/Ful-Medames.png);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
            position: relative;
        }

        .good-food .container .slider-wrapper .slider .img1::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .good-food .container .slider-wrapper .slider .img1:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .good-food .container .slider-wrapper .slider .img1 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
        }

        .good-food .container .slider-wrapper .slider .img1 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
        }

        .good-food .container .slider-wrapper .slider .img1 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        .good-food .container .slider-wrapper .slider .img2 {
            background-image: url(../imgs/war2_3enab.png);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .good-food .container .slider-wrapper .slider .img2::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .good-food .container .slider-wrapper .slider .img2:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .good-food .container .slider-wrapper .slider .img2 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
            display: hidden;
        }

        .good-food .container .slider-wrapper .slider .img2 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
        }

        .good-food .container .slider-wrapper .slider .img2 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        .good-food .container .slider-wrapper .slider .img3 {
            background-image: url(../imgs/hwawshi.png);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .good-food .container .slider-wrapper .slider .img3::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .good-food .container .slider-wrapper .slider .img3:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .good-food .container .slider-wrapper .slider .img3 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
        }

        .good-food .container .slider-wrapper .slider .img3 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
        }

        .good-food .container .slider-wrapper .slider .img3 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        .good-food .container .slider-wrapper .slider .img4 {
            background-image: url(../imgs/koshari.jpg);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .good-food .container .slider-wrapper .slider .img4::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .good-food .container .slider-wrapper .slider .img4:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .good-food .container .slider-wrapper .slider .img4 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
            display: hidden;
        }

        .good-food .container .slider-wrapper .slider .img4 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
            display: hidden;
        }

        .good-food .container .slider-wrapper .slider .img4 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        .good-food .container .slider-wrapper .slider .img5 {
            background-image: url(../imgs/Macarona-Bechamel-12.jpg);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .good-food .container .slider-wrapper .slider .img5::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .good-food .container .slider-wrapper .slider .img5:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .good-food .container .slider-wrapper .slider .img5 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
        }

        .good-food .container .slider-wrapper .slider .img5 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
        }

        .good-food .container .slider-wrapper .slider .img5 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        @media (max-width: 1000px) {
            .good-food .container .slider-wrapper .slider {
                max-width: 540px;
                grid-template-columns: auto auto auto auto auto;
            }

            .good-food .container .slider-wrapper .slider .img1 {
                width: 260px;
            }

            .good-food .container .slider-wrapper .slider .img2 {
                width: 260px;
            }

            .good-food .container .slider-wrapper .slider .img3 {
                width: 260px;
            }

            .good-food .container .slider-wrapper .slider .img4 {
                width: 260px;
            }

            .good-food .container .slider-wrapper .slider .img5 {
                width: 260px;
            }
        }

        @media (max-width: 480px) {
            .good-food .container .slider-wrapper .slider {
                max-width: 300px;
                grid-template-columns: auto auto auto auto auto;
            }

            .good-food .container .slider-wrapper .slider .img1 {
                width: 300px;
            }

            .good-food .container .slider-wrapper .slider .img2 {
                width: 300px;
            }

            .good-food .container .slider-wrapper .slider .img3 {
                width: 300px;
            }

            .good-food .container .slider-wrapper .slider .img4 {
                width: 300px;
            }

            .good-food .container .slider-wrapper .slider .img5 {
                width: 300px;
            }

            .good-food .container .slider-wrapper .slider-nav a {
                width: 20px;
                height: 5px;
                border-radius: 15px;
            }
        }

        /*end of good food section*/
        /*start of art and culture*/
        .art-and-culture {
            height: 600px;
            margin-bottom: 100px;
        }

        .art-and-culture .container {
            position: relative;
        }

        .art-and-culture .container .slider-wrapper {
            max-width: 45rem;
        }

        .art-and-culture .container .slider-wrapper .slider {
            width: 1280px;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            overflow-y: hidden;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            -ms-overflow-style: none;
            scrollbar-width: none;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .art-and-culture .container .slider-wrapper .slider ::-webkit-scrollbar {
            display: none;
        }

        .art-and-culture .container .slider-wrapper .slider img {
            scroll-snap-align: start;
            width: 250px;
            height: 350px;
        }

        .art-and-culture .container .slider-wrapper .slider-nav {
            display: flex;
            column-gap: 1rem;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            bottom: -450px;
        }

        .art-and-culture .container .slider-wrapper .slider-nav a {
            width: 60px;
            height: 7px;
            border-radius: 15px;
            background-color: var(--border-color);
            opacity: 0.4;
            transition: opacity ease 250ms;
            margin-top: 20px;
        }

        .art-and-culture .container .slider-wrapper .slider-nav a:hover {
            opacity: 1;
        }

        .art-and-culture .container .slider-wrapper .slider .content {
            opacity: 0;
            transition: all 1s ease;
        }

        .container .slider-wrapper .slider .content:hover {
            opacity: 1;
        }

        .art-and-culture .container .slider-wrapper .slider :hover {
            filter: grayscale(0.4);
        }

        .art-and-culture .container .slider-wrapper .slider .img1 {
            background-image: url(../imgs/img6.png);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .art-and-culture .container .slider-wrapper .slider .img1::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .art-and-culture .container .slider-wrapper .slider .img1:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .art-and-culture .container .slider-wrapper .slider .img1 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
        }

        .art-and-culture .container .slider-wrapper .slider .img1 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
        }

        .art-and-culture .container .slider-wrapper .slider .img1 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        .art-and-culture .container .slider-wrapper .slider .img2 {
            background-image: url(../imgs/img5.png);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .art-and-culture .container .slider-wrapper .slider .img2::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .art-and-culture .container .slider-wrapper .slider .img2:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .art-and-culture .container .slider-wrapper .slider .img2 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
            display: hidden;
        }

        .art-and-culture .container .slider-wrapper .slider .img2 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
        }

        .art-and-culture .container .slider-wrapper .slider .img2 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        .art-and-culture .container .slider-wrapper .slider .img3 {
            background-image: url(../imgs/img1.png);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .art-and-culture .container .slider-wrapper .slider .img3::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .art-and-culture .container .slider-wrapper .slider .img3:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .art-and-culture .container .slider-wrapper .slider .img3 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
        }

        .art-and-culture .container .slider-wrapper .slider .img3 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
        }

        .art-and-culture .container .slider-wrapper .slider .img3 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        .art-and-culture .container .slider-wrapper .slider .img4 {
            background-image: url(../imgs/elebda3\ 1.png);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .art-and-culture .container .slider-wrapper .slider .img4::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .art-and-culture .container .slider-wrapper .slider .img4:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .art-and-culture .container .slider-wrapper .slider .img4 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
            display: hidden;
        }

        .art-and-culture .container .slider-wrapper .slider .img4 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
            display: hidden;
        }

        .art-and-culture .container .slider-wrapper .slider .img4 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        .art-and-culture .container .slider-wrapper .slider .img5 {
            background-image: url(../imgs/craft.png);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .art-and-culture .container .slider-wrapper .slider .img5::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .art-and-culture .container .slider-wrapper .slider .img5:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .art-and-culture .container .slider-wrapper .slider .img5 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
        }

        .art-and-culture .container .slider-wrapper .slider .img5 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
        }

        .art-and-culture .container .slider-wrapper .slider .img5 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        @media (max-width: 1000px) {
            .art-and-culture .container .slider-wrapper .slider {
                max-width: 540px;
                grid-template-columns: auto auto auto auto auto;
            }

            .art-and-culture .container .slider-wrapper .slider .img1 {
                width: 260px;
            }

            .art-and-culture .container .slider-wrapper .slider .img2 {
                width: 260px;
            }

            .art-and-culture .container .slider-wrapper .slider .img3 {
                width: 260px;
            }

            .art-and-culture .container .slider-wrapper .slider .img4 {
                width: 260px;
            }

            .art-and-culture .container .slider-wrapper .slider .img5 {
                width: 260px;
            }
        }

        @media (max-width: 480px) {
            .art-and-culture .container .slider-wrapper .slider {
                max-width: 300px;
                grid-template-columns: auto auto auto auto auto;
            }

            .art-and-culture .container .slider-wrapper .slider .img1 {
                width: 300px;
            }

            .art-and-culture .container .slider-wrapper .slider .img2 {
                width: 300px;
            }

            .art-and-culture .container .slider-wrapper .slider .img3 {
                width: 300px;
            }

            .art-and-culture .container .slider-wrapper .slider .img4 {
                width: 300px;
            }

            .art-and-culture .container .slider-wrapper .slider .img5 {
                width: 300px;
            }

            .art-and-culture .container .slider-wrapper .slider-nav a {
                width: 20px;
                height: 5px;
                border-radius: 15px;
            }
        }

        /*end of art and culture*/
        /*start of tradition*/
        .traditions {
            height: 600px;
            margin-bottom: 100px;
        }

        .traditions .container {
            position: relative;
        }

        .traditions .container .slider-wrapper {
            max-width: 45rem;
        }

        .traditions .container .slider-wrapper .slider {
            width: 1280px;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            overflow-y: hidden;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            -ms-overflow-style: none;
            scrollbar-width: none;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .traditions .container .slider-wrapper .slider ::-webkit-scrollbar {
            display: none;
        }

        .traditions .container .slider-wrapper .slider img {
            scroll-snap-align: start;
            width: 250px;
            height: 350px;
        }

        .traditions .container .slider-wrapper .slider-nav {
            display: flex;
            column-gap: 1rem;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            bottom: -450px;
        }

        .traditions .container .slider-wrapper .slider-nav a {
            width: 60px;
            height: 7px;
            border-radius: 15px;
            background-color: var(--border-color);
            opacity: 0.4;
            transition: opacity ease 250ms;
            margin-top: 20px;
        }

        .traditions .container .slider-wrapper .slider-nav a:hover {
            opacity: 1;
        }

        .traditions .container .slider-wrapper .slider .content {
            opacity: 0;
            transition: all 1s ease;
        }

        .traditions .container .slider-wrapper .slider .content:hover {
            opacity: 1;
        }

        .traditions .container .slider-wrapper .slider :hover {
            filter: grayscale(0.4);
        }

        .traditions .container .slider-wrapper .slider .img1 {
            background-image: url(../imgs/joy.png);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .traditions .container .slider-wrapper .slider .img1::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .traditions .container .slider-wrapper .slider .img1:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .traditions .container .slider-wrapper .slider .img1 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
        }

        .traditions .container .slider-wrapper .slider .img1 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
        }

        .traditions .container .slider-wrapper .slider .img1 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        .traditions .container .slider-wrapper .slider .img2 {
            background-image: url(../imgs/img6.png);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .traditions .container .slider-wrapper .slider .img2::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .traditions .container .slider-wrapper .slider .img2:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .traditions .container .slider-wrapper .slider .img2 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
            display: hidden;
        }

        .traditions .container .slider-wrapper .slider .img2 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
        }

        .traditions .container .slider-wrapper .slider .img2 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        .traditions .container .slider-wrapper .slider .img3 {
            background-image: url(../imgs/Religion-in-Egypt-Egypt-Tours-Portal.jpg);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .traditions .container .slider-wrapper .slider .img3::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .traditions .container .slider-wrapper .slider .img3:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .traditions .container .slider-wrapper .slider .img3 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
        }

        .traditions .container .slider-wrapper .slider .img3 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
        }

        .traditions .container .slider-wrapper .slider .img3 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        .traditions .container .slider-wrapper .slider .img4 {
            background-image: url(../imgs/Warmth-and-Hospitality-of-Egypt-Egypt-Tours-Portal.jpg);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .traditions .container .slider-wrapper .slider .img4::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .traditions .container .slider-wrapper .slider .img4:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .traditions .container .slider-wrapper .slider .img4 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
            display: hidden;
        }

        .traditions .container .slider-wrapper .slider .img4 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
            display: hidden;
        }

        .traditions .container .slider-wrapper .slider .img4 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        .traditions .container .slider-wrapper .slider .img5 {
            background-image: url(../imgs/Celebrations-in-Egypt-Egypt-Tours-Portal.jpg);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .traditions .container .slider-wrapper .slider .img5::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .traditions .container .slider-wrapper .slider .img5:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .traditions .container .slider-wrapper .slider .img5 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
        }

        .traditions .container .slider-wrapper .slider .img5 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
        }

        .traditions .container .slider-wrapper .slider .img5 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        @media (max-width: 1000px) {
            .traditions .container .slider-wrapper .slider {
                max-width: 540px;
                grid-template-columns: auto auto auto auto auto;
            }

            .traditions .container .slider-wrapper .slider .img1 {
                width: 260px;
            }

            .traditions .container .slider-wrapper .slider .img2 {
                width: 260px;
            }

            .traditions .container .slider-wrapper .slider .img3 {
                width: 260px;
            }

            .traditions .container .slider-wrapper .slider .img4 {
                width: 260px;
            }

            .traditions .container .slider-wrapper .slider .img5 {
                width: 260px;
            }
        }

        @media (max-width: 480px) {
            .traditions .container .slider-wrapper .slider {
                max-width: 300px;
                grid-template-columns: auto auto auto auto auto;
            }

            .traditions .container .slider-wrapper .slider .img1 {
                width: 300px;
            }

            .traditions .container .slider-wrapper .slider .img2 {
                width: 300px;
            }

            .traditions .container .slider-wrapper .slider .img3 {
                width: 300px;
            }

            .traditions .container .slider-wrapper .slider .img4 {
                width: 300px;
            }

            .traditions .container .slider-wrapper .slider .img5 {
                width: 300px;
            }

            .traditions .container .slider-wrapper .slider-nav a {
                width: 20px;
                height: 5px;
                border-radius: 15px;
            }
        }

        /*end of traditions*/
        /*start of hidden gems*/
        .hidden-gems {
            height: 600px;
            margin-bottom: 100px;
        }

        .hidden-gems .container {
            position: relative;
        }

        .hidden-gems .container .slider-wrapper {
            max-width: 45rem;
        }

        .hidden-gems .container .slider-wrapper .slider {
            width: 1280px;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            overflow-y: hidden;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            -ms-overflow-style: none;
            scrollbar-width: none;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .hidden-gems .container .slider-wrapper .slider ::-webkit-scrollbar {
            display: none;
        }

        .hidden-gems .container .slider-wrapper .slider img {
            scroll-snap-align: start;
            width: 250px;
            height: 350px;
        }

        .hidden-gems .container .slider-wrapper .slider-nav {
            display: flex;
            column-gap: 1rem;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            bottom: -450px;
        }

        .hidden-gems .container .slider-wrapper .slider-nav a {
            width: 60px;
            height: 7px;
            border-radius: 15px;
            background-color: var(--border-color);
            opacity: 0.4;
            transition: opacity ease 250ms;
            margin-top: 20px;
        }

        .hidden-gems .container .slider-wrapper .slider-nav a:hover {
            opacity: 1;
        }

        .hidden-gems .container .slider-wrapper .slider .content {
            opacity: 0;
            transition: all 1s ease;
        }

        .hidden-gems .container .slider-wrapper .slider .content:hover {
            opacity: 1;
        }

        .hidden-gems .container .slider-wrapper .slider :hover {
            filter: grayscale(0.4);
        }

        .hidden-gems .container .slider-wrapper .slider .img1 {
            background-image: url(../imgs/img14.png);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .hidden-gems .container .slider-wrapper .slider .img1::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .hidden-gems .container .slider-wrapper .slider .img1:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .hidden-gems .container .slider-wrapper .slider .img1 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
        }

        .hidden-gems .container .slider-wrapper .slider .img1 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
        }

        .hidden-gems .container .slider-wrapper .slider .img1 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        .hidden-gems .container .slider-wrapper .slider .img2 {
            background-image: url(../imgs/img3.png);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .hidden-gems .container .slider-wrapper .slider .img2::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .hidden-gems .container .slider-wrapper .slider .img2:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .hidden-gems .container .slider-wrapper .slider .img2 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
            display: hidden;
        }

        .hidden-gems .container .slider-wrapper .slider .img2 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
        }

        .hidden-gems .container .slider-wrapper .slider .img2 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        .hidden-gems .container .slider-wrapper .slider .img3 {
            background-image: url(../imgs/img13.png);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .hidden-gems .container .slider-wrapper .slider .img3::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .hidden-gems .container .slider-wrapper .slider .img3:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .hidden-gems .container .slider-wrapper .slider .img3 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
        }

        .hidden-gems .container .slider-wrapper .slider .img3 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
        }

        .hidden-gems .container .slider-wrapper .slider .img3 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        .hidden-gems .container .slider-wrapper .slider .img4 {
            background-image: url(../imgs/beautiful-view-salt-plains-lakes-siwa-oasis-egypt_403511-3494.jpg);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .hidden-gems .container .slider-wrapper .slider .img4::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .hidden-gems .container .slider-wrapper .slider .img4:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .hidden-gems .container .slider-wrapper .slider .img4 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
            display: hidden;
        }

        .hidden-gems .container .slider-wrapper .slider .img4 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
            display: hidden;
        }

        .hidden-gems .container .slider-wrapper .slider .img4 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        .hidden-gems .container .slider-wrapper .slider .img5 {
            background-image: url(../imgs/ras\ muhamed.png);
            width: 300px;
            height: 400px;
            background-size: cover;
            border-radius: 5px;
        }

        .hidden-gems .container .slider-wrapper .slider .img5::before {
            content: " ";
            width: 0;
            height: 0;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .hidden-gems .container .slider-wrapper .slider .img5:hover::before {
            opacity: 1;
            width: 100%;
            height: 100%;
        }

        .hidden-gems .container .slider-wrapper .slider .img5 p {
            font-size: 14px;
            text-align: center;
            padding: 10px 10px 0 10px;
            height: 250px;
            color: white;
        }

        .hidden-gems .container .slider-wrapper .slider .img5 .speachial-heading {
            font-size: 20px;
            padding-top: 50px;
            color: white;
        }

        .hidden-gems .container .slider-wrapper .slider .img5 .speachial-heading h1::after {
            background-color: white;
            width: 17%;
            position: absolute;
            left: 50%;
            transform: translatex(-50%);
        }

        @media (max-width: 1000px) {
            .hidden-gems .container .slider-wrapper .slider {
                max-width: 540px;
                grid-template-columns: auto auto auto auto auto;
            }

            .hidden-gems .container .slider-wrapper .slider .img1 {
                width: 260px;
            }

            .hidden-gems .container .slider-wrapper .slider .img2 {
                width: 260px;
            }

            .hidden-gems.container .slider-wrapper .slider .img3 {
                width: 260px;
            }

            .hidden-gems.container .slider-wrapper .slider .img4 {
                width: 260px;
            }

            .hidden-gems .container .slider-wrapper .slider .img5 {
                width: 260px;
            }
        }

        @media (max-width: 480px) {
            .hidden-gems .container .slider-wrapper .slider {
                max-width: 300px;
                grid-template-columns: auto auto auto auto auto;
            }

            .hidden-gems .container .slider-wrapper .slider .img1 {
                width: 300px;
            }

            .hidden-gems .container .slider-wrapper .slider .img2 {
                width: 300px;
            }

            .hidden-gems .container .slider-wrapper .slider .img3 {
                width: 300px;
            }

            .hidden-gems .container .slider-wrapper .slider .img4 {
                width: 300px;
            }

            .hidden-gems .container .slider-wrapper .slider .img5 {
                width: 300px;
            }

            .hidden-gems .container .slider-wrapper .slider-nav a {
                width: 20px;
                height: 5px;
                border-radius: 15px;
            }
        }

        /* start of testimonial*/
        .testimonial {
            margin-bottom: 60px;
            padding-top: 30px;
            padding-bottom: 80px;
            background-color: var(--review-background);
            display: flex;
            flex-direction: row;
        }

        .testimonial .slider-contianer {
            display: flex;
            flex-direction: row;
            justify-content: center;
            gap: 50px;
        }

        .testimonial .slider-contianer .card1:hover {
            box-shadow: 0 0 17px 5px #00000052;
            opacity: 1;
        }

        .testimonial .slider-contianer .card1 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: white;
            width: 300px;
            height: 420px;
            position: relative;
            opacity: 0.7;
        }

        .testimonial .slider-contianer .card1 img:first-child {
            width: 20px;
            position: absolute;
            top: 10%;
        }

        .testimonial .slider-contianer .card1 img:nth-child(2) {
            top: 20%;
            position: absolute;
        }

        .testimonial .slider-contianer .card1 p {
            font-size: 15px;
            position: absolute;
            top: 50%;
            padding-left: 20px;
            padding-right: 20px;
        }

        .testimonial .slider-contianer .card1 h1 {
            position: absolute;
            bottom: 6%;
            font-size: 18px;
        }

        .testimonial .slider-contianer .card1 h3 {
            position: absolute;
            bottom: 3%;
            font-size: 10px;
        }

        .testimonial .scrol_button {
            margin-top: 50px;
            display: flex;
            flex-direction: row;
            gap: 9px;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .testimonial .scrol_button a {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: var(--border-color);
            opacity: 0.2;
        }

        .testimonial .scrol_button a:hover {
            opacity: 1;
        }

        @media (max-width: 1000px) and (min-width: 390px) {
            .testimonial {
                width: 800px;
                overflow: hidden;
            }

            .testimonial .slider-contianer {
                width: 800px;
                overflow-x: hidden;
            }

            .testimonial .slider-contianer .card1 {
                width: 400px;
            }

            .testimonial .slider-contianer .card2 {
                width: 400px;
            }

            .testimonial .slider-contianer .card3 {
                width: 400px;
            }
        }

        @media (max-width: 380px) and (min-width: 0px) {
            .testimonial {
                width: 370px;
                overflow: hidden;
                justify-content: center;
                display: flex;
                overflow-y: hidden;
                overflow-x: auto;
                scroll-snap-type: x mandatory;
                scroll-behavior: smooth;
                -ms-overflow-style: none;
                scrollbar-width: none;
            }

            .testimonial .slider-contianer {
                overflow-y: hidden;
                overflow-x: auto;
                scroll-snap-type: x mandatory;
                scroll-behavior: smooth;
                -ms-overflow-style: none;
                scrollbar-width: none;
            }

            .testimonial .slider-contianer .card1 {
                width: 250px;
                flex: 1;
            }

            .testimonial .slider-contianer .card2 {
                width: 250px;
                flex: 1;
            }

            .testimonial .slider-contianer .card3 {
                width: 250px;
                flex: 1;
            }
        }

        /* end of testimonial*/
        /*end of hidden gems*/
        /*start of  stay informed section*/
        .stay-informed-section {
            border: solid 3px var(--border-color);
            width: 90%;
            max-width: 1150px;
            min-height: 300px;
            max-height: 500px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            margin-bottom: 100px;
        }

        .stay-informed-section .container {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;

            flex-wrap: wrap;
        }

        .stay-informed-section .container .search-container {
            text-align: center;
            padding-top: 40px;
            flex: 0.6;
        }

        .stay-informed-section .container .search-container h1:nth-child(2) {
            font-size: 30px;
            font-weight: 400;
        }

        .stay-informed-section .container .search-container input {
            margin: 20px 20px 20px 0;
            width: 100%;
            max-width: 400px;
            height: 50px;
            border-radius: 25px;
            background-color: #b9b9b98a;
            padding-left: 15px;
            color: black;
            border-style: none;
            outline: none;
            box-shadow: #00000085 1px 2px 3px 1px;
        }

        .stay-informed-section .container .search-container input::placeholder {
            color: black;
        }

        .stay-informed-section .container .search-container input:focus-visible {
            border-style: none;
        }

        .stay-informed-section .container .search-container button {
            width: 100%;
            max-width: 140px;
            height: 50px;
            border-radius: 25px;
            font-size: 20px;
            color: white;
            background-color: var(--explore-more-color);
            outline: none;
            border-style: none;
            cursor: pointer;
        }

        .stay-informed-section .container .social-media {
            padding-top: 100px;
            padding-right: 50px;
            text-align: center;
            flex: 0.2;
            display: flex;
            flex-direction: column;
        }

        .stay-informed-section .container .social-media h1 {
            font-weight: 600;
        }

        .stay-informed-section .container .social-media .social-media-container {
            margin-top: 15px;
            font-size: 32px;
            color: var(--explore-more-color);
            cursor: pointer;
        }

        @media (max-width: 720px) {
            .stay-informed-section .container {
                flex-direction: column;
                align-items: center;
            }

            .stay-informed-section .container .search-container {
                padding-top: 20px;
                flex: none;
            }

            .stay-informed-section .container .social-media {
                padding-top: 20px;
                padding-right: 0;
                flex: none;
            }
        }

        @media (max-width: 390px) {
            .stay-informed-section .container .search-container input {
                width: 100%;
                max-width: 250px;
                margin-bottom: 20px;
            }

            .stay-informed-section .container .search-container button {
                width: 100%;
                max-width: 250px;
            }

            .stay-informed-section .container .social-media {
                padding-top: 20px;
                padding-right: 0;
                flex: none;
                text-align: center;
            }
        }
        .footer{
            width: 100%;
            background-color:var(--explore-more-color);
            padding: 0!important;
        }
        /*end of  stay informed section*/
    </style>
    <div class="landing-page">
    @if (Auth::check())
    @include('components.header-profile')
    @else
    @include('components.header')
    @endif
    
        <div class="container">
            </div>
            <div class="logos">
                <img src="imgs/icons8-facebook-144.png" alt="" class="facebook">
                <img src="imgs/icons8-instagram-144.png" alt="" class="instgram">
                <img src="imgs/icons8-twitterx-144.png" alt="" class="twitter">
            </div>
            <div class="landing-content">
                <h1>Explore</h1>
                <div class="pragraph">
                    <p>The culture of</p>
                    <h2>EGYPT</h2>
                </div>
            </div>
            <br />
            <section>
            <div class="slide hi-slide">
              <div class="hi-prev"></div>
              <div class="hi-next"></div>
              <ul>
                <li>
                  <img src="imgs/img2.png" alt="" />
                </li>
                <li>
                  <img src="imgs/img8.png" alt="" />
                </li>
                <li>
                  <img src="imgs/camel.png" alt="" />
                </li>
                <li>
                  <img src="imgs/img12.png" alt="" />
                </li>
                <li>
                  <img src="imgs/sunset.png" alt="" />
                </li>
                <li>
                  <img src="imgs/img9.png" alt="" />
                </li>
                <li>
                  <img src="imgs/img1.png" alt="" />
                </li>
                <li>
                  <img src="imgs/img3.png" alt="" />
                </li>
              </ul>
            </div>
          </section>
    </div>
    </div>
    <div class="container">
        <div class="dicovering">
            <input type="text" name="" class="search" placeholder="What would you like to discover">
            <button>Inspire me</button>
        </div>
    </div>
    <div class="container">
        <div class="destination-section">
            <div class="speachial-heading">
                <h1>Top Desinations</h1>
            </div>
            <div class="cards">
                <div class="card-content">
                    <img src="imgs/cairo.png " alt="" class="one">
                    <h1>Cairo </h1>
                </div>
                <div class="card-content">
                    <img src="imgs/alex.png" alt="" class="second">
                    <h1 class="alex">Alexandria</h1>
                </div>
                <div class="card-content">
                    <img src="imgs/siwa.png" alt="" class="third">
                    <h1>Siwa</h1>
                </div>
                <div class="card-content">
                    <img src="imgs/Tour-to-Aswan.png" alt="" class="fourth">
                    <h1>Aswan</h1>
                </div>
                <div class="card-content">
                    <img src="imgs/sharm.png" alt="" class="fifth">
                    <h1>Sharm El Sheikh</h1>
                </div>
                <div class="card-content">
                    <img src="imgs/temple shadow.png" alt="" class="sixth">
                    <h1>Luxor</h1>
                </div>
            </div>
            <!-- <div class="explore-more">
                <h1>exploremore</h1>
                <i class="fa-solid fa-chevron-right"></i>
            </div> -->
            <button class="explore-more">Explore More &#11208</button>

        </div>
    </div>
    <div class="container">
        <div class="our-services-container">
            <div class="speachial-heading">
                <h1>Our Services</h1>
            </div>
        </div>
        <div class="servicers-card">

            <div class="text-div">
                <div class="circle">
                    <img src="imgs/calendar.png" alt="">
                </div>
                <h1>plan</h1>
                <p>Create your ideal Egypt trip with customizable plans tailored to your preferences</p>
            </div>
            <div class="servicers-card">

                <div class="text-div">
                    <div class="circle">
                        <img src="imgs/emergency_icon.png" alt="">
                    </div>
                    <h1>emergencey service</h1>
                    <p>Feel secure with our
                        emergency services available
                        to support you during
                        unexpected situations</p>
                </div>
            </div>
            <div class="servicers-card">
                <div class="text-div">
                    <div class="circle">
                        <img src="imgs/scan.png" alt="">
                    </div>
                    <h1>scan</h1>
                    <p>Explore more details in your
                        photos by simply uploading
                        them to uncover extra details
                        during your Egypt trip!</p>
                </div>
            </div>
            <div class="servicers-card">
                <div class="text-div">
                    <div class="circle">
                        <img src="imgs/scams_icon.png" alt="">
                    </div>
                    <h1>avoid scam</h1>
                    <p>Stay protected from scam
                        with our enhanced security
                        measures for worry-free travel
                        in Egypt</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="card-imgs-col">
                    <div class="card1"></div>
                    <div class="card2"></div>
                    <div class="card3"></div>
                    <div class="card4"></div>
                </div>
                <div class="explore-col">
                    <h1>Explore 100+ Destinations</h1>
                    <p>Discover the enchantment of Egypt across an
                        array of 100+ destinations, each offering
                        a unique blend of culture, history,
                        and natural beauty for
                        an unforgettable exploration.</p>
                    <button>Explore</button>
                </div>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="explore-by-special">
                    <div class="explore-col">
                        <h1>Explore By Specialty Travel Advisors
                        </h1>
                        <p>Enhance your travel experience with the expertise of our Specialty Travel Advisors, who are
                            committed to crafting unique and unforgettable journeys through Egypt, tailored to your
                            specific interests and preferences.

                        </p>
                        <button>Explore</button>
                    </div>
                    <div class="card-coulmn">
                        <div class="card-one">
                            <img src="imgs/ismailia.png" alt="">
                            <div class="text-area">
                                <h1>Ismailia</h1>
                                <p>a canal-side city in Egypt, charms with its scenic waterfront along the Suez Canal
                                    and a
                                    relaxed urban atmosphere.
                                </p>
                            </div>
                        </div>
                        <div class="card-two">
                            <img src="imgs/fayoum oasis.png" alt="">
                            <div class="text-area">
                                <h1>Fayoum Oasis
                                </h1>
                                <p>a canal-side city in Egypt, charms with its scenic waterfront along the Suez Canal
                                    and a relaxed urban atmosphere.


                                </p>
                            </div>
                        </div>
                        <div class="card-three">
                            <img src="imgs/dahab.png" alt="">
                            <div class="text-area">
                                <h1>Dahab
                                </h1>
                                <p>a canal-side city in Egypt, charms with its scenic waterfront along the Suez Canal
                                    and a
                                    relaxed urban atmosphere.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <h1 class="see-top-places-header">See the top places in Egypt to visit</h1>
                <div class="See-the-top-places">
                    <div class="cards">
                        <div class="card-one card" onclick="revealContent('desert')">
                            <img src="imgs/africa_icon.svg" alt="">
                            <h1>Desert</h1>
                        </div>
                        <div class="card-two card" onclick="revealContent('landmarks')">
                            <img src="imgs/pyramids_icon.svg" alt="">
                            <h1>Landmarks</h1>
                        </div>
                        <div class="card-three card" onclick="revealContent('eco')">
                            <img src="imgs/plant_icon.svg" alt="">
                            <h1>Eco</h1>
                        </div>
                        <div class="card-four card" onclick="revealContent('culture')">
                            <img src="imgs/buildings_icon.svg" alt="">
                            <h1>Culture</h1>
                        </div>
                        <div class="card-five card" onclick="revealContent('beach')">
                            <img src="imgs/umbrella_icon.svg" alt="">
                            <h1>Beach</h1>
                        </div>
                    </div>
                </div>
                <div class="cards-reveal">
                    <div id="desert" class="reveal-item">
                        <div class="first">
                            <img src="imgs/white desert.png" alt="">
                            <div class="textarea">
                                <h1>The White Desert</h1>
                                <p>A surreal landscape of chalky white rock formations sculpted by wind, creating an
                                    otherworldly atmosphere amidst Egypt's Western Desert.
                                </p>
                            </div>
                        </div>
                        <div class="second">
                            <img src="imgs/mount sinai.png" alt="">
                            <div class="textarea">
                                <h1>Mount Sinai
                                </h1>
                                <p>A revered site of biblical significance, where according to tradition, Moses received
                                    the Ten Commandments, offering breathtaking views of the surrounding desert
                                    landscape from its summit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="landmarks" class="reveal-item">
                        <div class="first">
                            <img src="imgs/sphinx.png" alt="">
                            <div class="textarea">
                                <h1>Sphinx</h1>
                                <p>An enigmatic ancient statue with the body of a lion and the head of a human, guarding
                                    the
                                    Giza Plateau and captivating visitors with its mysterious aura.
                                </p>
                            </div>
                        </div>
                        <div class="second">
                            <img src="imgs/karnak.png" alt="">
                            <div class="textarea">
                                <h1>The Temple of Karnak
                                </h1>
                                <p>A sprawling complex of ancient Egyptian temples near Luxor, boasting magnificent
                                    columns and grand halls, reflecting the architectural prowess and religious fervor
                                    of ancient Egypt.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="eco" class="reveal-item">
                        <div class="first">
                            <img src="imgs/siwa.png" alt="">
                            <div class="textarea">
                                <h1>Siwa Oasis
                                </h1>
                                <p>Tucked away in the Western Desert, Siwa Oasis entices with its verdant palm groves
                                    and sustainable tourism offerings, providing a serene eco-friendly escape amid the
                                    desert landscape.
                                </p>
                            </div>
                        </div>
                        <div class="second">
                            <img src="imgs/ras mohamd.png" alt="">
                            <div class="textarea">
                                <h1>Ras Mohammed National Park
                                </h1>
                                <p>A biodiverse marine reserve on the Sinai Peninsula, where pristine coral reefs and
                                    vibrant underwater life beckon eco-conscious visitors to explore its stunning
                                    depths.
                                    .
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="culture" class="reveal-item">
                        <div class="first">
                            <img src="imgs/national egy.png" alt="">
                            <div class="textarea">
                                <h1>The National Museum of Egyptian Civilization (NMEC)
                                </h1>
                                <p>in Cairo offers a captivating journey through Egypt's rich heritage, spanning from
                                    prehistoric times to the present day, with exhibits showcasing ancient artifacts,
                                    cultural treasures, and the nation's enduring legacy across millennia.
                                </p>
                            </div>
                        </div>
                        <div class="second">
                            <img src="imgs/Antiquities.png" alt="">
                            <div class="textarea">
                                <h1>Museum of Egyptian Antiquities
                                </h1>
                                <p>The Egyptian Museum near Tahrir Square in Cairo showcases Tutankhamun's treasures,
                                    mummies, statues, and other ancient artifacts, offering a profound insight into
                                    Egypt's rich history and civilization.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="beach" class="reveal-item">
                        <div class="first">
                            <img src="imgs/hurrghada.png" alt="">
                            <div class="textarea">
                                <h1>Hurghada
                                </h1>
                                <p>Egypt's beaches offer stunning coastlines along the Mediterranean and Red Seas, with
                                    opportunities for relaxation, water sports, and exploration of marine life.
                                </p>
                            </div>
                        </div>
                        <div class="second">
                            <img src="imgs/sharmSheikh.png" alt="">
                            <div class="textarea">
                                <h1>Sharm El Sheikh
                                </h1>
                                <p>A coastal gem on the Sinai Peninsula, famed for its pristine beaches, clear waters,
                                    and vibrant coral reefs, offering a perfect escape for beach lovers and water sports
                                    enthusiasts alike.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--============= Useful Info ================ -->
        <div class="useful-information-section">
            <div class="container">
                <div class="speachial-heading">
                    <h1>Useful Information</h1>
                </div>
                <div class="main-section">
                    <div class="card1">
                        <img src="imgs/metro.png" alt="" />
                        <h1>Transportation</h1>
                        <p>
                            Egypt offers diverse transportation options for tourists. Domestic
                            flights by EgyptAir connect major cities,providing
                            <button>Read more</button>
                        </p>
                    </div>
                    <div class="card2">
                        <img src="imgs/food.jpg" alt="" />
                        <h1>Food & Drink</h1>
                        <p>
                            Egyptian cuisine is a delight for food enthusiasts. Traditional
                            dishes like Koshari and Ful Medames showcase the local flavors
                            <button>Read more</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="second-useful-information-section">
            <div class="container">
                <div class="main-section">
                    <div class="card1">
                        <img src="imgs/airplane.png" alt="" />
                        <h1>Aviation</h1>
                        <p>
                            Navigating Egypt is made easy through well-connected airports.
                            <button>Read more</button>
                        </p>
                    </div>
                    <div class="card2">
                        <img src="imgs/popular place.png" alt="" />
                        <h1>Popular Places</h1>
                        <p>
                            Egypt's iconic landmarks beckon tourists. The Pyramids of Giza an
                            <button>Read more</button>
                        </p>
                    </div>
                    <div class="card3">
                        <img src="imgs/hotel.png" alt="" />
                        <h1>Hotels & Resorts</h1>
                        <p>
                            Accommodation in Egypt caters to a range of preferences. Luxury
                            <button>Read more</button>
                        </p>
                    </div>
                </div>
            </div>
            <button class="exolre-more">
                Explore more<i id="right-arrow" class="fa-solid fa-angle-right"></i>
            </button>
        </div>

        <!--============= Why Egypt ================ -->
        <div class="resonsons-why">
            <div class="container">
                <div class="header-resons-why">
                    <h1>Five Reasons Why</h1>
                    <h1>You Should Visit Egypt</h1>
                </div>
                <div class="section-one">
                    <div class="image">
                        <img src="imgs/Untitled-1.jpg" alt="" />
                    </div>
                    <div class="content">
                        <span class="span-one"> </span>
                        <p class="first-elemnt">
                            Explore the iconic Pyramids of Giza and the Sphinx, marveling at
                            the architectural brilliance of ancient Egypt.
                        </p>
                        <span class="span-two"> </span>
                        <p>
                            Immerse yourself in the historical treasures of Luxor, a
                            captivating open- air museum with temples and tombs along the
                            Nile, including Karnak Temple and the Valley of the Kings.
                        </p>
                    </div>
                </div>
                <div class="section-two">
                    <div class="content">
                        <span class="span-one"></span>
                        <p>
                            Relax and indulge in the Red Sea's beauty at destinations like
                            Sharm El Sheikh and Hurghada, offering crystal-clear waters,
                            vibrant coral reefs, and civerse marine life for snorkeling and
                            scuba diving, .
                        </p>
                        <span class="span-two"></span>
                        <p>
                            Experience Egypt's cultural tapestry through bustling markets ,
                            vibrant street life, and traditional arts and crafts, showcasing
                            influences from ancient civilizations , Islamic traditions, and
                            Coptic Christianity.
                        </p>
                    </div>
                    <div class="image">
                        <img src="imgs/Untitled-2.jpg" alt="" />
                    </div>
                </div>
                <div class="section-three">
                    <div class="image">
                        <img src="imgs/Untitled-3.jpg" alt="" />
                    </div>
                    <div class="content">
                        <p>
                            Cruise along the historic Nile River, the lifeblood of Egypt, to
                            witness picturesque landscapes and visit ancient sites, providing
                            a unique perspective on the country's timeless allure.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--start of good food-->
        <div class="good-food">
            <div class="speachial-heading">
                <h1>Good Food</h1>
            </div>
            <div class="container">
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="img1" id="slide-1">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>fol Medames</h1>
                                </div>
                                <p>
                                    Ful medames — sometimes spelled ful medammes or foul mudammas
                                    — is a hearty fava bean stew eaten in various ways, usually
                                    for breakfast, in many parts of the Middle East. This one is
                                    the Egyptian-style that author Anissa Helou calls “breakfast
                                    par excellence, enjoyed by poor and rich alike, on the street
                                    or at home
                                </p>
                            </div>
                        </div>
                        <div class="img2" id="slide-2">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>Warak Enab</h1>
                                </div>
                                <p>
                                    dish of Egyptian stuffed grape leaves is often served as an
                                    appetizer in restaurants throughout Egypt. But, in homes, it
                                    is one of the favorite main dishes served at the dinner table.
                                    For Easter lunch there will be fresh green Molokheia, rice,
                                    chicken, stuffed grape leaves, cucumber yogurt salad, and
                                    green salad all together as a feast.
                                </p>
                            </div>
                        </div>
                        <div class="img3" id="slide-3">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>Hawawshi</h1>
                                </div>
                                <p>
                                    Hawawshi is basically crispy pita bread stuffed with kofta
                                    like mixture. It is a super easy dinner idea that is also
                                    perfect for parties and game night..
                                </p>
                            </div>
                        </div>
                        <div class="img4" id="slide-4">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>Kushari</h1>
                                </div>
                                <p>
                                    Kushari is a traditional Egyptian dish packed with plant-based
                                    protein from chickpeas and lentils. Enjoy it for lunch, dinner
                                    or any time.
                                </p>
                            </div>
                        </div>
                        <div class="img5" id="slide-5">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>MACARONA BECHAMEL</h1>
                                </div>
                                <p>
                                    A recipe for Macarona Bechamel( Egyptian Baked Pasta)! Penne
                                    pasta is layered with a spiced beef mixture, topped with a
                                    creamy béchamel sauce, and baked until golden and bubbly. .
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slider-nav">
                        <a href="#slide-1"></a>
                        <a href="#slide-2"></a>
                        <a href="#slide-3"></a>
                        <a href="#slide-4"></a>
                        <a href="#slide-5"></a>
                    </div>
                </div>
            </div>
        </div>
        <!--start of arts & culture-->
        <div class="art-and-culture">
            <div class="speachial-heading">
                <h1>Art & Culture</h1>
            </div>
            <div class="container">
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="img1" id="slide-6">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>Tanoura Dance</h1>
                                </div>
                                <p>
                                    In a huge colorful skirt with lights attached to it, trousers
                                    below, and a white skullcap, the young man began to spin to
                                    the tunes of the Arabic song ‘Doury Beena’ (Spin Us Around)
                                    alongside the sound of rhythmic claps from the audience.
                                </p>
                            </div>
                        </div>
                        <div class="img2" id="slide-7">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>Music</h1>
                                </div>
                                <p>
                                    Ancient Egyptian music was characterized y a mix of percussion
                                    wind , and string instruments
                                </p>
                            </div>
                        </div>
                        <div class="img3" id="slide-8">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>Thoth - Djehuti</h1>
                                </div>
                                <p>
                                    Who was Thoth? The so special god of science, religion,
                                    mystery, literature, hieroglyphs – is the amazing Thoth. He
                                    was also god of moon power and magic, responsible as a scribe
                                    for Underworld.
                                </p>
                            </div>
                        </div>
                        <div class="img4" id="slide-9">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>Handmade carpets</h1>
                                </div>
                                <p>
                                    "Wool, Silk, Cotton, Noel made of wood".. That`s all he need
                                    to start working in the production of exquisite artistic
                                    miracle from types of carpets, and with knot which features
                                    with its technical and material valuables. Handmade carpet is
                                    one of the oldest crafts known to man; it started with the
                                    Pharaonic era, since more than 5000 years BC, found in Hmamih
                                    village Asyut
                                </p>
                            </div>
                        </div>
                        <div class="img5" id="slide-10">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>Egyptian Pottery</h1>
                                </div>
                                <p>
                                    The ancient Egyptians were gifted artisans and pottery was an
                                    art where they excelled. Egypt in the pre dynastic period
                                    produced pottery of very high quality. Egypt made pottery
                                    before building the Pyramids. This is evident from the
                                    presence of older hieroglyphic writing with characters which
                                    have images of
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slider-nav">
                        <a href="#slide-6"></a>
                        <a href="#slide-7"></a>
                        <a href="#slide-8"></a>
                        <a href="#slide-9"></a>
                        <a href="#slide-10"></a>
                    </div>
                </div>
            </div>
        </div>
        <!--end of art and culture-->
        <!--start of traditions-->
        <div class="traditions">
            <div class="speachial-heading">
                <h1>Traditions</h1>
            </div>
            <div class="container">
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="img1" id="slide-11">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>Nubian traditions</h1>
                                </div>
                                <p>
                                    Just as unique is Nubian music, the fame of which has spread
                                    far beyond the Nile. Played on traditional instruments such as
                                    the oud (a pear-shaped guitar) and Douff (a shallow drum).
                                </p>
                            </div>
                        </div>
                        <div class="img2" id="slide-12">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>Tanoura Dance</h1>
                                </div>
                                <p>
                                    In a huge colorful skirt with lights attached to it, trousers
                                    below, and a white skullcap, the young man began to spin to
                                    the tunes of the Arabic song ‘Doury Beena’ (Spin Us Around)
                                    alongside the sound of rhythmic claps from the audience.
                                </p>
                            </div>
                        </div>
                        <div class="img3" id="slide-13">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>Religion in Egypt</h1>
                                </div>
                                <p>
                                    The religious atmosphere of the city is very diverse and is
                                    embedded in most of the aspects of social life in Egypt. Islam
                                    is the official religion of Egypt, with 90% of the entire
                                    population being Sunni Muslim and 10% being Coptic. Both
                                    Muslims and Christians share a common tongue (Language),
                                    history, race, identity, culture, and Ethnicity.
                                </p>
                            </div>
                        </div>
                        <div class="img4" id="slide-14">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>Warmth and Hospitality of Egypt</h1>
                                </div>
                                <p>
                                    Egypt is like a magical cooking pot mixing all the incredible
                                    ideas and customs of ancient domestic and foreign lands into
                                    one majestic meal which provides a sense of warmth to every
                                    tourist who steps inside one of its cities. The Egyptian
                                    people are known for their friendly behavior towards
                                    foreigners, always ready to provide any service to their
                                    hosts.
                                </p>
                            </div>
                        </div>
                        <div class="img5" id="slide-15">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>Celebrations in Egypt</h1>
                                </div>
                                <p>
                                    Egypt is known for having more celebrations than most
                                    countries. If any traveler is planning to spend a couple of
                                    days in Egypt, then this traveler has a very high chance of
                                    encountering some kind of celebration, which could be
                                    religious, folkloric, or contemporary.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slider-nav">
                        <a href="#slide-11"></a>
                        <a href="#slide-12"></a>
                        <a href="#slide-13"></a>
                        <a href="#slide-14"></a>
                        <a href="#slide-15"></a>
                    </div>
                </div>
            </div>
        </div>
        <!--end of traditions-->
        <!--start of hidden gems-->
        <div class="hidden-gems">
            <div class="speachial-heading">
                <h1>Hidden gems</h1>
            </div>
            <div class="container">
                <div class="slider-wrapper">
                    <div class="slider">
                        <div class="img1" id="slide-16">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>Marsa Alam</h1>
                                </div>
                                <p>
                                    a tranquil coastal twon along the red sea ,known for its
                                    pristine eacuse and as a getway to underwater wonders
                                </p>
                            </div>
                        </div>
                        <div class="img2" id="slide-17">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>Salt Mountain</h1>
                                </div>
                                <p>
                                    Are you looking for an unbelievable spot in Egypt? Then, head
                                    to Salt Mountain! Located in the northern Egypt town of Port
                                    Fouad, Salt Mountain is a hidden gem overlooked by tourists.
                                    Like its name, the spot features a series of pure white salt
                                    mountains. It resembles a snowy landscape, something that you
                                    cannot find in a country with a hot desert climate.
                                </p>
                            </div>
                        </div>
                        <div class="img3" id="slide-18">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>Colored Canyon, Nuweiba</h1>
                                </div>
                                <p>
                                    Located in Nuweiba, one of the prettiest villages in Egypt and
                                    a laid-back destination, the Colored Canyon is of the most
                                    beautiful natural wonders in the country. It is a network of
                                    rocks, some of which stand 40 meters high.
                                </p>
                            </div>
                        </div>
                        <div class="img4" id="slide-19">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>Siwa</h1>
                                </div>
                                <p>
                                    For those looking for a more relaxed and peaceful experience,
                                    the Siwa Oasis is a great destination. This remote oasis is
                                    located in the Western Desert and is known for its tranquil
                                    atmosphere and traditional Bedouin culture. Visitors can enjoy
                                    activities such as camel trekking, hot spring baths, and
                                    traditional meals.
                                </p>
                            </div>
                        </div>
                        <div class="img5" id="slide-20">
                            <div class="content">
                                <div class="speachial-heading">
                                    <h1>Ras Mohammed</h1>
                                </div>
                                <p>
                                    Ras Mohammed National Park is a national park located on the
                                    southern tip of the Sinai Peninsula in Egypt. It is one of the
                                    most popular tourist attractions in Egypt, and has been
                                    designated a UNESCO World Heritage Site.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slider-nav">
                        <a href="#slide-16"></a>
                        <a href="#slide-17"></a>
                        <a href="#slide-18"></a>
                        <a href="#slide-19"></a>
                        <a href="#slide-20"></a>
                    </div>
                </div>
            </div>
        </div>
        <!--end of hidden gems-->
        <!--============= Testimonial ================ -->
        <!-- <div class="speachial-heading" id="testimonial">
            <h1>Testimonial</h1>
        </div>
        <div class="testimonial">
            <div class="container">
                <div class="slider-contianer">
                    <div class="card1" id="slide-21">
                        <img src="imgs/quote_icon.png" alt="" />
                        <img src="imgs/person 3.png" alt="" />
                        <p>
                            "Planning my Egypt adventure was a breeze with your site. Easy
                            tips and cultural insights made it the go-to guide for a fantastic
                            trip."
                        </p>
                        <h1>Ethan Taylor</h1>
                        <h3>Australia</h3>
                    </div>
                    <div class="card1" id="slide-22">
                        <img src="imgs/quote_icon.png" alt="" />
                        <img src="imgs/person 2.png" alt="" />
                        <p>
                            "Thanks to your site, I felt like an Egypt expert! Easy-to-use and
                            insightful, it made my journey more enjoyable and culturally
                            rich."
                        </p>
                        <h1>Olivia Mitchell</h1>
                        <h3>USA</h3>
                    </div>
                    <div class="card1" id="slide-23">
                        <img src="imgs/quote_icon.png" alt="" />
                        <img src="imgs/person 1.png" alt="" />
                        <p>
                            "Your website is a must for Egypt travelers! Simple navigation,
                            great tips - it made my experience in Egypt unforgettable.""
                        </p>
                        <h1>Fares</h1>
                        <h3>Greece</h3>
                    </div>
                </div>
                <div class="scrol_button">
                    <a href="#slide-21"></a>
                    <a href="#slide-22"></a>
                    <a href="#slide-23"></a>
                </div>
            </div>
        </div> -->
        <!--============= Stay Informed ================ -->
        <div class="stay-informed-section">
            <div class="container">
                <div class="search-container">
                    <h1>STAY</h1>
                    <h1>INFORMED ON OUR</h1>
                    <p>LATEST NEWS!</p>
                    <input type="text" placeholder="Enter Your email" />
                    <button>send</button>
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
        </div>

    </div>

    <script>
        function revealContent(id) {
            const items = document.querySelectorAll('.reveal-item');
            items.forEach(item => item.style.display = 'none');
            document.getElementById(id).style.display = 'flex';
        }
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.addEventListener('click', function() {
                cards.forEach(c => c.style.backgroundColor = 'var(--second-main-color)');
                this.style.backgroundColor = 'var(--main-color)';
                this.style.boxShadow='-4px 6px 4px 3px #a9a9a933'
            });
        });
    </script>
            <script src="js/all.min.js"></script>
            <script src="js/main.js"></script>
            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
            <script type="text/javascript" src="js/jquery.hislide.js"></script>
            <script>
              $(".slide").hiSlide();
            </script>
            <script>
                            (function ($) {
  // Define slide function
  var slide = function (slide, options) {
    // Convert DOM element to a jQuery obj
    var $slideObj = $(slide);
    // Default
    var default_setting = {
      speed: 1000, // animation duration (ms)
      interval: 2000, // Interval between slide transitions (ms)
    };
    // Merge default options with user-defined options
    $.extend(true, default_setting, options);
    //CSS properties for each slide
    var states = [
      { $zIndex: 1, width: 120, height: 150, top: 69, left: 134, $opacity: 1 },
      { $zIndex: 2, width: 130, height: 170, top: 59, left: 0, $opacity: 1 },
      { $zIndex: 3, width: 170, height: 218, top: 35, left: 110, $opacity: 1 },
      { $zIndex: 4, width: 224, height: 288, top: 0, left: 263, $opacity: 1 },
      { $zIndex: 3, width: 170, height: 218, top: 35, left: 470, $opacity: 1 },
      { $zIndex: 2, width: 130, height: 170, top: 59, left: 620, $opacity: 1 },
      { $zIndex: 1, width: 120, height: 150, top: 69, left: 500, $opacity: 1 },
    ];

    // Select all <li> elements in slider container
    var $li_elements = $slideObj.find("li");
    // Initialize the timer
    var timer = null;

    // Add click event handler for NEXT btn
    $slideObj.find(".hi-next").on("click", function () {
      next();
    });
    // Add click event handler for PREV btn
    $slideObj.find(".hi-prev").on("click", function () {
      states.push(states.shift());
      move();
    });
    // Pause autoplay on mouseenter and resume on mouseleave
    $slideObj
      .on("mouseenter", function () {
        clearInterval(timer);
        timer = null;
      })
      .on("mouseleave", function () {
        autoPlay();
      });

    move();
    autoPlay();
    // Function to transition between slides
    function move() {
      $li_elements.each(function (index, element) {
        var state = states[index];
        $(element)
          .css("zIndex", state.$zIndex)
          .finish()
          .animate(state, default_setting.speed)
          .find("img")
          .css("opacity", state.$opacity);
      });
    }
    // Function to transition to the next slide
    function next() {
      states.unshift(states.pop());
      move();
    }
    function autoPlay() {
      timer = setInterval(next, default_setting.interval);
    }
  };
  // Define hiSlide jQuery plugin
  $.fn.hiSlide = function (options) {
    // Iterate over each element in the jQuery collection
    $(this).each(function (index, slideObj) {
      // Call slide fn on each element
      slide(slideObj, options);
    });
    // Return jQuery obj for method chaining
    return this;
  };
})(jQuery);
            </script>
                   <footer> @include('components.footer')</footer>
</body>
</html>
