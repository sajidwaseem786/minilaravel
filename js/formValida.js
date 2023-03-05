
    function nitIsValidPersona(nitPersona) {


        if (!nitPersona) {
            return true;
        }

        var nitRegExp = new RegExp('^[0-9]+(-?[0-9kK])?$');

        if (!nitRegExp.test(nitPersona)) {
            return false;
        }

        nitPersona = nitPersona.replace(/-/, '');
        var lastChar = nitPersona.length - 1;
        var number = nitPersona.substring(0, lastChar);
        var expectedChekerPersona = nitPersona.substring(lastChar, lastChar + 1).toLowerCase();

        var factor = number.length + 1;
        var total = 0;

        for (var i = 0; i < number.length; i++) {
            var character = number.substring(i, i + 1);
            var digit = parseInt(character, 10);

            total += (digit * factor);
            factor = factor - 1;
        }

        var modulus = (11 - (total % 11)) % 11;
        var computedCheckerPersona = (modulus == 10 ? "k" : modulus.toString());

        /* return expectedCheker === computedChecker;*/

       /* muestraerrorPersona(expectedChekerPersona,computedCheckerPersona);*/




      $(document).foundation({
            abide: {            
                validators: {
  myNitPersona: function (el, required, parent) {
    var validRegExpMonto = /^[0-9]+(-?[0-9kK])?$/;

     if (el.value.length == 0) {
                        document.getElementById('nameError').innerText = "Ingresa nit.";
                        return false;

              } else      if (expectedChekerPersona != computedCheckerPersona) {           
 document.getElementById('nameError').innerText =  "Nit no válido.";
                    return false;
                    } //other rules can go here
                    return  true;
           }

         }
     }   
 });



    }





function nitIsValidEmpresa(nitEmpresa) {

        if (!nitEmpresa) {
            return true;
        }

        var nitRegExp = new RegExp('^[0-9]+(-?[0-9kK])?$');

        if (!nitRegExp.test(nitEmpresa)) {
            return false;
        }

        nitEmpresa = nitEmpresa.replace(/-/, '');
        var lastChar = nitEmpresa.length - 1;
        var number = nitEmpresa.substring(0, lastChar);
        var expectedChekerEmpresa = nitEmpresa.substring(lastChar, lastChar + 1).toLowerCase();

        var factor = number.length + 1;
        var total = 0;

        for (var i = 0; i < number.length; i++) {
            var character = number.substring(i, i + 1);
            var digit = parseInt(character, 10);

            total += (digit * factor);
            factor = factor - 1;
        }

        var modulus = (11 - (total % 11)) % 11;
        var computedCheckerEmpresa = (modulus == 10 ? "k" : modulus.toString());

        /* return expectedCheker === computedChecker;*/

            $(document).foundation({
            abide: {            
                validators: {
  myNitEmpresa: function (el, required, parent) {
    var validRegExpMonto = /^[0-9]+(-?[0-9kK])?$/;

     if (el.value.length == 0) {
                        document.getElementById('nameError1').innerText = "Ingresa nit.";
                        return false;

              } else      if (expectedChekerEmpresa != computedCheckerEmpresa) {           
 document.getElementById('nameError1').innerText =  "Nit no válido.";
                    return false;
                    } //other rules can go here


                    return true;
           }
         }
     }   
 });

    }





      $(document).foundation({
            abide: {            
                validators: {
  myNitPersona: function (el, required, parent) {
    var validRegExpMonto = /^[0-9]+(-?[0-9kK])?$/;

     if (el.value.length == 0) {
                        document.getElementById('nameError').innerText = "Ingresa nit.";
                        return false;

              } else      if (expectedChekerPersona != computedCheckerPersona) {           
 document.getElementById('nameError').innerText =  "Nit no válido.";
                    return false;
                    } //other rules can go here
                    return  true;
           },


             myNitEmpresa: function (el, required, parent) {
    var validRegExpMonto = /^[0-9]+(-?[0-9kK])?$/;

     if (el.value.length == 0) {
                        document.getElementById('nameError1').innerText = "Ingresa nit.";
                        return false;

              } else      if (expectedChekerEmpresa != computedCheckerEmpresa) {           
 document.getElementById('nameError1').innerText =  "Nit no válido.";
                    return false;
                    } //other rules can go here
                    return true;
           }


           

         }
     }   
 });
