<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    /*
        if connection fails it will stop loading the page and display an error
    */
     
    mysql_select_db("vet_offices") or die(mysql_error());
    /* vet_offices is the name of database we've created */
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
  <meta charset="utf-8">
  <title>Home | nFarmers'</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="index.php" class="scrollto">nFarmers</a></h1>
        
      </div>
      
      <nav id="nav-menu-container">
        <ul class="nav-menu">        
          <li class="menu-active"><a href="index.php">Home</a></li>
          <li><a href="http://localhost/flarum" target="_blank">Community</a></li>
        </ul>
      </nav>
      
    </div>
      <div class="form_icon">
        <form id="form" action="search.php">
          <input type="text" name="query" tooltip="search" placeholder="">
        </form> 
      </div>
  </header><!-- #header -->
<!-- intro section -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/slider1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Welcome to nFarmers website</h2>
                <p style="font-size: 15px">This platform explores the future of Namibian information systems and the role that digital solutions can play in overcoming the isolation of smallholder farmers and speeding up rural development. nFarmers seeks to solve this by providing farmers with up-to-date information about animal diseases </p>
                <a href="http://localhost/flarum" target="_blank" class="btn-get-started scrollto">Join the forum</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/918-banner11.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Taking Success To Scale</h2>
                <p style="font-size: 15px">By thinking in terms not just of crops or yields or prices, but rather of an integrated information system that links all players in the agricultural economy, nFarmers allow farmers to see agricultural issues in a new light. Enabling those who have something powerful to say and the authority to be heard.</p>
                <a href="http://localhost/flarum" target="_blank" class="btn-get-started scrollto">Join the forum</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/Sheep-farming.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Overcoming Isolation </h2>
                <p style="font-size: 15px">Farming is one of mankind’s oldest endeavors, and digital technology is one of its newest. The contributors to this fascinating volume bring them together, showing just how much good can come from the collaboration. nFarmers aims to provide solutions to key strategic information challenges faced by agricultural stakeholders in Namibia.</p>
                <a href="http://localhost/flarum" target="_blank" class="btn-get-started scrollto">Join the forum</a>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section><!-- #intro section -->
  <main id="main">
    <section id="portfolio"  class="section-bg" >
      <div class="container">
        <h3></h3>
<?php
    $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM contact
            WHERE (`Region` LIKE '%".$query."%') OR (`Town` LIKE '%".$query."%')") or die(mysql_error());
                     
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<p><h3><b>".'For extension services in '.$results['Town'].', '.$results['Region'].' region, you can contact '.$results['official'].' at '.$results['tel_no'].'.'."</b></h3></p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "<h3><b>".'No results found, try to research by region or town'.'.'."<b></h3>";
        }
         
    }
    else{ // if query length is less than minimum
        echo "<h3><b>".'No results found, please use a minimum of 3 characters for searching.'."</b><h3>";
    }
?>
    <h3><b>Alternatively, can collaborate with your <a href="http://localhost/flarum"><u>fellow farmers</u></a></b></h3>
      </div>
    </section><!-- #portfolio -->

  </main>
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>nFarmers' | Kuna</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <!-- modal classes -->


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>