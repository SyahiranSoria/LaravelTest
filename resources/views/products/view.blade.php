<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-10">
                <h1>Show Product</h1>
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary btn-block"  onclick="goBack()">Back</button>
            </div>
        </div>
        
        <div>
            <h4 style="display: inline-block; margin-right: 10px; font-weight: bold;">Name:</h4>
            <span style="font-weight: normal; font-size: 22px;">{{$product->name}}</span>
        </div>
        <div>
            <h4 style="display: inline-block; margin-right: 10px; font-weight: bold;">Price:</h4>
            <span style="font-weight: normal; font-size: 22px;">RM {{$product->price}}</span>
        </div> 
        <div>
            <h4 style="display: inline-block; margin-right: 10px; font-weight: bold;">Details:</h4>
            <span style="font-weight: normal; font-size: 22px;">{{$product->detail}}</span>
        </div> 
        <div>
            <h4 style="display: inline-block; margin-right: 10px; font-weight: bold;">Publish:</h4>
            <span style="font-weight: normal; font-size: 22px;">{{$product->publish}}</span>
        </div>     
    </div>
</body>
<script>
    function goBack() {
        window.history.back();
    }
</script>
</html>