<?php 
while(have_posts()){
    echo '<h1> Hello </h1>';
    the_post();
    the_title();
}