<?php
include "db_con.php";
if(isset($_POST['send'])){

   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $email=$_POST['email'];
   $pass=$_POST['pass'];
   $adrs=$_POST['adrs'];
   $cname=$_POST['cname'];
   $stname=$_POST['stname'];
   $zipnum=$_POST['zipnum'];
   
   $insertQuery = "Insert INTO `contact_table`(`FirstName`,`LastName`,`Email`,`Password`,`Address`,`City`,`State`,`ZipCode`) VALUES('$fname','$lname','$email','$pass','$adrs','$cname','$stname','$zipnum')";
   $query=mysqli_query($con,$insertQuery);

   if($query){
?>
<script>
alert('Your data has been saved!');
</script>
<?php
   }else{
?>
<script>
alert('Sorry!something went wrong!')
</script>
<?php
   }
?>
<?php
}
?>