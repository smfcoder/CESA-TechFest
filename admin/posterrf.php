<?php
  // Create database connection
  include('conn.php');
  $msg = "";
  if (isset($_POST['Message'])) {
      $text = $_POST['Message'];
      $text = preg_replace("#\[sp\]#", "&nbsp;",$text);
      $text = preg_replace("#\[nl\]#", "<br>\n",$text);
     

  	$sql = "UPDATE poster SET text='$text' WHERE id=1 ";
  	// execute query
  	mysqli_query($db, $sql);

  }
  $rf = mysqli_query($db, "SELECT * FROM poster where id=1");
?>
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
<title>Poster</title>
<style>
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 100%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
    
    div.TA
    {
        padding-left: 0px;
        padding-top: 200px;
    }
  
  </style>
</head>
<body>
    <center><h1> Poster Registration Fees </h1></center>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($rf)) {
      	echo " ".$row['text']." ";
      echo "</div>";
    }
  ?>
  <form method="POST" action="posterrf.php" onsubmit='addNewLines();'>
  	<div>
        <textarea id='Msg' style='display:none;' name='Message'></textarea>
      </div>
      <div class="TA">
          <center>
        <textarea id="xyz" style="width:500px; height:200px;"></textarea></center>
  	</div>
  	<div>
  		<center><input type="submit"></center>
  	</div>
  </form>
</div>
    
    <script>
        function addNewLines()
        {
            text = document.getElementById('xyz').value;
            text = text.replace(/  /g,"[sp][sp]");
            text = text.replace(/\n/g,"[nl]");
            document.getElementById('Msg').value=text;
            return false;           
        }
        
    </script>
    
    
</body>
</html>