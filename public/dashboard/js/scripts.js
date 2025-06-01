(function(window, undefined) {
  'use strict';

  /*
  NOTE:
  ------
  PLACE HERE YOUR OWN JAVASCRIPT CODE IF NEEDED
  WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR JAVASCRIPT CODE PLEASE CONSIDER WRITING YOUR SCRIPT HERE.  */
///  Add Input
    $(document).ready(function(){
      var max_fileds = 10;
      var wrapper = $(".list");
      var add_button = $(".add_button");
      var x = 1;
      $(add_button).click(function(e){
        e.preventDefault();
        if(x < max_fileds){
          x++;
          $(wrapper).append('<div><input type="text" class="form-control" name="home_list_bottom[]" id="account-name" placeholder="" value=""><a href="Javascript:void(0)" class="btn btn-danger remove_filed"><i class="fa fa-minus"></i></a></div>')
        }

      });

      $(wrapper).on("click",".remove_filed", function(e){
        e.preventDefault();
        $(this).parent().remove();
        x--;

      });

    });


    $(document).ready(function(){
      var max_filed = 10;
      var wrapper = $(".lists");
      var add_button = $(".add_button1");
      var y = 1;
      $(add_button).click(function(e){
        e.preventDefault();
        if(y < max_filed){
          y++;
          $(wrapper).append('<div><input type="text" class="form-control" name="home_list[]" placeholder="" value=""><a href="Javascript:void(0)" class="btn btn-danger remove_filed"><i class="fa fa-minus"></i></a></div>')
        }

      });

      $(wrapper).on("click",".remove_filed", function(e){
        e.preventDefault();
        $(this).parent().remove();
        x--;

      });

    });



    $(document).ready(function(){
      var max_filed = 10;
      var wrapper = $(".wh_list");
      var add_button2 = $(".add_button2");
      var z = 1;
      $(add_button2).click(function(e){
        e.preventDefault();
        if(z < max_filed){
          z++;
          $(wrapper).append('<div><input type="text" class="form-control" name="who_list[]" placeholder="" value=""><a href="Javascript:void(0)" class="btn btn-danger remove_filed"><i class="fa fa-minus"></i></a></div>')
        }

      });

      $(wrapper).on("click",".remove_filed", function(e){
        e.preventDefault();
        $(this).parent().remove();
        x--;

      });

    });


    $(document).ready(function(){
      $("#search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });




})(window);
const menu1 = document.querySelector('#menu-1');
if (menu1) {
    new Menu(menu1);
}





