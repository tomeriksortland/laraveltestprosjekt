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
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarColor01">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="{{ route('index') }}">Hjem</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('shoppinglist.index') }}">Handleliste</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('wishlist.index') }}">Ønskeliste</a>
                      </li>
                  </ul>
                </div>
              </nav>
            </div>
</body>
</html>