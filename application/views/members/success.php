
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sikeres regisztráció</title>

    <!-- css -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body data-spy="scroll" data-target="#site-nav">
<nav id="site-nav-remain" class="navbar navbar-fixed-top navbar-custom navbar-solid">
        <div class="container">
            <div class="navbar-header">

                <!-- logo -->
                <div class="site-branding">
                    <a class="logo" href="index.html">

                        <!-- logo image  -->
                        <img src="/assets/images/logo.png" alt="Logo">

                        V. Eötvözet Konferencia 2016
                    </a>
                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div><!-- /.navbar-header -->

            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="nav navbar-nav navbar-right">

                    <!-- navigation menu -->
                    <li class="active"><a data-scroll href="#about">A konferenciáról</a></li>
                    <li><a data-scroll href="colls">A két Kollégium</a></li>
                    <li><a href="#registration">Regisztráció</a></li>
                    <li><a data-scroll href="#schedule">Menetrend</a></li>
                    <li><a data-scroll href="#contact">Kapcsolat</a></li>
                    <!-- <li><a data-scroll href="#">Sponsorship</a></li> -->
                    <li><a data-scroll href="#faq">FAQ</a></li>
                </ul>
            </div>
        </div><!-- /.container -->
    </nav>
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="jumbotron">
              <h1>Sikeres regisztráció</h1>
              <p>Várunk a konferencián</p>
              <p><a class="btn btn-primary btn-lg" href="<?php echo base_url(); ?>" role="button">Vissza a főoldalra</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="social-block">
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                        <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                        <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- script -->
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="/assets/js/main.js"></script>
</body>
</html>