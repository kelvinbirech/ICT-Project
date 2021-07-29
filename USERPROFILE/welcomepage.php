<?php
 include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" type="text/css" href="style.css" />
 <title>LINK-ME</title>
</head>
<body>
<header>
 <nav>
  <ul>
   <li><a href=LINK-ME><LINK-ME></LINK-ME></a></li>
  </ul>
 </nav>
</header>
<div id="center">
<div id="center-set"> -CODED BY OMAR MOHAMMED. DSE-01-0010/2020
<h1 align='center'>KINDLY WELCOME TO LINK-ME PLATFORM <?php echo $loggedin_session; ?>,</h1>
You are now logged in. you can logout by clicking on signout link given below.
<div id="contentbox">
<?php
$sql="SELECT * FROM member where mem_id=$loggedin_id";
$result=mysqli_query($con,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">Your Profile</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Reg id:</div> </td>
<td class="tl-4"><?php echo $rows['mem_id']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Username:</div></td>
<td class="tl-4"><?php echo $rows['username']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Name:</div></td>
<td class="tl-4"><?php echo $rows['fname']; ?> <?php echo $rows['lname']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email id:</div></td>
<td class="tl-4"><?php echo $rows['address']; ?></td>
</tr>
</table>
<div id="reg-bottom" class="btmrg">Copyright &copy; DSE-01-0010/2020</div>
</form>
</div>
</div>
<div id="login">
<div id="login-sg">
<div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div>
<div id="st"><a href="deleteac.php" id="st-btn">Delete Account</a></div>
</div>
</div>
<?php  
}
?>
</div>
</div>
</div>
</br>
<div id="footer"><p> Copyright &copy; DSE-01-0010/2020 </p></div>
</body>
</html>
