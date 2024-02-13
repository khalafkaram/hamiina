<?php
require_once('./config/database.php');
?>
<!DOCTYPE html>
<html lang="en" dir="rtl" >
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HAMINA/market</title>

    <!--=============== FAVICON ===============-->
    <link
      rel="shortcut icon"
      href="./assets/images/favicon1.ico"
      type="image/x-icon"
    />

    <!--=============== google font ===============-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap"
      rel="stylesheet"
    />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/responsive.css" />
  </head>
  <body class="light-theme">
    <!--==========back to up ==============-->
    <button onclick="topfun()" class="top" id="topo">
      top 
    </button>
    <!--================HEAD===================-->
    <header dir="rtl"><!--top page-->
        <div class="container">
           <nav class="navbar">
              <img src="./assets/images/logo.jpeg" alt="" style="border-radius: 5%;">
  
              <div class="btn-group"><!--top page btns-->
                  <button class="theme-btn theme-btn-mobile light">
                      <ion-icon name="moon" class="moon"></ion-icon>
                      <ion-icon name="sunny" class="sun"></ion-icon>
                  </button>
                  <button class="nav-menu-btn">
                    <ion-icon name="menu-outline"></ion-icon>  
                   </button>
              </div>
               <div class="flex-wrapper"><!--menu-->
                <ul class="desktop-nav" style="direction: rtl;">
                  <li class="nav-item">
                    <a href="./indexhome.php" class="nav-link" style="font-family: 'kamran';">خانه</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link" style="font-family: 'kamran';">درباره ما</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link" style="font-family: 'kamran';">تماس با ما</a>
                  </li>
                </ul>
                <button class="theme-btn theme-btn-mobile light">
                  <ion-icon name="moon" class="moon"></ion-icon>
                  <ion-icon name="sunny" class="sun"></ion-icon>
                 </button>
              </div>
              <div class="mobile-nav"><!--menu mobile-->
                 <button class="nav-close-btn">
                  <ion-icon name="close-outline"></ion-icon>
                </button>
      
                <div class="wrapper">
                  <p class="h3 nav-title">منو اصلی</p>
                  <ul>
                    <li class="nav-item">
                      <a href="./indexhome.php" class="nav-link">خانه</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">درباره ما</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">تماس با ما</a>
                    </li>
                  </ul>
                </div>
                <div>
                  <p class="h3 nav-title">موضوعات</p>
                  <ul>
                    <li class="nav-item">
                      <a href="./indexeducation.php" class="nav-link">آموزش</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">محصولات</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
        </div>
    </header>
    <main>
      <div class="main">
        <div class="container">
          <div class="blog">
            <h2 class="h2">محصولات</h2>
            <div class="blog-card-group">
                <div class="blog-card">
                    <div class="blog-card-banner">
                        <img src="./assets/images/market1.jpg" alt="">
                    </div>
                    <div class="blog-content-wrapper">
                      <button class="blog-topic text-tiny">محصولات</button>
                      <h3 class="h3">
                        محصول شماره 1
                      </h3>
                      <p class="blog-text">
                        سلام.برای خرید به پل های ارتباطی ما رجوع کنید؛)
                      </p>
                      <div class="wrapper-flex">
                        <div class="profile-wrapper">
                          <img width="50" src="./assets/images/MY.jpg" alt=""  />
                        </div>
                      </div>
                    </div>
                 </div>
                 <div class="blog-card">
                    <div class="blog-card-banner">
                        <img src="./assets/images/market2.jpg" alt="">
                    </div>
                    <div class="blog-content-wrapper">
                      <button class="blog-topic text-tiny">محصولات</button>
                      <h3 class="h3">
                        محصول شماره 2
                      </h3>
                      <p class="blog-text">
                        سلام.برای خرید به پل های ارتباطی ما رجوع کنید؛)
                      </p>
                      <div class="wrapper-flex">
                        <div class="profile-wrapper">
                          <img width="50" src="./assets/images/MY.jpg" alt=""  />
                        </div>
                      </div>
                    </div>
                 </div>
                 <div class="blog-card">
                    <div class="blog-card-banner">
                        <img src="./assets/images/market3.jpg" alt="">
                    </div>
                    <div class="blog-content-wrapper">
                      <button class="blog-topic text-tiny">محصولات</button>
                      <h3 class="h3">
                        محصول شماره 3
                      </h3>
                      <p class="blog-text">
                        سلام.برای خرید به پل های ارتباطی ما رجوع کنید؛)
                      </p>
                      <div class="wrapper-flex">
                        <div class="profile-wrapper">
                          <img width="50" src="./assets/images/MY.jpg" alt=""  />
                        </div>
                      </div>
                    </div>
                 </div>
                 <div class="blog-card">
                    <div class="blog-card-banner">
                        <img src="./assets/images/market4.jpg" alt="">
                    </div>
                    <div class="blog-content-wrapper">
                      <button class="blog-topic text-tiny">محصولات</button>
                      <h3 class="h3">
                        محصول شماره 4
                      </h3>
                      <p class="blog-text">
                        سلام.برای خرید به پل های ارتباطی ما رجوع کنید؛)
                      </p>
                      <div class="wrapper-flex">
                        <div class="profile-wrapper">
                          <img width="50" src="./assets/images/MY.jpg" alt=""  />
                        </div>
                      </div>
                    </div>
                 </div>
                 <div class="blog-card">
                    <div class="blog-card-banner">
                        <img src="./assets/images/market5.jpg" alt="">
                    </div>
                    <div class="blog-content-wrapper">
                      <button class="blog-topic text-tiny">محصولات</button>
                      <h3 class="h3">
                        محصول شماره 5
                      </h3>
                      <p class="blog-text">
                        سلام.برای خرید به پل های ارتباطی ما رجوع کنید؛)
                      </p>
                      <div class="wrapper-flex">
                        <div class="profile-wrapper">
                          <img width="50" src="./assets/images/MY.jpg" alt=""  />
                        </div>
                      </div>
                    </div>
                 </div>
                 <div class="blog-card">
                  <div class="blog-content-wrapper">
                    <h2>
                      <a href="#" class="h2">درباره ما:</a>
                    </h2>
                  
                  </div>
                </div>
            </div>
          </div>
          <div class="aside">
            <div class="contact">
              <h2 class="h2">پل های ارتباطی</h2>
              <div class="wrapper">
                <p style="font-family: 'kamran';">
                  آیا می خواهید بیشتر بدانید که چگونه می توانم به شما کمک کنم؟
                  حل مشکلات؟ اجازه بدهید با هم صحبت کنیم.
                </p>
                <ul class="social-link">
                  <li>
                    <a href="#" class="icon-box discord">
                      <ion-icon name="logo-discord"></ion-icon>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="icon-box twitter">
                      <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="icon-box instagram">
                      <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="newsletter">
              <h2 class="h2">خبرنامه</h2>
              <div class="wrapper">
                <p style="font-family:'kamran';">
                  در خبرنامه ما عضو شوید تا از مطالب جدید با خبر شوید:)
                </p>
                <form method="POST" action="./config/submit.php">
                  <input
                    font-family="kamran"
                    type="email"
                    name="email"
                    placeholder="لطفا آدرس ایمیل خود را وارد کنید"
                    required
                    alert()
                  />
                  <button type="submit" name= "join" class="btn btn-primary" style="font-family:'kamran';">
                    عضویت
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer>
      <div class="container">
        <div class="wrapper">
          <img src="./assets/images/logo.jpeg" alt=""  border-radius: 5%;>
          <p class="footer-text"style="font-family: 'kamran'">
            در میناکاری همراه ما باشید
          </p>
        </div>

        <div class="wrapper">
          <p class="footer-title"style="font-family: 'kamran';">پل های ارتباطی</p>

          <ul>
            <li>
              <a href="#" class="footer-link" style="font-family: 'kamran';">درباره ما</a>
            </li>

            <li>
              <a href="#" class="footer-link"style="font-family: 'kamran';">تماس با ما</a>
            </li>
          </ul>
        </div>
      </div>

      <p class="copyright"style="font-family: 'kamran';">تمامی اطلاعات متعلق به  <a href="#" style="font-family: 'kamran';">حامی نا</a>&copy;</p>
    </footer>


    <!--=============== script ===============-->
    <script src="./assets/js/script.js"></script>

    <!--=============== ionicon ===============-->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script> 
  </body>