jQuery(function($){

    $( ".poselok-info ul" ).each(function() {
	    if ($(this).find("li").length < 2) {
            $(this).addClass("firstone");
        }
    });
    
    $('.gallery-slick').slick({
        dots: true,
        slide: 'li',
        fade: true,
        speed: 500,
        slidesToShow: 1,
        arrows : false,
        adaptiveHeight: true,
        responsive: [{
            breakpoint: 800,
            settings: {
                arrows: false,
                slidesToShow: 1,
                dots: true
            },
            breakpoint: 1200,
            settings: {
                arrows: false,
                slidesToShow: 1,
                dots: true

            }
        }],
        customPaging: function (slider, i) {
            return '<button class="tab">' + $('.slick-thumbs li:nth-child(' + (i + 1) + ')').html() + '</button>';
        }
        
    });

    $('.planirovki-slider').slick({
        dots: true,
        fade: true,
        speed: 500,
        arrows: false,
        slidesToShow: 1,
        responsive: [{
            breakpoint: 800,
            settings: {
                arrows: false,
                slidesToShow: 1,
                dots: true
            },
            breakpoint: 1200,
            settings: {
                arrows: false,
                slidesToShow: 1,
                dots: true

            }
        }],
    });
    $('.planirovki-slider .slick-dots button').hover( function(event) {
      $(this).parents('.planirovki-slider').slick('slickGoTo', $(this).parent().index());
    });

    $('.other-planirovki-slider').slick({
        dots: false,
        speed: 500,
        arrows: true,
        slidesToShow: 3,
        responsive: [{
            breakpoint: 800,
            settings: {
                arrows: true,
                slidesToShow: 1,
                dots: false
            }
        },
            {
            breakpoint: 1250,
            settings: {
                slidesToShow: 2,
            }
        }
        ],
    });
    $("#scrollBtn").click(function() {
        $('html, body').animate({
            scrollTop: $(".block-1").offset().top + $(".block-1").height() + 2
        }, 1000);
    });

    $(".burger").click(function(){
        $(".menu").toggleClass("open");
    })
    $(".cl-btn-2").click(function(){
        $(".menu").removeClass("open");
    })
    
    $('.tab').hover( function() {
        var attrtab = $(this).attr("id");
        $(".tab").removeClass("active");
        $(this).addClass("active");
        $(".tab-wrapper, .tab-plan").removeClass("active");
        $("."+ attrtab + "").addClass("active");
    });

    $('.button-etach-item').hover( function() {
        var attrtab = $(this).attr("id");
        $(".button-etach-item").removeClass("active");
        $(this).addClass("active");
        $(".tab-plan-wrapper3-img").removeClass("active");
        $("."+ attrtab + "").addClass("active");
    });

    $('.button-interier-item').hover( function() {
        var attrtab = $(this).attr("id");
        $(".button-interier-item").removeClass("active");
        $(this).addClass("active");
        $(".tab-plan-wrapper2-img").removeClass("active");
        $("."+ attrtab + "").addClass("active");
    });
    
    let time_out;    
    document.querySelectorAll('#hidden').forEach(cf7hidden => {
        cf7hidden.addEventListener('mousedown', (e) => {
            clearTimeout(time_out);
            time_out = setTimeout(function(){
                $(".wpcf7-form-control").removeClass("wpcf7-not-valid");
            }, 2000);
        });
    });
    $(".bron1").click(function(){
        $(".bron2_open").fadeOut();
        $(".bron3_open").fadeOut();
        $(".bron1_open").fadeIn();
        $(".overlay").fadeIn();
    });
    $(".bron2").click(function(){
        $(".bron1_open").fadeOut();
        $(".bron3_open").fadeOut();
        $(".bron2_open").fadeIn();
        $(".overlay").fadeIn();
    });
    $(".bron3").click(function(){
        $(".bron3_open").fadeIn();
        $(".overlay").fadeIn();
    });
    $(".overlay").click(function(){
        $(".bron1_open").fadeOut();
        $(".bron2_open").fadeOut();
        $(".bron3_open").fadeOut();
        $(".overlay").fadeOut();
    }); 
    $(".close").click(function(){
        $(".bron1_open").fadeOut();
        $(".bron2_open").fadeOut();
        $(".bron3_open").fadeOut();
        $(".overlay").fadeOut();
    });
});

$(document).ready(function(){

    var controls = {
        togglePlayback: function() {
            (video.paused) ? video.play() : video.pause();
        },
        video: $("#myvideo"),
        playpause: $("#playpause"),
        total: $("#total"),
        buffered: $("#buffered"),
        progress: $("#current"),
        duration: $("#duration"),
        currentTime: $("#currenttime"),
        hasHours: false,
    };
                
    var video = controls.video[0];
    
    controls.playpause.click(function(){

        if (video.paused) {
            video.play();
            //$(this).text("Pause");
            $("#progress").addClass("active");
        } else {
            video.pause();
            //$(this).text("Play");
            $("#progress").removeClass("active");
        }
                
        $(this).toggleClass("paused"); 
    });
    controls.video.click(function() {
        controls.togglePlayback();
    });

    let timeout;
    function hiddenelements() {
        var videotime = document.getElementById("myvideo");
        videotime.onmousemove = function(){
            clearTimeout(timeout);
            $(".block-6 .title").removeClass("active");
            $("#progress").addClass("active");
            timeout = setTimeout(function(){
                $(".block-6 .title, #playpause").addClass("active");
                $("#progress").removeClass("active");
            }, 3000);
        }        
    }
 	function clearMyTimeOut() {
	  console.log("Таймер с id " + timeout + " отменен");
	  clearTimeout(timeout);
 	}
    video.addEventListener("play", function() {
        controls.playpause.html('<img src="/wp-content/themes/baden/images/pause.png">');
        controls.playpause.toggleClass("paused");
        
        var item = document.getElementById("progress");
        item.addEventListener("mouseover", func, false);
        
        function func()
        {  
           $("#playpause").removeClass("active");
        }
        hiddenelements();
    });
                
    video.addEventListener("pause", function() {
        controls.playpause.html('<img src="/wp-content/themes/baden/images/play.png">');
        controls.playpause.toggleClass("paused");
        var videotime = document.getElementById("myvideo");
        videotime.onmousemove = function(){
            clearTimeout(timeout);
            $(".block-6 .title").removeClass("active");
            $("#playpause").removeClass("active");
            $("#progress").removeClass("active");
            timeout = setTimeout(function(){
            }, 3000);
        }     
    });
    video.addEventListener("ended", function() {
        video.pause();
        controls.playpause.html('<img src="/wp-content/themes/baden/images/play.png">');
        controls.playpause.toggleClass("paused");
        var videotime = document.getElementById("myvideo");
        $(".block-6 .title").removeClass("active");
        $("#playpause").removeClass("active");
        $("#progress").removeClass("active");
        videotime.onmousemove = function(){
            clearTimeout(timeout);
        }
    });
    video.addEventListener("canplay", function() {
        controls.hasHours = (video.duration / 3600) >= 1.0;                    
        controls.duration.text(formatTime(video.duration, controls.hasHours));
        controls.currentTime.text(formatTime(0),controls.hasHours);
    }, false);
    function formatTime(time, hours) {
        if (hours) {
            var h = Math.floor(time / 3600);
            time = time - h * 3600;
                        
            var m = Math.floor(time / 60);
            var s = Math.floor(time % 60);
                        
            return h.lead0(2)  + ":" + m.lead0(2) + ":" + s.lead0(2);
        } else {
            var m = Math.floor(time / 60);
            var s = Math.floor(time % 60);
                        
            return m.lead0(2) + ":" + s.lead0(2);
        }
    }
            
    Number.prototype.lead0 = function(n) {
        var nz = "" + this;
        while (nz.length < n) {
            nz = "0" + nz;
        }
        return nz;
    };
    video.addEventListener("timeupdate", function() {
        controls.currentTime.text(formatTime(video.currentTime, controls.hasHours));
                        
        var progress = Math.floor(video.currentTime) / Math.floor(video.duration);
        controls.progress[0].style.width = Math.floor(progress * controls.total.width()) + "px";
    }, false);
    controls.total.click(function(e) {
        var x = (e.pageX - this.offsetLeft)/$(this).width();
        video.currentTime = x * video.duration;
    });
	 $('.script-checkbox label input').change(function(){
        if($(this).is(':checked')) {
            $(this).parent('label').addClass('label-selected');
        } else {
            $(this).parent('label').removeClass('label-selected');
        }
    });
    
    $('.slickslide').slick({
        dots: true,
        slide: 'li',
        fade: true,
        speed: 0,
        slidesToShow: 1,
        arrows : false,
        responsive: [{
            breakpoint: 800,
            settings: {
                arrows: false,
                slidesToShow: 1,
                dots: true
            },
            breakpoint: 1200,
            settings: {
                arrows: false,
                slidesToShow: 1,
                dots: true

            }
        }],
        customPaging: function (slider, i) {
            return '<button class="tab">' + $('.slick-thumbs li:nth-child(' + (i + 1) + ')').html() + '</button>';
        }
    });
    $('.slickslide').on('mousemove', '.slick-dots button', function(event) {
      $(this).parents('.slickslide').slick('slickGoTo', $(this).parent().index());
    });
    
    var dots = document.querySelector(".slick-dots");
    dots.addEventListener("mousedown", function() {
        var scr = $(".slick-dots");
        scr.mousedown(function () {
            var startX = this.scrollLeft + event.pageX;
            var startY = this.scrollTop + event.pageY;
            scr.mousemove(function () {
                this.scrollLeft = startX - event.pageX;
                this.scrollTop = startY - event.pageY;
                return false;
            });
        });
        $(window).mouseup(function () {
            scr.off("mousemove"); 
        });
    })
    if( /iPhone|iPad|iPod/i.test(navigator.userAgent) ) {
        $(".slick-dots").css("overflow-x", "scroll")    
    }
})
