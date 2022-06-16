<?php if(have_posts()): while(have_posts()) : the_post() ;  ?>

<div class="auto-slider-container overflow-hidden mt-2">
    <div class=" auto-slider img-container w-100">
        <?php  $wpnew=array(
        "posts_per_page" =>12,
        "post_type" => "country"
       );

         $newQquary = new Wp_Query( $wpnew);
         while( $newQquary->have_posts()){
        $newQquary->the_post(); 
        $images = get_attached_media('image', $post->ID);

        ?>
        <div class="slide">
            <a href="<?php the_permalink(); ?>">
                <?php foreach($images as $image) { ?>
                <img src="<?php echo wp_get_attachment_image_src($image->ID,'full')[0]; ?>" class="img-fluid"
                    alt="..." />
                <?php } ?>
                <p class="img-text px-3 py-1 fs-5"><?php the_title(); ?></p>
            </a>

        </div>
        <?php
             }
        ?>
    </div>
</div>


<div class="slider-container overflow-hidden mt-4 ">
    <div class="slider">
        <?php  $wpnew=array(
        "posts_per_page" =>12,
        "post_type" => "climber"
       );

         $newQquary = new Wp_Query( $wpnew);
         while( $newQquary->have_posts()){
        $newQquary->the_post(); 
        $images = get_attached_media('image', $post->ID);

        ?>
        <div class="slide">
            <a href="<?php the_permalink(); ?>">
                <?php foreach($images as $image) { ?>
                <img src="<?php echo wp_get_attachment_image_src($image->ID,'full')[0]; ?>" class="card-img-top w-100"
                    alt="..." />
                <?php } ?>
                <p class="img-text px-3 py-1" style="backgroun-color: #3A6988"><?php the_title(); ?> </p>
            </a>

        </div>
        <?php
             }
        ?>
    </div>
</div>
<div class=" px-2 px-md-4  mt-4 ">
    <div class="row ">
        <div class="col-md-8 col-sm-12 left d-flex flex-wrap justify-content-between">

            <?php  $wpnew=array(
        "posts_per_page" =>4,
        "post_type" => "mountains"
       );

         $newQquary = new Wp_Query( $wpnew);
         while( $newQquary->have_posts()){
        $newQquary->the_post(); 
        $images = get_attached_media('image', $post->ID);

        ?>
            <div class="mb-4  large-post">
                <p class="border-bottom border-1 pb-2  mb-3"><?php the_title(); ?></p>
                <?php foreach($images as $image) { ?>
                <img src="<?php echo wp_get_attachment_image_src($image->ID,'full')[0]; ?>" class="card-img-top w-100"
                    alt="..." />
                <?php } ?>
                <p class="lh-sm mt-2" style="font-size:14px">
                    <?php echo substr(strip_tags(get_the_content()), 0, 780) ?>...

                </p>
                <a class="cnt-btn btn btn-light py-1 rounded-0  mt-2" href="<?php the_permalink(); ?>">Continue Reading
                    <i class="bi bi-chevron-double-right" style="font-size: 10px"></i></a>
            </div>
            <?php
             }
        ?>

        </div>
        <div class="col-4 right d-none d-md-block">
            <p class="border-bottom border-1 pb-2 mb-3">asdasd</p>

            <div>
                <?php get_sidebar(); ?></div>
        </div>
    </div>
</div>


<?php endwhile; else: endif;?>