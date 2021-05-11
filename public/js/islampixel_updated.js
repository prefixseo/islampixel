$(document).ready(function(){
    let html = '';
    var darudPixelTimer;


    var darud_audio_player_obj = document.createElement('audio');
    darud_audio_player_obj.setAttribute('preload', "none");
    darud_audio_player_obj.setAttribute('src', darud_audio_url);
    

    

    for(c=1; c <= 10000; c++){
        if(taken.includes(c)){
            var cntry_index = taken.indexOf(c);
            html += '<p class="taken x'+taken_emoji_name[cntry_index].split('.')[0]+'" data-taken="true" data-boxid="'+c+'"></p>';
        }else{
            html += '<p data-boxid="'+c+'"></p>';
        }
    }

    $('.ipx-pixel-container').append(html);

    $('.ipx-pixel-container p').on('click',function(){
        var pixelId = $(this).data('boxid');
        // -- Ajax Protection
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        if($(this).data('taken'))
        {
            //-- Retrive Profile
            $.ajax({
                type: "POST",
                url: checkRequestPixelStatusUri,
                data: { pixel : pixelId },
                success:function( data ) {
                    if(data == 'deactive'){
                        alert('Pixel Already Taken & Not Activated Yet');
                    }else{
                        let goto = JSON.parse(data);
                        window.open(goto.weburl);
                    }
                },
                error: function(errorThrown){
                    console.log(errorThrown); // error
                }
            });
        }else{
            if(!loggedin) { window.location = homeUrl + '/login'; return;}
            var darud = "<div class=\'ipx-modal-darud\'>"+
            "اللَّهمَّ صلِّ على محمَّدٍ وعلى آلِ محمَّدٍ"+
            "كما صلَّيْتَ على إبراهيمَ وعلى آلِ إبراهيمَ ، إنَّك حميدٌ مجيدٌ<br><br>"+
            "اللَّهمَّ بارِكْ على محمَّدٍ وعلى آلِ محمَّدٍ"+
            "كما باركْتَ على إبراهيمَ وعلى آلِ إبراهيمَ ، إنَّك حميدٌ مجيدٌ</div>";
            $('.ipx-modal-content form').fadeIn();

            
            $('.ipx-modal-header').html('<div>'+darud+'</div>');

            $('#ipx-profile-modal').fadeIn();
            darud_audio_player_obj.play();

            // -- Timer
            darudPixelTimer = setInterval(myTimer, 1000);
            var sec = 56;
            // -- timer Handeler
            function myTimer() {
                if(sec < 10){
                    $("#timer_count").text("00:0" +sec);
                }else{
                    $("#timer_count").text("00:" +sec);
                }
                sec--;
                if(sec == 0){
                    $("#timer_count").fadeOut();
                    clearInterval(darudPixelTimer);
                }
            }

            darud_audio_player_obj.addEventListener('ended', function() {
                $.ajax({
                    type: "POST",
                    url: darudListenedPingbackUri,
                    data: { pixel : pixelId },
                    success:function( data ) {
                        window.location = homeUrl + '/picked-pixel/' + data;
                    },
                    error: function(errorThrown){
                        console.log(errorThrown); // error
                    }
                });
            }, false);
        }
    });

    $('#ipx-profile-modal .close').on('click',function(){
        $('#ipx-profile-modal').fadeOut();
        // -- audio stop
        darud_audio_player_obj.pause();
        darud_audio_player_obj.currentTime = 0;
        //-- model off
        clearInterval(darudPixelTimer);
    });

});