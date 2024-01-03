<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-8">
                <h1>Laravel</h1>
            </div>
            <div class="col-md-4">
                <div class="col">
                    <div class="row-md-8">
                        <a href="{{ route('products.create') }}" class="btn btn-success btn-block">Create New Product</a>
                    </div>
                    <div class="row-md-4">
                        <form method="get" action="{{ route('products.search') }}">
                            <div class="input-group">
                                <input class="form-control" name="search" placeholder="Search..." value="{{ isset($search) ? $search : ''}}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price (RM)</th>
                        <th scope="col">Details</th>
                        <th scope="col">Publish</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td scope="row">{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->detail}}</td>
                            <td>{{$product->publish}}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{ route('products.view', ['product' => $product]) }}" class="btn btn-info text-white mr-2">Show</a>
                                <a href="{{ route('products.edit', ['product' => $product]) }}" class="btn btn-primary mr-2">Edit</a>
                                <form method="post" action="{{ route('products.delete', ['product' => $product]) }}">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-danger"/>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</body>
</html>