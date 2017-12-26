<html>
<head>
<script src="http://code.jquery.com/jquery-1.3.2.js"></script>
<script>
 $(document).ready(function() {
 	 $("#sondeger").load("control.php");
   var refreshId = setInterval(function() {
      $("#sondeger").load('control.php');
   }, 5000);
});
</script>
<style type="text/css">
#deger
{
color:darkblue;
font-size:40px;
margin-bottom:-20px;
}
table td{width:200px;}
#degeryazi{ text-align: center;}
</style>
<link rel="manifest" href="manifest.json">
    <script type="text/javascript" src="https://servisimerkezim.bildirim.net/o862472198.js"></script>
    <script>
        var webPush = new webPush({}) || [];
        webPush.init();
    </script>
</head>
<body bgcolor="#848484">
<center>
<?php 
include("baglan.php");
header("refresh:20;url=#");
$sorgula = mysql_query("SELECT * FROM coin WHERE id='1'");
$cek = mysql_fetch_array($sorgula);
$altv = $_POST["altp"];
$ustv = $_POST["ustp"];
$message = "Please, Number Enterr";

if($_POST["altp"]){$sonuca=is_numeric($altv); if($sonuca){
$gduzenle = mysql_query("UPDATE coin SET alt='$altv' WHERE id='1'");
header('Location: # '); } else {echo "<script type='text/javascript'>alert('$message');</script>"; header('Location: # ');}
 }
if($_POST["ustp"]){ $sonuc=is_numeric($ustv); if($sonuc){
$gduzenle = mysql_query("UPDATE coin SET ust='$ustv' WHERE id='1'");
header('Location: # ');} else {echo "<h1>.'.$message.'</h1>";}
 }
?>
<h1> <?php if($cek["coin"] < $cek["alt"]) {echo "Below the Lower Digit You Specify <audio src='sound.mp3' autoplay='true'></audio> ";} elseif($cek["coin"] > $cek["ust"]) { echo "High the upper Digit You Specify <audio src='sound.mp3' autoplay='true'></audio>";} else{echo "<font color='darkgreen';>Between Limits</font>";}?> </h1>
<table border="1">
<tr>  
<td>
<div id="deger"> <?php if($_POST){ echo $_POST["altp"];} else{ echo $cek["alt"];} ?></div> <br>
<div id="degeryazi">Lowwer Limit</div> </td>  
<td><div id="deger" style="color:darkgreen;">  <div style="float:left;"id="sondeger"></div> </div> <br>
<div id="degeryazi" style="color:darkgreen;"><b> <?php echo $cek["tur"]; ?></b> Price </div> </td> 
<td> <div id="deger">  <?php if($_POST){ echo $_POST["ustp"];} else{ echo $cek["ust"];}?> </div><br>
<div id="degeryazi">Upper Limit </div>  </td> </tr>
<tr>
<td> <form action="#" method="post">  Lowwer Limit : <br> 
<input type="text" step=”0.01″ title="Just enter the number" name="altp" />  
<br><input type="submit" value="Submit" /></form> </td> <td>Choose Coin: <br> 
<form action="#" method="post">
<select name="deger">
  <option value="<?php echo $cek["tur"]; ?>"> <?php echo $cek["tur"]; ?> </option>
  <option value="STEEM">Steem</option>
  <option value="BCC">Bitcoin Cash</option>	
  <option value="ETH">Ethereum</option>
<option value="LTC">Litecoin</option>
<option value="XMR">Monero</option>
<option value="DASH">Dash</option>
</select> 
<br> 
<input type="submit" value="Select" />
</td> <form>
<?php if($_POST["deger"]) { $tur = $_POST["deger"]; $gduzenle = mysql_query("UPDATE coin SET tur='$tur' WHERE id='1'"); header('Location: # ');} ?>
<td>  <form action="#" method="post"> <br>
Upper Limit: : <br> <input type="text" step=”0.01″ title="Just enter the number" name="ustp" /> <br>
<input type="submit" value="Submit" />
</form>
</td>
</td>
</table>
<br>

</center>
</body>
</html>
