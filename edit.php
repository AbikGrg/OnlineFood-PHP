<form action="" method="POST">
         ID:<br><input type="text" size="27"name="id"placeholder="Enter the ID" /><br> 
       pnumber:<br><input type="text" size="27"name="avg_rating" placeholder="Enter the rating"/><br>
     <br> <input type="submit" name="update" value="Update">
   </fieldset>
 </form>



  <?php
include('connection/connect.php');
if(!empty($_POST['update']))
{
$id=$_POST['id'];  
$avg_rating=$_POST['avg_rating'];
$query="UPDATE popular SET avg_rating='$_POST[avg_rating]' where id='$id'";
$result=mysqli_query($db,$query);
if($result){
  echo"Successful updated (Email and id remain same as before)";
}else{
  echo"Put email and ID as before";
}
}
?>