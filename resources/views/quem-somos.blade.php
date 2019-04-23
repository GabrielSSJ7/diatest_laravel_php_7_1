@extends('layouts.main')

@section('title', "Contato")

@section('content')
{{--
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
              @if (!empty($categories))
              <ul id="lista-categorias" class="category-list">
                @foreach ($categories as $category)

                  <li class="dropdown side-dropdown">
                          <a
                          class="dropdown-toggle"
                          data-toggle="dropdown"
                          aria-expanded="true"
                          ><i class="fa fa-angle-right"></i
                          >
                          {{ $category[0]}}</a>
                          @if (count($category) > 1)
                              <div class="custom-menu">
                                  <div class="row">
                                  <div class="col-md-12">
                                      <ul class="list-links">
                                          <li>
                                          <h3 class="list-links-title">{{ $category[0]}}</h3>
                                          </li>

                                          @foreach ($category[1] as $sub)
                                        <li><a href="{{ 'produtos/'.$sub['subSlug']}}">{{ $sub['subName']}}</a></li>
                                          @endforeach

                                      </ul>
                                  </div>
                                  </div>
                              </div>
                          @endif
                  </li>
                @endforeach

            </ul>
              @endif

                  </div>
                <!-- /category nav -->

            <!-- menu nav -->
            <div class="menu-nav">
              <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
              <ul class="menu-list">
                  <li><a href="{{ url('/') }}">Home</a></li>
                  <li><a href="{{ url('/quem-somos') }}">Quem Somos</a></li>
                  <li><a href="{{ url('/contato') }}">Contato</a></li>
                <li><a href="http://blog.diatest.com.br/">Blog</a></li>
                <li class="dropdown default-dropdown">
                  <a
                    class="dropdown-toggle"
                    data-toggle="dropdown"
                    aria-expanded="true"
                    >Marcas <i class="fa fa-caret-down"></i
                  ></a>
                  <ul class="custom-menu">
                    @foreach ($factories as $factory)
                      <li class="li-fac"><a href="{{ url('produtos/fabricante', ['slug'=>$factory->slug]) }}">{{$factory->name}}</a></li>
                    @endforeach
                  </ul>
                </li>
              </ul>
            </div>
            <!-- menu nav -->
          </div>
        </div>
        <!-- /container -->
      </div>
      <!-- /NAVIGATION --> --}}

      <div class="temos-anos" style="position: relative; color: white;">
        <div id="texto-temos-anos" style="position: absolute;/* top: 0; */bottom: 80px;left: 100px;right: 0;">
            <h1 style="color: white">Somos uma multinacional</h1> <h1 style="color: white">com mais de 70 anos de mercado.</h1>
        </div>
      </div>


    <!-- HOME -->
    <div id="home"  style="padding: 45px 0;  " >
            <!-- container -->
            <div class="container" >
            <div class="col-md-12 div-quemsomos"  style="background-color: #fff; opacity: 0.8; float:left">

                <div  id="texto-quem-somos"  style="padding: 25px 5px 25px 25px  ">
                    <div class="section-title">
                            <h2 class="title" style="color: #005baa">Quem Somos</h2>
                            <div class="pull-right">
                                <div class="product-slick-dots-1 custom-dots"></div>
                            </div>
                    </div>
                    <!-- home wrap -->
                    <div style="text-align: justify; font-size: 19px; color: #000; ">
                        <p>Há mais de 70 anos, em 1948 era fundada pelo Sr. Hermann Költgen, na cidade de Darmstadt - Alemanha; a Hermann Költgen GmbH; empresa que se tornaria mais tarde mundialmente
                        conhecida pela marca DIATEST, pelo seu protagonismo, e pela alta qualidade e desempenho de seus produtos e serviços.
                        Alavancada pelo ambicioso plano de expandir ainda mais sua liderança global, a DIATEST se estabeleceu no Brasil em 2008,
                        após 14 anos atuando através de um parceiro, representante local. Neste mesmo momento foram agregadas à operação no Brasil outras marcas de importante expressão
                        no cenário da metrologia mundial. Parceiros que são também protagonistas em suas áreas de atuação.</p>

                        <p>A DIATEST do BRASIL tem como objetivo tornar-se o parceiro ideal para os desafios da metrologia aplicada ao chão de fábrica. Oferecemos serviços
                        de consultoria gratuita em Metrologia para empresas que queiram aprimorar seus processos de medição, minimizando os riscos e promovendo ganhos, com equipe
                        treinada e capacitada nos fabricantes.</p>

                        <p>Trabalhamos com produtos de alta tecnologia, e na configuração de meios de controle, que fornecem nova dinâmica aos processos de medição,
                        e que vão impactar positivamente no sucesso do seu produto.</p>
                    </div>
                    <!-- /home wrap -->
                </div>
            </div>
        </div>
            <!-- /container -->



          <!-- /HOME -->

          <!-- section -->
          <div class="section">
            <!-- container -->
            <div class="container">
              <!-- row -->
              <div class="row">

              <!-- /row -->
            </div>
          </div>
          </div>
          </div>

@endsection
