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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('index') }}">Hjem</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('shoppinglist.index') }}">Handleliste</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('wishlist.index') }}">Ønskeliste</a>
            </li>
          </ul>
        </div>
      </nav>
    


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
        @foreach ($wishlist as $wishlist)
        <tr class="table-active">
          <th scope="row">{{ $wishlist->wish }}</th>
          <td>{{ $wishlist->name }}</td>
          <td>{{ $wishlist->added }}</td>
          <td>
            <a href="{{ route('wishlist.edit', $wishlist) }}" type="button" class="btn btn-info">Endre</a>
          <form class="d-inline" action="{{ route('wishlist.destroy', $wishlist) }}" method="POST">
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