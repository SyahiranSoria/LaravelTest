<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form (Create)</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-11">
                <h1>Add New Product</h1>
            </div>
            <div class="col-md-1">
                <button class="btn btn-primary" onclick="goBack()">Back</button>
            </div>
        </div>
        <form method="post" action="{{route('products.store')}}">
            @csrf
            @method('post')
            <div class="form-group">
                <label style="font-weight: bold;">Name:</label><br>
                <input type="text" class="form-control" name=name placeholder="Name"/>
            </div>
            <div class="form-group">
                <label style="font-weight: bold;">Price (RM):</label><br>
                <input type="text" class="form-control" name=price placeholder="99.0"/>
            </div>
            <div class="form-group">
                <label style="font-weight: bold;">Detail:</label><br>
                <textarea class="form-control" name="detail" placeholder="Detail" rows="5"></textarea>
            </div>            
            <div class="form-group">
                <label style="font-weight: bold;">Publish:</label><br>
                <input type="radio" name="publish" value="Yes" checked="checked">
                <label>Yes</label><br>
                <input type="radio" name="publish" value="No">
                <label>No</label><br>
            </div>
            <div class="text-center">
                <input type="submit" value="Submit" class="btn btn-primary mx-auto" />
            </div>        
        </form>
    </div>
</body>
<script>
    function goBack() {
        window.history.back();
    }
</script>
</html>