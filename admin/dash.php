

<!DOCTYPE html>
<html>
<head>


        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js" </script>
        <script src="bootstrap-3.3.7/js/bootstrap.js" </script>








</head>
<body>
<div class="main">

<div class="row">
  <div class="col-sm-12">
  <nav class="shadow navbar navbar-inverse navbar-fixed-top nbar">
    <div class="navbar-header">
      <a class="navbar-brand lspace" href="dash.php">ST JOHN</a>
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
    </div>
   <div class="collapse navbar-collapse navbar-menubuilder">
    <ul class="nav navbar-nav">
      <li class="space"><a href="compiler.php"><i class="fa fa-code ispace"></i>Add program</a></li>

      <li class="space"><a href="#"><i class="fa fa-check-square ispace"></i>Debug</a></li>


    </ul>
    </div>
    <div style="line-height: 30px; margin-left: 207px;" align="center"> <a href="index.php">Click here to logout</a></div>

</nav>
</div>
</div>


<div class="row log">

<style>

body{
	margin:0px;
	font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;
	}

input[type=text], select {
    width: 100%;
	border-radius: 5px;
	margin: 7px 0;
	border: 1px solid #ccc;
    padding: 14px 18px;
    display: inline-block;
    box-sizing: border-box;
}

input[type=submit]:hover {
    background-color: #00a7d1;
}

textarea, select {
   width: 100%;
	border-radius: 5px;
	margin: 7px 0;
	border: 1px solid #ccc;
    padding: 14px 18px;
    display: inline-block;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
	border: none;
	color: white;
	padding: 14px 20px;
    background-color: #01c9fb;
    margin: 8px 0;
	cursor: pointer;
    border-radius: 4px;

}

</style>

</head>
<body>
<table bgcolor="#f2f2f2" style="padding:50px" align="center">
<form action="" method="post">
<tr>
<td> Program number : </td><td><input type="text" name="name"></td>
</tr>
<tr>
<td> Name of Staff : </td><td><input type="text" name="email"></td>
</tr>
<tr>
<td> PID : </td><td><input type="text" name="website"></td>
</tr>
<tr>
<td> Program header : </td><td><textarea name="comment" rows="6" cols="50"></textarea></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td></tr>

</form>
</table>



<?php
if(isset($_POST["submit"]))
{

 //Including dbconfig file.
include 'dbconfig.php';

$name = $_POST["name"];
$email = $_POST["email"];
$website = $_POST["website"];
$comment = $_POST["comment"];


mysql_query("INSERT INTO comment_table (name,email,website,comment) VALUES ('$name','$email','$website','$comment')");

echo '<center> Comment Successfully Submitted </center>';

}

 ?>

</body>

</div>
</div>



<br><br><br>
<div class="area">
<div class="well foot">
<div class="row area">
<div class="col-sm-3">
<!-- BEGIN: Powered by Supercounters.com -->
<center><script type="text/javascript" src="http://widget.supercounters.com/online_i.js"></script><script type="text/javascript">sc_online_i(1360839,"ffffff","e61c1c");</script><br><noscript><a href="http://www.supercounters.com/">Free Online Counter</a></noscript>
</center>
<!-- END: Powered by Supercounters.com -->

</div>

<div class="col-sm-5">


<div class="fm">

<b>Beta Version-2019</b><br>
<b>Developed By Shubham swami, Sofia and Dhvani Shah</a></b>

</div>
</div>


<div class="col-sm-4">
<?php
date_default_timezone_set("Asia/Dhaka");
 $t=date("H:i:s");
echo"<b>Server Time:  $t</b>";

?>
</div>
</div>
</div>
</div>
</body>
</html>
