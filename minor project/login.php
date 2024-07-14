

<?php

   $conn = mysqli_connect("localhost","root","");

   if(isset($_POST['login_Btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql="SELECT * FROM websitelogin.logindetails WHERE email = '$email'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
      $resultPassword = $row['password'];
      if($password == $resultPassword){
         header('Location:index.html');
      }else{
         echo "<script>
         alert('Login unsuccessful');
         </script>";
      }
    }
   }
?>