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
                    @if (!empty($factories))
                      @foreach ($factories as $factory)
                        <li class="li-fac"><a href="{{ url('produtos/fabricante', ['slug'=>$factory->slug]) }}">{{$factory->name}}</a></li>
                      @endforeach
                    @endif
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



<!-- HOME -->
 <div id="home" style="    padding: 45px 0;" >


        <!-- container -->
        <div class="container">
            @if (session('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! session('success') !!}</li>
                </ul>
            </div>
        @endif
              <div class="section-title">
                      <h2 class="title">Contato</h2>
                      <div class="pull-right">
                        <div class="product-slick-dots-1 custom-dots"></div>
                      </div>
                    </div>
          <!-- home wrap -->

          <div id="contato-form" class="col-md-6">
            <form action="{{ url('sendMail') }}" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                  <input type="text" name="nome" id="nome" placeholder="Nome" class="form-control" >
              </div>
              <div class="form-group">
                  <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" class="form-control">
              </div>
              <div class="form-group">
                  <input type="text" name="email" id="email" placeholder="E-Mail" class="form-control">
              </div>
              <div class="form-group">
                  <input type="text" name="empresa" id="empresa" placeholder="Empresa" class="form-control">
              </div>
              <div class="form-group">
                  <input type="text" name="telefone" id="telefone" placeholder="Telefone" class="form-control">
              </div>
              <div class="form-group">
                  <input type="text" name="estado" id="estado" class="form-control" placeholder="Estado">
              </div>
              <div class="form-group">
                  <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade">
              </div>

              <div class="form-group">
                  <textarea type="text" name="duvida" id="duvida" class="form-control" placeholder="Qual sua dúvida / solicitação?" ></textarea>
              </div>

              <button class="primary-btn">Enviar</button>
            </form>
          </div>

          <div class="col-md-6" style="border-left: 1px solid lightgrey; height: 452px;">


              <h3>E-Mail | Telefone</h3>

              <p>info@diatest.com.br</p>
                      <p>(11) 2091-8811</p>
          </div>

          <!-- /home wrap -->
        </div>
        <!-- /container -->
      </div>
      <!-- /HOME -->
@endsection
