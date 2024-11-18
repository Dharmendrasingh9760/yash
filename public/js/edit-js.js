jQuery(function($) {
    $(window).on("load", function() {
        $("div.loadScreen").fadeOut();
    });

    // Submenu
    $.fn.submenu = function() {
        var $self = $(this);
        $self.each(function(index, elem) {
            var hasChild = $(elem).children('ul');
            var childrenLength = $(elem).children('ul').length;
            if (childrenLength) {
                $(this).prepend('<i class="nav-drp-arw"></i>');

                //[ .nav-drp-arw css:-
                //.nav-drp-arw {  position: absolute; right: 0; top: 14px; cursor: pointer; }
                // .nav-drp-arw:after { font-size: 20px; font-weight: bold; color: #fff; content: '+'; }
                // .nav-drp-arw.current:after { background: #fff; width: 15px; height: 3px; content: ''; position: absolute; right: 0; top: 8px; } ]

            }

            $(elem).on('click', '.nav-drp-arw', function(e) {
                $(this).toggleClass('current');
                $(this).parent('li').find('> ul').stop(true, true).slideToggle('fast');
                $(this).parent('li').siblings().find('ul').stop(true, true).slideUp('fast');
                $(this).parent('li').siblings().find('.nav-drp-arw').removeClass('current');
                e.stopPropagation();
            });

            if ($('.header_nav li:has(> ul)')) {
                $(this).find('ul').prev('a').removeAttr('href');
            };

            // If "a" link need to toggle then use this bottom code
            $(elem).on('click', ' > a', function(e) {
                $(this).siblings().toggleClass('current');
                $(this).parent('li').find('> ul').stop(true, true).slideToggle('fast');
                $(this).parent('li').siblings().find('ul').stop(true, true).slideUp('fast');
                $(this).parent('li').siblings().find('.nav-drp-arw').removeClass('current');
                e.stopPropagation();
            });
            //=========================================================
        });
    }
    $('.header_nav ul li').submenu();
    $('.header_nav ul li.current').children('ul').show();
    $('.header_nav li.current').children('.nav-drp-arw').addClass('current');

    // Document click div hide 
    $(document).mouseup(function(e) {
        if ($(e.target).closest(".header").length === 0) {
            $(".header_nav li").siblings().find('ul').stop(true, true).slideUp('fast');
            $(".header_nav li").siblings().find('.nav-drp-arw').removeClass('current');
        }
    });

    // Text Resize JS:
    var $affectedElements = $("html,*");
    $affectedElements.each(function() {
        var $this = $(this);
        $this.data("orig-size", $this.css("font-size"));
    });
    var increaseCount = 0;
    var decreaseCount = 0;
    $("#increasetext").click(function() {
        if (increaseCount < 2) {
            changeFontSize(1);
            increaseCount++;
        }
        if (increaseCount === 2) {
            $(this).prop('disabled', true);
        }
    });
    $("#decreasetext").click(function() {
        if (decreaseCount < 2) {
            changeFontSize(-1);
            decreaseCount++;
        }
        if (decreaseCount === 2) {
            $(this).prop('disabled', true);
        }
    });
    $("#resettext").click(function() {
        $affectedElements.each(function() {
            var $this = $(this);
            $this.css("font-size", $this.data("orig-size"));
        });
        increaseCount = 0;
        decreaseCount = 0;
        $("#increasetext, #decreasetext").prop('disabled', false);
    });

    function changeFontSize(direction) {
        $affectedElements.each(function() {
            var $this = $(this);
            var currentSize = parseInt($this.css("font-size")) || 16; // Default font size
            var newSize = currentSize + direction;
            $this.css("font-size", newSize + "px");
        });
    };

    $("#default_theme").on("click", function(e) {
        e.preventDefault();
        $("body").removeClass("dark");
    });

    $("#dark_theme").on("click", function(e) {
        e.preventDefault();
        $("body").addClass("dark");
    });

    $("a.nav_menu_btn").on("click", function(e) {
        e.preventDefault();
        $(".header_nav").addClass("change");
    });
    $("a.close_btn").on("click", function(e) {
        e.preventDefault();
        $(".header_nav").removeClass("change");
    });

    $('.banner_slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        initialSlide: 0,
        autoplay: true,
        slidesToShow: 1,
        // centerMode: true,
        variableWidth: false,
        responsive: [{
            breakpoint: 1700,
            settings: {
                slidesToShow: 1,
                variableWidth: false,
            },
        }],
    });

    $('#imgSlide').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        initialSlide: 0,
        autoplay: true,
        slidesToShow: 3,
        variableWidth: false,
        responsive: [{
            breakpoint: 1700,
            settings: {
                slidesToShow: 5,
            },
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            },
        }],
    });

    $('#videoSlide').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        initialSlide: 0,
        autoplay: true,
        slidesToShow: 3,
        variableWidth: false,
        responsive: [{
            breakpoint: 1700,
            settings: {
                slidesToShow: 5,
            },
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            },
        }],
    });

    // Start marquee
    $('.marquee_panel p').marquee({
        direction: 'left',
        duration: 50000,
        gap: 0,
        delayBeforeStart: 0,
        duplicated: true,
        startVisible: true,
        pauseOnHover: true
    });

    // Custom tabs
    info1 = $('.tabs_container > div');
    $('.gallery_nav a:first').addClass('current');
    $('.tabs_container > div:first').show();
    $('.gallery_nav a').click(function(e) {
        e.preventDefault();
        var index = $(this).index();
        info1.hide();
        info1.eq(index).fadeIn();
        $('.gallery_nav a').removeClass('current');
        $(this).addClass('current');
        $('.slick-slider').slick('setPosition');
    });



    $(".child-_class").on("mousewheel", function(e) {
        var outer = $(this).closest(".parent_class")
            //outer.scrollLeft(outer.scrollLeft() + e.originalEvent.deltaY)
        outer.stop(false, false).animate({ scrollLeft: "+=" + e.originalEvent.deltaY }, 50)
        e.preventDefault();
    });

    // Scroller JS:
    $(".classname a").on("click", function() {
        $(".classname a").removeClass("current");
        $(this).addClass("current");
        $(".classname").scrollCenter(".current", 300);
    });
    jQuery.fn.scrollCenter = function(elem, speed) {
        var active = jQuery(this).find(elem);
        var activeWidth = active.width() / 2;
        var pos = active.position().left + activeWidth;
        var currentscroll = jQuery(this).scrollLeft();
        var divwidth = jQuery(this).width();
        pos = pos + currentscroll - divwidth / 2;

        jQuery(this).animate({
            scrollLeft: pos
        }, speed == undefined ? 1000 : speed);
        return this;
    };
    jQuery.fn.scrollleft = function(elem, speed) {
        jQuery(this).animate({
            scrollLeft: jQuery(this).scrollLeft() - jQuery(this).offset().left + jQuery(elem).offset().left
        }, speed == undefined ? 1000 : speed);
        return this;
    };

}); //End jQuery