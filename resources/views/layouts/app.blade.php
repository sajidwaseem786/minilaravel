
<!DOCTYPE html>
<!--[if IE 9]><html class="no-js lt-ie10" lang="es"> <![endif]-->
    <!--[if gt IE 9]><!-->
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><!--<![endif]-->
    
            <head>


                <!-- mizaguirre@bi.com.gt -->
                <meta charset="utf-8">
                <meta http-equiv="x-ua-compatible" content="ie=edge">
                <title>GuateFacturas - Nosotros nos ocupamos de su facturación y registro</title>
                <meta name="apple-mobile-web-app-capable" content="yes">
                <meta name="format-detection" content="telephone=no">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="format-detection" value="telephone=no">
                 <meta name="csrf-token" content="{{ csrf_token() }}">

                <link rel="stylesheet" href="{{asset('css/chosen.min.css')}}" type="text/css">
                <link rel="stylesheet" href="{{asset('css/foundation.css')}}" type="text/css">
                <link rel="stylesheet" href="{{asset('css/fonts.css')}}" type="text/css">

                <link rel="stylesheet" href="{{asset('css/bancalogged.css')}}" type="text/css">
                <link rel="stylesheet" href="{{asset('css/inputs.css')}}" type="text/css">
                <link rel="stylesheet" href="{{asset('css/header.css')}}" type="text/css">
                <link rel="stylesheet" href="{{asset('css/inicio_sesion.css')}}" type="text/css">
                <link rel="stylesheet" href="{{asset('css/videoStyle.css')}}" type="text/css">
                <script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script>

                <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicon_package_v0.16/apple-touch-icon.png')}}">

                <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon_package_v0.16/favicon-32x32.png')}}">

                <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon_package_v0.16/favicon-16x16.png')}}">

                <link rel="manifest" href="{{asset('img/favicon_package_v0.16/site.webmanifest')}}">

                <meta name="msapplication-TileColor" content="#da532c">

                <meta name="theme-color" content="#ffffff">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142384930-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142384930-1');
</script>




            </head>
            <body class="personal logged home">



        <main class="py-4">
            @yield('content')
        </main>
   
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/foundation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/headroom.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jQuery.headroom.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/chosen.jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/foundation-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bancalogged.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/prestamos_pago.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/localmenu.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/formValida.js')}}"></script>
<script>
$( document).ready(function() {
document.cookie.split(";").forEach(function(c) {
          document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/videotutoriales");
});
                                 function GetCookie(name) {
                                    var arg=name+"=";
                                    var alen=arg.length;
                                    var clen=document.cookie.length;
                                    var i=0;

                                    while (i<clen) {
                                        var j=i+alen;

                                        if (document.cookie.substring(i,j)==arg)
                                            return "1";
                                        i=document.cookie.indexOf(" ",i)+1;
                                        if (i==0)
                                            break;
                                    }

                                    return null;
                                }
                             });

                            $('#addForm').on('valid.fndtn.abide', function() {
                                event.preventDefault(); 

                                var uservalue = $('#Usuario').val();
                                var passvalue = $('#Password').val();

                                $.ajax({                
                                    url: 'https://dte.guatefacturas.com/app/gf/fel/auth/ValidaUsuario',                
                                    type: 'POST',                
                                    headers: {
                                        usuario: uservalue,
                                        clave: passvalue
                                    },
                                    contentType: 'application/x-www-form-urlencoded; charset=UTF-8',                    
                                    success: function (data) {                    
// alert(data);  

//convertimos xml a json




if (getXmlValue(data, 'Resultado') == "NO PERMITIDO"){

    $("#divInvalido").show();
}
else {

    var xml = data,
    xmlDoc = $.parseXML(xml),
    $xml = $(xmlDoc),
    $value = $xml.find("Opciones"),
    values = $value.map(function(i,v) {
        return $(v).text();
    })
    .get()
    .join(', ');




    var myArr = values;
    result = myArr.split(',');

    if(jQuery.inArray("1", result) != -1) {
      //  console.log("is in array");
        var user1 = accessCookie("gfSession1");
        createCookie("gfSession1", user1);  
    } else {
      //  console.log("is NOT in array");
    }

    if(jQuery.inArray("2", result) != -1) {
    //    console.log("is in array");
        var user2 = accessCookie("gfSession2");
        createCookie("gfSession2", user2);
    } else {
//        console.log("is NOT in array");
    }

    if(jQuery.inArray("3", result) != -1) {
  //      console.log("is in array");
        var user3 = accessCookie("gfSession3");
        createCookie("gfSession3", user3);
    } else {
      //  console.log("is NOT in array");
    }


    if(jQuery.inArray("4", result) != -1) {
        //console.log("is in array");
        var user4 = accessCookie("gfSession4");
        createCookie("gfSession4", user4);
    } else {
        //console.log("is NOT in array");
    }

 window.location.href = "generaindice.php";
 
}


},  

error: function (error) {                    
    alert(error);                
}            
});


                            });

                         function accessCookie(cookieName)
                            {
                                var name = cookieName + "=";
                                var allCookieArray = document.cookie.split(';');
                                for(var i=0; i<allCookieArray.length; i++)
                                {
                                    var temp = allCookieArray[i].trim();
                                    if (temp.indexOf(name)==0)
                                        return temp.substring(name.length,temp.length);
                                }
                                return "";
                            }


                            function createCookie(cookieName,cookieValue,daysToExpire)
                            {
                                var date = new Date();
                                date.setTime(date.getTime() + ( 24*60*60*1000));
//date.setTime(date.getTime() + (60 * 1000));
document.cookie = cookieName + "=" + cookieValue + "; expires=" + date.toGMTString();
}




//funcion convertir xml to json

let getXmlValue = function(str, key) {
    return str.substring(
        str.lastIndexOf('<' + key + '>') + ('<' + key + '>').length,
        str.lastIndexOf('</' + key + '>')
        );
}

</script>

</body>
</html>
