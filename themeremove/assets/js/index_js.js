jQuery(function () {





    $(".carousel__actu").owlCarousel({
        nav: true,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    $(".carousel__real").owlCarousel({
        nav: true,
        autoplay: true,
        autoplayTimeout: 7000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    $(".slider__actu").owlCarousel({
        nav: true,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    $(".slider__part").owlCarousel({
        nav: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 6
            }
        }
    });

    $(".slider__projet").owlCarousel({
        nav: true,
        autoplay: true,
        autoplayTimeout: 7000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });


    if (window.matchMedia("(max-width:767px)").matches) {
        $(document).ready(function ($) {
            $('.carousel__real').trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded owl-theme');
            $('.carousel__real').find('.owl-stage-outer').children().unwrap();

            // $('.slider__part').trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded owl-theme');
            // $('.slider__part').find('.owl-stage-outer').children().unwrap();
        });
    }


    //function responsive burger
    if (window.matchMedia("(min-width:1024px)").matches) {
        $(document).ready(function ($) {
            $('.menu-header .menu-item ').hover(
                function () {
                    $(this).find('> ul').fadeIn(200).css('display', 'flex');
                },
                function () {
                    $(this).find('> ul').fadeOut(200)
                }
            )
        });
    }


    const loadmore = document.querySelector('#loadmore');
    let currentItems = 3;
    loadmore.addEventListener('click', (e) => {
        const elementList = [...document.querySelectorAll('.card_actu')];
        for (let i = currentItems; i < currentItems + 3; i++) {
            if (elementList[i]) {
                elementList[i].style.display = 'block';
            }
        }
        currentItems += 3;

        // Load more button will be hidden after list fully loaded
        if (currentItems >= elementList.length) {
            event.target.style.display = 'none';
        }
    })
});

// var s = $(".texte_temoignage").html();

// if (s.split(' ').length > 50) {
//     $(".texte_temoignage").html(s.split(' ').slice(0, 50).join(' ') + " ... " + '<button class="read-more">Read more</button>');
// }

// $("button.read-more").click(function () {
//     $(".texte_temoignage").html(s);
// });

// $(document).ready(function () {
//     $('.read-more').click(function () {
//         $(this).parent().toggleClass('expanded');
//     });
// });

