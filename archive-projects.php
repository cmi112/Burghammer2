<?php
get_header();
?>

<div id="filter-wrapper">
    <h1>Unsere Projekte</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, facere ipsum dolor sit amet consectetur adipisicing elit. Architecto, facere?</p>
    <h1>Projekte Filtern:</h1>
    <?php
    $terms = get_terms( array( 'taxonomy' => 'project_categories' ) );
    $terms=get_terms('project_categories');
    ?>
    <div class="category">
        <button class="btn btn-light filter-btn sort-btn" data-filter="all">ALL</button>
        <?php 
        foreach($terms as $term) {
            ?>
            <button class="btn btn-light filter-btn" data-filter=".<?php echo $term->slug;?>"  >  <?php echo $term->name;?> </button>
            <?php 
        }
        ?>
    </div>
</div>

<div class="row row-cols row-cols-sm-2 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 w-100" id="mix-wrapper">
    <?php 
    $args=array( 'post_type'=>'projects', 'posts_per_page'=>8);
    $query=new WP_Query($args);
    while($query->have_posts()){
        $query->the_post();
        $termsArray=get_the_terms($post->ID,'project_categories');
        $termsSlug="";
        foreach($termsArray as $term){
            $termsSlug .= $term->slug .'';
        }
        ?>
        <div class="col mix <?php echo $termsSlug;?>">
            <div class="card mb-3" >
                <div class="card-body"> 
                    <img class="card-img-top" src="<?php the_post_thumbnail_url('project-large');?>">
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
<?php previous_posts_link();?>
<?php next_posts_link();?>

<?php get_footer(); ?>