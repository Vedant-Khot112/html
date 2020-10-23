<?php 
$link='';
if (isset($_POST['submit'])) {
	$url=$_POST['url'];
	$e = explode(".", $url);
	$ex = end($e);
	$en= $e['0'];
	$ev = $e['1'];
	$r =$en.".ss".$ev.".".$ex;
	if ($ev==='youtube') {
		$link = "<a href='$r'>Click Link To download The video</a>";

	}
	else{
		$link= "<p style='color: #f73859;'>Use youtube link</p>";
	}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Download Video🎞🎞</title>
	<style>
		body{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: sans-serif;
			background: #1fab89;
			max-width: 1300px;
			padding: 25px;
			color: #62d2a2;
		}
		form{
            display: block;
            text-align: center;
            width: 20%;
            padding: 20px;
            height: 20%;
            border-radius: 15px;
            box-shadow: -15px -15px 15px rgba(255,255,255,0.2),
                       15px 15px 15px rgba(0,0,0,0.1);
            /*box-shadow: -30px 30px 20px rgba(0,0,0,0.3);*/
		}
		
		label{
			font-size: 20px;
			text-transform: capitalize;
			
		}
		input:hover{
			box-shadow: 10px 10px rgba(0,0,0,0.5);
			border: none;
			margin-bottom: 10px;
		}
		.url{
			padding: 0 20px;
			margin: 10px 0;
			height: 30px;
			border-radius: 10px;
		}
		.submit{
			margin-top: 20px;
			width: 100px;
			height: 30px;
			font-size: 15px;
			text-decoration: bold;
			background: #9df3c4;
			border: none;
			color: #62d2a2;
			border-radius: 10px;
			cursor: pointer;
			transition: all 0.5s ease-in-out;
 		}
		
		h2{
			font-size: 35px;
			padding: 5px;
		}
		a{
			text-decoration: none;
			color: #62d2a2;
			transition: all 0.5s ease-in-out;
		}
		a:hover{
			color: #fff;
		}

input:active{
	border: none;
}
input{
	border: none;
}
.msg{
	margin: 10px 0;
}.submit:hover{
	background: #d7fbe8;
}

	</style>
</head>
<body>
	<center>
		<h2>Only Youtube Link</h2>
 <form method="post">
 	<label for="url">Input url</label><br>
 	<input type="text" id="url" class="url" name="url" placeholder="example:https://www.youtube.com/watch?v=xyz" required><br>
 	<button class="submit" name="submit"><b>Submit</b></button>
 	<?php  if (isset($link)  && $link!='') { ?>
 		<div class="msg"><?php echo $link; ?></div>
 	<?php } ?>
 </form>
</center>
</body>
</html>
<!-- <iframe style="border-radius: 50px" width="560" height="315" src="w.mp4" autoplay mute frameborder="0" allow=" autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 -->
