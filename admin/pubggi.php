<?php
  // Create database connection
  include('conn.php');
  $msg = "";
  if (isset($_POST['Message'])) {
      $text = $_POST['Message'];
      $text = preg_replace("#\[sp\]#", "&nbsp;",$text);
      $text = preg_replace("#\[nl\]#", "<br>\n",$text);
     

  	$sql = "UPDATE pubg SET text='$text' WHERE id=4 ";
  	// execute query
  	mysqli_query($db, $sql);

  }
  $result = mysqli_query($db, "SELECT * FROM pubg where id=4");
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
<title>Pubg</title>
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
    <center><h1> Pubg General Instructions  </h1></center>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      	echo " ".$row['text']." ";
      echo "</div>";
    }
  ?>
  <form method="POST" action="pubggi.php" onsubmit='addNewLines();'>
  	<div>
        <textarea id='Msg' style='display:none;' name='Message'></textarea>
      </div>
      <center>
      <div class="TA">
        <textarea id="xyz" style="width:500px; height:200px;"></textarea>
  	</div>
  	<div>
  		<input type="submit">
          </div></center>
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