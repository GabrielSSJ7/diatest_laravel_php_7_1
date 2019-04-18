<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Diatest: DIATEST</title>

    <!-- Google font -->
    <link
      href="https://fonts.googleapis.com/css?family=Hind:400,700"
      rel="stylesheet"
    />

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- HEADER -->
    <header>
      <!-- top Header -->
      <div id="top-header" style="background:#005baa;">
        <div class="container">
          
          <div class="pull-left">
            <span style="color:white">Bem-vindo ao site Diatest</span>
          </div>
          <div class="pull-right">
              <div id="div-contato">
                  <div id="div-children-contato" >
                      <div style="display: flex; flex-direction: row;     justify-content: center;">
                          <img style="-webkit-filter:invert(100%)" height="19" width="19" src="./img/phone-call.png" alt="">
                          <p style="margin: auto 10px;color:white">
                              (11) 2091-8811
                          </p>
                        </div>
                    <div style="display: flex; flex-direction: row; justify-content: center; align-content: center" >
                      <img style="-webkit-filter: invert(100%)" width="19" height="19" src="./img/message.png" alt="">
                      <p style="margin: auto 10px; color: white">
                          info@diatest.com.br
                      </p>
                    </div>
                    
                  </div>
                </div>
            <!-- <ul class="header-top-links">
              <li>
                <a href="https://plus.google.com/110608236717101783102/about"
                  ><img
                    style="max-width:100%; width: 35px"
                    src="./img/google-plus.png"
                    alt=""
                /></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/company/diatest-do-brasil"
                  ><img
                    style="max-width:100%; width: 35px"
                    src="./img/linkedin.png"
                    alt=""
                /></a>
              </li>
            </ul> -->
          </div>
        </div>
      </div>
      <!-- /top Header -->

      <!-- header -->
      <div id="header">
        <div id="header-logo-contato-pesquisa" class="container" >
            
          <div id="div-logo" class="pull-left" >
            <!-- Logo -->
            <div class="header-logo">
              <a class="logo" href="#">
                <img src="./img/logo_t.png" alt="" />
              </a>
            </div>
            <!-- /Logo -->
          </div>

          <!-- <div id="div-contato">
              <div id="div-children-contato" >
                <div style="display: flex; flex-direction: row; justify-content: center; align-content: center" >
                  <img width="19" height="19" src="./img/message.png" alt="">
                  <p style="margin: auto 10px">
                      info@diatest.com.br
                  </p>
                </div>
                <div style="display: flex; flex-direction: row">
                  <img height="19" width="19" src="./img/phone-call.png" alt="">
                  <p style="margin: auto 10px">
                      (11) 2091-8811
                  </p>
                </div>
              </div>
            </div> -->


          <div id="div-pesquisa" class="pull-right">
           

            <!-- Search -->
            <div class="header-search" style="width: 100%">
              <form>
                <input
                  id="search-input"
                  class="input search-input"
                  type="text"
                  placeholder="Pesquisar"
                />

                <button id="search-btn" class="search-btn"><i class="fa fa-search"></i></button>
              </form>
            </div>
            <!-- /Search -->

             <li style="list-style: none" class="header-account dropdown default-dropdown">
              <li class="nav-toggle" style="/* margin: 15px; */    margin: auto;">
                <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
              </li>
            </li>
          </div>
        </div>
        <!-- header -->
      </div>
      <!-- container -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <div id="navigation">
      <!-- container -->
      <div class="container">
        <div id="responsive-nav">
          <!-- category nav -->
          <div class="category-nav ">
            <span class="category-header category-nav-toggle" style="cursor: pointer"
              >Categories <i class="fa fa-list" style="cursor:pointer" 
              ></i
            ></span>
            <ul id="lista-categorias" class="category-list">
              
            </ul>
			    </div>
			  <!-- /category nav -->

          <!-- menu nav -->
          <div class="menu-nav">
            <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
            <ul class="menu-list">
                <li><a href="index.html">Home</a></li>
                <li><a href="quem-somos.html">Quem Somos</a></li>
                
                
                <li><a href="contato.html">Contato</a></li>
              <li><a href="#">Blog</a></li>
              <li class="dropdown default-dropdown">
                <a
                  class="dropdown-toggle"
                  data-toggle="dropdown"
                  aria-expanded="true"
                  >Marcas <i class="fa fa-caret-down"></i
                ></a>
                <ul class="custom-menu">
                  <li class="li-fac"><a href="./produtos.html">DIATEST</a></li>
                  <li class="li-fac"><a href="./produtos.html">SYLVAC</a></li>
                  <li class="li-fac"><a href="./produtos.html">KROEPLIN</a></li>
                  <li class="li-fac"><a href="./produtos.html">KAFER</a></li>
                  <li class="li-fac"><a href="./produtos.html">PROCEQ</a></li>
                  <li class="li-fac"><a href="./produtos.html">WEST. PEGASUS</a></li>
                  <li class="li-fac"><a href="./produtos.html">KORDT</a></li>
                  <li class="li-fac"><a href="./produtos.html">MAHR</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- menu nav -->
        </div>
      </div>
      <!-- /container -->
    </div>
    <!-- /NAVIGATION -->

    <!-- HOME -->
    <div id="home" style=" background: #005baa">
      <!-- container -->
      <div class="container" style="margin: 0; padding:0;    width: 100%;">
        <!-- home wrap -->
        <div class="home-wrap">
          <!-- home slick -->
          <div id="home-slick">
            <!-- banner -->
            <div class="banner banner-1">
              <img
                src="https://images.pexels.com/photos/256381/pexels-photo-256381.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                alt=""
              />
              <div class="banner-caption text-center">
                <h1 style="color: #005baa; text-shadow: 1px 1px white">
                  Indústria
                </h1>
                <h3 class="white-color font-weak">Você encontra aqui</h3>
                <button class="primary-btn">Saiba Mais</button>
              </div>
            </div>
            <!-- /banner -->

            <!-- banner -->
            <div class="banner banner-1">
              <img
                src=https://images.pexels.com/photos/415945/pexels-photo-415945.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                alt=""
              />
              <div class="banner-caption">
                <h1 class="primary-color" style="text-shadow: 1px 1px 1px white;">
                  Ogivas de medição<br /><span class="white-color font-weak"
                    >Saiba mais</span
                  >
                </h1>
                <button class="primary-btn">Shop Now</button>
              </div>
            </div>
            <!-- /banner -->

            <!-- banner -->
            <div class="banner banner-1">
              <img src="https://images.pexels.com/photos/63592/oil-temperature-gauge-motorcycle-details-technology-63592.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" />
              <div class="banner-caption">
                <h1 class="white-color" style="    text-shadow: 1px 1px 1px black;">Medidores Aerosol <span>Collection</span></h1>
                <button class="primary-btn">Saiba Mais</button>
              </div>
            </div>
            <!-- /banner -->
          </div>
          <!-- /home slick -->
        </div>
        <!-- /home wrap -->
      </div>
      <!-- /container -->
    </div>
    <!-- /HOME -->

    <!-- section -->
    <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- section-title -->
          <div class="col-md-12">
            <div class="section-title">
              <h2 class="title">Conheça nossos produtos</h2>
              <div class="pull-right">
                <div class="product-slick-dots-1 custom-dots"></div>
              </div>
            </div>
          </div>
          <!-- /section-title -->

          <!-- banner -->
          <!-- <div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="./img/banner14.jpg" alt="">
						<div class="banner-caption">
							<h2 class="white-color">NEW<br>COLLECTION</h2>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
				</div> -->
          <!-- /banner -->

          <!-- Product Slick -->
          <div id="products_parent" class="container col-md-12 col-sm-12 col-xs-12">
            <div class="row" id="products_"></div>
          </div>
          <!-- /Product Slick -->
        </div>
        <!-- /row -->
      </div>
    </div>

    <!-- FOOTER -->
    <footer id="footer" class="section section-grey" style="background: #005baa">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- footer widget -->
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="footer">
              <!-- footer logo -->
              <div class="footer-logo">
                <a class="logo" href="./produtos.html?cat=10">
                  <img src="./img/logo_t.png" alt="" />
                </a>
              </div>
              <!-- /footer logo -->

              <p style="color: white">
					Diatest do Brasil Produtos de Medição Ltda<br>
					Rua Ulisses Cruz, 1052 • 3 Andar • Cj. 6 • Tatuapé • São Paulo • (11) 2091-8811
              </p>

              <!-- footer social -->
              <ul class="footer-social">
              
                <li>
                  <a href="https://plus.google.com/110608236717101783102/about"><i style="-webkit-filter: invert(100%)" class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/company/diatest-do-brasil"><i style="-webkit-filter: invert(100%)" class="fa fa-linkedin"></i></a>
                </li>
              </ul>
              <!-- /footer social -->
            </div>
          </div>
          <!-- /footer widget -->

          <!-- footer widget -->
          <!-- <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="footer">
              <h3 class="footer-header">My Account</h3>
              <ul class="list-links">
                <li><a href="#">My Account</a></li>
                <li><a href="#">My Wishlist</a></li>
                <li><a href="#">Compare</a></li>
                <li><a href="#">Checkout</a></li>
                <li><a href="#">Login</a></li>
              </ul>
            </div>
          </div> -->
          <!-- /footer widget -->

          <div class="clearfix visible-sm visible-xs"></div>

          <!-- footer widget -->
          <div class="col-md-5 col-sm-6 col-xs-6" style="text-align: center">
            <div class="footer">
              <h3 class="footer-header" style="color:white">Menu</h3>
              <ul class="list-links" >
                <li><a style="color: white" href="#">Home</a></li>
                <li><a style="color: white" href="#">Quem Somos</a></li>
                <li><a style="color: white" href="#">Contato</a></li>
                <li><a style="color: white" href="#">Blog</a></li>
              </ul>
            </div>
          </div>
          <!-- /footer widget -->

          <!-- footer subscribe -->
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="footer">
              <h3 class="footer-header" style="color: white">Permaneça Conectado</h3>
              <p style="color:white">
                Assine nossa Newslatter
              </p>
              <form>
                <div class="form-group">
                  <input id="newsletterinput" class="input" placeholder="Enter Email Address" style="color:white" placeholder />
                </div>
                <button class="primary-btn">Join Newslatter</button>
              </form>
            </div>
		  </div>
		  <style>
			  input#newsletterinput::-webkit-input-placeholder {
  				color: white;
			  }
		  </style>
          <!-- /footer subscribe -->
        </div>
        <!-- /row -->
        <hr />
        <!-- row -->
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <!-- footer copyright -->
            <div class="footer-copyright" style="color:white">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Todos os direitos reservados © Diatest do Brasil Produtos de Medição Ltda 2015
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
            <!-- /footer copyright -->
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wp.js"></script>
  </body>
</html>
