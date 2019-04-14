<?php

session_start();
if(!isset($_SESSION['userId']))
{
    header('location: login.php');
    exit();
}


?>

<!DOCTYPE html>
<html>
<head>
<style>
    
    
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 34px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #000099;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

    div.a{
        padding-left: 20px;
        padding-top: 0px;
        padding-right: 20px;
        padding-bottom: 10px;
    }
    
    div.b{
        padding-left: 20px;
        padding-top: 40px;
        padding-right: 20px;
        
    }
    div.c{
        padding-left: 20px;
        padding-top: 40px;
        padding-right: 20px;
        
    }
    div.d{
        padding-left: 20px;
        padding-top: 40px;
        padding-right: 20px;
        
    }
    div.e{
        padding-left: 20px;
        padding-top: 40px;
        padding-right: 20px;
        
    }
.button:hover {background-color: #ecb3ff}

.button:active {
  background-color: #00bfff;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
    <title>Auto-cad</title>
<body>

<center><h1>Auto-cad</h1></center>
<div class="a">
    <a href="autorf.php">
       <button class="button"> Registration Fees</button></a>
    <br></div>
    
<div class="b">  
   <a href="autops.php">
       <button class="button">Problem Statement</button></a>
</div>  
    
<div class="e">  
   <a href="autoes.php">
       <button class="button">Event Schedule</button></a>
</div> 
<div class="d">  
   <a href="logout.php">
       <button class="button">Logout </button></a>
</div>           
</body>
</html>
