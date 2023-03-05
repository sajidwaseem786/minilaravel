@extends('layouts.app')

@section('content')
 <link rel="stylesheet" href="css/videotutorial2.0.css" type="text/css">
<div class="bg-img-menu">
        </div>
        @extends('layouts.nav')
<div class="row full section-size videotutoriales2">
 

   <table>
            <tbody id="bodytable">

            </tbody>
          </table>


          

    <div class="columns large-12 titulos">
      <h1>ÍNDICE </h1>
      <h2>VIDEOTUTORIALES</h2>
    </div>

      <?php foreach($categories as $cat){?>
      <div id="seccion1" class="columns large-12" style="display: block;">
        <div class="columns large-12 video-borde">
          <div class="columns large-9">
            <h3>Videotutoriales de <strong>{{$cat->category_name}}</strong></h3> 
          </div>
          <div class="columns large-3">
            <a href="{{ url('getInto') }}/{{$cat->id}}" class="button default-action2">Ingresar</a>
          </div>
        </div>
      </div>

    <?php } ?> 
 
</div>
@endsection
