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
          <a class="nav-link active" href="{{ route('shoppinglist.index') }}">Handleliste</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('wishlist.index') }}">Ønskeliste</a>
        </li>
      </ul>
        </div>

<br>
<br>

    <form method="POST" action="/shoppinglist">
        @csrf
        
          <div class="form-group">
            <label for="product">Produkt</label>
            <input type="text" class="form-control" id="product" name="product" placeholder="Produkt">
          </div>

          <div class="form-group">
            <label for="amount">Hvor mange?</label>
            <select class="form-control" name="amount" id="amount">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
          </div>
          <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="btn btn-success btn-lg">Legg til!</button>
            </div>
        </div>
      </form>
</body>
</html>