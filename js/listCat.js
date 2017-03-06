  $(document).ready(function() {

      var debug=false;
        $.ajax({
          url: '../php/getlistCat.php',
          type: 'GET',
          dataType: 'json',
          success: function(result){
            console.log(result);
            var tbl_body = "";
            $.each(result.query, function() {
              if (debug) console.log("pintando");
              var tbl_row = "";
              $.each(this, function(campo , valor) {
                if(campo=="foto"){
                  tbl_row += "<td>"
                    +"<img class='z-depth-3' src='../"
                    +valor
                    +"' width='90px'>"
                    +"</td>"
                    console.log(tbl_row);
                  }
                  else {
              tbl_row += "<td>"+valor+"</td>";
            }
              console.log(campo);
               });
               tbl_body += "<tr>"+tbl_row+"</tr>";
               });
                if (debug) console.log("tbl_body");
                 $("#listado tbody").html(tbl_body);
                },
          error: function(result){
            alert("error!!");
          }
        });
          
   });