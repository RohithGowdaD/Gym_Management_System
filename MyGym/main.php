<?php 

session_start();
include ("includes/db.php");

?>
<html>
<head>
<title>MyGym | Admin Login</title>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
    <style>
        body{
            margin:0;
        }
        .parent{
            background-image:url(https://img.freepik.com/premium-photo/3d-rendering-black-dumbbells-floor-dark-concept-fitness-room-with-training-equipments-back_67155-14961.jpg?w=2000);
            width:100%;
            height:100vh;

        }
.child{
width:200px;
padding:50px 0 50px 0;
color:black;
text-align:center;
background:white;
box-shadow:0 8px 25 px 0 black;
}
.child{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
}
</style>
</head>
<body>
<div class="parent">
<div class="child">
    <label><b> Main Page</b> </label><br>
    <form>
    <a href="http://localhost/MyGym/MyGym/admin/login.php">
    <input type="button" value="Admin Login"></a><br>
    <a href="http://localhost/MyGym/MyGym/login.php">
    <input type="button" value="User Login"></a><br>
</form>
  </div>

</div>

</body>
</html>
