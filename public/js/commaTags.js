$(function(){


  $("#tag-name").focus(function() { 

     
        
      $.ajax({

          type: "GET",

          url: "/image/suggested/tags",

          dataType: 'json',

          cache: false,

          beforeSend: function() {

            document.getElementById("tag-name").innerHTML = '';

          },

          success: function(data) {

            var availableTags = new Array(); 
         
            data.forEach(function(image) {

              var msg = image.tag_name;

              availableTags.push(msg); 

            });

            $("#tag-name").smartAutoComplete({source: availableTags, maxResults: 5, delay: 200 } );
          
            $("#tag-name").bind({

               keyIn: function(ev){

                 var tag_list = ev.smartAutocompleteData.query.split(","); 
                
                 ev.smartAutocompleteData.query = $.trim(tag_list[tag_list.length - 1]);
               },

               itemSelect: function(ev, selected_item) { 

                  var options = $(this).smartAutoComplete();

                  var selected_value = $(selected_item).text();

                  var cur_list = $(this).val().split(","); 

                  cur_list[cur_list.length - 1] = selected_value;

                  $(this).val(cur_list.join(",") + ","); 

                  
                  options.setItemSelected(true);

                  $(this).trigger('lostFocus');

                  ev.preventDefault();
              }

            });
          }
      });
  });
});

        
               


   	