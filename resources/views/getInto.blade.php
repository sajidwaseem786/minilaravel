@extends('layouts.app')
@section('content')
    <style type="text/css">
    
    @charset "UTF-8";

@font-face {
  font-family: "guatefacturas-font";
  src:url("fonts/guatefacturas-font.eot");
  src:url("fonts/guatefacturas-font.eot?#iefix") format("embedded-opentype"),
    url("fonts/guatefacturas-font.woff") format("woff"),
    url("fonts/guatefacturas-font.ttf") format("truetype"),
    url("fonts/guatefacturas-font.svg#guatefacturas-font") format("svg");
  font-weight: normal;
  font-style: normal;

}

[data-icon]:before {
  font-family: "guatefacturas-font" !important;
  content: attr(data-icon);
  font-style: normal !important;
  font-weight: normal !important;
  font-variant: normal !important;
  text-transform: none !important;
  speak: none;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

[class^="icon-"]:before,
[class*=" icon-"]:before {
  font-family: "guatefacturas-font" !important;
  font-style: normal !important;
  font-weight: normal !important;
  font-variant: normal !important;
  text-transform: none !important;
  speak: none;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.icon-guatefacturas-anterior:before {
  content: "\61";
}
.icon-guatefacturas-encuesta:before {
  content: "\63";
}
.icon-guatefacturas-regresar:before {
  content: "\64";
}
.icon-guatefacturas-siguiente:before {
  content: "\65";
}
.icon-guatefacturas-video:before {
  content: "\66";
}
.icon-guatefacturas-home:before {
  content: "\62";
}

      .logged h1 {
        font-size: 1.375rem;
        color: #0055a5;
        margin-bottom: 10px;
        text-align: center;

      }



      a.tutobutton {
        top: 22px;
        width: 65%;
        margin-bottom: 30px !important;
      }


      .tabs dd.active a, .tabs .tab-title.active a {
        background-color: transparent;
        color: white;
        /* border: solid 2px white; */
        /* border-radius: 223px !important; */
        border-bottom: solid 2px white;
        border-radius: none;
      }

      .tabs dd > a, .tabs .tab-title > a:hover{


      }





    </style>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="bg-img-menu">

    </div>
     @extends('layouts.nav')
<div class="row full section-size">
  <div class="large-12 large-offset-0 medium-10 medium-offset-1 small-offset-0 small-12 columns">

 
  <div class="tabla">
    <h1 style="color: white;font-size: 33px;font-weight: lighter;">Videotutoriales de</h1><h1 style="color: white; font-size: 33px;"><b>Factura Electrónica</b> </h1><table border="1">
       
      
      <tbody>
        <tr class="nohover">
          <td class="sinborderleft" width="15%">Categoría</td>
          <td width="50%">Descripción</td>
          <td width="10%">Duración</td>
          <td width="5%">Ver</td>
        </tr>
<?php foreach($videos as $video){ ?>
        <tr class="nohover">
          <td class="sinborderleft ">{{$video->category_name}}</td>
          <td>{{$video->description}}</td>
          <td>{{$video->duration}}</td>
          <td><a href="/backend/public/files/{{$video->filepath}}"><i class="fa fa-solid fa-play"></i></a></td>
          
      
        </tr>
<?php } ?>

      </tbody>

    </table>

  <p class="sinvideo">*En caso el videotutorial no indique una evaluación, no es necesario efectuarla</p>
  </div>
  </div>

</div>
<script>
    document.getElementById("back").innerHTML="<a href='https://sivarfacturas.fiomega.net/backend/'>Regresar a menú principal</a>";
</script>
@endsection