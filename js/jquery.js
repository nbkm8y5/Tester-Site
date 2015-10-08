/**
 * Created by nbkm8y5 on 9/24/15.
 */
/*
 JQUERY
 */

//Everything inside here will load with no problems
var mainFunction = function () {

    $("h2").click(function () {
        $(this).hide();
    });

    $("#h5_id_test").click(function () {
            $(this).hide();
        }
    );

    $(".h5_class_test").click(function () {
        $(this).hide();
    });

    $("h1").click(function () {
        $(this).hide();
    });
    $("img").click(function () {
        $(this).hide();
    });

    $("#userName").change(function () {

        var goodUserNamePattern = /[^0123456789abcdefghijklmnopqrstuvwxyz.]/ig;
        var userName = $(this).val();

            if (goodUserNamePattern.test(userName)) {
                $("#userNameResponse").text("Please enter numbers, letters or periods only.");
            }

            if (userName.length < 6 || userName.length > 12) {
                $("#userNameResponse").text("Please keep username at least 6 characters and at most 12 characters.");
            }
    });

    $("#slide_show").fadeOut(2500).fadeIn(2500, function(){
        alert("Callback example only until fadeIn() was complete")});
};

//You do not have to add the function with parenthesis, just the name.
$(document).ready(mainFunction);