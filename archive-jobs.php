<?php
get_header();
?>

<h1>Jobs</h1>
<div class="row row-cols row-cols-sm-2 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 w-100" id="mix-wrapper">
 
    <?php 
    $args=array( 'post_type'=>'jobs', 'posts_per_page'=>8);
    $query=new WP_Query($args);
    while($query->have_posts()){
        $query->the_post();
        $termsArray=get_the_terms($post->ID,'job_categories');
        $termsSlug="";
     
        ?>
        <div class="col mix <?php echo $termsSlug;?>">
            <div class="card mb-3" >
                <div class="card-body"> 
                    <img class="card-img-top" src="<?php the_post_thumbnail_url();?>">
                    <h5 class="card-title">
                        <?php the_title();?> 
                    </h5>
                    <p class="card-text"><?php the_excerpt();?></p>
                    <p><a href="<?php the_permalink();?>">Read More...</a></p>
                </div>
            </div>
        </div>
       <?php 
    }
    ?>
</div>

<?php get_footer(); ?>