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

var options = {
    valueNames: [ 'title' ]
};

new List('sortable-blog-list', options);

var editor = ace.edit("editor");
editor.session.setMode("ace/mode/html");

