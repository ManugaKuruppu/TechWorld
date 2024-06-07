<x-admin-layout>
    <div class="container mt-5">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Products</h2>
        <a href="{{ url('create') }}" class="btn btn-success">Add Product</a>
      </div>

      <!-- Success message -->
      @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <table class="table table-striped table-bordered">
        <thead class="thead-dark">
          <tr>
            <th>Product Name</th>
            <th>Product Quantity</th>
            <th>Price</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $item)
            <tr>
              <td>{{ $item->name }}</td>
              <td>{{ $item->quantity }}</td>
              <td>Rs. {{ $item->price }}</td>
              <td>Rs. {{ $item->quantity * $item->price }}</td>
              <td class="d-flex">
                <a href="{{ url('edit', $item->id) }}" class="btn btn-primary btn-sm me-2">Edit</a>
                <form action="{{ url('destroy', $item->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </x-admin-layout>

  <!-- Add Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
