@extends ('layouts.layoutuser')
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">


@section('content')

<section id="about-one">
            <div class="container">
                <h4 class="n7n">طلب وساطه  </h4>
            </div>
          </section>



    <section id="hgz-form">
      <div class="container">
          <h3 style="color: rgb(206, 180, 117)!important;"> المدعي </h3>
      </div>

      <form action="no3.html">

          <div class="form-group">

            <input type="text" class="form-control mt5ss" id="inputAddress" style=" height: 50px;" placeholder="اسم طالب الوساطه">
          </div>


              <div class="form-group ">

                <input type="number" class="form-control" id="inputEmail4" placeholder="الهاتف">
              </div>
              <div class="form-group ">

                <input type="email" class="form-control" id="inputPassword4" placeholder="البريد الالكتروني">
              </div>

            <div class="form-group">

              <input type="text" class="form-control" id="inputAddress2" style=" height: 42px;" placeholder="رقم الهويه "></div>

        </form> <br>


        <div class="container">
          <h3 style="color: rgb(206, 180, 117)!important;"> المدعي عليه </h3>
      </div>

      <form>

          <div class="form-group">

            <input type="text" class="form-control mt5ss" id="inputAddress" style=" height: 50px;" placeholder="اسم طالب الوساطه">
          </div>


              <div class="form-group ">

                <input type="number" class="form-control" id="inputEmail4" placeholder="الهاتف">
              </div>
              <div class="form-group ">

                <input type="email" class="form-control" id="inputPassword4" placeholder="البريد الالكتروني">
              </div>

            <div class="form-group">

              <input type="text" class="form-control" id="inputAddress2" style=" height: 42px;" placeholder="رقم الهويه "></div>


          <div class="maktb mr-auto"> <a href="no3"><input style="width:50%; text-align:center; " href="no3"  value="ادخال"type="button" class="btn btn-outline-secondary mw3d" ></a>
          </div>
        </form>


  </section>

  <script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/jquery-3.5.1.js"></script>
<script src="/assets/js/main.js"></script>

@endsection

