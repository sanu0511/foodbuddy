var abc = 0;      // Declaring and defining global increment variable.
$(document).ready(function() {
    //  To add new input file field dynamically, on click of "Add More Files" button below function will be executed.
    $('#add_more').click(function() {
    $(this).before($("<div/>", {
    id: 'filediv'
    }).fadeIn('slow').append($("<input/>", {
    name: 'image_post[]',
    type: 'file',
    id: 'file'
    }), $("<br/><br/>")));
    });
    // Following function will executes on change event of file input to select different file.
    $('body').on('change', '#file', function() {
    if (this.files && this.files[0]) {
    abc += 1; // Incrementing global variable by 1.
    var z = abc - 1;
    var x = $(this).parent().find('#previewimg' + z).remove();
    $(this).before("<div id='abcd" + abc + "' class='abcd'><img class='preview_img_cl' id='previewimg" + abc + "' src=''/></div>");
    var reader = new FileReader();
    reader.onload = imageIsLoaded;
    reader.readAsDataURL(this.files[0]);
    $(this).hide();
    $("#abcd" + abc).append($("<img/>", {
    id: 'img_preview_delete',
    src: 'x.png',
    alt: 'delete'
    }).click(function() {
    $(this).parent().parent().remove();
    }));
    }
    });
    // To Preview Image
    function imageIsLoaded(e) {
    $('#previewimg' + abc).attr('src', e.target.result);
    };
    $('#upload').click(function(e) {
    var name = $(":file").val();
    if (!name) {
    alert("First Image Must Be Selected");
    e.preventDefault();
    }
    });
    $(".view_password").on("click",function(){
        var temp = document.getElementById("user_password");
        if (temp.type === "password") {
            temp.type = "text";
            $(".icon_eye_password").removeClass("glyphicon-eye-open");
            $(".icon_eye_password").addClass("glyphicon-eye-close");
        }
        else {
            temp.type = "password";
            $(".icon_eye_password").removeClass("glyphicon-eye-close");
            $(".icon_eye_password").addClass("glyphicon-eye-open");
        }
    });
    $(".view_confirm_password").on("click",function(){
        var temp = document.getElementById("user_confirm_password");
        if (temp.type === "password") {
            temp.type = "text";
        }
        else {
            temp.type = "password";
        }
    });
    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:1000,
    });
});