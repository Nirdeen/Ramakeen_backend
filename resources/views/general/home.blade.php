@extends ('layouts.layout')
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">


@section('content')


<section id="home">



<a id="button"><i class="fas fa-arrow-up"></i></a>


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
  </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../assets/images/ramakeen1.jpg"class="d-block w-100" alt="...">

              </div>
              <div class="carousel-item">
              <img src="../assets/images/ramakeen2.jpg"class="d-block w-100" alt="...">

              </div>
              <div class="carousel-item">
              <img src="../assets/images/ramakeen3.jpg"class="d-block w-100" alt="...">

              </div>
              <div class="carousel-item">
              <img src="../assets/images/ramakeen4.jpg"class="d-block w-100" alt="...">

              </div>
              <div class="carousel-item">
              <img src="../assets/images/ramakeen5.jpg"class="d-block w-100" alt="...">


              </div>
            </div>
          </div>
      </section>


      <section id="number">
      <div class="container-fluid">
        <div class="row">

          <div class=" col-md-6 col-sm-12">
            <div class="fake-div">
            </div>
            <div id="counter">
                <div class="counter-value" data-count="12">6</div>
                <div class="counter-content" >محامي متمرس</div>

            </div>
            <div class="fake-div">
            </div>

          </div>
          <div class=" col-md-6 col-sm-12">
            <div class="fake-div">
            </div>
            <div id="counter">
                <div class="counter-value" data-count="22">10</div>
                <div class="counter-content">عاما من الخبرة</div>
            </div>
            <div class="fake-div">
            </div>

          </div>



      </div>
    </div>

    </section>
    <section id="about">
      <div class="container-fluid">
        <div class="text-content">


          <h2> من نحن </h2>
        </br>
        <br>
       <p class="text-center">نحن "رامكين" فريق قانوني، متكامل، متمرس، نشط يعتمد أساساً على صحة المعلومة، وعمق المعرفة<br>، والإحاطة التامة بالحلول القانونية والقضائية، والفقهية المتاحة..</p>
    </div>

    <div class="maktb"> <a href="#"><button type="button" class="btn btn-outline-secondary"> عن المكتب </button> </a>
    </div>

      </div>

    </section>


  <div class="fake">
  </div>

  <section id="form">
    <div class="container-fluid">

      <form class="needs-validation" novalidate>
        <div class="form-row">
          <div class="col-md-4 mb-3">

            <input type="text" class="form-control" id="validationCustom01" placeholder="الموضوع"  required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-4 mb-3">

            <input type="email" class="form-control" id="validationCustom02" placeholder="البريد الالكتروني" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4 mb-3">

            <input type="text" class="form-control" id="validationCustom01" placeholder="الاسم"  required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>



          <div class="text col-md-4  col-sm-12">

            <textarea class="form-control"  placeholder="الرسالة"id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>


        <div class="form-row ersal-div">

    <div class="ersal col-md-4  col-sm-5"> <a href="#"><button type="submit" class="btn btn-outline-secondary "> ارسال </button> </a>
    </div>
  </div>
       
      </form>

      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>

    </div>

  </section>
<!-- 
  <link rel="stylesheet" href="{{asset('assets/js/main.js')}}">
<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}"> -->

<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/jquery-3.5.1.js"></script>
<script src="/assets/js/main.js"></script>

@endsection
