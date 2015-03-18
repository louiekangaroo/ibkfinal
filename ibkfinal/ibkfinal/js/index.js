$(document).ready(function () {

    //This will call the function for animation of menu when hovered
    menuHover();

    //Itty Bitty Logo will bounce upon page loading (3 times)
    $("#logo a img")
            .animate(
                { top: 50 }, {
                    duration: 'slow',
                    easing: 'easeOutBounce'
                })

    $('.itty').click(function (event) {
        var element = $("select")[0], worked = false;
        if (document.createEvent) { // all browsers
            var e = document.createEvent("MouseEvents");
            e.initMouseEvent("mousedown", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
            worked = element.dispatchEvent(e);
        } else if (element.fireEvent) { // ie
            worked = element.fireEvent("onmousedown");
        }
        if (!worked) { // unknown browser / error
            alert("It didn't worked in your browser.");
        }
    })

    $('#mobilemenutab').change(function () {

        var selectedMenu = $('#mobilemenutab option:selected').text();

        switch (selectedMenu) {
            case "About":
                location.href = "about.html";
                break;
            case "Event Info":
                location.href = "eventinfo.html"
                break;
            case "Competition":
                location.href = "competitions.html";
                break;
            case "Get Involved":
                location.href = "getinvolved.html"
                break;
            case "News":
                location.href = "news.html";
                break;
            case "Contact Us":
                location.href = "contactus.html"
                break;
        }

    })




    //Functions
    function menuHover() {
        $('#cloud-about a img').hover(function () {
            $(this).stop(true, false).animate({ 'top': '30' }, 200);
        }, function () {
            $(this).animate({ 'top': '0px' }, 500);
        });

        $('#cloud-getinvolved a img').hover(function () {
            $(this).stop(true, false).animate({ 'top': '10' }, 200);
        }, function () {
            $(this).animate({ 'top': '0px' }, 500);
        });

        $('#cloud-eventinfo a img').hover(function () {
            $(this).stop(true, false).animate({ 'top': '20' }, 200);
        }, function () {
            $(this).animate({ 'top': '0px' }, 500);
        });

        $('#cloud-competitions a img').hover(function () {
            $(this).stop(true, false).animate({ 'top': '20' }, 200);
        }, function () {
            $(this).animate({ 'top': '0px' }, 500);
        });

        $('#cloud-news a img').hover(function () {
            $(this).stop(true, false).animate({ 'top': '20' }, 200);
        }, function () {
            $(this).animate({ 'top': '0px' }, 500);
        });

        $('#cloud-contactus a img').hover(function () {
            $(this).stop(true, false).animate({ 'top': '20' }, 200);
        }, function () {
            $(this).animate({ 'top': '0px' }, 500);
        });
    }
})