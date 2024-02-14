{{-- dashboard.blade.php --}}
<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Shop Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional: Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            padding-top: 20px;
            margin: 0; /* Ensure there's no default margin */
            background-color: #f8f9fa; /* Soft background color */
        }
        .dashboard-wrapper {
            padding: 0; /* Remove padding if not needed */
        }
        .jumbotron {
            margin: 0 20px; /* Apply margin only to the sides */
            background-color: #ffffff; /* Light background for the jumbotron */
            border-radius: 5px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Subtle shadow */
        }
        .card {
            margin: 20px; /* Margin around cards */
            box-shadow: 0 0 15px rgba(0,0,0,0.1); /* Subtle shadow */
        }
        .card-title {
            font-size: 1.25rem; /* Slightly larger font size */
        }
        .card-text {
            font-size: 0.9rem; /* Slightly smaller font size */
        }
        .fa-icon {
            margin-right: 10px; /* Space between icon and text */
        }
        @media (max-width: 768px) {
            .jumbotron, .card {
                margin: 10px; /* Smaller margin for smaller devices */
            }
        }
    </style>
</head>
<body>

<div class="container-fluid dashboard-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="jumbotron">
                <h1 class="display-4">TechWorld Analytics</h1>
                <p class="lead">Manage your products, orders, and reviews efficiently.</p>
                <hr class="my-4">
                <p>Use the dashboard to get a quick overview of your shop's performance.</p>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-boxes fa-icon"></i>Products</h5>
                    <p class="card-text">Add, update, or remove products from your inventory.</p>
                    <a href="/products" class="btn btn-primary">Manage Products</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-shipping-fast fa-icon"></i>Orders</h5>
                    <p class="card-text">View recent orders and update their statuses.</p>
                    <a href="/orders" class="btn btn-primary">View Orders</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-star fa-icon"></i>Reviews</h5>
                    <p class="card-text">Read customer reviews and respond to feedback.</p>
                    <a href="/reviews" class="btn btn-primary">Manage Reviews</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-chart-line fa-icon"></i>Analytics</h5>
                    <p class="card-text">Get insights into your sales, customer behavior, and more.</p>
                    <a href="/analytics" class="btn btn-primary">View Analytics</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
</x-app-layout>
