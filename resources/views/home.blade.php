@extends('layout.main')

@section('halaman')
    <!--About this Go Learn-->
<div class="promo w-100 bg-primary p-3 d-flex justify-content-around">
  <h1 class="d-inline-block">Want to upskill your whole team for free?</h1>
  <button type="button">Discover How</button>
</div>
<div class="container mt-5">
  <div class="d-flex flex-column">
      <div class="row mb-4 justify-content-center">
          <div class="col-2 d-flex justify-content-center banner active">
              <a href="#"> Learn & get certificates </a>
          </div>
          <div class="col-2 d-flex justify-content-center banner">
              <a href="#"> Build your career </a> 
          </div>
          <div class="col-2 d-flex justify-content-center banner">
              <a href="#"> Earn on Go Learn </a>
          </div>     
      </div>
      <h1 class="m-auto">What Do you Want To Learn Today??</h1>
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
</div>

<div class="container d-flex justify-content-center">
  <h1>Jelajahi lebih dari 400+ kursus</h1>
  <div class="row flex-wrap">
    <div class="col-2">
      <img src="assets/img/{{$category_img}}" alt="">
      <h3>{{ $category_name }}</h3>
    </div>
  </div>
</div>

@endsection