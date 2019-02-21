<?php

       $file= "quotations.txt";
       $quotations = file($file);
       $rand_quote = rand(0, count($quotations)-1);
?>

<!DOCTYPE html>
<html lang='en'>
<head>

	<title>Khurram Khan</title>
	<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="Project1.css">

</head>
<body>

		<h1>Muhammad Khurram Khan</h1>

	<img class="center" src='/images/KK.jpg' alt='Khurram Khan'>

		<h1>About Me</h1>
	<h2> My name is Muhammad Khurram Khan. You can call me Khurram. I'm a Lead Application Engineer in a tech company. </h2> 


		<h1>Random Quote</h1>

<h2>  <?php echo $quotations[$rand_quote]; ?> </h2>


</body>
</html>
