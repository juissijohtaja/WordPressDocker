<header class='content-header'>
  <div class='meta mb-3'>
    <span class='date'><?php the_date(); ?></span>
    <?php the_tags(
      '<span class="badge bg-dark mr-2">', 
      '</span><span class="badge bg-dark mr-2">', 
      '</span'); 
    ?>
    <span class='comments'><?php comments_number(); ?></span>
    
  </div>
</header>
<h1 class='mt-1 mb-4'><?php the_title(); ?></h1>
<p class='mt-2 mb-1'><?php the_excerpt(); ?></p>

<div class='bg-dark px-3 py-4'>
  <?php comments_template(); ?>
</div>