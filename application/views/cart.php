<?php
    component('header');
 
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style2.css">
    <title>Document</title>
    <script
    src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
    data-search-pseudo-elements
  ></script> 
</head>
<body><div class="container">
<div class="left">
    <div class="cart-head">
        <img src="assets/images/cart.svg" alt="" />
        <h1>السلة</h1>
        <p class="items-number">(3منتجات)</p>
      </div>

<div class="one">
<div class="con1">
    <div class="subcon1">
        <img src="assets/images/beYou.jpg" alt="">
        <span>البداية والنهاية الجزء الاول كتاب الكتروني</span>
        <p> منتج قابل للخصم لحاملي بطاقة مكتبة جرير </p>
    </div>
    <div class="subcon2"><span class="re2" >3.99</span>
        <span class="re1" >ر.س</span></div>
   
</div>
<div class="con3"><div class="subcon31" ><p><strong>ملاحظة: </strong> هذا المنتج  رقمي وسيتم توصيله خلال البريد الالكتروني</p>
    <a href="#" style="background-color: transparent;text-decoration: none; color: cornflowerblue;">كيفية الحصول على المنتج ؟   </a></div>
<div class="subcon32"><button>1</button></div></div>
<hr>
<div class="con2">
    
    <img src="assets/images/cancel (3).svg" alt="">
    <p>احذف </p></div>

</div>

<div class="one">
    <div class="con1">
        <div class="subcon1">
            <img src="assets/images/beYou.jpg" alt="">
            <span>البداية والنهاية الجزء الاول كتاب الكتروني</span>
            <p> منتج قابل للخصم لحاملي بطاقة مكتبة جرير </p>
        </div>
        <div class="subcon2"><span class="re2" >3.99</span>
            <span class="re1" >ر.س</span></div>
       
    </div>
    <div class="con3"><div class="subcon31" ><p><strong>ملاحظة: </strong> هذا المنتج  رقمي وسيتم توصيله خلال البريد الالكتروني</p>
        <a href="#" style="background-color: transparent;text-decoration: none; color: cornflowerblue;">كيفية الحصول على المنتج ؟   </a></div>
    <div class="subcon32"><button>1</button></div></div>
    <hr>
    <div class="con2">
        
        <img src="assets/images/cancel (3).svg" alt="">
        <p>احذف </p></div>
    
    </div>

    <div class="one">
        <div class="con1">
            <div class="subcon1">
                <img src="assets/images/beYou.jpg" alt="">
                <span>البداية والنهاية الجزء الاول كتاب الكتروني</span>
                <p> منتج قابل للخصم لحاملي بطاقة مكتبة جرير </p>
            </div>
            <div class="subcon2"><span class="re2" >3.99</span>
                <span class="re1" >ر.س</span></div>
           
        </div>
        <div class="con3"><div class="subcon31" ><p><strong>ملاحظة: </strong> هذا المنتج  رقمي وسيتم توصيله خلال البريد الالكتروني</p>
            <a href="#" style="background-color: transparent;text-decoration: none; color: cornflowerblue;">كيفية الحصول على المنتج ؟   </a></div>
        <div class="subcon32"><button>1</button></div></div>
        <hr>
        <div class="con2">
            
            <img src="assets/images/cancel (3).svg" alt="">
            <p>احذف </p></div>
        
        </div>
    


</div>

<div class="right">
<div class="sect">
    <div class="sect-head">
      <div class="total">
        <p>المجموع</p>
        <div class="price">
          <p style="color: #4a5367">17.99</p>
          <p style="color: #4a5367">ر.س</p>
        </div>
      </div>
      <div class="total charge-cost">
        <p>تكاليف الشحن</p>
        <div class="price">
            <p style="color: #2ca556">مجاني</p>
            <p></p>
        </div>
      </div>
      <div class="total" id="total">
          <p style="color: #d61020; font-size: 1.3rem;">المجموع الكلي </p><p class="dot" >شامل الضريبة</p>
          <div class="price">
              <p style="color: #d61020">33.3</p>
              <p>ر.س</p>
          </div>
    </div>
  </div>
  <div class="sect-bottom">
      <p>بالضغط على "إنهاء التسوق فانت توافق على <a href="" style="text-decoration: none;color: cornflowerblue;">الشروط والاحكام وسياسة الخصوصية</a></p>
    <button class="finish-shopping"  onclick="openForm()">إنهاء التسوق</button>
     
  </div>
</div>
</div>
<!--<div class="right">
<div class="first">
<div class="subfirst1"><p style="font-weight: bold; font-size: .8rem;">المجموع</p>
<p style="font-weight: bold; font-size: .8rem;">تكاليف الشحن</p>
<div class="flxe">
<p style="color: #d61020; font-size: 1.3rem;font-weight: bold;">المجموع الكلي </p>
<span>شامل الضريبة   </span></div></div>
<div class="subfirst2">
    <div class="price">
        <p style="color: #4a5367;font-size: 1.3rem; font-weight: bold; ">17.99</p>
        <p style="color: #4a5367">ر.س</p>
      </div>
    <p style="color: #2ca556;font-size: 1.3rem; font-weight: bold;" >مجاني</p>
    <div class="price">
        <p style="color: 0;font-size: 1.8rem; font-weight: bold; ">33.3</p>
        <p>ر.س</p>
    </div>
</div>


</div>
<div class="second">
    <p style="font-size: .6rem;">بالضغط على "إنهاء التسوق فانت توافق على <a href="" style="text-decoration: none; color: cornflowerblue;">الشروط والاحكام وسياسة الخصوصية</a></p>
    <br>
    <button onclick="openForm()" class="btn">انهاء التسوق</button>
</div>
</div>-->

<!--stepper-->

<div class="half" id="cv"></div>
<div class="container11" id="myform">
  <button onclick="closeForm()" style="cursor: pointer;    position: relative;
  top: 0em;">
    <img src="assets/images/cancel.svg" alt="">
  </button>
    <form id="form1">
    <h3>لاتمام الشراء يرجى ادخال البيانات التالية</h3>
    <input type="text" placeholder="اسم المستخدم"> 
    <input type="text" placeholder=" البريد الالكتروني"> 
    <input type="text" placeholder=" العنوان"> 
    <div class="btn-box"><button id="next1" type="button">التالي</button></div>
    
    </form>
    <form id="form2">
        <h3>معلومات الدفع</h3>
        <div class="cc"> <label>طريقة الدفع</label>
          <select>
   <option>ماستركارد</option>
   <option>ويستريونيون</option>
          </select></div>
       
          <div class="cc"> <label>الدولة المقيم بها</label>
            <select>
     <option>اليمن</option>
     <option>مصر</option>
            </select></div>
        <input type="text" placeholder=" العنوان"> 
        <div class="btn-box">
           
            <button id="back1" type="button">السابق</button>
            <button id="next2" type="button">التالي</button>   
          
        </div>
        
        </form>
    
        <form id="form3">
            <h3> تم الشراء بنجاح انقر موافق للانتقال للصفحة الرئيسية</h3>
          
            <div class="btn-box">
               
                <button id="back2" type="button">السابق</button>
                <button type="button" ><a style="text-decoration: none;color: #fff;" href="index.html">موافق</a></button>  
            </div>
            <footer>
   

                <section class="upper-part">
                    <ul class="about">
                      <h3>عن جرير</h3>
                      <li><a href="">من نحن</a></li>
                      <li><a href="">الحوكمه</a></li>
                      <li><a href="">علاقات المستثمرين و التقارير</a></li>
                      <li><a href="">الاستدامه</a></li>
                      <li><a href="">الاخبار</a></li>
                      <h3><a href="">فرص العمل</a></h3>
                    </ul>
            
                    <ul class="quick-links">
                      <h3>روابط سريعه</h3>
                      <li><a href="">اصدارات جرير</a></li>
                      <li><a href="">قارئ جرير</a></li>
                      <li><a href="">شركاء برامج المكافئات </a></li>
                      <li><a href="">خدمات شركات الاتصال</a></li>
                    </ul>
            
                    <ul class="services">
                      <h3>خدمات جرير</h3>
                      <li><a href=""> خدمات تقسيط تقسيط المشتريات</a></li>
                      <li><a href="">خدمات ما بعد البيع</a></li>
                      <li><a href="">خدمات الحمايه الشاملة</a></li>
                      <li><a href="">حماية أجهزة آبل</a></li>
                      <li><a href="">بطاقة خصم جرير</a></li>
                      <li><a href="">بطاقة جرير للهدايا</a></li>
                    </ul>
            
                    <ul class="custumer-services">
                      <h3>خدمةالعملاء</h3>
                      <li><a href=""> مبيعات الشركات</a></li>
                      <li><a href="">الاسئلة المتكررة</a></li>
                      <li><a href="">دليل التسوق والمطبوعات</a></li>
                      <li><a href="">مواقع المعارض</a></li>
                      <li><a href="">سياسة الضمان</a></li>
                      <li><a href="">سياسة الاسترجاع والاستبدال</a></li>
                      <p class="call-us">
                        اتصل بنا <br />
                        92090232323
                      </p>
                    </ul>
                    <section class="posts">
                      <div>
                        <h3>انضم الى نشرتنا البريدية</h3>
                        <form action="">
                          <input type="search" placeholder="ادخل بريدك الالكتروني" />
                          <input type="submit" value="اشتراك" />
                        </form>
                      </div>
                      <div class="contact-us">
                        <h3>تواصل معنا</h3>
                        <div class="social-icons">
                          <img src="assets/images/facebook.svg" alt="" />
                          <img src="assets/images/twitter.svg" alt="" />
                          <img src="assets/images/youtube.svg" alt="" />
                          <img src="assets/images/facebook.svg" alt="" />
                          <img src="assets/images/linkedin.svg" alt="" />
                          <img src="assets/images/snapshat.svg" alt="" />
                          <img src="assets/images/tictok.svg" alt="" />
                        </div>
                      </div>
                    </section>
                  </section>
                  <section class="lower-part">
                    <div class="text">
                      <p><a href="" style="color: slategrey;">سياسة الخصوصية </a> <a href="">| شروط الخدمة</a></p>
                      <p style="color: slategrey;">
                        جميع الحقوق محفوظة لمكتبة جرير 2015 س.ت.1011120120. اونلاين
                        س.ت.1010987453
                      </p>
                    </div>
                    <div class="pay-methods">
                      <div class="img">
                        <img src="assets/images/payInGallery.svg" alt="" />
                      </div>
                      <div class="img">
                        <img
                          src="assets/images/qitaf.svg"
                          class="white-card"
                          alt=""
                        />
                      </div>
                      <div class="img">
                        <img
                          src="assets/images/mada.svg"
                          class="white-card"
                          style="padding: 8px 3px"
                          alt=""
                        />
                      </div>
                      <div class="img">
                        <img src="assets/images/visa.svg" alt="" />
                      </div>
                      <div class="img">
                        <img src="assets/images/masterCard.svg" alt="" />
                      </div>
                      <div class="img">
                        <img
                          src="assets/images/americanExpress.svg"
                          style="background-color: #27ade4; border-radius: 5px"
                          alt=""
                        />
                      </div>
                      
                    </div>
                  </section>
            
            <!--<div class="subfooter">
            <div class="subfooter1">
            
                <p>سياسة الخصوصية | شروط الخدمة</p>
                <br>
                <p>جميع الحقوق محفوظة لدى مكتبةر</p>
            </div>
            <div class="subfooter2">
            
                <img  class="img2" src="assets/images/mada.png"> 
                <img  class="img2" src="assets/images/visa.png"> 
                <img  class="img2" src="assets/images/mada.png"> 
                <img  class="img2" src="assets/images/visa.png"> 
            </div>
            <div class="overlay" id="overlay" onclick="openForm()"></div>
            </div>-->
            </footer>
            </form>
    <div class="step-row">
    
    <div id="progress"></div>
    
       <div class="step-col">  <small> معلومات المستخدم</small></div>
       <div class="step-col">  <small>معلومات الدفع </small></div>
       <div class="step-col">  <small>تاكيد العمليات</small></div>
    
    
    </div>
        
     </div>   
     
    </div>



    
        






<script>




function openForm() {
    document.getElementById("myform").style.display = "block";
    document.getElementById("cv").style.display = "block";
   
  }
  
  function closeForm() {
    document.getElementById("myform").style.display = "none";
    document.getElementById("cv").style.display = "none";
   
   
  }

  /*stepper*/

  var form1=document.getElementById("form1");
var form2=document.getElementById("form2");
var form3=document.getElementById("form3");

var next1=document.getElementById("next1");
var next2=document.getElementById("next2");
var back1=document.getElementById("back1");
var back2=document.getElementById("back2");
var progress=document.getElementById("progress");

next1.onclick=function(){

    form1.style.left="-450px";
    form2.style.left="40px";
    progress.style.width="240px";
    
}
back1.onclick=function(){

    form1.style.left="40px";
    form2.style.left="450px";
    progress.style.width="120px";
}

next2.onclick=function(){

form2.style.left="-450px";
form3.style.left="40px";
progress.style.width="360px";
}

back2.onclick=function(){

form2.style.left="40px";
form3.style.left="450px";
progress.style.width="240px";

}

</script></body>



   <!---catogrey-->

<?php component('footer'); ?>