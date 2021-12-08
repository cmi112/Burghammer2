<?php
get_header();
?>
<h1>This is Archives Page</h1>
<div id="mix-wrapper" class="container">


        <?php
        $terms = get_terms( array( 
            'taxonomy' => 'project_categories',

        ) );
        $terms=get_terms('project_categories');
    ?>
    <div class="category">
       <?php 
       $terms=get_terms('project_categories');
       foreach($terms as $term){;?>

        <button class="btn btn-light filter-btn" data-filter=".<?php echo $term->slug;?>"  >  <?php echo $term->name;?> </button>
    <?php }

    ?>

</div>

<div class="row">
        <?php 
        $args=array(
            'post_type'=>'projects',
            'posts_per_page'=>8

        );
        $query=new WP_Query($args);
        while($query->have_posts()){
            $query->the_post();
            $termsArray=get_the_terms($post->ID,'project_categories');
            $termsSlug="";
            foreach($termsArray as $term){
                $termsSlug .= $term->slug .'';
            }
            ?>
            <div class="col">
            <div class="card mb-3" <?php echo $termsSlug;?> style="width: 18rem;" >
                <div class="card-body">
                     
                    <img class="card-img-top" src="<?php the_post_thumbnail_url();?>">
            
                   
                    <h5 class="card-title">
                     <?php the_title();?> 
                 </h5>
                 <p class="card-text">
                    <?php the_excerpt();?>
                    <a href="<?php the_permalink();?>">Read More...</a>
                </p> 
            </div>
           </div>
            </div>
       <?php }
       ?>
         
      </div>
</div>

<?php get_footer();
?>