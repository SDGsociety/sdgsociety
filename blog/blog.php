<!DOCTYPE html>
<html>
<head>
<title>Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link href="../css/agency.min.css" rel="stylesheet">

<style type="text/css">

        .logo{
            display: block;
        }   

        /*Original Size*/
        .logo img {
          max-height: 100px;
        }


        /*On Scroll Size*/
        #mainNav.smaller {
            height: 65px;
        }
        #mainNav.smaller .logo img {
          transform: scale(0.75);
        }

        .logo img {
            transition: .7s all;
            -moz-transition: .7s all;
            -webkit-transition: .7s all;
            -o-transition: .7s all;
        }

    </style>
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>

         <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="logo" href="index.php">
                     <img class="img-responsive" src="../img/logo_1.png">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../about.php">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<br><br><br><br><br><br>
<div class="container">
  

  <section id="mainContent">
    <div class="content_middle">
     
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="content_middle_middle"> 
            <div class="single_featured_slide"> <a href="single.php"><img src="../img/25.jpg" alt=""></a>
              <h2><a href="single.php">Story of Ramesh on Reduced Inequalities</a></h2>
              <h4>Shubhangi Poddar</h4>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="content_middle_rightbar">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> \</h2>
            <ul class="catg1_nav">
              <li>
                <div class="catgimg_container"> <a href="single1.php" class="catg1_img"> <img alt="" src="../img/12.jpg"> </a> </div>
                <h3 class="post_titile"><a href="single1.php">Achieve gender equality and empower all women and girls <br>Sharda Priya</a></h3>
              </li>
              <li>
                <div class="catgimg_container"> <a href="single2.php" class="catg1_img"> <img alt="" src="../img/24.jpg"> </a> </div>
                <h3 class="post_titile"><a href="single2.php">Nisha – The Dreamer <br>Aakriti Sharma</a></h3>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
   
  </section>
</div>

  <?php
        require ('../header_footer/footer.php');
  ?>

         <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="../js/agency.js?token=ajdsjdkjk"></script>


</body>
</html>