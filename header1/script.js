$(document).ready(function () {
    var hamburger = "#navmenu-hamburger";
    $(hamburger).click(function (e) {
        e.preventDefault();
        $("header nav").slideToggle({
            start: function () {
                $(this).css({
                    display: "flex",
                });
            },
        });
        var children = $(hamburger).children();
        if($(children[1]).is(":visible")){
            $(children[1]).hide();
            $(children[0]).addClass('animated-bar_45');
            $(children[2]).addClass('animated-bar_-45').css({
                "margin-top": "-15px"
            });
        } else {
            $(children[1]).show();
            $(children[0]).removeClass('animated-bar_45');
            $(children[2]).removeClass('animated-bar_-45').css({
                "margin-top": "0"
            });
        }
    });
});
