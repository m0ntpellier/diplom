<script>
    $('#data').datepicker()
    $('select').each(function(){
	    $(this).siblings('p').text( $(this).children('option:selected').text() );
    });
    $('select').change(function(){
        $(this).siblings('p').text( $(this).children('option:selected').text() );
    });
</script> 
<script type="text/javascript">
    $('.btnGamb').on("click",function(){
        $('.btnGamb').toggleClass('btnc');
        $('.sidebar').toggleClass('side');
    });
</script>
<script>
    (function() {
   'use strict';
   $('.input-file').each(function() {
     var $input = $(this),
         $label = $input.next('.js-labelFile'),
         labelVal = $label.html();
      
    $input.on('change', function(element) {
       var fileName = '';
       if (element.target.value) fileName = element.target.value.split('\\').pop();
       fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
    });
    });
    })();
</script>
<script>
        $(document).ready(function(){
            $('#send').click(function () {
            $("#block").removeClass('tew');
            });
        });
</script>
<script>
    document.getElementById("clear").onclick = function(e){
        document.getElementById("name").value = "";
        document.getElementById("genre").value = "";
        document.getElementById("producer").value = "";
        document.getElementById("dateFrom").value = "";
        document.getElementById("dateTo").value = "";
        document.getElementById("description").value = "";
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>