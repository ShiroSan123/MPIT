<!DOCTYPE html>
<html>
<head>
	<title>2 локация</title>
	<meta charset="utf-8" name="viewport">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
		.box-bg {
			background-image: url(images/bg.jpg);
			width: 1350px;
			height: 620px;
			background-size: 100% 100%;
			padding-top: 10px;
		}
		.img1 {
			width: 30px;
			height: 40px;
			position: absolute;
			left: 850px;
			top: 490px;
		}
		.img2 {
			width: 40px;
			height: 40px;
			position: absolute;
			left: 770px;
			top: 320px;
		}
		.img3 {
			width: 50px;
			height: 40px;
			position: absolute;
			left: 100px;
			top: 450px;
		}	
		.img4 {
			width: 30px;
			height: 20px;
			position: absolute;
			left: 640px;
			top: 450px;
		}
		.img5 {
			width: 50px;
			height: 70px;
			position: absolute;
			left: 1150px;
			top: 350px;
		}	
		.list-box {
			width: 120px;
			background: orange;
			position: absolute;
			left: 10px;
			top: 10px;
			padding-left: 10px;
		}
		.p1 {
			font-family: Arial;
			color: white;
		}
		.p2 {
			font-family: Arial;
			color: white;
		}
		.p3 {
			font-family: Arial;
			color: white;
		}
		.p4 {
			font-family: Arial;
			color: white;
		}
		.p5 {
			font-family: Arial;
			color: white;
		}
	</style>
</head>
<body>
	<div class="col-12" style="height: 1000px;">
		<div class="box-bg" style="display: block;">
			<div class="list-box">
				<h3>Нужно найти</h3>
				<p class="p1">Стрелка</p>
				<p class="p2">Фейерверк</p>
				<p class="p3">Луна</p>
				<p class="p4">Кофе</p>
				<p class="p5">Перья</p>
				<h3>ОЧКИ: <span class="score"></span></h3>
			</div>
		</div>
		<img src="images/1.png" class="img1" alt="">
		<img src="images/2.png" class="img2" alt="">
		<img src="images/3.png" class="img3" alt="">
		<img src="images/4.png" class="img4" alt="">
		<img src="images/5.png" class="img5" alt="">
		<div class="col-12" style="position: absolute;bottom: 1em; height: 150px;">
			<div class="row">
				<div class="text1 col-12" style="position: absolute; display: none;">
					<p>текст1</p>
					<hr>
					<button class= "btn btn-danger btn1" style="left: 90%;position: absolute;">Далее</button>
				</div>
				<div class="text2 col-12" style="position: absolute; display: none;">
					<p >текст2</p>
					<hr>
					<button class="btn btn-danger btn2" style="left: 90%;position: absolute;"><a href="Game3.html"><h5>Далее</h5></a></button>
				</div>
			</div>
		</div>		
	</div>
	
	<script type="text/javascript">
		let b1 = document.querySelector(".btn1") 
		let b2 = document.querySelector(".btn2")
		let tx1 = document.querySelector(".text1")
		let tx2 = document.querySelector(".text2")
		let game = document.querySelector(".box-bg")
		let score = 0;
		document.querySelector('.score').innerHTML = score;
		//стрелка
		document.querySelector('.img1').onclick = function(){
			document.querySelector('.img1').style.display = 'none';
			document.querySelector('.p1').style.textDecoration = 'line-through black';
			alert('Класс!! Ты нашёл Стрелку.');
			score = score + 2;
			document.querySelector('.score').innerHTML = score;
			if ( score==5) {
				alert('Молодец.Ты выиграл!!');
				score = 0;
				tx1.style.display = "block";
			}
		}
		//фейерверк
		document.querySelector('.img2').onclick = function(){
			document.querySelector('.img2').style.display = 'none';
			document.querySelector('.p2').style.textDecoration = 'line-through black';
			alert('Класс!! Ты нашёл Фейерверк.');
			score = score + 3;
			document.querySelector('.score').innerHTML = score;
			if ( score==5) {
				alert('Молодец.Ты выиграл!!');
				score = 0;
				tx1.style.display = "block";
			}
		}
		//луна
		document.querySelector('.img3').onclick = function(){
			document.querySelector('.img3').style.display = 'none';
			document.querySelector('.p3').style.textDecoration = 'line-through black';
			alert('Класс!! Ты нашёл Луну.');
			score = score + 4;
			document.querySelector('.score').innerHTML = score;
			if ( score==4) {
				alert('Молодец.Ты выиграл!!');
				score = 0;
				tx1.style.display = "block";
			}
		}
		//кофе
		document.querySelector('.img4').onclick = function(){
			document.querySelector('.img4').style.display = 'none';
			document.querySelector('.p4').style.textDecoration = 'line-through black';
			alert('Класс!! Ты нашёл Кофе.');
			score = score - 2;
			document.querySelector('.score').innerHTML = score;
			if ( score==4) {
				alert('Молодец.Ты выиграл!!');
				score = 0;
				
				tx1.style.display = "block";
			}
		}
		//перья
		document.querySelector('.img5').onclick = function(){
			document.querySelector('.img5').style.display = 'none';
			document.querySelector('.p5').style.textDecoration = 'line-through black';
			alert('Класс!! Ты нашёл Перья.');
			score = score - 3;
			document.querySelector('.score').innerHTML = score;
			if ( score==4) {
				alert('Молодец.Ты выиграл!!');
				score = 0;
				tx1.style.display = "block";
			}
		}
		b1.onclick = function(){
			game.style.display = "none";
			b2.style.display = "block";
			tx2.style.display = "block";
			document.querySelector('.p1').style.textDecoration = 'none';
			document.querySelector('.p2').style.textDecoration = 'none';
			document.querySelector('.p3').style.textDecoration = 'none';
			document.querySelector('.p4').style.textDecoration = 'none';
			document.querySelector('.p5').style.textDecoration = 'none';
		}
	</script>
</body>
</html>