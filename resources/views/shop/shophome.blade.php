<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Layout</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .banner {
            background-image: url('img/banner-image-1-1920x300.jpg');
            background-size: cover;
            padding: 50px 0;
            text-align: center;
            color: #fff;
        }
        .banner h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .featured-places {
            padding: 50px 0;
        }
        .featured-item {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            overflow: hidden;
            height: 100%;
        }
        .featured-item .thumb img {
            width: 100%;
            height: 200px; /* Adjust the height as needed */
            display: block;
            object-fit: cover;
        }
        .featured-item .down-content {
            padding: 20px;
        }
        .featured-item h4 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .featured-item span {
            color: #f66;
            font-size: 18px;
            font-weight: bold;
        }
        .featured-item p {
            font-size: 16px;
            margin-bottom: 15px;
            height: 80px; /* Adjust the height as needed */
            overflow: hidden;
        }
        .text-button a {
            display: inline-block;
            background-color: #f66;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .text-button a:hover {
            background-color: #d44;
        }
        /* Reduce white space */
        .container {
            padding-left: 15px;
            padding-right: 15px;
        }
        .row {
            margin-left: -15px;
            margin-right: -15px;
        }
        .featured-item .thumb {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<x-shop_layout>
    <section class="banner banner-secondary" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <h2>Products</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="featured-places">
            <div class="container">
                <div class="row">

                    @foreach ($products as $product)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="thumb">
                                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                            </div>
                            <div class="down-content">
                                <h4>{{ $product->name }}</h4>
                                <span><strong><sup>Rs. {{ $product->price }}</strong></span>
                                <p>{{ $product->description }}</p>
                                <div class="text-button">
                                    <a href="{{ url('more/' . $product->id) }}">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
    </main>
</x-shop_layout>

</body>
</html>
