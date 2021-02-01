<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rahim Store</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
 <div class="container"style="margin-top:30px">

@if(Session::has('msg'))
  <div class="alert alert-info">
      {{ Session::get('msg') }}
  </div>
@endif
<a href="{{route('product.create')}}"class="btn btn-primary">Add Product</a>
<a href="{{route('product.show')}}"class="btn btn-danger">Back</a>
<form action="{{route('product.show')}}"method="GET">
  @csrf
<div class="row g-3 align-items-center" style="margin-left:80px">
  <div class="col-auto">
    <label for="from_date" class="col-form-label">From-Date</label>
  </div>
  <div class="col-auto"style="width:120px">
    <input type="date" id="from_date"name="from_date" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <label for="to_date" class="col-form-label">To-Date</label>
  </div>
  <div class="col-auto"style="width:120px">
    <input type="date" id="to_date" name="to_date"class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <label for="price_from" class="col-form-label">Price-from</label>
  </div>
  <div class="col-auto"style="width:200px">
    <input type="number" name="price_from"class="form-control"placeholder="Search Product">
  </div>
  <div class="col-auto">
    <label for="price_to"class="col-form-label">Price-to</label>
  </div>
  <div class="col-auto"style="width:200px">
    <input type="number" id="price_to" name="price_to"class="form-control"placeholder="Search Product">

  </div>
  <div class="col-auto"style="width:15px">
    <button type="submit" class="btn btn-primary">search</button>

  </div>

</form>

    <table class="table table-hover"style="margin-top:15px">
        <thead>
          <tr>
            <th scope="col">SL</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Exp Date</th>
            <th scope="col">Action</th>
            
            
            
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $key=>$product)
              
        
          <tr>
            <td>{{$key + 1}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->date}}</td>
            
            <td>
              <a href="{{route('product.edit',$product->id)}}"class="btn btn-primary">Edit</a>
              <a href="{{route('product.delete',$product->id)}}" class="btn btn-danger">Delete</a>
            </td>
          
          </tr>
          @endforeach
        </tbody>
      </table>

      <!-- Modal -->

      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
 </div>
</html>