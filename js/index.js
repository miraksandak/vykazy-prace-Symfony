$(document).ready(function(){
    
    $('.timepicker').timepicker({
        timeFormat: 'HH:mm',
        interval: 30,
        dynamic: false,
        dropdown: true,
        scrollbar: true
    });

    setTimeout(function() {
        $('.alert-danger').fadeOut('slow');
    }, 3000);

})

