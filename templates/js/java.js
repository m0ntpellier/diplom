
        // ---------------------------------LoadPage---------------------------------

        // ---------------------------------CARD---------------------------------

            // ----------------Кнопка "О фильме"-------------------
        $('.aboutfilm').each(function() {
            $(this).on('click', () => {
                $(this).parent().find('.test').addClass('card-text-change');
                $(this).parent().find('.card-text').css('opacity', '1');
                $(this).parent().find('.closer').css('opacity', '1');
                $(this).parent().find('.when').css('opacity', '1');
                $(this).parent().find('.janr').css('opacity', '1');
                $(this).parent().find('.author').css('opacity', '1');   
                $(this).parent().find('.buy').css('opacity', '0');             
                $(this).css('display','none');
            })
        });
             // ----------------Кнопка "Закрыть"-------------------
        $('.closer').each(function() {
            $(this).on('click', () => {
                $(this).parent().find('.test').removeClass('card-text-change');
                $(this).parent().find('.card-text').css('opacity', '0');
                $(this).parent().find('.closer').css('opacity', '0');
                $(this).parent().find('.when').css('opacity', '0');
                $(this).parent().find('.janr').css('opacity', '0');
                $(this).parent().find('.author').css('opacity', '0');
                $(this).parent().find('.buy').css('opacity', '1');  
                $(this).next('.aboutfilm').show();
            })
        });
            // ----------------Кнопка "Купить"-------------------       
        $('.buy').each(function() {
            $(this).on('click', () => {
                $(this).css('opacity','0');
            
                $(this).next('.aboutfilm').show();
            })
        }); 
                
// ---------------------------------ModalWindowHowToBuy---------------------------------

// $('.popup .close_window, .overlay').click(function (){
//     $('.popup, .overlay').css({'opacity': 0, 'visibility': 'hidden'});
//     });
//     $('a.open_window').click(function (e){
//     $('.popup, .overlay').css({'opacity': 1, 'visibility': 'visible'});
//     e.preventDefault();
// });


// ---------------------------------ArrowUp---------------------------------
        $(document).ready(function(){
 
            $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
            $('.scrollup').css('opacity',1);
            } else {
            $('.scrollup').fadeOut();
            }
            });
            $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
            });           
        });

