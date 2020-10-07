<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css">
</head>
<body>
        <div class="container">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('shoppinglist.index') }}">Handleliste</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('wishlist.index') }}">Ønskeliste</a>
            </li>
          </ul>
            </div>
</body>
</html>