
$(function(){
 
                $( "#estO").autocomplete({
                    
                    source:"Recursos/Autocompletar.php",
                    minLength:2,
                    select: function ( event, ui ) {
                      
                    }
                });
                
                
                $( "#estD").autocomplete({
                    source: "Recursos/Autocompletar.php", 
                    minLength:2,
                    select: function ( event, ui ) {
                                          }
                });
});