<?php 
require '../function.php';
$id = $_GET['id'];
$query = "DELETE FROM place WHERE id = '$id'";

if($conn->query($query)) {
    echo "<script>
            alert('data berhasil di hapus');
            document.location.href='./index.php';
          </script>
    ";
} else {
    echo "<script>
            alert('data berhasil di hapus');
            document.location.href='./index.php';
          </script>
    ";
}
?>