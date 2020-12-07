<link href="/css" rel="stylesheet">

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

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
  @foreach($id as $product)
  <tr>
            <td>{{ $product->getId() }}</td>
            <td>{{ $product->getTitle() }}</td>
            <td>{{ $product->getFirstName() }}</td>
            <td>{{ $product->getNumberOfPages() }}</td>
            <td>{{  $product->getPrice() }}</td>
            <td><a href="{{ url('products/'.$product->getId()) }}">Update</a></td>
            <td><form action="/products" method = "POST">
            
            @csrf
            @method('delete')
            <button class = "delete-product" value = "{{ $product->getId() }}">Delete</button>

</form></td>
            </tr>
            @endforeach

  </tbody>
</table>
</div>