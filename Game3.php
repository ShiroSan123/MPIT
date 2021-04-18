<!DOCTYPE html>
<html>
<head>
	<title>3 локация</title>
	<meta charset="utf-8" name="viewport">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
	</style>
	<style>
	p {
		font-size:24px;
	}
	input {
		font-size:24px;
	}
</style>
</head>
<body style="background-color:#d9ffd6;">
	<div class="col-8 mx-auto bg-dark text-center" style="height: 800px;">
		<p>Выполните задания теста:</p>
		<p><h1>TEXT</h1><input type="text" id="z_1"></p>
		<p><h1>TEXT</h1><input type="text" id="z_2"></p>
		<p><h1>TEXT</h1><input type="text" id="z_3"></p>
		<p><h1>TEXT</h1><input type="text" id="z_4"></p>
		<p><h1>TEXT</h1><input type="text" id="z_5"></p>
		<p><h1>TEXT</h1><input type="text" id="z_6"></p>
		<button onClick="proverit();">Проверить</button>
		<div id="rezultat"></div>
	</div>
	<script>
	function proverit(){
	pr_otv_zadachi_1 = //TEXT(GET); 
	pr_otv_zadachi_2 = //TEXT(GET);
	pr_otv_zadachi_3 = //TEXT(GET);
	pr_otv_zadachi_4 = //TEXT(GET); 
	pr_otv_zadachi_5 = //TEXT(GET);
	pr_otv_zadachi_6 = //TEXT(GET);
	otv_uch_1 = document.getElementById('z_1').value;
	otv_uch_2 = document.getElementById('z_2').value;
	otv_uch_3 = document.getElementById('z_3').value;
	otv_uch_4 = document.getElementById('z_4').value;
	otv_uch_5 = document.getElementById('z_5').value;
	otv_uch_6 = document.getElementById('z_6').value;
	ball = 0;
	if(otv_uch_1 == pr_otv_zadachi_1){
	ball +=1;
	}
	if(otv_uch_2 == pr_otv_zadachi_2){
	ball +=1;
	}
	if(otv_uch_3 == pr_otv_zadachi_3){
	ball +=1;
	}
	if(otv_uch_4 == pr_otv_zadachi_4){
	ball +=1;
	}
	if(otv_uch_5 == pr_otv_zadachi_5){
	ball +=1;
	}
	if(otv_uch_6 == pr_otv_zadachi_6){
	ball +=1;
	}
	vsego_zadach = 6;
	procent_vip = ball/vsego_zadach * 100;
	document.getElementById('rezultat').innerHTML = "Задания выполнены верно на "+procent_vip+"%.";
	}
	</script>
</body>
</html>