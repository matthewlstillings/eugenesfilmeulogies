//Color Variables 
const review = '#E9C87B';
const blog = '#86CB92';
const list = '#DE5B51';
$(document).ready(function() {

    //Review Carousel    
    $('.featured-posts__carousel').slick({
        slidesToShow: 1,
        arrows: false,
        variableWidth: false,
        centerMode: false,
        autoplay: true,
        autoplaySpeed: 3000,
        vertical: true,
        verticalSwiping: true,
        dots: true,
        easing: 'ease-out',
        responsive: [
            {
            breakpoint: 843,
                settings: {
                    dots: false,
                    arrows: true
                }
            },
        ]
    });

    // Scroll Down
    $('.scroll[href="#main"]').on('click', function() {
        var href = $('.scroll').attr('href');
        $('html, body').animate({
            scrollTop: $(href).offset().top - 110
        }, 1000);
        console.log('Click');
        return false;
    });


    //Search Page Stop
    $(".search-field").on("focus", function(){
            $('html').css('overflow', 'hidden');
            $('section').addClass('search-focus');
            $('.preview-thumbnail').addClass('search-focus');
            console.log('focus'); 
    });

    $(".search-field").on("focusout", function(){
        $('html').css('overflow', 'visible');
        $('section').removeClass('search-focus');
        $('.preview-thumbnail').removeClass('search-focus');
        console.log('unfocus');
    });

    
    //Change Nav/Header/Footer/Title based on category
    $('.logo__span').css("color", review); // Front Page Initial Color
    
    if ($('body').hasClass('category-blogs')) {
        $('.logo__span').css("color", blog)
        $('.navbar-text').css("text-decoration", "underline #86CB92");
        $('.active').children().css("color", blog);
        $('.menu-item-75').children().css("color", blog);
        $('.preview-thumbnail__title').css("color", blog);
        $('.footer__text__name').css("color", blog);
        $('#page-down').css("color", blog);
        
        //For blog post formatting
        $('.review__title').css("text-decoration", "underline #86CB92");
        $('.article__container').css({'justify-content': 'center'});
        $('.review__poster').css({'display': 'none'});
        $('.score').css({'display': 'none'});
        $('.review__year').css({'display': 'none'});
    } else if ($('body').hasClass('category-lists')) {
        $('.logo__span').css("color", list);
        $('.navbar-text').css("text-decoration", "underline #DE5B51");
        $('.active').children().css("color", list);
        $('.preview-thumbnail__title').css("color", list);
        $('.menu-item-114').children().css("color", list);
        $('.footer__text__name').css("color", list);
        $('#page-down').css("color", list);
        
        //For blog post formatting
        $('.review__title').css("text-decoration", "underline #DE5B51");
        $('.article__container').css({'justify-content': 'center'});
        $('.review__poster').css({'display': 'none'});
        $('.score').css({'display': 'none'});
        $('.review__year').css({'display': 'none'});
    } else if ($('body').hasClass('category-reviews')) {
        $('.menu-item-76').children().css("color", review);
        $('.footer__text__name').css("color", review);
        $('#page-down').css("color", review);
      
    }

    //Preview Hovers
    $('.preview-feature').on('mouseover', function() {
        $(this).find('.preview-description').addClass('fade-up');
        $(this).find('.preview-content-image').addClass('fade-up');
    });
    $('.preview-feature').on('mouseleave', function() {
        $(this).find('.preview-description').removeClass('fade-up');
        $(this).find('.preview-content-image').removeClass('fade-up');
    });



    //Change Logo Color, and Navbar Color on Home Screen
    $('.featured-posts__carousel').on('afterChange', function(event, slick, currentSlide){ 
        switch (currentSlide + 1) {
            case 2:
            $('.logo__span').css("color", blog);
            $('.navbar-text').css("text-decoration", `underline #86CB92` );
            $('.active').children().css("color", blog);
            break;

            case 3:
            $('.logo__span').css("color", list);
            $('.navbar-text').css("text-decoration", "underline #DE5B51");
            $('.active').children().css("color", list);
            break;

            default:
            $('.logo__span').css("color", review);
            $('.navbar-text').css("text-decoration", "underline #E9C87B");
            $('.active').children().css("color", review);
            break;
        } 
    });


    var $window = $(window);
    //Parallax Effect
    $('div[data-type="background"]').each(function() {
        var $bgobj = $(this);

        $(window).scroll(function() {
            //scroll the background ground at var speed
            //ypos is neg because we're scrolling up

            var yPos = -($window.scrollTop() / $bgobj.data('speed'));

            var coords = '50%' + yPos + 'px';

            $bgobj.css({backgroundPosition: coords});
            
        });
    })

});


///////////NavBar disappear on scroll
var mywindow = $(window);
var mypos = mywindow.scrollTop(); //logs before scrolling starts
var up = false;
var newscroll;
mywindow.scroll(function () {
    newscroll = mywindow.scrollTop(); //logs adds when scrolling
    if (newscroll > mypos && !up) {
        $('.navbar').addClass('move-up');
        up = !up;
        console.log(up);
    } else if(newscroll < mypos && up) {
        $('.navbar').removeClass('move-up');
        up = !up;
        console.log(up);
    }
    mypos = newscroll;
});





if($(window).width() >= 829){
//Review Page Sticky Side Bar

    $(document).ready(function () {  
        var top = $('.review__title-and-score__container').offset().top - 0;
        $(window).scroll(function (event) {
            var y = $(this).scrollTop();
            if (y >= top) {
                console.log('stuck');
                $('.review__title-and-score__container').addClass('fixed');
            }
            else {
                console.log('unstuck');
                $('.review__title-and-score__container').removeClass('fixed');
            }
        });
    });
};










