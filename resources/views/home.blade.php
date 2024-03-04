@extends('layout.main')

@section('halaman')
    <!--About this Go Learn-->

<div class="promo w-100 bg-primary p-3 d-flex justify-content-around">
  <h1 class="d-inline-block">Want to upskill your whole team for free?</h1>
  <button type="button">Discover How</button>
</div>

<div class="container">
  <div class="d-flex flex-column mt-5"> 
    <div class="row mb-4 justify-content-center">
      <div class="col-2 d-flex justify-content-center banner active">
          <a href="#"> Learn & get certificates </a>
      </div>
      <div class="col-2 d-flex justify-content-center banner">
          <a href="#"><i class="bi bi-suitcase-lg"></i> Build your career </a> 
      </div>
      <div class="col-2 d-flex justify-content-center banner">
          <a href="#"><i class="bi bi-coin"></i> Earn on Go Learn </a>
      </div>     
  </div>
  </div>

  <h1 class="text-center">What Do you Want To Learn Today??</h1>
  <div class="row">
    <div class="col">
        <img src="assets/img/bussiness.png" style="width: 400px">
    </div>
    <div class="col">
        <img src="assets/img/office.png" style="width: 400px">
    </div>
    <div class="col">
        <img src="assets/img/invest.png" style="width: 400px">
    </div>
  </div>

</div>

<div class="bg-success">
  <h1 class="text-center text-light py-2">Jelajahi lebih dari 100+ course</h1>
  <div class="row justify-content-center" style="padding: 0 10em">
    @for($i=0;$i<10;$i++)
    <div class="kategori col-2">
      <div class="text-center mb-4 p-3" style="width:180px; height:150px; background-color:white; border-radius:1em">
        <img class="p-2" src="assets/img/kategori/IT.png" style="width: 60px; align-item:center" alt="...">
        <h6>IT</h6>
        <p>1000 course <b><span class="bi bi-arrow-right"></span></b></p>
      </div>
    </div>
    @endfor
  </div>
</div>

<div class="container listcourse mt-3 mb-5">
  <div>
    <ul>
      <li><a class="filter" href="#">Popular Course</a></li>
      <li><a class="filter" href="#">New Courses</a></li>
    </ul>

    <div class="container row flex-nowrap overflow-x-auto">
        @for($i=0;$i<10;$i++)
        <div class="card" style="width: 20rem; margin-right:2em">
          <img src="assets/img/work-1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Course Tittle</h5>
            <p class="card-text">Some quick example text to.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        @endfor
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-light">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


@endsection