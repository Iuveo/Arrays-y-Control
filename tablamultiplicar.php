<center><h1>Aprende a multiplicar</h1></center>

<div style="weight:bold;font-size:25px;Color:#707070;">
</br>

PHP
</div>
</br>

<?php 

echo 'Recuento de puntos';
if(!isset($_GET['contador']))
	$_GET['contador']=0;
if (isset($_GET['r'])){
	if($_GET['r']!=$_GET['resultado']){
		echo '<span style="color:red; font-size:22px;"> Error </span>';
		$_GET['contador']=0;
	}
	else{
		echo '<span style="color:green; font-size:22px;"> Very good </span>'; $_GET['contador']++;
	} 
}

echo '<div>'. $_GET['contador'].'</div>';
echo '<b>Operación </b>';
$a= rand(1,10);
$b= rand(1,10); 
echo $a.' x '.$b.' = ';


?>

<form>
	<input id="r" name="r"/>
	<input type="hidden" name="resultado" value="<?=($a*$b)?>"/>
	<input type="hidden" name="contador" value="<?=$_GET['contador']?>"/>
	<button>Comprobar</button>
</form>


<div style="weight:bold;font-size:25px;Color:#0000ff;">
</br>

JS
</div>
</br>

Recuento de puntos </br>
<div id="contador">
0 
</div>
<b>Operación</b>
<span id="a"> 3 </span>
x
<span id="b"> 5 </span>
=
</br>
<input id="r"/>
<button onclick="calcular()"> Comprobar </button>


<script>

function calcular(){
	a=document.getElementById('a').innerHTML;
	b=document.getElementById('b').innerHTML;
	r=document.getElementById('value');
	
	
	if (r==(a*b)){
		contador=contador++;	
	}
document.getElementById('a').innerHTML=Math.round(Math.random()*10);
document.getElementById('b').innerHTML=Math.round(Math.random()*10);
document.getElementById('contador'). innerHTML=0;
}
</script>

