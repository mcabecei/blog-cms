$(document).ready(function() {
    $(#hiddenMessage).hover(function() {
        $(this).css("color", "black");
    },
    function() {
        $(this).hide();
        
});

    $("button").click(function() {
        hiddenMessage("Hi There!");
    })
});