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
