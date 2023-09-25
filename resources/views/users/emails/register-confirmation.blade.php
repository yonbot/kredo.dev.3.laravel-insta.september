<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
  <!-- Font Aweosome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
  <div class="container w-50 bg-secondary mx-auto my-5 p-5">
    <div class="row">
      <div class="col">
        <i class="fa-brands fa-steam fa-8x"></i>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col">
        <div class="h2 fw-bold text-white">Hello.</div>
        <div class="h2 fw-bold text-primary">{{ $name }}</div>
        <div class="h3 fw-bold text-white">Your certification code is following.</div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="bg-dark text-center text-info fw-bold h1">
          2N46V
        </div>
      </div>
    </div>
    <p class="text-white h3">Please access <a href="{{ $app_url }}">here</a> and verify your code.</p>
  </div>
  {{-- <p>Hello {{ $name }}</p>
  <p>Thank you for registering.</p>
  <p>To start, please access the website <a href="{{ $app_url }}">here</a>.</p>
  <p>Thank you!</p> --}}

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>