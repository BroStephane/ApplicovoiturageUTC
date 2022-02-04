<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>UTCovoit</title>
</head>
<body>
    <form action="{{ route('annonces.rechercher') }}" class="d-flex" method="POST">
        @csrf
        <input class="form-control me-2" type="search" name="VilleDepart" placeholder="Search" aria-label="Search">
        <input class="form-control me-2" type="search" name="VilleArrivee" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>