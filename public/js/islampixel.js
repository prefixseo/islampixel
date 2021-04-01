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
    $('.customgridwrap').append(html);

    $('.customgridwrap p').click(function(){
        var pixelId = $(this).data('boxid');

        if($(this).data('taken'))
        {
            $('#loginUserPixelModalLabel').text('Pixel Owned By');
            $('#daroodCheck').hide();
            $('.modal-body .login-form').hide();
            $('.profile-data').show();
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
                    $('.profile-data').html(data);
                },
                error: function(errorThrown){
                    console.log(errorThrown); // error
                }
            });

        }else{
            $('#loginUserPixelModalLabel').text('Recite & Own Pixel');
            $('#daroodCheck').show();
            $('.profile-data').html("<div class='myloader'></div>");
            $('.profile-data').hide();
            $('#pixelIdVal').val(pixelId);
            $('.modal-body .login-form').show();
        }

        $('#loginUserPixelModal').modal();
    });

    $('#loginUserPixelModal').on('hidden.bs.modal', function () {
        $('.profile-data').html("<div class='myloader'></div>");
    });


    // -- Enable disable login if darood not read
    $('#daroodConfirmation').on('change',function(){
        if($('#daroodConfirmation').prop('checked')){
            $('.login-btn-after-darood').attr('disabled', false);
        }else{
            $('.login-btn-after-darood').attr('disabled', true);
        }
    });
});