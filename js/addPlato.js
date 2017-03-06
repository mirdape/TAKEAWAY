  $(document).ready(function() {

      var debug=true;
        $.ajax({
          url: '../php/getSelectCat.php',
          type: 'GET',
          dataType: 'json',
          success: function(result){
            console.log(result);
            var etiquetas="";
            var values="";
            var options="";
            $.each(result.query, function() {
              if (debug) console.log("pintando");
              
              $.each(this, function(campo , valor) {
                if (campo=="id") values = valor;
                else etiquetas=valor;
              });  
              options += "<option value='"
                            +values
                            +"'>"
                            +etiquetas
                            +"</option>";  
             });
              if (debug) console.log(options); 
              $("#categoria").html(options);
              $('select').material_select();
           },
          error: function(result){
            alert("error!!");
          }
        });
        //ajax para enviar formulario
          $("#formPlato").submit(function(event){
        event.preventDefault();//Evita refresch automático que se produce al enviar el form
        //esta es la forma de obtener datos del formulario y convertirlo en formato JSON.
        var jsonData= JSON.stringify($ ("#formPlato").serializeArray());
        if (debug) console.log("Datos en Json:");
        if (debug) console.log(jsonData);
        $.ajax({
          url: '../php/recibePlato.php',
          type: 'POST',
          dataType: 'json',
          data: jsonData,
          success: function(result){
          
            console.log(result.sql);
            if (result.error===0){Materialize.toast('Plato creado', 4000);
            $('#formPlato')[0].reset(); // Borrar el contenido del formulario
            }
            else{Materialize.toast('Error al crear plato', 6000);
            $('#formPlato').trigger("reset"); // También se puede usar para borrar el contenido
            }
          },
          error: function(result){
            alert("error¡¡");
          }
        })
          
      });
          
   });