@extends ('layouts.layout')
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">


@section('content')


<section id="about-one">
            <div class="container">
                <h4 class="n7n"> طلب الخدمه </h4>
            </div>
            </section>

    <section id="hgz-form">
        <div class="container">
            <h3> طلب الخدمه </h3>
        </div>

        <form action="{{route('hgz.store')}}" method="post">
        @csrf
       
              <select class="form-control form-control-lg" name="khdma" required>
  <option>استشاره قانونيه</option>
  <option>مرافعة</option>
  <option>صياغه عقود او مراجعتها او تسجيلها</option>
  <option>وساطه او تحكيم</option>
  <option>توثيق</option>
  <option>اخري</option>
</select>
<br>

            
            <div class="form-group">

              <input type="text" class="form-control" name="name" id="inputAddress2"  style=" height: 42px;" placeholder="الاسم" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">

                  <input type="number" name="phone" class="form-control" id="inputEmail4" placeholder="الهاتف" required>
                </div>
                <div class="form-group col-md-6">

                  <input type="email" name="email" class="form-control" id="inputPassword4" placeholder="البريد الالكتروني" required>
                </div>
              </div>
              <div class="form-group">

                <input type="text" name="address" class="form-control" id="inputAddress2" style=" height: 42px;" placeholder="العنوان" required>
              </div>

             

            <div class="maktb mr-auto"> <a href="#"><button type="submit" class="btn btn-outline-secondary mw3d"> طلب خدمه  </button> </a>
            </div>
          </form>

    </section>


<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/jquery-3.5.1.js"></script>
<script src="/assets/js/main.js"></script>
@endsection

