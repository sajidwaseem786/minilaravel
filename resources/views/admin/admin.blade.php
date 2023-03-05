@extends('layouts.app')

@section('content')
 <link rel="stylesheet" href="css/videotutorial2.0.css" type="text/css">
<div class="bg-img-menu">
        </div>

<nav class="top-bar" data-topbar role="navigation">
 <ul class="title-area">
   <li class="name">
    <a class="other" href="https://sivarfacturas.fiomega.net/backend/"><img src="img/LG.png" alt="GuateFacturas"></a>
	</li>

</ul>

        <section class="top-bar-section">
                  <!-- Right Nav Section -->
            <ul class="right">
            	<li>
    <a class="other" href="{{url('users')}}">Usuarios</a>
	</li>
  <li>
    <a class="other" href="{{url('show_categories')}}">Agregar categoría</a>
  </li>
    <li>
    <a class="other" href="{{url('show_subcategories')}}">Agregar subcategoría</a>
  </li>
     <li>
    <a class="other" href="{{url('showVideos')}}">Agregar tutorial</a>
  </li>
   <li id="back"></li>
            @guest
      <li><a  href="{{ route('login') }}">{{ __('Acceso') }}</a></li>
                         
                        @else
                          <li><a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
                            </li>
                        @endguest
                        
            </ul>
          </section>
                </nav>

<div class="row full section-size videotutoriales2">
 <table>
    <tbody id="bodytable">
	</tbody>
          </table>
<div class="columns large-12 titulos">
      <h1>Total de usuarias: {{$TotalUsers[0]->totalUsers}} </h1>
      <h1>Categorías totales: {{$categories[0]->totalcategories}} </h1>
      <h1>Subcategorías totales: {{$subcategories[0]->totalsubcategories}}</h1>
      <h1>Vídeos totales: {{$tutorials[0]->totaltutorials}} </h1>
    </div>

 
 
</div>
@endsection
