$(document).ready(function(){
    $('.chat_icon').click(function(event){
        // act on event
        $('.chat_box').toggleClass('active');
    });
    $('conv-form-wrapper').convform({selectInputStyle: 'disable'});
})