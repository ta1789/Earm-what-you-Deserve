<?php
include 'include/config.php';
if (!empty($_POST["ctype"])) {

    $sql = mysqli_query($con, "select * from farmers where ctype='" . $_POST['ctype'] . "'");?>
<option selected="selected">Select</option>
<?php
while ($row = mysqli_fetch_array($sql)) {?>
<option value="<?php echo htmlentities($row['farmname']); ?>"><?php echo htmlentities($row['farmname']."-".$row['grade']); ?></option>
<?php
}
}

if (!empty($_POST["farmname"])) {

    $sql = mysqli_query($con, "select price from farmers where farmname='" . $_POST['farmname'] . "'");
    while ($row = mysqli_fetch_array($sql)) {?>
<option value="<?php echo htmlentities($row['price']); ?>"><?php echo htmlentities($row['price']); ?></option>
<?php
}
}

?>