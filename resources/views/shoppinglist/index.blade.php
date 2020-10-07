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
        <a class="nav-link active" href="{{ route('shoppinglist.index') }}">Handleliste</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('wishlist.index') }}">Ønskeliste</a>
      </li>
    </ul>
    


<br>
<br>
<br>


  <div class="container">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Produkt</th>
          <th scope="col">Hvor mange?</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($shoppinglist as $shoppinglist)
        <tr class="table-active">
          <th scope="row">{{ $shoppinglist->product }}</th>
          <td>{{ $shoppinglist->amount }}</td>
          <td>
            <a href="{{ route('shoppinglist.edit', $shoppinglist) }}" type="button" class="btn btn-info">Endre</a>
          <form class="d-inline" action="{{ route('shoppinglist.destroy', $shoppinglist) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Slett!</button>
          </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table> 
    <a href="{{ route('shoppinglist.create') }}" class="btn btn-success">
Legg til et produkt
    </a>
  </div>
  </div>
  
  
</body>
</html>



    

