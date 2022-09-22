<?php include 'header.php'; 
include 'conn.php';

?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" required />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show"/>
    </form>
<?php if(isset($_POST['showbtn']))
{
    $sid = $_POST['sid'];
    $sql = "SELECT * FROM student WHERE s_id = {$sid}";
    $result =mysqli_query($conn,$sql);
    $row =mysqli_fetch_assoc($result);
 ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['s_id']; ?>" />
            <input type="text" name="sname" value="<?php echo $row['s_name']; ?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['s_address']; ?>" />
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
            <input type="text" name="sphone" value="<?php echo $row['s_phone']; ?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php }?>
</div>
</div>
</body>
</html>
