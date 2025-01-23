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
    <header class="bg-light fixed-top shadow-sm">
        <section>
            <div class="container py-3">
                <div class="row align-items-center text-center text-md-start">
                    <!-- Company Logo -->
                    <div class="col-md-4">
                        <img src="{{ asset($companies->logo) }}" class="img-fluid" alt="Company Logo" style="max-height: 80px;">
                    </div>
                    <!-- Date Section -->
                    <div class="col-md-4">
                        <p class="mb-0 text-muted fw-bold">९ माघ २०८१, बुधबार</p>
                    </div>
                    <!-- Ads Section -->
                    <div class="col-md-4">
                        <h5 class="text-primary fw-bold">Ads Go Here</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- Navbar Component -->
        <x-navbar-component :categories="$categories" />
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    @yield('content')
                </div>
                <div class="col-md-3">
                    hello
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container bg-success">
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li>
                            <p class="text-red">Company Name:
                            <h3> {{ $companies->name }} </h3>
                            </p>
                            <p><a href="https://www.youtube.com/">Youtube Links</a></p>
                            <p>{{ date('d-m-y') }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
