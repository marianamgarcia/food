<?php
/**
* Template Name: Bella Olanje
* @package WordPress
*/
?>

<?php
include "header.php";
$featured_img_url = get_the_post_thumbnail_url( $post->ID, 'full')
?>

<!-- First section including txt -->
<section>
    <div id="top-banner" style="background-image: url('<?php echo $featured_img_url;?>');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <h3 class="mt-80 fz-16-gray">Food app</h3>
                    <h1 class="fz-58-white mt-25 fz-36-blue">Why stay hungry when<br>you can order form Bella Onojie</h1>
                    <h4 class="mb-50 fz-24-gray">Download the bella onoje’s food app now on</h4>
                    <button class="btn btn-primary btn-slide mg-25">Playstore</button>
                    <button class="btn btn-primary btn-slide mg-25">App store</button>
                    <div class="pd-top-150"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of section -->

<!-- Second section including cellphone food for -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="food-for">
                     <img src="<?php echo get_template_directory_uri(); ?>/imagens/food-for.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section><hr>
<!-- end of section -->

<!-- Faq- how the app works -->
<section class="posts" id="product">
    <h1 class="fz-44-black mb-80 fz-24-black">How the app works</h1>
    <div class="container">
        <div class="row"><!---------- Post 1 ---------->
        <?php 
                $args = array(  
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 1
                );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
        ?>
            <div class="col-lg-6 order-lg-2"> 
                <p class="pre-content mt200">Create an account</p>
                <h2 class="title"><?php the_title();?></h2>
                <h4 class="content"><?php the_content();?></h4>
            </div>
            <div class="col-lg-6 pt-50 order-lg-1">
            <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail();
                  }
                ?>
            </div>
            <?php 
                endwhile;
            ?>
        </div>
        <div class="row"> <!---------- Post 2 ---------->
        <?php 
                $args = array(  
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 1, 
                    'offset' => 1
                );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
        ?>
            
            <div class="col-lg-6 mt200">
                <p class="pre-content ">Explore varieties</p>
                <h2 class="title"><?php the_title();?></h2>
                <h4 class="content"><?php the_content();?></h4>
            </div>
            <div class="col-lg-6">
            <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail();
                  }
                ?>
            </div>
            <?php 
                endwhile;
            ?>
        </div>
        <div class="row"> <!---------- Post 3 ---------->
        <?php 
                $args = array(  
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 1,
                    'offset' => 2
                );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
        ?>
            <div class="col-lg-6 order-lg-2">
                <p class="pre-content mt200">Checkout</p>
                <h2 class="title"><?php the_title();?></h2>
                <h4 class="content"><?php the_content();?></h4>
            </div>
            <div class="col-lg-6 order-lg-1">
            <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail();
                  }
                ?>
            </div>
            <?php 
                endwhile;
            ?>
        </div>
    </div>
</section>
<!-- end of section -->

<!-- Bottom banner -->
<section id="faq">
    <div id="bottom-banner">
    <?php
    $post = get_post(8);
    $content = $post->post_content;
    echo $content;?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="fz-40-white pd-top-150">Download the app now.</h1>
                    <h4 class="pd-bottom-50">Available on your favorite store. Start your premium experience now</h4>
                    <button class="btn btn-primary btn-primary-2 btn-slide mg-25">Playstore</button>
                    <button class="btn btn-primary btn-primary-2 btn-slide mg-25">App store</button>
                    <div class="mbottom-120"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of section -->

<?php
include "footer.php";
?>





