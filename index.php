<?php
include 'header.php';
include 'conn.php';
$sql = "SELECT * FROM student";
 $result=mysqli_query($conn,$sql);

?>

<div id="main-content">
    <h2>All Records</h2>
    <?php 
       if(mysqli_num_rows($result) > 0) 
       {
        ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
       
        <tbody>
            <?php 
            while($row =mysqli_fetch_assoc($result))
            {
              ?>
            <tr>
                <td><?php echo $row['s_id'] ?></td>
                <td><?php echo $row['s_name'] ?></td>
                <td><?php echo $row['s_address'] ?></td>
                <td>
                    <?php 
                    $sql1 = "SELECT * FROM studenclass WHERE c_id = {$row['s_class']}";
                    $result1 =mysqli_query($conn,$sql1);
                    $row1 = mysqli_fetch_assoc($result1);
                    echo $row1['c_name'];
                    ?>
                </td>
                <td><?php echo $row['s_phone'] ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['s_id'];?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['s_id'];?>'>Delete</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <?php }?>
</div>
</div>
</body>
</html>
