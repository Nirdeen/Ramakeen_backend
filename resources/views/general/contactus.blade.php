@extends ('layouts.layout')
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">


@section('content')

<section id="about-one">
            <div class="container">
                <h4 class="n7n"> اتصل بنا</h4>
            </div>

        </section>

        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('message.store')}}" method="post">
                        @csrf
                        
                            <div class="form-group">
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="الاسم"  required>
                            </div>
                            <div class="form-group">
                              <input type="number" class="form-control" id="exampleInputPassword1" placeholder="رقم الهاتف" name="phone"  required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="البريد الالكتروني" name="email"  required>
                              </div>
                              <div class="form-group">
                                <textarea class="form-control" rows="6" id="comment" placeholder="الملاحظات" name="notes"  required></textarea>
                              </div>
                              <a href="#" ><button type="submit" class="btn btn-secondary ersal"> ارسال  </button> </a>


                          </form>
                    </div>
                    <div class="col-md-6 info">

                            <h2 class="contact-title">للتواصل معنا</h2>
                            <div class="contact-info">

                                <h5 class="">العنوان  <span> <i class="fa fa-home contact-address"></i></span></h5>
                                <p> طريق الأمير تركي بن عبدالعزيز الأول <br> حطين, الرياض 13512</p>

                                <h5>الهاتف <span><i class="fa fa-mobile contact-address"></i></span></h5>
                                <p>0112002066 <br>
                                    00966555648636</p>

                                <h5 >البريد الالكتروني <span><i class="fa fa-envelope contact-address"></i></span></h5>
                                <p>info@ramakeen.com</p> <br><br>

                            </div>

                    </div>
                    </div>
                </div>
            </div>


        </section>

        <div class="img-auto">
          <img src="images/rama-mapc.jpg" style="text-align: center;">
        </div>

        <div class="map-auto">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3412.781602039598!2d29.906535214622544!3d31.199068370059518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c34560e4f623%3A0xd02eb7b78a157ef1!2sWe%20Work!5e0!3m2!1sen!2seg!4v1618923308857!5m2!1sen!2seg" width="100%" height="450" style="border:0;" allowfullscreen="" ></iframe>
        </div>


<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/jquery-3.5.1.js"></script>
<script src="/assets/js/main.js"></script>

@endsection
