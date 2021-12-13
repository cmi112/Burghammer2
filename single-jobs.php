<?php get_header(); ?>




	
<div class="container">
   <h1><?php the_field('position');?></h1>
  
<div id="mix-wrapper" class="container">
    <?php if (has_post_thumbnail()):?>
        <img class="img-fluid rounded" src="<?php the_post_thumbnail_url('project-large');?>">

        <?php endif;?>
   
<?php while(have_posts()) : the_post(); ?>


<?php
        $categories = get_the_category();
        $slugs = wp_list_pluck($categories, 'slug');
        $class_names = join(' ', $slugs);
?>
<div class="project justify-content-md-center">
        <div class="row  p-0 p-sm-1 p-md-2 p-lg-5">
          <div class="card  mix-target buro" data-order="5" data-year="4">
             <div class="card-body">
                  <h5> <?php the_title(); ?></h5>
                <p class="card-text">
                   Position: <span> <?php the_field('position');?></span>
                   Deadline: <span> <?php the_field('deadline');?> </span>
                  

                </p>
                <p class="card-text">
                <?php the_content(); ?>
                </p>
                   
<?php
                // The Projects Query ARGS
                $job=[
                    
                    'jobs'=>-1,
                ];
                // The Project Query
                $job_query=new WP_Query($job);
                 
                // The Project Loop
                if(!empty($job_query->get_results())){
                    foreach ($job_query->get_results() as $job){
                        echo $job->display_name . '<br>';
                    }

                }

?>
            </div>   <!--Cardbody Div end -->
          </div>  <!-- Col Div end -->


      </div>   <!-- Row Div end -->
    </div>   <!-- Project Div end -->
</div>  <!-- Main Wrapper end -->
   


    <a href="<?php the_permalink(); ?>" class="mix<?php if ($class_names) { echo ' ' . $class_names;} ?>">
            <!-- Post content -->
        </a>

<?php endwhile; ?>
</div>
<?php get_footer(); ?> 