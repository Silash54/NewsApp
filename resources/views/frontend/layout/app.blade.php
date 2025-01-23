<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Aricles</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('front/style.css') }}">
</head>

<body>
    <header class="bg-primary fixed-top mb-5 shadow-sm">
        <section>
            <div class="container py-3">
                <div class="row align-items-center text-center text-md-start">
                    <!-- Company Logo -->
                    <div class="col-md-4 d-flex justify-content-center justify-content-md-start">
                        <img src="{{ asset($companies->logo) }}" class="img-fluid img-thumbnail" alt="Company Logo"
                            style="max-height: 80px;">
                    </div>
                    <!-- Date Section -->
                    <div class="col-md-4 text-center">
                        <p class="mb-0 text-muted fw-bold">९ माघ २०८१, बुधबार</p>
                    </div>
                    <!-- Ads Section -->
                    <div class="col-md-4 text-center text-md-end">
                        <h5 class="text-primary fw-bold">Ads Go Here</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- Navbar Component -->
        < x-navbar-component :categories="$categories" />
    </header>
    <main>
        <div class="container-fluid mt-5 col-12 col-md-start ">
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid primaryColor p-4">
            <!-- First Row: Company Details and News Section -->
            <div class="row text-center text-md-start">
                <!-- Company Details -->
                <div class="col-12 col-md-3 mb-4 mb-md-0">
                    <ul class="list-unstyled">
                        <li>
                            <img class="img-fluid img-thumbnail mb-2" src="{{ asset($companies->logo) }}"
                                alt="{{ $companies->logo }}" style="max-width: 150px;">
                            <h5 class="text-white"> {{ $companies->name }} </h5>
                            <div>
                                <a href="#" class="text-white fs-4 me-3"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#" class="text-white fs-4"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                            <p class="text-white mt-2">{{ date('d-m-y') }}</p>
                        </li>
                    </ul>
                </div>

                <!-- News Section -->
                <div class="col-12 col-md-3 mb-4 mb-md-0">
                    <h3 class="text-white">News</h3>
                    <ul class="list-unstyled text-white">
                        <li>खेलकुद़़</li>
                        <li>अन्तर्राष्ट्रिय</li>
                        <li>साहित्य</li>
                        <li>मार्केट</li>
                    </ul>
                </div>
            </div>

            <!-- Second Row: Footer Copyright -->
            <div class="row">
                <div class="col-12">
                    <p class="text-center text-white mt-4">
                        <i class="fa fa-copyright" aria-hidden="true"></i> 2020-2025 Developed By Silas Rai
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/fontawesome.min.js"
        integrity="sha512-j12pXc2gXZL/JZw5Mhi6LC7lkiXL0e2h+9ZWpqhniz0DkDrO01VNlBrG3LkPBn6DgG2b8CDjzJT+lxfocsS1Vw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
