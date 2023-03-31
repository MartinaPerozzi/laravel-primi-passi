<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TITLE -->
    {{-- Richiamato dal file .env --}}
    <title>{{env('APP_NAME')}} - About Us</title>
    <!-- LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>

<body>
    {{-- Direttiva di Blade per includere partials--}}
    @include('partials._navbar')
    <div>
        <h1>ABOUT</h1>
    </div>


    <main>

    </main>


</body>

</html>