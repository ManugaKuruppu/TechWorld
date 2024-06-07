<x-shop-layout>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .blog-posts {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
        }
        .col-md-7 img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .col-md-5 {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .sidebar-item {
            margin-bottom: 20px;
        }
        .sidebar-heading h2 {
            font-size: 24px;
            margin-bottom: 15px;
        }
        .content p {
            font-size: 16px;
            line-height: 1.6;
        }
        .contact-us {
            margin-top: 30px;
        }
        form input[type="number"] {
            width: 80px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        form button {
            background-color: rebeccapurple;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        form button:hover {
            background-color: #7f3a93;
        }
        .alert {
            margin-top: 20px;
            padding: 10px;
            background-color: #dff0d8;
            border: 1px solid #d6e9c6;
            color: #3c763d;
            border-radius: 5px;
        }
    </style>
</head>
<body>


    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div>
                        <img src="{{ asset('images/' . $products->image) }}" alt="Product Image">

                    </div>

                </div>

                <div class="col-md-5">
                    <div class="sidebar-item recent-posts">
                        <div class="sidebar-heading">
                            <h2>Details</h2>
                        </div>
                        <h3>Rs.{{ $products->price }}</h3>
                        <div class="content">
                            <p>{{ $products->description }}</p>
                        </div>
                    </div>

                    {{-- Product add success message --}}
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="contact-us">
                        <div class="sidebar-item contact-form">
                            <div class="sidebar-heading">
                                <h2>Add to Cart</h2>
                            </div>

                            <div class="content">

                                <form action="{{ route('cart.add', $products->id) }}" method="POST">
                                    @csrf
                                    <input type="number" name="quantity" value="1" min="1" required>
                                    <button type="submit">Add to Cart</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-shop-layout>

