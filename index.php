    <?php get_header(); ?>

     <!-- Page Header -->
        <!-- Set your background image for this header on the line below. -->
        <header class="intro-header" style="background-image: url('<?php
            if ( has_post_thumbnail() ) {




//Get the Thumbnail URL
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 1900,600 ), false, '' );

                $data = getimagesize($src[0]);
$width = $data[0];
$height = $data[1];

if($width>1000 && $height>500)
{
   echo $src[0]; 
}
else{


   $src= "http://neufrin.com/home-bg.jpg";
   echo $src;
}

}

else{


   $src= "http://neufrin.com/home-bg.jpg";
   echo $src;
} {
    # code...
}?>')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                            <hr class="small">
                            <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <div class="container">
            <div class="row">
                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">


<?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                
                    <div class="post-preview  <?php post_class(); ?>" id="post-<?php the_ID(); ?> ">
                        <a href="<?php the_permalink(); ?>" rel="bookmark"  title="Permanent Link to <?php the_title_attribute(); ?>">
                            <h2 class="post-title">
                               <?php the_title(); ?>
                            </h2>
                            <h3 class="post-subtitle">
                               <?php echo get_the_excerpt(); ?>
                            </h3>
                        </a>
                        <p class="post-meta">Posted by <a href="#"><?php the_author_posts_link(); ?></a> on <?php the_time('F jS, Y'); ?></p>
                    </div>
                    <hr>
            <?php endwhile; ?>
    
            
                    <!-- Pager -->
                    <ul class="pager">
                        <li class="next">
                        <?php next_posts_link('Older Posts &rarr;'); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>