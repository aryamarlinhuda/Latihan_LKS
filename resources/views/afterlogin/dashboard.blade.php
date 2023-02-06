<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>@yield('judul_halaman')</title>
  </head>
  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <!-- NavBar -->
        <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item @yield('home')">
            <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @yield('about')">
            <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item @yield('blog')">
            <a class="nav-link" href="/blog">Blog</a>
            </li>
            <li class="nav-item @yield('contact')">
            <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
        <form class="form-inline">
            <a href="/home/logout"class="btn btn-outline-light my-2 my-sm-0">Log Out</a>
        </form>
        </div>
    </nav>

    @yield('halaman_home')
    @yield('halaman_login')
    @yield('halaman_listblog')
    @yield('halaman_createblog')
    @yield('halaman_editblog')

    <!-- Footer -->
    <div class="bg-primary">
        <div class="container">
            <footer class="py-3">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-white">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Blog</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Contact</a></li>
                </ul>
                <p class="text-center text-white">© 2022 Company, Inc</p>
            </footer>
        </div>
    </div>
  </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>