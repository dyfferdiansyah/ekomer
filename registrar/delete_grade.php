<?php
 include('dbcon.php');

 if (isset($_POST['delete'])){
$id = $_POST['id'];
$get_id = $_POST['get'];


 mysql_query("delete from grade where grade_id='$id'") or die(mysql_error()); 
?>
<script>
  window.location = "view_grade.php<?php echo '?id='.$get_id;  ?>";   
</script>

<?php } ?>