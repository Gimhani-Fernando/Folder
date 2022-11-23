<?php
$provincecode=0;
$districtcode=0;
if (isset($_REQUEST['Province'])){
    $province=$_REQUEST['Province'];
}
?>

<?php
include "conn.php";
$sql= "SELECT * FROM province";
$stmt = $con->prepare($sql);
$stmt->execute();
$results=$stmt->fetchAll(PDO::FETCH_OBJ);
foreach($results as $row){
    echo $row->Province."<br>";
}
?>

<form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
Select Your Province : 
    <select name="province" onchange="this.form.submit()">
        <option value="" disabled selected>--select--</option>
        
        
        <!--?php
        foreach($results as $row){
            <option value='$row->ProvinceCode'>$row->Province</option>;
        ?-->
        
        <option value=1>Western</option>
        <option value=2>Central</option>
        <option value=3>Southern</option>
        <option value=4>Northern</option>
        <option value=5>Eastern</option>
        <option value=6>North-Western</option>
        <option value=7>North-Central</option>
        <option value=8>Uva</option>
        <option value=9>Sabaragamuwa</option>
        
    </select>

You have selected XXXXXXXXXXXXXX province<br>

Select Your District :
<select name="district" onchange="this.form.submit()">
        <option value="" disabled selected>--select--</option>

        <?php
        $sql="SELECT * FROM 'district' WHERE DistrictCode like '".$provincecode."'"
        $stmt=$con->prepare($sql);
        $stmt->execute();
        $results=$stmt->fetchAll(PDO::FETCH_OBJ);
        foreach($results as $row){
            echo "<option value='$row->DistrictCode'>$row->District</option>";
        }
        ?>
    </select>
</form>