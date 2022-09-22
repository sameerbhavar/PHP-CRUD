<?php include 'header.php'; ?>
<?php include 'conn.php';
$id = $_GET['id'];

$sql = "SELECT * FROM student WHERE s_id = {$id}";
$result =mysqli_query($conn,$sql);
$row =mysqli_fetch_assoc($result);

?>


<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['s_id'];?>"/>
          <input type="text" name="sname" value="<?php echo $row['s_name'];?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['s_address'];?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <select name="sclass">
              <option value=""  disabled>Select Class</option>
              <?php 
                    $sql1 = "SELECT * FROM studenclass";
                    $result1 =mysqli_query($conn,$sql1);
                    while($row1 = mysqli_fetch_assoc($result1))
                   {
                ?>
              <option value="<?php echo $row1['c_id']; ?>"
               <?php if($row1['c_id'] == $row['s_class']){ echo 'selected';} ?> >
               <?php echo $row1['c_name']; ?></option>
              <?php } ?>
          </select>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['s_phone'];?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
</div>
</div>
</body>
</html>
