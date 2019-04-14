<?php
    session_start();
    $_SESSION
    include('conn.php');
   if(isset($_POST['submit'])){
        
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        
                

       $sql="select * from alogin where login='$login' and pass = '$pass'";
       $result=mysqli_query($db, $sql);
       
       $row = mysqli_fetch_array($result);
       if($row['login']==$login && $row['pass']==$pass)
       {
           //$URL = $_SESSION['Redirectke'];
           //header('Location:'.$URL.'');
           header('Location:home.html');
            exit();
       }
       else{
          echo '<script type="text/javascript">alert("Inncorect username or password");</script>';
       }
        
    }
?>