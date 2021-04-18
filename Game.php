<!DOCTYPE html>
<html>
<head>
	<title>1 локация</title>
	<meta charset="utf-8" name="viewport">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
	</style>
</head>
<body >
	<div class="col-12 plot" style="height: 900px; position: absolute;">
		<div class="col-12" style="position: absolute;bottom: 1em; height: 50px;">
			<div class="row">
				<div class="text1 col-12" style="position: absolute; display: block;">
					<p>текст1</p>
					<hr>
					<button class= "btn btn-danger btn1" style="left: 90%;position: absolute;">Далее</button>
				</div>
				<div class="text2 col-12" style="position: absolute; display: none;">
					<p >текст2</p>
					<hr>
					<button class="btn btn-danger btn2" style="left: 90%;position: absolute;">Далее</button>
				</div>
				<div class="text3 col-12" style="position: absolute; display: none;">
					<p >текст3</p>
					<hr>
					<button class="btn btn-danger btn3" style="left: 90%;position: absolute;">Далее</button>
				</div>
				<div class="text4 col-12" style="position: absolute; display: none;">
					<p >текст4</p>
					<hr>
					<button class="btn btn-danger btn4" style="left: 90%;position: absolute;"><a href="Game2.html"><h5>Далее</h5></a></button>
				</div>
			</div>
		</div>
	</div>	
	<script type="text/javascript">
		let b1 = document.querySelector(".btn1") 
		let b2 = document.querySelector(".btn2")
		let b3 = document.querySelector(".btn3")
		let b4 = document.querySelector(".btn4")
		let tx1 = document.querySelector(".text1")
		let tx2 = document.querySelector(".text2")
		let tx3 = document.querySelector(".text3")
		let tx4 = document.querySelector(".text4")
		b1.onclick = function(){
			b1.style.display = "none";
			tx1.style.display = "none";
			b2.style.display = "block";
			tx2.style.display = "block";
		}
		b2.onclick = function(){
			b2.style.display = "none";
			tx2.style.display = "none";
			b3.style.display = "block";
			tx3.style.display = "block";
		}
		b3.onclick = function(){
			b3.style.display = "none";
			tx3.style.display = "none";
			b4.style.display = "block";
			tx4.style.display = "block";
		}
	</script>
</body>

</html>