

// ヴァーティカルタップ01
$(function () { 
    //背景とアラートボックスを非表示に
  $(".bg01").hide();
  $(".bg02").hide();
  $(".bg03").hide();
  $(".bg04").hide();
  $(".bg05").hide();
  var scrollPosition;
	$(".click01").on("click", function() {
        scrollPosition = $(window).scrollTop();
        console.log(scrollPosition);
        $('body').addClass('fixed').css({ 'top': -scrollPosition });
        $(".bg01").fadeIn(300);
        return false;
    });
    $(".bg01 .close").on("click", function () {
        $(".bg01").fadeOut(300).css({'top': 0});
		$('body').removeClass('fixed');
        $(window).scrollTop(scrollPosition);
        return false;
    });
    
    var scrollPosition;
	$(".click02").on("click", function() {
        scrollPosition = $(window).scrollTop();
        console.log(scrollPosition);
        $('body').addClass('fixed').css({ 'top': -scrollPosition });
        $(".bg02").fadeIn(300);
        return false;
    });
    $(".bg02 .close").on("click", function () {
        $(".bg02").fadeOut(300).css({'top': 0});
		$('body').removeClass('fixed');
        $(window).scrollTop(scrollPosition);
        return false;
    });
    
    var scrollPosition;
	$(".click03").on("click", function() {
        scrollPosition = $(window).scrollTop();
        console.log(scrollPosition);
        $('body').addClass('fixed').css({ 'top': -scrollPosition });
        $(".bg03").fadeIn(300);
        return false;
    });
    $(".bg03 .close").on("click", function () {
        $(".bg03").fadeOut(300).css({'top': 0});
		$('body').removeClass('fixed');
        $(window).scrollTop(scrollPosition);
        return false;
    });
    
    var scrollPosition;
	$(".click04").on("click", function() {
        scrollPosition = $(window).scrollTop();
        console.log(scrollPosition);
        $('body').addClass('fixed').css({ 'top': -scrollPosition });
        $(".bg04").fadeIn(300);
        return false;
    });
    $(".bg04 .close").on("click", function () {
        $(".bg04").fadeOut(300).css({'top': 0});
		$('body').removeClass('fixed');
        $(window).scrollTop(scrollPosition);
        return false;
    });
    
    var scrollPosition;
	$(".click05").on("click", function() {
        scrollPosition = $(window).scrollTop();
        console.log(scrollPosition);
        $('body').addClass('fixed').css({ 'top': -scrollPosition });
        $(".bg05").fadeIn(300);
        return false;
    });
    $(".bg05 .close").on("click", function () {
        $(".bg05").fadeOut(300).css({'top': 0});
		$('body').removeClass('fixed');
        $(window).scrollTop(scrollPosition);
        return false;
	});
});


