<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Aricles</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ">
                        <img src="{{ asset($companies->logo) }}" class="img-fluid" alt="img">
                    </div>
                    <div class="col-md-8">
                        <h3>Aids Goes here</h3>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <x-navbar-component :categories="$categories"/>
@yield('content')
<footer>
   <ul>
    <li>
        <p class="text-red">Company Name: <h3> {{ $companies->name }} </h3> </p>
        <p><a href="https://www.youtube.com/">Youtube Links</a></p>
        <p>{{ date('d-m-y') }}</p>
        
    </li>
   </ul>
  </footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>