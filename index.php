<?php
function greet($name, $color) {
    echo "Hello $name, is your fav color $color?";
}

greet("prad", "orange")

?>
<h1> <?php bloginfo('name') ?></h1>
<h2><?php bloginfo('description')?> </h2>

<?php
  $count = 1;

  while($count<11) {
    echo "<li> $count </li>";
    $count++;
  }

?>