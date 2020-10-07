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