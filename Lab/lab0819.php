    <?php 
$x = 100;

$result = " x = $x";
// $result = ' x = $x';
echo $result;
    ?>

<?php 

$result = "3'14\"";
echo $result;

?>

<pre>
<?php
$x = "林一二";
 
$result = <<<sqlCommand____
    select *
    from tableName
    where cName like '%$x%'
    order by ...
sqlCommand____;
 
echo $result;
 
?>
</pre>
