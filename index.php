<?php
	$ar=range('a','z');	
	if(isset($_POST['str'])&&$_POST['str']){
		$ans=0;
		$str=strtolower($_POST['str']);
		$length=strlen($str);
		for($i=0;$i<$length;$i++){
			$char=substr(strrev($str),$i,1);
			foreach($ar as $k=>$v){
				if($v==$char){
					if(empty($i)){
						$ans=$k+1;
					}else{
						$ans+=pow(26,$i)*($k+1);
					}
				}
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		form{
			width: 500px;
			margin: 50px auto;
			text-align: center;
			pading: 2rem;
		}
		input{
			width: 100%;
			padding-left: 1rem;
			line-height: 30px;
			height: 30px;
		}
		button{
			margin-top: 10px;
			margin-left: 50%; 
		}
	</style>
</head>
<body>
	<section>
		<form action="" method="post">
			<h1>Coding conversition</h1>
			<?php if(isset($ans)):?><h1>Answer: <span style="color:red;"><?=$ans?></span></h1><?php endif;?>
			<input type="text" placeholder="Key string" name="str"/>
			<br>
			<button type="submit">Converse</button>
		</form>
	</section>
</body>
</html>