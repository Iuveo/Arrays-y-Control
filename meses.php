<div style="weight:bold;font-size:25px;Color:#707070;">
PHP
</div>
</br>

<div style="text-align:center;font-weight:bold;border:grey 3px solid;font-size:20px;">

<?php

$meses=[
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'Octubre',
	'Noviembre',
	'Diciembre',
];

shuffle($meses);

echo $meses['1'];



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

meses=[
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'Octubre',
	'Noviembre',
	'Diciembre',
];

meses.sort();
meses.sort(function(a, b){return 0.5 - Math.random()});
document.getElementById('r').innerHTML += meses[0];

</script>