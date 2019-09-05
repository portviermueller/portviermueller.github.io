/*MENU-------------------------------------------------------------*/
$( document ).ready(function() {
    var body = $("body");
    var menuButton1 = $("#menu-button-1");
    var menuButton2 = $("#menu-button-2");
    var menu = $(".menu");
    var overlay = $(".overlay");


    menuButton1.click(openMenu);
    menuButton2.click(closeMenu);
    overlay.click(closeMenu);

    function openMenu() {
      menu.addClass("open");
      overlay.addClass("open");
      body.addClass("overflow-hidden");
    }
    function closeMenu() {
      menu.removeClass("open");
      overlay.removeClass("open");
      body.removeClass("overflow-hidden");
    }

});
