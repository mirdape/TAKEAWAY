 $(document).ready(function() {
      var debug=true;
      $('select').material_select();

      $("#formCat").submit(function(event){
        event.preventDefault();//Evita refresch automático que se produce al enviar el form
        //esta es la forma de obtener datos del formulario y convertirlo en formato JSON.
        var jsonData= JSON.stringify($ ("#formCat").serializeArray());
        if (debug) console.log("Datos en Json:");
        if (debug) console.log(jsonData);
        $.ajax({
          url: '../php/recibeCat.php',
          type: 'POST',
          dataType: 'json',
          data: jsonData,
          success: function(result){
          
            console.log(result.sql);
            if (result.error===0){Materialize.toast('Categoría creada', 4000);
            $('#formCat')[0].reset(); // Borrar el contenido del formulario
            }
            else{Materialize.toast('Error al crear categoría', 6000);
            $('#formCat').trigger("reset"); // También se puede usar para borrar el contenido
            }
          },
          error: function(result){
            alert("error¡¡");
          }
        })
          
      });
   });