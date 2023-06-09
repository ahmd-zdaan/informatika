<?php
include_once "config/connect.php";

$id = $_GET['id'];

$query = "DELETE FROM data_kelahiran WHERE id=".$id;
$result = mysqli_query($connect, $query);

if ($result) {
    echo "<script>window.location.href = 'index.php'</script>";
}
?>