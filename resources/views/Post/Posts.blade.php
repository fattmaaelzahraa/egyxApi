<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EgyXplore</title>
    <!-- CSS styling file -->
    <link rel="stylesheet" href="css/signin.css" />
    <!-- Icons file -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Logo Icon -->
    <link rel="shortcut icon" href="imgs/camel.png" />
    <!-- Font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <style>
        /*==================== GOOGLE FONTS ====================*/
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

        :root {
            /* Colors */
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
            /* Font weight */
            --font-medium: 500;
            --font-semi-bold: 600;
            --font-bold: 700;
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

        .input {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            align-items: center;
            justify-content: center;
        }

        .input .search {
            width: 60%;
            padding-left: 40px;
            height: 45px;
            border-radius: 10px;
            border: solid 3px var(--border-color);
            font-size: 20px;
        }

        .input .submit,
        .input .add {
            max-width: 10%;
            height: 45px;
            border-radius: 10px;
            background-color: var(--explore-more-color);
            border: none;
            cursor: pointer;
            color: white;
            font-size: 20px;
            min-width: 100px;
        }

        .input .add {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 15px;
            text-decoration: none;
        }

        h2 {
            font-size: 30px;
            font-weight: 600;
            padding: 30px 0 60px 0;
        }

        .scam {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            align-items: center;
            justify-content: space-around;
            padding: 120px 0;
        }

        .scam img {
            background-image: url('storage/5c.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 400px;
            width: 300px;
            background-position: center;
            border-radius: 20px;
        }

        .scam .scam-detials {
            display: flex;
            flex-direction: column;
            max-width: 500px;
        }

        .scam .scam-detials h1 {
            font-size: 50px;
            font-weight: 300;
            padding-bottom: 60px;
        }

        .scam .scam-detials p {
            line-height: 2;
        }

        @media screen and (max-width: 900px) {
            .input .search {
                width: 100%;
                font-size: 15px;
            }
        }

        @media screen and (max-width: 768px) {
            .input .search {
                width: 100%;
                font-size: 15px;
            }
        }

        @media screen and (max-width: 480px) {
            .input .search {
                width: 100%;
                font-size: 15px;
            }
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .product-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 20px;
            width: 300px;
            box-shadow: 1px 1px 3px 1px #88888878;

        }

        .product-image {
            height: 80%;
            width: 100%;
            object-fit: cover;
            overflow: hidden;
            border-radius: 20px 20px 0 0;
        }

        .product-details p {
            margin-top: 5px
        }

        .product-details h3 {
            left: 0;
            font-size: 22px;
            margin-top: 20px
        }

        .review-link {
            margin-top: 20px;
            margin-bottom: 20px;
            display: inline-block;
            padding: 5px 10px;
            background-color: var(--main-color);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            padding: 5px 30px 5px 30px
        }

        .review-link:hover {
            background-color: var(--border-color);
        }

        /* footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 1em;
            margin-top: auto;
        } */
        /* .pagination {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 20px 0;
}

.pagination li {
    margin-right: 10px;
}

.pagination li a {
    display: inline-block;
    padding: 5px 10px;
    background-color: #f4f4f4;
    color: #333;
    border: 1px solid #ccc;
    text-decoration: none;
}

.pagination li.active a {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;} */



    </style>

    @include('components.header-profile')

    <div class="container">
        <section>
            <div class="scam">
                <div class="scam-detials">
                    <h1>Scams</h1>
                    <p>you’ll learn about the average prices of products in Egypt based on what other tourists say so
                        that you’re not exposed to scam and deception.</p>
                </div>
                <img src="{{ asset('storage/c.jpg') }}" alt="">
            </div>

        </section>
        <form action="{{ route('posts.search') }}" , method="GET" class="input">

            <input class="search" type="text" name="query" placeholder="Search by Product name ">
            <button class="submit" type="submit">search</button>
            <a class="add"href="/posts/add">add</a>

        </form>


        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if (isset($query))
            <h2>Search Results for "{{ $query }}"</h2>
        @endif


        @if ($products->isEmpty())
            <h3>No results found.</h3>
        @else
            {{-- <h2>Products</h2>
            <div class="container">
                <div class="product-container">
                    @foreach ($products as $product)
                        <div class="product-item">
                            <img src="{{asset('storage/'.$product->path)}}"
                                alt="{{ $product->Product_name }}" class="product-image">
                            <div class="product-details">
                                <h3>{{ $product->Product_name }}</h3>
                                <p>Average price: {{ $product->Avg_price }}</p>
                                <a href="{{ route('post.review', $product->id) }}" class="review-link">Check/Add
                                    Review</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
             <div class="pagination">
        {{ $products->links() }}
    </div> --}}
    <div class="pag">
        @livewire('pagination')
    </div>
        @endif
    </div>

    <footer>
        @include('components.footer')
    </footer>
</body>

</html>
