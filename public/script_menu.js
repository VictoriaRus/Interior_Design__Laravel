$(document).ready(function () {

    var $toggleButton = $(".toggle-button"),
        $menuWrap = $(".menu-wrap"),
        $sidebarArrow = $(".sidebar-menu-arrow");

    // Hamburger button
    $toggleButton.on("click", function () {
        $(this).toggleClass("button-open");
        $menuWrap.toggleClass("menu-show");
    });

    // Sidebar navigation arrows
    $sidebarArrow.click(function () {
        $(this).next().slideToggle(300);
    });

    ///закрытие карточки отзыва
    $("#button").on("click", function () {
        $("#block").css("display", "none");
    });

    //скрол для голочки
    $("a[href*=#]").on("click", function (e) {
        e.preventDefault();
        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top
        }, 500, "linear");
    });

});
