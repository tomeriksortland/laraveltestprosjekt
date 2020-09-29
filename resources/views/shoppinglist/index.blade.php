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
              <a class="nav-link" href="">Home <span class="sr-only">Home</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Shoppinglist</a>
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
          <th scope="col">Produkt</th>
          <th scope="col">Hvor mange?</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($shoppinglist as $shoppinglist)
        <tr class="table-active">
          <th scope="row">{{ $shoppinglist->product }}</th>
          <td>{{ $shoppinglist->amount }}</td>
          <td><button type="button" class="btn btn-info">Endre</button> <button type="button" class="btn btn-danger">Slett</button></td>
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



    

