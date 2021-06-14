<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PROMOTION</title>
  <link rel="stylesheet" href="css/index.css">
  <script src="JS/slider.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="fontawesome\css\all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/85c4034c23.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<body>
  <navibar id="navbar">
    <a href="#"><img src="pics/logo.jpg" class="logo"></a>

    <ul>
      <li><a href="">NEW DROP</a></li>
      <li><a href="http://localhost/QR/collection.html">COLLECTIONS</a></li>
      <li><a href="http://localhost/QR/about.html">ABOUT US</a></li>
      <li><a href="
        <?php
              if(!isset($_COOKIE['username'])) {
                  echo "login.php";
              } else {
                  echo "logout.php";
              }?>
        ">
                      <?php
                            if(!isset($_COOKIE['username'])) {
                                echo "SIGN IN";
                            } else {
                                echo $_COOKIE['username'];
                            }?>
                          </a></li>

                          <a class="navbar-brand" href="#" style = "padding-left: 40px;">
      <img id="myBtn" src="https://cdn3.iconfinder.com/data/icons/flaticons-1/24/flaticon_search-512.png" style="width: 20px;">
        <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close"></span>
            <h2 style="color: black">Search</h2>
            <input type="search" class="form-control" id="searh" placeholder="Ex: Beats X">
          </div>
        </div>
      </a>

    </ul>
  </navibar>

  <script>
    var modal = document.getElementById("myModal");

    var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
      modal.style.display = "block";
    }

    span.onclick = function() {
      modal.style.display = "none";
    }

    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

  <div id="slider">
      <div class="container slider" >
        <div id="crsl" class="carousel slide carousel-fade" data-ride="carousel">


              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="pics/1.jpg" class="w-50 p-3" alt="1slide"  height="540">
                </div>
                <div class="carousel-item">
                  <img src="pics/2.jpg" class="w-50 p-3" alt="2slide" height="540">
                </div>
                <div class="carousel-item">
                  <img src="pics/3.jpg" class="w-50 p-3" alt="2slide" height="540">
                </div>
              </div>
              <div class="txt">
                <h1> <br><br> MODERN IDENTITY OF <br> QAZAQ REPUBLIC <br><br> JOIN THE MOVEMENT <br> <br> EST. 1465 </h1>
              </div>

            <a class="carousel-control-prev" href="#crsl" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#crsl" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
      </div>
    </div>
  </div>

  <hr style="height:5px;border-width:0;color:#0044bf;background-color:#0044bf">


<section>
  <div class="products cf">
    <div class="cp-1" id="btn1">
      <div class="image">
        <img src="pics/6.jpg" alt="">
      </div>

      <div id="modal1" class="modal">
        <div class="modal1-content">
          <span class="close1">&times;</span>
          <img src="pics/6.jpg" width="270px;">
          <p>PRICE: 18000 KZT <i class="fas fa-tag"></i></p>
          <p> <i class="fas fa-tshirt"></i> SIZE: <b>S M L</b></p>
        </div>
      </div>

      <div class="title">
        BÚRJEIDE
      </div>
    </div>

    <div class="cp-2"  id="btn2">
      <div class="image">
        <img src="pics/7.jpg" alt="">
      </div>

      <div id="modal2" class="modal">
        <div class="modal2-content">
          <span class="close2">&times;</span>
          <img src="pics/7.jpg" width="270px;">
          <p>PRICE: 14000 KZT <i class="fas fa-tag"></i></p>
          <p> <i class="fas fa-tshirt"></i> SIZE: <b>S M L</b></p>
        </div>
      </div>

      <div class="title">
        KEŃJEIDE
      </div>
    </div>

    <div class="cp-3"  id="btn3">
      <div class="image">
        <img src="pics/8.jpg" alt="">
      </div>

      <div id="modal3" class="modal">
        <div class="modal3-content">
          <span class="close3">&times;</span>
          <img src="pics/8.jpg" width="270px;">
          <p>PRICE: 5000 KZT <i class="fas fa-tag"></i></p>
          <p> <i class="fas fa-tshirt"></i> SIZE: <b>S M L</b></p>
        </div>
      </div>

      <div class="title">
        QALPAQ
      </div>
    </div>

    <div class="cp-1"  id="btn4">
      <div class="image">
        <img src="pics/10.jpg" alt="">
      </div>

      <div id="modal4" class="modal">
        <div class="modal4-content">
          <span class="close4">&times;</span>
          <img src="pics/10.jpg" width="270px;">
          <p>PRICE: 9000 KZT <i class="fas fa-tag"></i></p>
          <p> <i class="fas fa-tshirt"></i> SIZE: <b>S M L</b></p>
        </div>
      </div>

      <div class="title">
        OVERSIZE JEIDE
      </div>
    </div>

    <div class="cp-2"  id="btn5">
      <div class="image">
        <img src="pics/11.jpg" alt="">
      </div>

      <div id="modal5" class="modal">
        <div class="modal5-content">
          <span class="close5">&times;</span>
          <img src="pics/11.jpg" width="270px;">
          <p>PRICE: 7500 KZT <i class="fas fa-tag"></i></p>
          <p> <i class="fas fa-tshirt"></i> SIZE: <b>S M L</b></p>
        </div>
      </div>

      <div class="title">
        JEIDE
      </div>
    </div>

    <div class="cp-3"  id="btn6">
      <div class="image">
        <img src="pics/9.jpg" alt="">
      </div>

      <div id="modal6" class="modal">
        <div class="modal6-content">
          <span class="close6">&times;</span>
          <img src="pics/9.jpg" width="270px;">
          <p>PRICE: 22000 KZT <i class="fas fa-tag"></i></p>
          <p> <i class="fas fa-tshirt"></i> SIZE: <b>S M L</b></p>
        </div>
      </div>

      <div class="title">
        FLEESE KÝRTE
      </div>
    </div>

      <div class="cp-1" id="btn1">
        <div class="image">
          <img src="pics/6.jpg" alt="">
        </div>

        <div id="modal1" class="modal">
          <div class="modal3-content">
            <span class="close1">&times;</span>
            <img src="pics/6.jpg" width="270px;">
            <p>PRICE: 18000 KZT <i class="fas fa-tag"></i></p>
            <p> <i class="fas fa-tshirt"></i> SIZE: <b>S M L</b></p>
          </div>
        </div>

        <div class="title">
          BÚRJEIDE
        </div>
      </div>

      <div class="cp-2"  id="btn2">
        <div class="image">
          <img src="pics/7.jpg" alt="">
        </div>

        <div id="modal2" class="modal">
          <div class="modal2-content">
            <span class="close2">&times;</span>
            <img src="pics/7.jpg" width="270px;">
            <p>PRICE: 14000 KZT <i class="fas fa-tag"></i></p>
            <p> <i class="fas fa-tshirt"></i> SIZE: <b>S M L</b></p>
          </div>
        </div>

        <div class="title">
          KEŃJEIDE
        </div>
      </div>

      <div class="cp-3"  id="btn3">
        <div class="image">
          <img src="pics/8.jpg" alt="">
        </div>

        <div id="modal3" class="modal">
          <div class="modal3-content">
            <span class="close3">&times;</span>
            <img src="pics/8.jpg" width="270px;">
            <p>PRICE: 5000 KZT <i class="fas fa-tag"></i></p>
            <p> <i class="fas fa-tshirt"></i> SIZE: <b>S M L</b></p>
          </div>
        </div>

        <div class="title">
          QALPAQ
        </div>
      </div>

      <div class="cp-1"  id="btn4">
        <div class="image">
          <img src="pics/10.jpg" alt="">
        </div>

        <div id="modal4" class="modal">
          <div class="modal4-content">
            <span class="close4">&times;</span>
            <img src="pics/10.jpg" width="270px;">
            <p>PRICE: 9000 KZT <i class="fas fa-tag"></i></p>
            <p> <i class="fas fa-tshirt"></i> SIZE: <b>S M L</b></p>
          </div>
        </div>

        <div class="title">
          OVERSIZE JEIDE
        </div>
      </div>

      <div class="cp-2"  id="btn5">
        <div class="image">
          <img src="pics/11.jpg" alt="">
        </div>

        <div id="modal5" class="modal">
          <div class="modal5-content">
            <span class="close5">&times;</span>
            <img src="pics/11.jpg" width="270px;">
            <p>PRICE: 7500 KZT <i class="fas fa-tag"></i></p>
            <p> <i class="fas fa-tshirt"></i> SIZE: <b>S M L</b></p>
          </div>
        </div>

        <div class="title">
          JEIDE
        </div>
      </div>

      <div class="cp-3"  id="btn6">
        <div class="image">
          <img src="pics/9.jpg" alt="">
        </div>

        <div id="modal6" class="modal">
          <div class="modal6-content">
            <span class="close6">&times;</span>
            <img src="pics/9.jpg" width="270px;">
            <p>PRICE: 22000 KZT <i class="fas fa-tag"></i></p>
            <p> <i class="fas fa-tshirt"></i> SIZE: <b>S M L</b></p>
          </div>
        </div>

        <div class="title">
          FLEESE KÝRTE
        </div>
      </div>
  </div>
</section>

<div class="footer">
<h1>BARI JAQSY BOLASDY <br><br> WE ARE QAZAQ REPUBLIC <br> <br>instagram: <a  style="color: white"  href="https://www.instagram.com/qazaq.republic/">@qazaq.republic</a> <br> Telegram: <a style="color: white" href="https://t.me/WeAreQR">@WeAreQR</a> <br> TikTok: <a style="color: white" href="https://www.tiktok.com/@qazaq.republic?">@QazaqRepublic</a> <br> <a style="color: white" href="whatsapp://send?phone=77081223910&text=">+77789489800</a>      </h1>
</div>

<script src="JS/navbar.js"></script>
<script src="JS/slider.js"></script>

</html>
