<!DOCTYPE html>
<html dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tajawal">

        <title>التحول الآمن لتقنية المعلومات</title>
        <link rel="stylesheet" href="/css/style.css">
        <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>
    <body class="antialiased">
        
    
    <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="/img/logo.png" width="100"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="#clients">عملاؤنا</a>
        </li>  
      <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#about">من نحن</a>
        </li>
        

        <li class="nav-item">
          <a class="nav-link" href="#services">خدماتنا</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">اتصل بنا</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

        
        <div class="hero">
        <div class="row ">
        @if(session()->has('success'))
    <div class="alert alert-success" style="margin=0px;">
        <center style="color: black">
        {{ session()->get('success') }}
        </center>
    </div>  
@endif
        <div class="col-lg-6">
        <div class="hero-text">


        <center>    
        <h1>التحول الآمن لتقنية المعلومات</h1>
            <p>بخبرات متراكمة في مجالات البرمجة والأمن السيبراني نقدم خدمات عالية الأمان وبالسرعة والدقة التي نضمن بها رضا عملائنا</p>
            
            
            <a href="#contact" class="order-button">تواصل معنا</a>
            </center>
        </div>
        </div>
        <div class="col-lg-6">

        <div class="hero-image">
            <img src="/img/hero.png" alt="Hero Image" class="img-fluid">
        </div>
        </div>
    <!-- </div> -->
    </div>

    <div class="container">
        <center>
    <!-- <div style="width: 100%; height: 100%; padding-bottom: 19.41px; padding-left: 289.82px; padding-right: 283.82px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 32.59px; display: inline-flex"> -->
    <div  class="clients" id="clients" text-align: center"><span style="color: #ACACAC; font-size: 15px; font-family: Tajawal; font-weight: 700; text-transform: uppercase; line-height: 16.80px; letter-spacing: 0.80px; word-wrap: break-word">شركاء النجاح</span><span style="color: #ACACAC; font-size: 15px; font-family: Tajawal; font-weight: 400; text-transform: uppercase; line-height: 16.80px; letter-spacing: 0.80px; word-wrap: break-word"> الذين عملوا مع </span><span style="color: #ACACAC; font-size: 15px; font-family: Tajawal; font-weight: 700; text-transform: uppercase; line-height: 16.80px; letter-spacing: 0.80px; word-wrap: break-word">التحول الأمن</span></div>
    <div style="align-self: stretch; padding-left: 50px; padding-right: 50px; justify-content: flex-start; align-items: flex-start; gap: 40px; display: inline-flex">
        <div class="row">
            <div class="col-lg-2 client">
        <div style="width: 141px; height: 37px; justify-content: center; align-items: center; display: flex" >
            <img style="width: 141px; height: 37px" src="https://framerusercontent.com/images/UDSI1dAXfFqzB5k3hmPvXAQHU3E.png?scale-down-to=512" class="img-fluid" class="img-fluid" />
        </div>
</div>
<div class="col-lg-2 client">
        <div style="width: 141px; height: 50px; padding-top: 7.41px; padding-bottom: 6.59px; justify-content: center; align-items: center; display: flex" class="col-lg-2">
            <img style="width: 141px; height: 50px" src="/img/hx.png" class="img-fluid" />
        </div>
        </div>
        <div class="col-lg-2 client">
        <div style="width: 114px; height: 38px; padding-left: 8.82px; padding-right: 9.18px; justify-content: center; align-items: center; display: flex" class="col-lg-2">
            <img style="width: 50px; height: 44px" src="/img/gamsa.png" alt="قيميفاير" class="img-fluid" />
        </div>
</div>
<div class="col-lg-2 client">
        <div style="width: 114px; height: 38px; padding-top: 3.41px; padding-bottom: 3.59px; padding-left: 7.82px; padding-right: 7.18px; justify-content: center; align-items: center; display: flex" class="col-lg-2">
            <img style="width: 150px; height: 44px" src="/img/atomic.png" class="img-fluid" />
        </div>
</div>
<div class="col-lg-2 client">      
<div style="width: 115px; height: 38px; padding-top: 8.41px; padding-bottom: 7.59px; padding-left: 5.20px; padding-right: 4.56px; justify-content: center; align-items: center; display: flex" class="col-lg-2">
            <img style="width: 100px; height: 100px" src="/img/zanjbiil.jpeg" class="img-fluid" />
        </div>
</div>
<div class="col-lg-2 client">
        <div style="width: 114px; height: 38px; padding-top: 5.41px; padding-bottom: 5.59px; justify-content: center; align-items: center; display: flex" class="col-lg-2">
            <img style="width: 157px; height: 150px" src="https://manga.com.sa/wp-content/uploads/2020/01/logo.svg" class="img-fluid"/>
        </div>
</div>
        </div>
    </div>
</center>
    </div>

<div class="container">
    <div class="about" id="about">
        <center>
        <h2>عن التحول الآمن</h2>
        <p>
        تم تأسيس التحول الآمن في مدينة الرياض على يد شباب سعوديين متخصصين في أمن المعلومات وتطوير البرمجيات عالية الأمان. 
        </p>
        <p>نفتخر بتقديم خدمات البرمجة والأمن السيبراني بجودة عالية وفي وقت قياسي لامتلاكنا فريق متمكن يستطيع تحقيق تطلعات العميل في أقصر وقت ممكن دون الإضرار بالجودة</p>
</center>
    </div>
</div>

<div class="container">
<div class="services" id="services">
        <div class="row">
            <div class="col-lg-4">
                <div class="our-services container">

                <center>
                <h3>خدماتنا</h3>
                </center>
                    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="web-dev container ">
                    <center>
                        <h4>تطوير المواقع الإلكترونية</h4>
                        <p>أياً كان اختيارك سواء كان تطوير موقع تعريفي بنشاط شركتك او متجر إلكتروني او منصة متخصصة, نستطيع انجاز المهمة في وقت قياسي وبأعلى معايير الأمان والجودة</p>
                    </center>
                    <div class="row">
                        <div class="col-lg-10"></div>
                        <div class="col-lg-2 ">
                            <img src="/img/arrow.png" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
            <div class="mob-dev container">
                    <center>
                        <h4>تطوير تطبيقات الجوال</h4>
                        <p>إذا كانت لديك فكرة تطبيق يعمل على الأجهزة الذكية وتبحث عن فريق تطوير وتصميم يساعدك على تحويل فكرتك إلى حقيقة، أنت في المكان الصحيح
                        </p>
                    </center>
                    <div class="row">
                        <div class="col-lg-10"></div>
                        <div class="col-lg-2">
                            <img src="/img/arrow.png" />
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
            <div class="pt container">
                    <center>
                        <h4>اختبار الاختراق</h4>
                        <p>
                            عند تطوير الخدمات سواءً كانت منصات مخصصة للويب أو للأجهزة الذكية يكون الأمان هو أحد أهم المزايا التي يحرص عليها صاحب المنصة ومستخدم المنصة،
                             نقوم في التحول الآمن بفحص المواقع وتطبيقات الجوال والبيئة الداخلية لشركتك لضمان تطبيق أعلى معايير الأمان واكتشاف الثفرات الأمنية في وقت مبكر قبل استغلالها من قبل المخترقين
                        </p>
                    </center>
                    <div class="row">
                        <div class="col-lg-10"></div>
                        <div class="col-lg-2">
                            <img src="/img/arrow.png" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
            <div class="grc container">
                    <center>
                        <h4>حوكمة الأمن السيبراني</h4>
                        <p>
                            تعتبر الحوكمة في الأمن السيبراني هي أحد أهم العوامل التي يمكن من خلالها التأكد من تطبيق المعايير الأمنية الصحيحة والمطلوبة من الجهة حسب تخصصها ومجال عملها ، نقوم في التحول الآمن بمساعدتك على الوصول إلى المستوى المطلوب والمعتمد من الجهات المشرعة من الالتزام بمعايير الأمن السيبراني ووصولك إلى مستوى الالتزام المطلوب    
                    </p>
                    </center>
                    <div class="row">
                        <div class="col-lg-10"></div>
                        <div class="col-lg-2">
                            <img src="/img/arrow.png" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
            <div class="scr container">
                    <center>
                        <h4>مراجعة الكود البرمجي</h4>
                        <p>
                        بخبراتنا المتراكمة في اختبار الاختراق  والبرمجة الآمنة، نحن في التحول الآمن شركائك المثاليين للتأكد من مستوى الأمان في البرمجيات الخاصة بك والوصول إلى الثغرات الأمنية و إبلاغكم بالحل المقترح لإقفال هذه الثغرات عن طريق قراءة الكود البرمجي والبحث عن اي ثثغرات محتملة فيه والتأكد من وجودها وإبلاغكم بالحل المقترح لإقفال هذه الثغرات        
                    </p>
                    </center>
                    <div class="row">
                        <div class="col-lg-10"></div>
                        <div class="col-lg-2">
                            <img src="/img/arrow.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    <div class="contact" id="contact">
    <center>
        <h4>إتصل بنا</h4>
        <form method="POST" action="/contact">
            @csrf 
            <input type="text" name="name" class="contact-input" placeholder="الإسم" />
            <br />
            <input type="text" name="phone" class="contact-input" placeholder="رقم الجوال" />
            <br />
            <input type="email" name="email" class="contact-input" placeholder="البريد الإلكتروني" />
            <br />
            <textarea name="message" class="contact-message" placeholder="الرسالة"  ></textarea>
            <br />
            <button type="submit" class="contact-button">طلب التواصل</button>
        </form>
        <p>كما يمكنك التواصل معنا عن طريق ال whatsapp او الاتصال</p>
        <p>
       
0509396361

<a href="https://wa.me/966509396361"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg></a>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
        </p>
</center>
    </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
