@extends('layouts.app')

<link href="/css" rel="stylesheet">

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<div class="container">
<h2 style="margin-top:20px;">CDs</h2> 
    <table cellpadding="10">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">FirstName</th>
      <th scope="col">PlayLength</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
  @foreach($cds as $product)
  <tr>
            <td>{{ $product->getId() }}</td>
            <td>{{ $product->getTitle() }}</td>
            <td>{{ $product->getFirstName() }}</td>
            <td>{{ $product->getPlayLength() }}</td>
            <td>{{  $product->getPrice() }}</td>
            <td><a href="{{ url('products/'.$product->getId()) }}">View</a></td>
            <td><form action="/products" method = "POST">
            
            @csrf

</form></td>
            </tr>
            @endforeach

  </tbody>
</table>
</div>
    
<div class="container">
<h2>Books</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">FirstName</th>
      <th scope="col">No. Of Pages</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
  @foreach($books as $product)
  <tr>
            <td>{{ $product->getId() }}</td>
            <td>{{ $product->getTitle() }}</td>
            <td>{{ $product->getFirstName() }}</td>
            <td>{{ $product->getNumberOfPages() }}</td>
            <td>{{  $product->getPrice() }}</td>
            <td><a href="{{ url('products/'.$product->getId()) }}">View</a></td>
            <td><form action="/products" method = "POST">
            
            @csrf
</form></td>
            </tr>
            @endforeach

  </tbody>
</table>
</div>
<div style="padding:30px"  id = "input-container">
<h2>Add New Product</h2>
    <form action="/products/store" method = "POST">
        @csrf
        <select name="type">
            <option value="cd">CD</option>
            <option value="book">Books</option>
        </select><br> <br>
        <input type="text" name = "title" placeholder="Title" required> <br> <br>
        <input type="text" name = "firstname" placeholder="First Name" required> <br> <br>
        <input type="text" name = "surname" placeholder="Surname" required> <br> <br>
        <input type="text" name = "price" placeholder="Price" required> <br> <br>
        <input type="text" name = "papl" placeholder="Pages/Play Length" required> <br><br>
        <button type = "submit" name = "save" class = "btn-success">SAVE</button>
    </form>
</div>