<!DOCTYPE html>
<html>
<head>

	<title>Ejercicio 4 - Exámen FWS</title>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

</head>
<body>

	<canvas id="myCanvas"></canvas>

	<button id="myBtn" onclick="clickMe()">Clickme</button>
	<div id="number"></div>
	<div id="theJson"></div>

	<script type="text/javascript">

		function clickMe() {

			var canvas, contexto;

			$(document).ready(function () {

				$.ajax({

					url: "../ejercicio3.php",
					//type: "GET",
					//contentType: "json",
					/*success: function(data) {
						
						console.log(data);

					}*/

				}).done(function(data) {
					
					console.log(data);

					var dt = JSON.parse(data);

					for (var i in dt) {
						
						//console.log(dt[i].number);
						document.getElementById('theJson').innerHTML = data;
						document.getElementById('number').innerHTML = dt[i].number;

						if (dt[i].color == "red") {

							canvas = document.getElementById('myCanvas');
							contexto = canvas.getContext('2d');
							// le damos un color
							contexto.fillStyle = '#FF0000';
							// dibujamos un cuadrado con el color de llenado
							contexto.fillRect(0, 10, 145, 145); 
	
						} else{

							canvas = document.getElementById('myCanvas');
							contexto = canvas.getContext('2d');
							contexto.fillStyle = '#2F00FF';
							contexto.fillRect(0, 10, 145, 145);

						};

					};

				});

			});

		}

	</script>

</body>
</html>