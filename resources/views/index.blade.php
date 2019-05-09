@extends('layouts.main')

@section('title', 'HOME')

@section('content')


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
              src="{{asset('img/tobanner1_.jpg')}}"
              alt=""
            />
	   
            {{-- <div class="banner-caption text-center">
              <h1 style="color: #005baa; text-shadow: 1px 1px white">
                Indústria
              </h1>
              <h3 class="white-color font-weak">Você encontra aqui</h3>
             <!-- <button class="primary-btn">Saiba Mais</button> -->
            </div> --}}
          </div>
          <!-- /banner -->

          <!-- banner -->
          <div class="banner banner-1">
            <img
            src="{{asset('img/tobanner2_.jpg')}}"
              alt=""
            />
            {{-- <div class="banner-caption">
              <h1 class="primary-color" style="text-shadow: 1px 1px 1px white;">
                Ogivas de medição<br /><span class="white-color font-weak"
                  >Saiba mais</span
                >
              </h1>
              <button class="primary-btn">Shop Now</button>
            </div> --}}
          </div>
          <!-- /banner -->

          <!-- banner -->
          <div class="banner banner-1">
            <img   src="{{asset('img/tobanner3_.JPG')}}" alt="" />
            <div class="banner-caption" >
              <h1 class="white-color" style="    text-shadow: 1px 1px 1px black;">Ogivas Diatest <span></span></h1>
                <div style="padding: 15px; margin-top: -10px">
                   <!-- <button class="primary-btn">Saiba Mais</button> -->
                </div>
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

  <!-- SOBRE A EMPRESA -->
    <div class="container-fluid" >
        <div class="row">

        </div>
    </div>



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
          <div class="row" id="products_">


              @foreach ($products as $p)

              <div class='product product-single col-md-3 col-xs-3 col-lg-3'>
                  <div class='product-thumb'>
                    <!-- <button class='main-btn quick-view'>
                      <i class='fa fa-search-plus'></i> Quick view
                    </button> -->

                    <!--<img
                      src='http://diatest.com.br/uploads/images/$image'
                      alt=''
                    />-->
                    <img src="http://diatest.com.br/uploads/images/{{ $p->iname }}"
                    onerror="this.src='data:image/png;base64,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'"/>

                  </div>
                  <input style="display: none" value="{{ $p->id }}" />
                  <div class='product-body'>
                    <h2 class='product-name'>
                    <a href='{{ url('produto', [$p->slug]) }}'> {{$p->pname}} </a>
                    </h2>
                    <p>{{ $p->reference }}</p>
                    <div class='product-btns'>
                    <a href="{{ url('produto', [$p->slug]) }}" class="primary-btn add-to-cart" style="width: 100%; text-align:center">
                        + Detalhes
                    </a>
                    </div>
                  </div>
                </div>
              @endforeach


          </div>
        </div>
        <!-- /Product Slick -->
      </div>
      <!-- /row -->
    </div>
  </div>


@endsection
