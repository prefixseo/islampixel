$(document).ready(function(){
    let html = '';
    for(c=1; c <= 500; c++){
        if(taken.includes(c)){
            var cntry_index = taken.indexOf(c);
            html += '<p class="taken fflag fflag-'+taken_country[cntry_index]+' ff-app ff-sm" data-taken="true" data-boxid="'+c+'"></p>';
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
                }
            });
        }else{
            $('.ipx-modal-content form').fadeIn();
            $('.ipx-modal-header').html('<div>Recite, Login and Own Pixel</div>');
            $('#pixelIdVal').val(pixelId);
        }

        $('#ipx-profile-modal').fadeIn();
    });

    $('#ipx-profile-modal .close').click(function(){
        $('#ipx-profile-modal').fadeOut();
    });

    // -- Enable disable login if darood not read
    // $('#daroodConfirmation').on('change',function(){
    //     if($('#daroodConfirmation').prop('checked')){
    //         $('.login-btn-after-darood').attr('disabled', false);
    //     }else{
    //         $('.login-btn-after-darood').attr('disabled', true);
    //     }
    // });
});