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

     @extends('layouts.nav')
<div class="row full section-size">
  <form action="{{url('update_user')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$user->id}}">
  <div class="form-group">
    <label>Nombre del Negocio:</label>
    <input type="text" name="bName" class="form-control" value="{{$user->name}}" style="color:black !important" required>
  </div>
  <div class="form-group">
    <label>NIT :</label>
    <input type="text" name="nit" class="form-control"  value="{{$user->nit}}" style="color:black !important" required>
  </div>
   <div class="form-group">
    <label>Teléfono:</label>
    <input type="text" name="phone" class="form-control"  value="{{$user->tell}}" style="color:black !important" required>
  </div>
   <div class="form-group">
    <label>contacto principal:</label>
    <input type="text" name="main_contact" class="form-control"  value="{{$user->mainContact}}" style="color:black !important" required>
  </div>
   <div class="form-group">
    <label>Email:</label>
    <input type="email" name="email" class="form-control"  value="{{$user->email}}" style="color:black !important" required>
  </div>
  
   <div class="form-group">
    <label>DIRECCIÓN:</label>
    <textarea class="form-control" name="address"   style="color:black !important" required>{{$user->address}}</textarea>
  </div>
 
  <button type="submit" class="btn btn-default">Update User</button>
</form>

</div>
<script>

    document.getElementById("back").innerHTML="<a href='https://sivarfacturas.fiomega.net/backend/'>Regresar a menú principal</a>";
  
</script>
@endsection