
<?php
echo '<a href="mycgi?foo=', urlencode($userinput), '">';
?>

<?php
$foo="asasass/?&a=aa";
$bar="AA";

$query_string = 'foo=' . urlencode($foo) . '&bar=' . urlencode($bar);
echo '<a href="mycgi?' . htmlentities($query_string) . '">';
?>
