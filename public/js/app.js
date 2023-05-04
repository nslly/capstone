$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    }); 

    $('.bookModal').on('click', function(e){
        $('#interestModal').removeClass('invisible');
    });
    $('.closeModal').on('click', function(e){
        $('#interestModal').addClass('invisible');
    });

    $('.deleteModal').on('click', function(e){
        $('#popup-modal-delete').removeClass('invisible');
    });
    $('.closeDeleteModal').on('click', function(e){
        $('#popup-modal-delete').addClass('invisible');
    });

});