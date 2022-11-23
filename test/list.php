<?php
    $provincecode=0;
    $districtcode=0;

    if (isset($_REQUEST['Province'])){
       
        $provincecode=$_REQUEST['Province'];
       
        
    }


?>


<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
<?php
include('bin/config.php');
include('bin/functions.php');
if($provincecode==0){
$sql ="SELECT * FROM province";
$stmt = $conn->prepare($sql);
$stmt->execute();
$results=$stmt->fetchAll(PDO::FETCH_OBJ);
?>
 Select Your Provice :
<select name="Province" onchange="this.form.submit()">
        <option value="" disabled selected>--select--</option>

<?php
foreach($results as $row){
    echo "<option value='$row->ProvinceCode'>$row->Province</option>";
   // echo $row->Province;
}
}else{
?>
   </select>


You have selected <?php getprovince($provincecode);?> province<br>

Select Your District :
<select name="District" onchange="this.form.submit()">
        <option value="" disabled selected>--select--</option>
<?php

$sql ="SELECT * FROM `district` WHERE DistrictCode like '".$provincecode."%';";
$stmt = $conn->prepare($sql);
$stmt->execute();
$results=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach($results as $row){
    echo "<option value='$row->DistrictCode'>$row->District</option>";
   // echo $row->Province;
}
?>
</select>

</form>
<?php
}
?>