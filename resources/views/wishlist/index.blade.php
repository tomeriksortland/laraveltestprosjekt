<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('index') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('shoppinglist.index') }}">Handleliste</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{ route('wishlist.index') }}">Ønskeliste</a>
      </li>
    </ul>
    


<br>
<br>
<br>


  <div class="container">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Hva er ønsket?</th>
          <th scope="col">Hvem ønsker seg?</th>
          <th scope="col">Når ble ønsket lagt til?</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($wishlists as $wishlist)
        <tr class="table-active">
          <th scope="row">{{ $wishlist->wish }}</th>
          <td>{{ $wishlist->name }}</td>
          <td>{{ $wishlist->created_at }}</td>
          <td>
            <a href="{{ route('wishlist.edit', $wishlist->id) }}" type="button" class="btn btn-info">Endre</a>
          <form class="d-inline" action="{{ route('wishlist.destroy', $wishlist->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Slett!</button>
          </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table> 
    <a href="{{ route('wishlist.create') }}" class="btn btn-success">
Legg til et produkt
    </a>
  </div>
  </div>
  
  
</body>
</html>