# fictional-university-theme

## wordpress functions to call inside theme
* bloginfo('name')  - show the title of the wordpress
* bloginfo('description') - show the description of wordpress

## while loop
```
<?php
  $count = 1;

  while($count<11) {
    echo "<li> $count </li>";
    $count++;
  }

?>

Example 2

<?php
 $names = array('John','Wick', 'Hulk', 'Spider');

 $count = 0;

 while($count<count($names)) {
    echo "<li> $names[$count]";
    $count++;
 }
?>
```

##To loop the posts 
```
<?php
while(have_posts()){
    the_post(); ?>
    <h2> <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a></h2>
    
    <hr>
<?php
}
```

##create single.php and show the posts 
```
   <h1> <?php the_title();?> </h1>
   <p> <?php the_content();?> </p>

   <p> <a href="http://fictional-university.local/">Back </a> </p>
```

##Create page.php 
```
<?php 
while(have_posts()){
    echo '<h1> Hello </h1>';
    the_post();
    the_title();
}
```

### create header.php & footer.php then inside the page.php & singple.php call these
single.php or page.php
```
<?php get_header();?>

   <h1> <?php the_title();?> </h1>
   <p> <?php the_content();?> </p>

   <p> <a href="http://fictional-university.local/">Back </a> </p>

<?php get_footer(); ?>
```

### load stylesheet and other scripts
using functions 
```
functions.php
<?php

function university_files(){
    wp_enqueue_style('university_main_styles',get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'university_files')
?>
```
call this in the header.php using 
```
wp_head();
```
insde the header