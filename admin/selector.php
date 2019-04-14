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
  background-color: #ff0000;
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
    div.f{
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
<body>

<center><h2>Select event</h2></center>
<div class="a">
    <a href="Building.php">
       <button class="button"> Building making</button></a>
    <br></div>
    
<div class="b">  
   <a href="Auto-cad.php">
       <button class="button">Auto-cad </button></a>
</div>  
    
<div class="c">  
   <a href="Poster.php">
       <button class="button">Poster Presentation </button></a>
</div>  

<div class="d">  
   <a href="Quiz.php">
       <button class="button">Quiz </button></a>
</div>  
    
<div class="e">  
   <a href="Pubg.php">
       <button class="button">Pubg </button></a>
</div>
<div class="f">  
   <a href="logout.php">
       <button class="button">Logout </button></a>
</div>
</body>
</html>
