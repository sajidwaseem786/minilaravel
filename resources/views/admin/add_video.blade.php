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
  <form action="{{url('storeVideo')}}" method="POST" enctype="multipart/form-data">
    @csrf
   <div class="form-group">
    <label>seleccionar categoría principal:</label>
    <select name="parentcategory_name" class="form-control" style="color:black !important" required>
    <?php
    foreach($subcategories as $cat){
    	$pId = $cat->id;
    	echo "<option value='$pId'>".$cat->category_name."</option>";
    }

     ?>
    </select>
  </div>

   <div class="form-group">
    <label>seleccionar categoría infantil:</label>
    <select name="childcategory_name" class="form-control" style="color:black !important" required>
    <?php
    foreach($subcategories as $cat){
    	$pId = $cat->id;
    	echo "<option value='$pId'>".$cat->subcategoryName."</option>";
    }

     ?>
    </select>
  </div>

  <div class="form-group">
    <label>tipo de tutorial:</label>
    <select name="typedoc" class="form-control" style="color:black !important" required>
    	<option value="1">video</option>
    	<option value="2">document</option>
    </select>
  </div>
 
  <div class="form-group">
    <label>duración (en minutos):</label>
    <input type="text" name="duration" class="form-control" style="color:black !important" required>
  </div>

<div class="form-group">
    <label>sube el documento:</label>
    <input type="file" name="file" id="file" class="form-control" style="color:black !important" required>
  </div>

 <div class="form-group">
    <label>asignado a:</label>
    <select name="permission" class="form-control" style="color:black !important" required>
    	<option value="all">Todas las usuarias </option>
    	<?php foreach($users as $user){
    		$uid = $user->id;
    		echo "<option value='$uid'>".$user->name."</option>";
    	}?>
    </select>
  </div>

 <div class="form-group">
    <label>duración (en minutos):</label>
    <textarea name="description" class="form-control" style="color:black !important" required></textarea> 
  </div>


  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div>
<script>

    document.getElementById("back").innerHTML="<a href='https://sivarfacturas.fiomega.net/backend/'>Regresar a menú principal</a>";
  
</script>
@endsection