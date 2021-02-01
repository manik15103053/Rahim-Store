<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
<div class="container" style="margin-top:25px; ">
    <h2>Edit Product</h2>
    <form method="POST" action="{{route('product.update',$product->id)}}">
        @csrf
        <div class="form-group"style="width:50%">
          <label for="name">Product Name</label>
          <input type="text" class="form-control" id="name"name="name"value="{{$product->name}}">
        </div>
        <div class="form-group"style="width:50%">
          <label for="price">Product Price</label>
          <input type="number" class="form-control" name ="price"id="price" value="{{$product->price}}">
        </div>
        <div class="form-group"style="width:50%">
          <label for="date">Expire Date</label>
          <input type="date" class="form-control" name ="date"id="date"value="{{$product->date}}">
        </div>
        
       
        <button style="margin-top:15px"type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>