

$(function() {

  $("#search-term").keyup(function() {

      str = $(this).val();

      if(str=='') {
        return null;
      }
      else {
      
        if(str.length === 3){

          var finalMsg = str.replace(/ /g, '-');

          $.ajax({

              type: "GET",

              url: "/search/image?q="+str,
            
              cache: false,

              beforeSend: function() {
            
                document.getElementById("search-term").innerHTML = '';
              },

              success: function(data){
              
                var availableTags = new Array(); 
             
                data.forEach(function(image) {

                  var msg = image.slug;

                  var finalMsg = msg.replace(/-/g, ' ');

                  availableTags.push(finalMsg);  

                  console.log(availableTags);             

                  $( "#search-term" ).autocomplete({

                      source: availableTags
                      
                    });
                }); 

                return false;

              }
          });
        }  
      }
      return false;
  });
});


