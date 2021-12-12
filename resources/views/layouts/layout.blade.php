

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ramaken </title>


    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
   <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">



</head>
<body>



<section id="home">
        <nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
           <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                  <a class="nav-link" href="contactus">اتصل بنا </a>
                </li>
                <li class="nav-item">
                <a href="http://127.0.0.1:8000/login" class="nav-link">تسجيل الدخول</a>
              </li>
              
                <li class="nav-item">
                    <a class="nav-link" href="hgz">طلب خدمة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services">خدماتنا</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="aboutus">من نحن</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home" style="color: rgb(206, 180, 117)!important;">الرئيسية</a>
                </li>


            </div>
            <a class="navbar-brand" href="home">
            <img src="../assets/images/logo3.png">

          </a>
            </div>

          </nav>

          <!-- button top -->

          <a id="button"><i class="fas fa-arrow-up"></i></a>
</section>
<div class="content">
@yield ('content')
</div>


<section id="map" style="margin-bottom:0px;">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-6 col-sm-12">
          <a href="#">
            <img src="../assets/images/logo3.png">


        </a>
        <div class="social-media">
          <!-- Facebook -->
          <a class="btn btn-outline-light btn-floating m-1 bt" href="#!" role="button"
          > <i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="  btn btn-outline-light btn-floating m-1 bt" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1 bt" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1 bt" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3412.781602039598!2d29.906535214622544!3d31.199068370059518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c34560e4f623%3A0xd02eb7b78a157ef1!2sWe%20Work!5e0!3m2!1sen!2seg!4v1618923308857!5m2!1sen!2seg" width="280" height="220" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>



      </div>
    </div>
  </section>

   <link rel="stylesheet" href="{{asset('assets/js/bootstrap.bundle.js')}}">

    <!-- <link rel="stylesheet" href="{{asset('assets/js/main.js')}}">-->

    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/jquery-3.5.1.js"></script>

	<script src="/assets/js/main.js"></script>



</body>
</html>

