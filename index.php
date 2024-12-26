<?php
function greet($name, $color) {
    echo "Hello $name, is your fav color $color?";
}

greet("prad", "orange")

?>
<h1> <?php bloginfo('name') ?></h1>
<h2><?php bloginfo('description')?> </h2>

<?php
 $names = array('John','Wick', 'Hulk', 'Spider');

 $count = 0;

 while($count<count($names)) {
    echo "<li> $names[$count]";
    $count++;
 }
?>