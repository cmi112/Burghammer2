<?php get_header(); ?>






	
<div id="mix-wrapper">
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
                   Ausführung: <span> <?php the_field('project_date');?></span>
                   Auftraggeber: <span> <?php the_field('project_client');?> </span>
                   Sektion: <span><?php the_field('category');?> </span> 

                </p>
                <p class="card-text">
                <?php the_content(); ?>
                </p>
                   
<?php
                // The Projects Query ARGS
                $project=[
                    
                    'projects'=>-1,
                ];
                // The Project Query
                $project_query=new WP_Query($project);
                 
                // The Project Loop
                if(!empty($project_query->get_results())){
                    foreach ($project_query->get_results() as $project){
                        echo $project->display_name . '<br>';
                    }

                }

?>
 
               <!-- Tiny Sliders start -->
     
        <?php 
$images = get_field('project_gallery');
if( $images ): ?>
    <div class="my-slider">
        <?php foreach( $images as $image ): ?>
            <div class="my-slider-img">
                <a href="<?php echo esc_url($image['url']); ?>">
                     <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
                <p><?php echo esc_html($image['caption']); ?></p>
            </div>
        
        <?php endforeach; ?>
    </div>
    <ul id="customize-thumbnails">
    <?php foreach( $images as $image ): ?>
            <li>
                <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </li>
        <?php endforeach; ?>

    </ul>
<?php endif; ?>

  <!-- Tiny Sliders End -->



 
               
             
            </div>   <!--Cardbody Div end -->
          </div>  <!-- Col Div end -->


      </div>   <!-- Row Div end -->
    </div>   <!-- Project Div end -->
    </div>  <!-- Main Wrapper end -->
   


    <a href="<?php the_permalink(); ?>" class="mix<?php if ($class_names) { echo ' ' . $class_names;} ?>">
            <!-- Post content -->
        </a>

   
    <?php endwhile; ?>










    






				
<?php get_footer(); ?> 