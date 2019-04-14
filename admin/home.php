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
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

    div.a{
        padding-left: 20px;
        padding-top: 70px;
        padding-right: 20px;
        padding-bottom: 10px;
    }
    
    div.b{
        padding-left: 20px;
        padding-top: 50px;
        padding-right: 20px;
        
    }
    div.c{
      padding-left: 20px;
        padding-top: 30px;
        padding-right: 20px;
        
    }
.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body>

<h2>CESA ADMIN PANEL</h2>
<div class="a">
    <a href="selector.php">
       <button class="button">Update Data on side </button></a>
    <br></div>
    
<div class="b">  
   <a href="table.php">
       <button class="button">Total Registration </button></a>
</div>
<div class="c">  
   <a href="logout.php">
       <button class="button">Logout </button></a>
</div>  
</body>
</html>
