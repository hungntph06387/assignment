<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container">
       <!-- @yield('selection') -->
       <h1 style="text-align: center;">List Product</h1>
       <a href="/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">New Product</a>
       <div class="list-category">
        @foreach($categories as $category)
        <li class="category-item">
           <a href="/category/{{$category->id}}" class="cate-link">{{$category->name}}</a>
        </li>     
        @endforeach
        <li class="category-item">
           <a href="/" class="cate-link">All Products</a>
        </li>
        </div>

        <div class="product-category-list">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  
  <tbody>
  @foreach($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->categories_id}}</td>
      <td>
          <img src="{{$product->image}}" alt="">
      </td>
      <td>
      <a href="/product/{{$product->id}}/edit" class="btn btn-danger" role="button" aria-pressed="true">Edit</a>
      <a href="/delete/{{$product->id}}" class="btn btn-warning" role="button" aria-pressed="true">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
 
</table>
        </div>

  </div>
</body>
</html>