<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1 style="text-align: center;">New Product</h1>
    <div class="container">
    <form method="post" action="/add">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Name"> 
    <p style="color: red;">@error('name'){{$message}}@enderror</p>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" class="form-control" name="price" placeholder="Enter Price"> 
    <p style="color: red;">@error('price'){{$message}}@enderror</p>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" name="description" placeholder="Enter Description"> 
    <p style="color: red;">@error('description'){{$message}}@enderror</p>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Category</label>
    <select class="form-control" name="category_id">
        
        @foreach($categories as $categories)
          <option value="{{$categories->id}}">{{$categories->name}}</option>
        @endforeach
        
    </select>
    
  </div>
  
  <button type="submit" class="btn btn-primary">Save</button>
</form>
    </div>
</body>
</html>