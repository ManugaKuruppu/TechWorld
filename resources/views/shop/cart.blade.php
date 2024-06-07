<x-shop-layout>
    <div class="container">
        <br>
        <br>
        <h1>Your Cart</h1>
        <br>
        <br>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach($Carts as $item)
                        <tr>
                            <td>{{ $item->product->name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>Rs. {{ $item->product->price }}</td>
                            <td>Rs. {{ $item->product->price * $item->quantity }}</td>
                        </tr>
                        @php
                            $total += $item->product->price * $item->quantity;
                        @endphp
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="text-right">Total:</td>
                        <td>Rs. {{ $total }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="checkout mt-3">
            <form action="{{ route('checkout') }}" method="GET">
                @csrf
                <input type="hidden" name="total" value="{{ $total }}">
                <button type="submit" class="btn btn-primary">Proceed to Checkout</button>
            </form>
        </div>
    </div>
</x-shop-layout>
