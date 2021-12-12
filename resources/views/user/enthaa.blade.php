
@extends ('layouts.layoutuser')
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">


@section('content')
<section id="about-one">
            <div class="container">
                <h4 class="n7n">انهاء مرحلة الوساطة  </h4>
            </div>
          </section>
          <section id="ab">
            <a class="btn talb" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">اصدار سند الصلح</a>
            <div class="col-md-6">
              <div class="collapse multi-collapse" id="multiCollapseExample1" >
                <div class="card card-body">
                  <p> <span class="price" style="margin-left: 50px; direction: rtl;"><b> سوف يتم ابلاغ طالب الصلح بالرد</b></span></p>

                </div>
              </div>
            </div><br>
            <button class="btn talb" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">اغلاق طلب الوساطة</button>
            <div class="col-md-6">
              <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">
                  <p>  <span class="price" style="margin-left: 50px; direction: rtl;"><b> سوف يتم تنفيذ طلبك</b></span></p>
                </div>
              </div>
            </div><br><br>
          </section>
          
      
         
          
        


<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/jquery-3.5.1.js"></script>
<script src="/assets/js/main.js"></script>
@endsection
