<?php
/**
 * Contains footer
 */
?>
<footer class=" container-xxl p-0 ">
    <div class="footer-container d-flex flex-wrap justify-content-between align-content-center">
        <div class="form-container">
            <h6 class=" border-bottom border-1 pb-2">Stay In the Know!</h6>
            <?php
if(is_active_sidebar('footer-sidebar-1')){
dynamic_sidebar('footer-sidebar-1');
}
?>
            <p class="unsubscribe" style="font-size: 14px;">To unsubscribe please <a href="#">click here</a> </p>
        </div>
        <div class="d-none  d-sm-block">
            <h6 class="border-bottom border-1 pb-2"><?php the_field("left_footer_title");?></h6>
            <ul class="px-0 list-unstyled">
                <li><a href="#"><?php the_field("first_left_field");?></a></li>
                <li><a href="#"><?php the_field("second_left_field");?></a></li>
                <li><a href="#"><?php the_field("third_left_field");?></a></li>
                <li><a href="#"><?php the_field("forth_left_field");?></a></li>
                <li><a href="#"><?php the_field("fifth_left_field");?></a></li>
            </ul>
        </div>
        <div class="d-none  d-sm-block">
            <h6 class="border-bottom border-1 pb-2"><?php the_field("middle_footer_title");?></h6>
            <ul class="px-0 list-unstyled">
                <li><a href="#"><?php the_field("first_middle_field");?></a></li>
                <li><a href="#"><?php the_field("second_middle_field");?></a></li>
                <li><a href="#"><?php the_field("third_middle_field");?></a></li>
                <li><a href="#"><?php the_field("forth_middle_field");?></a></li>
                <li><a href="#"><?php the_field("fifth_middle_field");?></a></li>
            </ul>
        </div>
        <div class="d-none  d-sm-block">
            <h6 class="border-bottom border-1 pb-2"><?php the_field("right_footer_title");?></h6>
            <ul class="px-0 list-unstyled">
                <li><a href="#"><?php the_field("first_right_field");?></a></li>
                <li><a href="#"><?php the_field("second_right_field");?></a></li>
                <li><a href="#"><?php the_field("third_right_field");?></a></li>
                <li><a href="#"><?php the_field("forth_right_field");?></a></li>
                <li><a href="#"><?php the_field("fifth_right_field");?></a></li>
            </ul>
        </div>

    </div>
    <div class="copyright">
        <p class="m-0">All Rights Reserved</p>
    </div>
</footer>
<?php wp_footer(); ?>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

<script>
$(document).ready(function() {
    $('.slider').slick({
        infinite: true,
        slidesToShow: 4,
        dots: false,
        prevArrow: false,
        nextArrow: false,
        responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 3
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3
                }
            },

        ]
    })
});
$(document).ready(function() {
    $('.auto-slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3500,
        slidesToShow: 1,
        dots: false,
        prevArrow: false,
        nextArrow: false
    })
});

Fancybox.bind('[data-fancybox="gallery"]', {
    dragToClose: false,
    Toolbar: false,
    closeButton: "top",
    Image: {
        zoom: false,
    },
    on: {
        initCarousel: (fancybox) => {
            const slide = fancybox.Carousel.slides[fancybox.Carousel.page];

            fancybox.$container.style.setProperty(

                `url("${slide.$thumb.src}")`
            );
        },
        "Carousel.change": (fancybox, carousel, to, from) => {
            const slide = carousel.slides[to];

            fancybox.$container.style.setProperty(

                `url("${slide.$thumb.src}")`
            );
        },
    },
});
</script>
</body>

</html>