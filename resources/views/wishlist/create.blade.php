<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
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
                  <a class="nav-link" href="{{ route('index') }}">Hjem</a>
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
        </div>

<br>
<br>

    <form method="POST" action="/wishlist">
        @csrf
        
          <div class="form-group">
            <label for="wish">Hva er ønsket?</label>
            <input type="text" class="form-control" id="wish" name="wish" placeholder="Ønske">
          </div>

          <div class="form-group">
            <label for="name">Hvem ønsker seg?</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Navn">
          </div>

          
          <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="btn btn-success btn-lg">Legg til!</button>
            </div>
        </div>
      </form>
</body>
</html>