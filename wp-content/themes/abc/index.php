<?php query_posts(array( 'post_type' => 'travel' )); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>


 
 <div class="entry">
   <?php
 
$trainer_email_address = types_render_field("xingcheng", array("output"=>"html","id"=>"get_the_ID()"));
 
//Output the trainer email
 
printf("Trainer Email Address displayed using Types API: %s",$trainer_email_address);
?>
  </div>
 

 <?php endwhile; else: ?>
 <p>Sorry, no posts matched your criteria.</p>
 <?php endif; ?>
 
