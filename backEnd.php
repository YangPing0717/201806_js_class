
<?php
	// echo "Hello PHP"; // echo 把東西送回前端
	// $name='Hello';
	// echo "<b>Hello</b> PHP <script>alert('Hello');</script>"; // 解析成 HTML 格式

	// $name=$_REQUEST['name']; // 類似全域變數
	// echo $name;


	$name=$_REQUEST['name']; // 類似全域變數
	if($name=='taipei'){
		echo '300 wan';
	}else if($name=='london'){
		echo '600 wan';
	}else{
		echo 'no data';
	}
	


	/*
	
	網址:	
		http://localhost:8080/backEnd.php?name=城市名稱
		http://localhost:8080/backEnd.php?name=taipei
		http://localhost:8080/backEnd.php?name=london
	
	*/

?>