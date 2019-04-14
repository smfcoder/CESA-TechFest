<?php
       session_start();
    if(isset($_SESSION['userId'])) {
        unset($_SESSION['userId']);
    }
    
    include('conn.php');
   if(isset($_POST['submit'])){
        
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        $_SESSION['userId']=$login;        

       $sql="select * from alogin where login='$login' and pass = '$pass'";
       $result=mysqli_query($db, $sql);
       
       $row = mysqli_fetch_array($result);
       if($row['login']==$login && $row['pass']==$pass)
       {
           //$URL = $_SESSION['Redirectke'];
           //header('Location:'.$URL.'');
       
          header('Location:home.php');
            exit();
       }
       else{
          echo '<script type="text/javascript">alert("Inncorect username or password");</script>';
       }
        
    }
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
 
}
    h2.login_heading {
        width:25%;
        min-width:250px;
        text-align: center;
        margin: 0 auto;
        color:tomato;
        
    }
    hr.hrTag {
        width:50px;
        border:none;
        border-bottom:3px solid tomato;
    }
    
    form.table_form {
       
        margin:0 auto; margin-top:50px;
        width:75%;
        min-width:250px;
    }
</style>
</head>
<body>
    
    <div class="header">
        <h2 class="login_heading">CESA Admin Panel</h2>
        <hr class="hrTag" />
    </div>

    <form action="login.php" method="post" class="table_form">

        <center><img src="admin.png" height="30%" width="30%"></center>

          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="login" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass" required>

            <button type="submit" name="submit">Login</button>

          </div>
    </form>

</body>
</html>
