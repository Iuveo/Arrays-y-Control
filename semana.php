<center><h2>DÍAS DE LA SEMANA AL AZAR</h2></center>

<div style="weight:bold;font-size:25px;Color:#707070;">
PHP
</div>
</br>

<div style="text-align:center;font-weight:bold;border:grey 3px solid;font-size:20px;">

<?php

$semana=[
	'Lunes',
	'Martes',
	'Miercoles',
	'Jueves',
	'Viernes',
	'Sabado',
	'Domingo',
];

shuffle($semana);

echo $semana['1'];



?>

</div>

</br>
</br>

<div style="weight:bold;font-size:25px;Color:#0000ff;">
JS
</div>
</br>

<div id="r" style="text-align:center;font-weight:bold;border:blue 3px solid;font-size:20px;"></div>

<script>

semana=[
	'Lunes',
	'Martes',
	'Miercoles',
	'Jueves',
	'Viernes',
	'Sabado',
	'Domingo',
];

semana.sort();
semana.sort(function(a, b){return 0.5 - Math.random()});
document.getElementById('r').innerHTML += semana[0];

</script>