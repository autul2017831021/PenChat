<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: white;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #28b485;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #28b485;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

<h2>Search Button</h2>

<p>Full width:</p>
<form class="example" action="nmap.php" method="post">
  <input type="text" placeholder="search" name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

</body>
</html> 
<?php 

if(isset($_POST['search'])){
	$msg = $_POST['search'];
  $cmd = 'nmap '.$msg;
	while (@ ob_end_flush()); 
  $proc = popen($cmd, 'r');
  echo '<pre>';
  while (!feof($proc))
  {
      echo fread($proc, 4096);
      @ flush();
  }
  echo '</pre>';
	
}

?>


