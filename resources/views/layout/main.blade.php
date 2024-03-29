<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Learn | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> 

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- navigasi -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container justify-content-end">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarScroll">
                    <div>
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                            <li>
                              <a href="/">
                                <img src="assets/img/favicon.png" style="margin-right: 1.5em">
                              </a>
                            </li>

                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-display"></i> Information Technology</a></li>
                                <li><a class="dropdown-item" href="#"><img src="assets/img/kategori/it.png"> Bussiness</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-calendar-range"></i> Management</a></li>
                              </ul>
                            </li>

                        </ul>
                    </div>

                    <div style="width: 400px">
                      <form action="">
                        <div class="input-group">
                          <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon5" class="form-control">
                          <div class="input-group-append">
                            <button id="button-addon5" type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                    
                  <div>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown" style="margin-right: 10px">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </li>
                          <li class="nav-item">
                            <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                        </li>
                      </ul>
                  </div>
                  
                </div>
              </div>
        </nav>
    
        @yield('halaman')


      <script src="assets/js/style.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>