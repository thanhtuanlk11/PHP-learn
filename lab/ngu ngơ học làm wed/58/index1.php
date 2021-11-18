<?php
$things = array();
$things[] = 'table';
$things[] = 'book';
$things[] = 'pen';

$length = count($things);
echo $length;
?>

<?php
$things = array();
$things[0] = 'table';
$things[1] = 'book';
$things[2] = 'pen';
?>
<?php
$things = array('table', 'book', 'pen', 'pencil');
?>
<?php
$things = array('table', 'book', 'pen', 'pencil');
if (!empty($things)) {
    foreach ($things as $key => $value) {
        echo $value . ' ';
    }
}
?>
