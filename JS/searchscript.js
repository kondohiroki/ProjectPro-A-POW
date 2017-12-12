$(document).ready(function(){
     load_data();
     function load_data(query)
     {
      $.ajax({
       url:"../showpro.php",
       method:"POST",
       data:{query:query},
       success:function(data)
       {
        $('#result').html(data);
       }
      });
     }
     $('#search_text').keyup(function(){
      var searchtext = $(this).val();
      if(searchtext != '')
      {
       load_data(searchtext);
      }
      else
      {
       load_data();
      }
     });
    });