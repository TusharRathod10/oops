<?php
include "namespace1.php";
use Html as H;
$table = new H\Table();
$table->title = "My table";
$table->numRows = 5;

$row = new H\Row();
$row->numCells = 3;
?>

<html>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>

</body>
</html>
