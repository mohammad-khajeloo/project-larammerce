if (window.currentPage === "product") {
    require(['jquery', 'swiper'],
        function (jquery, Swiper) {
            //swiper slider
            let galleryThumbs = new Swiper('.product-swiper-thumb', {
                spaceBetween: 5,
                slidesPerView: 3,
                freeMode: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
            let galleryTop = new Swiper('.gallery-top', {
                spaceBetween: 5,
                thumbs: {
                    swiper: galleryThumbs
                }
            });
            let suggestedProducts = new Swiper('.suggested-products .swiper-container', {
                slidesPerView: 3,
                spaceBetween:10,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    1200: {
                        slidesPerView: 2,
                    },
                    640: {
                        slidesPerView: 1,
                        navigation: false,
                        pagination: {
                            el: ".swiper-pagination",
                        },
                    }
                }
            });

            //    star rate
            $(document).ready(function () {
                $('#stars li').on('mouseover', function () {
                    let onStar = parseInt($(this).data('value'), 10);
                    $(this).parent().children('li.star').each(function (e) {
                        if (e < onStar) {
                            $(this).addClass('hover');
                        } else {
                            $(this).removeClass('hover');
                        }
                    });
                }).on('mouseout', function () {
                    $(this).parent().children('li.star').each(function (e) {
                        $(this).removeClass('hover');
                    });
                });
                $('#stars li').on('click', function () {
                    let onStar = parseInt($(this).data('value'), 10); // The star currently selected
                    let stars = $(this).parent().children('li.star');

                    for (let i = 0; i < stars.length; i++) {
                        console.log('first', i)
                        $(stars[i]).removeClass('selected');
                        $(stars[i]).find('i').addClass('far fa-star');
                        $(stars[i]).find('i').removeClass('fas');
                    }

                    for (let i = 0; i < onStar; i++) {
                        console.log('second', i)
                        $(stars[i]).addClass('selected');
                        $(stars[i]).find('i').removeClass('fas fa-star');
                        $(stars[i]).find('i').addClass('fas fa-star');
                    }
                    let ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
                    console.log(ratingValue);
                });


            });


            function responseMessage(msg) {
                $('.success-box').fadeIn(200);
                $('.success-box div.text-message').html("<span>" + msg + "</span>");
            }
        }
    );
}