<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1 style="text-align: center;">Update Product</h1>
    <div class="container">
    <form method="post" action="/product/{{$products->id}}">
    @csrf
    @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Slug" value="{{$products->name}}"> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" class="form-control" name="price" placeholder="Enter title" value="{{$products->price}}"> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" name="description" placeholder="Enter content" value="{{$products->description}}"> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Category_id</label>
    <input type="text" class="form-control" name="categories_id" placeholder="Enter content" value="{{$products->categories_id}}"> 
  </div>
  
    
  
  
  <button type="submit" class="btn btn-primary">Update</button>
  <a href="/category" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back</a>
</form>
    </div>
</body>
</html>