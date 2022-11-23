<?php
    include ("bin\config.php");

   if(isset($_FILES['image'])){
      $errors= array();
    $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";

         $sql ="insert into img (fname) values ('$file_name')";
         $stmt = $conn->prepare($sql);
     
         $stmt->execute();
     



      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
      <?php

$sql ="SELECT * FROM img";
$stmt = $conn->prepare($sql);
$stmt->execute();
$results=$stmt->fetchAll(PDO::FETCH_OBJ);

foreach($results as $row){
 
   echo  "<img src='images/".$row->fname."'>";
   
}


?>



      





   </body>
</html>