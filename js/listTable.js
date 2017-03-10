$(document).ready(function() {
    $(".accordian").click(function() {
        $(this).parents("tr").next().slideToggle("fast");
	    $("i", this).toggleClass("fa-chevron-down fa-chevron-up");
    });
});