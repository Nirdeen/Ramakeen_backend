
@extends ('layouts.layoutuser')
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">


@section('content')

<section id="about-one">
            <div class="container">
                <h4 class="n7n">نوع الخدمة  </h4>
            </div>
          </section>

          <section id="no3">
            <a class="btn talb" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">    اشعار مبدئي</a>
            <div class="col-md-6">
              <div class="collapse multi-collapse" id="multiCollapseExample1" >
                <div class="card card-body">
                  <p> 99 ريال<span class="price" style="margin-left: 50px; direction: rtl;"><b> الاجمالي</b></span></p>

                </div>
              </div>
            </div><br>
            <button class="btn talb" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">تقديم مشورة قانونية</button>
            <div class="col-md-6">
              <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">
                  <p> 199 ريال <span class="price" style="margin-left: 50px; direction: rtl;"><b> الاجمالي</b></span></p>
                </div>
              </div>
            </div><br><br>
         

         
            <div class="col-75" id="df3">
              <div class="container">
                <form action="/action_page.php">
                
                  <div class="row">
                    <div class="col-50">
                      <h3 style="font-family: 'Cairo', sans-serif;">Billing Address</h3>
                      <label for="fname"><i class="fa fa-user"></i> الاسم كاملا</label>
                      <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                      <label for="email"><i class="fa fa-envelope"></i> الايميل</label>
                      <input type="text" id="email" name="email" placeholder="john@example.com">
                      <label for="adr"><i class="fa fa-address-card-o"></i> العنوان</label>
                      <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                      <label for="city"><i class="fa fa-institution"></i> المدينه</label>
                      <input type="text" id="city" name="city" placeholder="New York">
          
                      <div class="row">
                        <div class="col-50">
                          <label for="state">الولايه</label>
                          <input type="text" id="state" name="state" placeholder="NY">
                        </div>
                        <div class="col-50">
                          <label for="zip">الكود</label>
                          <input type="text" id="zip" name="zip" placeholder="10001">
                        </div>
                      </div>
                    </div>
          
                    <div class="col-50">
                      <h3 style="font-family: 'Cairo', sans-serif;">طريقه الدفع </h3>
                      <label for="fname">Accepted Cards</label>
                      <div class="icon-container">
                        <img src="https://img.icons8.com/fluent/48/000000/visa.png"/>
                        <img src="https://img.icons8.com/color/48/000000/mastercard.png"/>
                        <img src="https://img.icons8.com/emoji/48/000000/credit-card-emoji.png"/>
                      </div>
                      <label for="cname">Name on Card</label>
                      <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                      <label for="ccnum">Credit card number</label>
                      <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                      <label for="expmonth">Exp Month</label>
                      <input type="text" id="expmonth" name="expmonth" placeholder="September">
                      <div class="row">
                        <div class="col-50">
                          <label for="expyear">Exp Year</label>
                          <input type="text" id="expyear" name="expyear" placeholder="2018">
                        </div>
                        <div class="col-50">
                          <label for="cvv">CVV</label>
                          <input type="text" id="cvv" name="cvv" placeholder="352">
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                  </label>
                  <div > <a href="enthaa"><input style="background-color: rgb(206, 180, 117) ; border: white; color: white;" type="button" value="ادخال" class="btn btn-outline-secondary " ></a>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </section>
          









<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/jquery-3.5.1.js"></script>
<script src="/assets/js/main.js"></script>
@endsection
