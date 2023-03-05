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
<div class="row full section-size"style="max-width: 113.5rem !important">
  <div class="large-12 large-offset-0 medium-10 medium-offset-1 small-offset-0 small-12 columns">
  <div class="tabla">
    <h1 style="color: white;font-size: 33px;font-weight: lighter;">Vídeos</h1><table border="1">
       
        <h1 style="font-size: 33px;font-weight: lighter;"><a href="{{url('createVideo')}}" style="color:white;text-decoration: none;float: left;">Añadir video</a></h1>

        <table border="1">  
      <tbody>
        <tr class="nohover">
          <td class="sinborderleft" width="5%">Identificación del tutorial</td>
          <td width="15%">Categoría principal </td>
          <td width="15%">Categoría infantil </td>
          <td width="15%">Tipo </td>
          <td width="15%">Duración</td>
          <td width="15%">Permiso</td>
          <td width="20%">Descripción</td>
          <td width="20%">Camino</td>
        </tr>
<?php 
$i=1;
foreach ($videos as $video) {
      ?>
        <tr class="nohover">
        <td class="sinborderleft " >{{$i}}</td>
        <td class="sinborderleft " >{{$video->category_name}}</td>
        <td class="sinborderleft " >{{$video->subcategoryName}}</td>
        <td class="sinborderleft " ><?php if($video->type==1) echo "video"; else echo "document" ?></td>
        <td class="sinborderleft " >{{$video->duration}}</td>
        <td class="sinborderleft " ><?php if($video->permission=='all') echo "All";else echo $video->name; ?></td>
        <td class="sinborderleft " >{{$video->description}}</td>
        <td class="sinborderleft " ><a href="/backend/public/files/{{$video->filepath}}">Ir</a></td>
       </tr> 
     <?php 
     $i++;
    }
    ?>

      </tbody>

    </table>

  </div>
 

  </div>

</div>
<script>
    document.getElementById("back").innerHTML="<a href='https://sivarfacturas.fiomega.net/backend/'>Regresar a menú principal</a>";
</script>
@endsection