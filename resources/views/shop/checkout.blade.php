<x-shop-layout>

    <section class="section section-bg" id="call-to-action"
        style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Easy <em>Checkout</em></h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <section class="section">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="{{ route('save-order') }}" method="post">
                            @csrf <!-- Add CSRF token for security -->
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="title">Title:</label>
                                        <select name="title" id="title" class="form-control" required>
                                            <option value="">-- Choose --</option>
                                            <option value="dr">Dr.</option>
                                            <option value="miss">Miss</option>
                                            <option value="mr">Mr.</option>
                                            <option value="mrs">Mrs.</option>
                                            <option value="ms">Ms.</option>
                                            <option value="other">Other</option>
                                            <option value="prof">Prof.</option>
                                            <option value="rev">Rev.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" name="name" id="name" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" id="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="phone">Phone:</label>
                                        <input type="text" name="phone" id="phone" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="address1">Address 1:</label>
                                        <input type="text" name="address1" id="address1" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="address2">Address 2:</label>
                                        <input type="text" name="address2" id="address2" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="city">City:</label>
                                        <input type="text" name="city" id="city" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="state">State:</label>
                                        <input type="text" name="state" id="state" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="zip">Zip:</label>
                                        <input type="text" name="zip" id="zip" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="country">Country:</label>
                                        <input type="text" name="country" id="country" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="payment_method">Payment method:</label>
                                        <select name="payment_method" id="payment_method" class="form-control" required>
                                            <option value="">-- Choose --</option>
                                            <option value="bank">Bank account</option>
                                            <option value="cash">Cash</option>
                                            <option value="paypal">PayPal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="captcha">Captcha:</label>
                                        <input type="text" name="captcha" id="captcha" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-button">
                                        <div class="float-left">
                                            <!-- Empty div for future content if needed -->
                                        </div>
                                        <div class="float-right">
                                            <button type="submit" class="btn btn-primary">Pay</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
                </div>

                <div class="col-md-4">
                    <ul class="list-group list-group-no-border">
                        @php
                            $total = 0;
                        @endphp

                        @foreach ($cartItem as $item)
                            @php
                                $total += $item->product->price * $item->quantity;
                            @endphp
                        @endforeach

                        <li class="list-group-item" style="margin:0 0 -1px">
                            <div class="row">
                                <div class="col-6">
                                    <h4><strong>Total Amount:</strong></h4>
                                </div>

                                <div class="col-6">
                                    <h4><strong>{{ $total }}</strong></h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <br>
                </div>
            </div>
        </div>
    </section>

    <style>
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 10px;
        }
        .contact-form {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .list-group-item h4 {
            margin: 0;
        }
    </style>

</x-shop-layout>
