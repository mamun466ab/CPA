//Show dialog box
$(document).ready(function () {
    $('#myModal').modal('show'); //For show dropdown menu by hover

    //toggle of sidebar menu
    $('#menu-toggle').click(function (sdmn) {
        sdmn.preventDefault();
        $('#wrapper').toggleClass('menuDisplayed');
    });
    
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
    
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-image1').attr('src', e.target.result);
                $('#smtpp').removeClass('hidden');
                $('#profile_btn').addClass('hidden');
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile_picture").change(function(){
        readURL(this);
    });
});