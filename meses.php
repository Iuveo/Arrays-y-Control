<div style="text-align:center;font-weight:bold;border:grey 3px solid;">
<?php

$meses=[
	'enero',
	'febrero',
	'marzo',
	'abril',
	'mayo',
	'junio',
	'julio',
	'agosto',
	'septiembre',
	'octubre',
	'noviembre',
	'diciembre',
];

shuffle($meses);

echo $meses['1'];



?>
</div>
<div id="r"></div>

<script>

meses=[
	'enero',
	'febrero',
	'marzo',
	'abril',
	'mayo',
	'junio',
	'julio',
	'agosto',
	'septiembre',
	'octubre',
	'noviembre',
	'diciembre',
];

meses.sort();
meses.sort(function(a, b){return 0.5 - Math.random()});
document.getElementById('r').innerHTML += meses[0];

</script>