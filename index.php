
<!DOCTYPE html>
<html lang="en">
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
        <h1><a href="#intro" class="scrollto">nFarmers</a></h1>
        
      </div>
      
      <nav id="nav-menu-container">
        <ul class="nav-menu">        
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="http://localhost/flarum" target="_blank">Community</a></li>
        </ul>
      </nav>
      
    </div>
      <div class="form_icon">
        <form id="form" action="search.php">
          <input type="text" name="query" placeholder="Search for extension services">
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

        <header class="section-header">
          <h3 class="section-title">Notifiable diseases</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Cattle</li>
              <li data-filter=".filter-card">Sheep</li>
              <li data-filter=".filter-web">Goats</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp box">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/lumpy.jpg" class="img-fluid" alt="" style="height: 250px; width: 600px">
                <a href="img/portfolio/lump.jpg" data-lightbox="portfolio" data-title="Lumpy skin disease" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a class="link-details button" title="More Details" data-toggle="modal" data-target="#lump"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Lumpy skin disease</a></h4>
                <p>Cattle, goats & sheep</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/sheep1.jpg" class="img-fluid" alt="" style="height: 250px; width: 600px">
                <a href="img/portfolio/shee.jpg" class="link-preview" data-lightbox="portfolio" data-title="Sheep & Goat Pox" title="Preview"><i class="ion ion-eye"></i></a>
                <a data-target="#pox" data-toggle="modal" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
              <div class="portfolio-info">
                <h4><a href="#">Sheep & Goat Pox</a></h4>
                <p>Goat & Sheep</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/blue.jpg" class="img-fluid" alt="" style="height: 250px; width: 600px">
                <a href="img/portfolio/blue.jpg" class="link-preview" data-lightbox="portfolio" data-title="Bluetongue" title="Preview"><i class="ion ion-eye"></i></a>
                <a class="link-details button" title="More Details" data-toggle="modal" data-target="#blue"><i class="ion ion-android-open" href="#new" ></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Bluetongue</a></h4>
                <p>Sheep</p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-web filter-app filter-card wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/river.jpg" class="img-fluid" alt="" style="height: 250px; width: 600px">
                <a href="img/portfolio/rift.jpg" class="link-preview" data-lightbox="portfolio" data-title="Rift Valley Fever" title="Preview"><i class="ion ion-eye"></i></a>
                <a class="link-details button" title="More Details" data-toggle="modal" data-target="#fever"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Rift Valley Fever</a></h4>
                <p>Cattle, sheep, & goats</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/rinder.jpg" class="img-fluid" alt="" style="height: 250px; width: 600px">
                <a href="img/portfolio/rind.jpg" class="link-preview" data-lightbox="portfolio" data-title="Rinderpest" title="Preview"><i class="ion ion-eye"></i></a>
                <a class="link-details button" title="More Details" data-toggle="modal" data-target="#rind"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Rinderpest</a></h4>
                <p>Cattle and other cloven - hoofed animals</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/bovine.jpg" class="img-fluid" alt="" style="height: 250px; width: 600px">
                <a href="img/portfolio/bovine.jpg" class="link-preview" data-lightbox="portfolio" data-title="Bovine magliant catarrh" title="Preview"><i class="ion ion-eye"></i></a>
                <a class="link-details button" title="More Details" data-toggle="modal" data-target="#catarrh"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Bovine magliant catarrh</a></h4>
                <p>Cattle, wildebeest (gnu)</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/swine.jpg" class="img-fluid" alt="" style="height: 250px; width: 600px">
                <a href="img/portfolio/swine.jpg" class="link-preview" data-lightbox="portfolio" data-title="Swine vesicular disease" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Swine vesicular disease</a></h4>
                <p>Pigs</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/botulism.jpg" class="img-fluid" alt="" style="height: 250px; width: 600px">
                <a href="img/portfolio/botulism.jpg" class="link-preview" data-lightbox="portfolio" data-title="Botulism" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Botulism</a></h4>
                <p>Cattle, sheep & goats</p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/hsickness.jpg" class="img-fluid" alt="" style="height: 250px; width: 600px">
                <a href="img/portfolio/hsickness.jpg" class="link-preview" data-lightbox="portfolio" data-title="African Horse Sickness" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
              

              <div class="portfolio-info">
                <h4><a href="#">African Horse Sickness</a></h4>
                <p>Horses, donkey</p>
              </div>
            </div>
          </div>

          
          <div class="col-lg-4 col-md-6 portfolio-item filter-web filter-app filter-card wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/heartwater.jpg" class="img-fluid" alt="" style="height: 250px; width: 600px">
                <a href="img/portfolio/heartwater.jpg" class="link-preview" data-lightbox="portfolio" data-title="Heartwater" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Heartwater</a></h4>
                <p>Cattle, goats, sheep</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item wow filter-app fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/mal.png" class="img-fluid" alt="" style="height: 250px; width: 600px">
                <a href="img/portfolio/mcf-1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Malignant Catarrhal Fever" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
              

              <div class="portfolio-info">
                <h4><a href="#">Malignant Catarrhal Fever</a></h4>
                <p>Cattle, Goat, Sheep</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

  </main>

<!-- Modal: modalQuickView -->
<div class="modal fade" id="lump" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-5">
            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="">
                        <img class="d-block w-100" src="img/blue.jpg" alt="First slide" style="height: 300px;">
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
                
            </div>
            <!--/.Carousel Wrapper-->
          </div>
          <div class="col-lg-7">
            <h2 class="h2-responsive product-name">
              <strong>Lumpy skin disease</strong>
            </h2>
            
            <!--Accordion wrapper-->
            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingOne">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="mb-0">
                                Description <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" >
                        <div class="card-body">
                            Lumpy skin disease is poxviral disease primarily of cattle that is spread by biting insects. <br> There was a sharp drop in the occurrence of Lumpy-skin Disease in 2010 as compared to the previous years. This decline can be attributed by DVS in which vaccine was availed to farmers in the previously heavily affected cluster in the regions of Kunene, Omasuti, Oshana and Oshikoto.
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingTwo">
                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h5 class="mb-0">
                                Symptoms <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" >
                        <div class="card-body">
                            There is hemorrhagic exudate subjacent to the necrotic center (sitfast) of a papule. <br>
                            Multiple subcutaneous nodules elevate the skin. <br>
                            There are multiple sharply-demarcated slightly raised papules, often with eroded surfaces, that extend into the nares.
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingThree">
                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h5 class="mb-0">
                                Medication <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            LUMPYVAX® - For the prophylactic immunisation of cattle against lumpy skin disease. <br>
                            <strong>Recommendation for use:</strong><br>
                            If possible all animals should be vaccinated during spring.
                            Calves from vaccinated cows should be vaccinated at 6 months of age. Calves from unvaccinated cows may be vaccinated at any age.
                            Pregnant cows may be vaccinated with Lumpyvax®.
                            A booster vaccination should be given annually. <br>
                            For suggestions, questions and comments please join the <a style="text-decoration:underline; color:blue" href="http://localhost/flarum/t/cattle" target="_blank">discussion forum.</a>                          
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            </div>
            <!--/.Accordion wrapper-->

            <!-- Add to Cart -->
            <div class="card-body">
                <button type="button" class="btn btn-primary">Join the discussion</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <!-- /.Add to Cart -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="blue" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-5">
              <!--Carousel Wrapper-->
              <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                  <!--Slides-->
                  <div class="carousel-inner" role="listbox">
                      <div class="">
                          <img class="d-block w-100" src="img/blue.jpg" alt="First slide" style="height: 300px;">
                      </div>
                      </div>
                  <!--/.Slides-->
                  <!--Controls-->
                  <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
                  <!--/.Controls-->
                  
              </div>
              <!--/.Carousel Wrapper-->
            </div>
            <div class="col-lg-7">
              <h2 class="h2-responsive product-name">
                <strong>Lumpy skin disease</strong>
              </h2>
              
              <!--Accordion wrapper-->
              <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
  
                  <!-- Accordion card -->
                  <div class="card">
  
                      <!-- Card header -->
                      <div class="card-header" role="tab" id="headingOne1">
                          <a data-toggle="collapse" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                              <h5 class="mb-0">
                                  Description <i class="fa fa-angle-down rotate-icon"></i>
                              </h5>
                          </a>
                      </div>
  
                      <!-- Card body -->
                      <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" >
                          <div class="card-body">
                              Lumpy skin disease is poxviral disease primarily of cattle that is spread by biting insects. <br> There was a sharp drop in the occurrence of Lumpy-skin Disease in 2010 as compared to the previous years. This decline can be attributed by DVS in which vaccine was availed to farmers in the previously heavily affected cluster in the regions of Kunene, Omasuti, Oshana and Oshikoto.
                          </div>
                      </div>
                  </div>
                  <!-- Accordion card -->
  
                  <!-- Accordion card -->
                  <div class="card">
  
                      <!-- Card header -->
                      <div class="card-header" role="tab" id="headingTwo1">
                          <a class="collapsed" data-toggle="collapse" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                              <h5 class="mb-0">
                                  Symptoms <i class="fa fa-angle-down rotate-icon"></i>
                              </h5>
                          </a>
                      </div>
  
                      <!-- Card body -->
                      <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" >
                          <div class="card-body">
                              There is hemorrhagic exudate subjacent to the necrotic center (sitfast) of a papule. <br>
                              Multiple subcutaneous nodules elevate the skin. <br>
                              There are multiple sharply-demarcated slightly raised papules, often with eroded surfaces, that extend into the nares.
                          </div>
                      </div>
                  </div>
                  <!-- Accordion card -->
  
                  <!-- Accordion card -->
                  <div class="card">
  
                      <!-- Card header -->
                      <div class="card-header" role="tab" id="headingThree1">
                          <a class="collapsed" data-toggle="collapse" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
                              <h5 class="mb-0">
                                  Medication <i class="fa fa-angle-down rotate-icon"></i>
                              </h5>
                          </a>
                      </div>
  
                      <!-- Card body -->
                      <div id="collapseThree1" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">
                              LUMPYVAX® - For the prophylactic immunisation of cattle against lumpy skin disease. <br>
                              <strong>Recommendation for use:</strong><br>
                              If possible all animals should be vaccinated during spring.
                              Calves from vaccinated cows should be vaccinated at 6 months of age. Calves from unvaccinated cows may be vaccinated at any age.
                              Pregnant cows may be vaccinated with Lumpyvax®.
                              A booster vaccination should be given annually. <br>
                              For suggestions, questions and comments please join the <a style="text-decoration:underline; color:blue" href="http://localhost/flarum/t/cattle" target="_blank">discussion forum.</a>                          
                          </div>
                      </div>
                  </div>
                  <!-- Accordion card -->
                  <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
              </div>
              <!--/.Accordion wrapper-->
  
              <!-- Add to Cart -->
              <div class="card-body">
                  <button type="button" class="btn btn-primary">Join the discussion</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              <!-- /.Add to Cart -->
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="fever" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-5">
            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="">
                        <img class="d-block w-100" src="img/blue.jpg" alt="First slide" style="height: 300px;">
                    </div>
                    </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
                
            </div>
            <!--/.Carousel Wrapper-->
          </div>
          <div class="col-lg-7">
            <h2 class="h2-responsive product-name">
              <strong>Lumpy skin disease</strong>
            </h2>
            
            <!--Accordion wrapper-->
            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingOne1">
                        <a data-toggle="collapse" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="mb-0">
                                Description <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseOne2" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" >
                        <div class="card-body">
                            Lumpy skin disease is poxviral disease primarily of cattle that is spread by biting insects. <br> There was a sharp drop in the occurrence of Lumpy-skin Disease in 2010 as compared to the previous years. This decline can be attributed by DVS in which vaccine was availed to farmers in the previously heavily affected cluster in the regions of Kunene, Omasuti, Oshana and Oshikoto.
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingTwo">
                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo">
                            <h5 class="mb-0">
                                Symptoms <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseTwo3" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" >
                        <div class="card-body">
                            There is hemorrhagic exudate subjacent to the necrotic center (sitfast) of a papule. <br>
                            Multiple subcutaneous nodules elevate the skin. <br>
                            There are multiple sharply-demarcated slightly raised papules, often with eroded surfaces, that extend into the nares.
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingThree2">
                        <a class="collapsed" data-toggle="collapse" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree">
                            <h5 class="mb-0">
                                Medication <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseThree2" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            LUMPYVAX® - For the prophylactic immunisation of cattle against lumpy skin disease. <br>
                            <strong>Recommendation for use:</strong><br>
                            If possible all animals should be vaccinated during spring.
                            Calves from vaccinated cows should be vaccinated at 6 months of age. Calves from unvaccinated cows may be vaccinated at any age.
                            Pregnant cows may be vaccinated with Lumpyvax®.
                            A booster vaccination should be given annually. <br>
                            For suggestions, questions and comments please join the <a style="text-decoration:underline; color:blue" href="http://localhost/flarum/t/cattle" target="_blank">discussion forum.</a>                          
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            </div>
            <!--/.Accordion wrapper-->

            <!-- Add to Cart -->
            <div class="card-body">
                <button type="button" class="btn btn-primary">Join the discussion</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <!-- /.Add to Cart -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="pox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-5">
            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="">
                        <img class="d-block w-100" src="img/blue.jpg" alt="First slide" style="height: 300px;">
                    </div>
                    </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
                
            </div>
            <!--/.Carousel Wrapper-->
          </div>
          <div class="col-lg-7">
            <h2 class="h2-responsive product-name">
              <strong>Lumpy skin disease</strong>
            </h2>
            
            <!--Accordion wrapper-->
            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingOne1">
                        <a data-toggle="collapse" href="#collapseOne3" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="mb-0">
                                Description <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseOne3" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" >
                        <div class="card-body">
                            Lumpy skin disease is poxviral disease primarily of cattle that is spread by biting insects. <br> There was a sharp drop in the occurrence of Lumpy-skin Disease in 2010 as compared to the previous years. This decline can be attributed by DVS in which vaccine was availed to farmers in the previously heavily affected cluster in the regions of Kunene, Omasuti, Oshana and Oshikoto.
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingTwo3">
                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo">
                            <h5 class="mb-0">
                                Symptoms <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseTwo3" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" >
                        <div class="card-body">
                            There is hemorrhagic exudate subjacent to the necrotic center (sitfast) of a papule. <br>
                            Multiple subcutaneous nodules elevate the skin. <br>
                            There are multiple sharply-demarcated slightly raised papules, often with eroded surfaces, that extend into the nares.
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingThree3">
                        <a class="collapsed" data-toggle="collapse" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree">
                            <h5 class="mb-0">
                                Medication <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            LUMPYVAX® - For the prophylactic immunisation of cattle against lumpy skin disease. <br>
                            <strong>Recommendation for use:</strong><br>
                            If possible all animals should be vaccinated during spring.
                            Calves from vaccinated cows should be vaccinated at 6 months of age. Calves from unvaccinated cows may be vaccinated at any age.
                            Pregnant cows may be vaccinated with Lumpyvax®.
                            A booster vaccination should be given annually. <br>
                            For suggestions, questions and comments please join the <a style="text-decoration:underline; color:blue" href="http://localhost/flarum/t/cattle" target="_blank">discussion forum.</a>                          
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            </div>
            <!--/.Accordion wrapper-->

            <!-- Add to Cart -->
            <div class="card-body">
                <button type="button" class="btn btn-primary">Join the discussion</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <!-- /.Add to Cart -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="rind" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-5">
            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="">
                        <img class="d-block w-100" src="img/blue.jpg" alt="First slide" style="height: 300px;">
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
                
            </div>
            <!--/.Carousel Wrapper-->
          </div>
          <div class="col-lg-7">
            <h2 class="h2-responsive product-name">
              <strong>Lumpy skin disease</strong>
            </h2>
            
            <!--Accordion wrapper-->
            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingOne">
                        <a data-toggle="collapse" href="#collapseOne4" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="mb-0">
                                Description <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseOne4" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" >
                        <div class="card-body">
                            Lumpy skin disease is poxviral disease primarily of cattle that is spread by biting insects. <br> There was a sharp drop in the occurrence of Lumpy-skin Disease in 2010 as compared to the previous years. This decline can be attributed by DVS in which vaccine was availed to farmers in the previously heavily affected cluster in the regions of Kunene, Omasuti, Oshana and Oshikoto.
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingTwo">
                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo">
                            <h5 class="mb-0">
                                Symptoms <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseTwo4" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" >
                        <div class="card-body">
                            There is hemorrhagic exudate subjacent to the necrotic center (sitfast) of a papule. <br>
                            Multiple subcutaneous nodules elevate the skin. <br>
                            There are multiple sharply-demarcated slightly raised papules, often with eroded surfaces, that extend into the nares.
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingThree">
                        <a class="collapsed" data-toggle="collapse" href="#collapseThree4" aria-expanded="false" aria-controls="collapseThree">
                            <h5 class="mb-0">
                                Medication <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            LUMPYVAX® - For the prophylactic immunisation of cattle against lumpy skin disease. <br>
                            <strong>Recommendation for use:</strong><br>
                            If possible all animals should be vaccinated during spring.
                            Calves from vaccinated cows should be vaccinated at 6 months of age. Calves from unvaccinated cows may be vaccinated at any age.
                            Pregnant cows may be vaccinated with Lumpyvax®.
                            A booster vaccination should be given annually. <br>
                            For suggestions, questions and comments please join the <a style="text-decoration:underline; color:blue" href="http://localhost/flarum/t/cattle" target="_blank">discussion forum.</a>                          
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            </div>
            <!--/.Accordion wrapper-->

            <!-- Add to Cart -->
            <div class="card-body">
                <button type="button" class="btn btn-primary">Join the discussion</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <!-- /.Add to Cart -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="catarrh" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-5">
            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="">
                        <img class="d-block w-100" src="img/blue.jpg" alt="First slide" style="height: 300px;">
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
                
            </div>
            <!--/.Carousel Wrapper-->
          </div>
          <div class="col-lg-7">
            <h2 class="h2-responsive product-name">
              <strong>Lumpy skin disease</strong>
            </h2>
            
            <!--Accordion wrapper-->
            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingOne">
                        <a data-toggle="collapse" href="#collapseOne5" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="mb-0">
                                Description <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseOne5" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" >
                        <div class="card-body">
                            Lumpy skin disease is poxviral disease primarily of cattle that is spread by biting insects. <br> There was a sharp drop in the occurrence of Lumpy-skin Disease in 2010 as compared to the previous years. This decline can be attributed by DVS in which vaccine was availed to farmers in the previously heavily affected cluster in the regions of Kunene, Omasuti, Oshana and Oshikoto.
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingTwo">
                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo">
                            <h5 class="mb-0">
                                Symptoms <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseTwo5" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" >
                        <div class="card-body">
                            There is hemorrhagic exudate subjacent to the necrotic center (sitfast) of a papule. <br>
                            Multiple subcutaneous nodules elevate the skin. <br>
                            There are multiple sharply-demarcated slightly raised papules, often with eroded surfaces, that extend into the nares.
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingThree">
                        <a class="collapsed" data-toggle="collapse" href="#collapseThree5" aria-expanded="false" aria-controls="collapseThree">
                            <h5 class="mb-0">
                                Medication <i class="fa fa-angle-down rotate-icon"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseThree5" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            LUMPYVAX® - For the prophylactic immunisation of cattle against lumpy skin disease. <br>
                            <strong>Recommendation for use:</strong><br>
                            If possible all animals should be vaccinated during spring.
                            Calves from vaccinated cows should be vaccinated at 6 months of age. Calves from unvaccinated cows may be vaccinated at any age.
                            Pregnant cows may be vaccinated with Lumpyvax®.
                            A booster vaccination should be given annually. <br>
                            For suggestions, questions and comments please join the <a style="text-decoration:underline; color:blue" href="http://localhost/flarum/t/cattle" target="_blank">discussion forum.</a>                          
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            </div>
            <!--/.Accordion wrapper-->

            <!-- Add to Cart -->
            <div class="card-body">
                <button type="button" class="btn btn-primary">Join the discussion</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <!-- /.Add to Cart -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!--==========================
    Footer
  ============================-->
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


  <img style="display:none" id="map-background" src="img/images/map.jpg">
    <img style="display:none" id="map-caprivi" src="img/images/caprivi.png">
    <img style="display:none" id="map-hardap" src="img/images/hardap.png">
    <img style="display:none" id="map-kavango" src="img/images/kavango.png">
    <img style="display:none" id="map-kunene" src="img/images/kunene.png">
    <img style="display:none" id="map-ohangwena" src="img/images/ohangwena.png">
    <img style="display:none" id="map-omusati" src="img/images/omusati.png">
    <img style="display:none" id="map-oshikoto" src="img/images/oshikoto.png">
    <img style="display:none" id="map-erongo" src="img/images/erongo.png">
    <img style="display:none" id="map-karas" src="img/images/karas.png">
    <img style="display:none" id="map-khomas" src="img/images/khomas.png">
    <img style="display:none" id="map-omaheke" src="img/images/omaheke.png">
    <img style="display:none" id="map-oshana" src="img/images/oshana.png">
    <img style="display:none" id="map-otjozondjupa" src="img/images/otjozondjupa.png">
    <img style="display:none" id="map-roads" src="img/images/roads.png">
    <img style="display:none" id="map-towns" src="img/images/towns.png">

    <script src="js/data.js"></script>
    <script src="js/logic.js"></script>

</body>
</html>
