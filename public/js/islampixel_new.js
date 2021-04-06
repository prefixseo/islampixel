$(document).ready(function(){
    let html = '';
    var darudPixelTimer;

    for(c=1; c <= 1200; c++){
        if(taken.includes(c)){
            var cntry_index = taken.indexOf(c);
            html += '<p class="taken fflag fflag-'+taken_country[cntry_index]+' ff-sm" data-taken="true" data-boxid="'+c+'"></p>';
        }else{
            html += '<p data-boxid="'+c+'"></p>';
        }
    }
    $('.ipx-pixel-container').append(html);

    $('.ipx-pixel-container p').on('click',function(){
        var pixelId = $(this).data('boxid');

        if($(this).data('taken'))
        {
            $('.ipx-modal-content form').hide();
            $('.ipx-modal-header').html('');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            //-- Retrive Profile
            $.ajax({
                type: "POST",
                url: ajaxUrl,
                data: { pixel : pixelId },
                success:function( data ) {
                    $('.ipx-modal-header').html(data);
                },
                error: function(errorThrown){
                    console.log(errorThrown); // error
                    $('#ipx-profile-modal').fadeOut();
                }
            });
        }else{
            var darud = "<div class=\'ipx-modal-darud\'>"+
            "اللَّهمَّ صلِّ على محمَّدٍ وعلى آلِ محمَّدٍ"+
            "كما صلَّيْتَ على إبراهيمَ وعلى آلِ إبراهيمَ ، إنَّك حميدٌ مجيدٌ<br><br>"+
            "اللَّهمَّ بارِكْ على محمَّدٍ وعلى آلِ محمَّدٍ"+
            "كما باركْتَ على إبراهيمَ وعلى آلِ إبراهيمَ ، إنَّك حميدٌ مجيدٌ</div>";
            $('.ipx-modal-content form').fadeIn();

            // -- Timer
            darudPixelTimer = setInterval(myTimer, 1000);
            var sec = 15;
            // -- timer Handeler
            function myTimer() {
                $("#ipx-darud-timer").text("Login will be active in " +sec+ " s").fadeIn();
                sec--;
                if(sec == 0){
                    $("#ipx-darud-timer").fadeOut();
                    $('.ipx-social-login-area button').prop('disabled', false);
                    clearInterval(darudPixelTimer);
                }
            }


            $('.ipx-modal-header').html('<div>Recite, Login and Own Pixel'+darud+'</div>');
            $('#pixelIdVal').val(pixelId);
        }

        $('#ipx-profile-modal').fadeIn();
    });

    $('#ipx-profile-modal .close').click(function(){
        $('#ipx-profile-modal').fadeOut();
        clearInterval(darudPixelTimer);
        $("#ipx-darud-timer").fadeOut();
        $('.ipx-social-login-area button').prop('disabled', true);
        
    });

});