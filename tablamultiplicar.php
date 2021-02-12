<center><h1>Aprende a multiplicar</h1></center>

<?php 

if(!isset($_GET['contador']))
	$_GET['contador']=0;
if (isset($_GET['r'])){
	if($_GET['r']!=$_GET['resultado']){
		echo 'Error';
		$_GET['contador']=0;
	}
	else{
			echo 'Very good'; $_GET['contador']++;
	} 
}

echo '<div>'. $_GET['contador'].'</div>';
$a= rand(1,10);
$b= rand(1,10); 
echo $a.' x '.$b.' = ';


?>

<form>
	<input id="r" name="r"/>
	<input type="hidden" name="resultado" value="<?=($a*$b)?>"/>
	<input type="hidden" name="contador" value="<?=$_GET['contador']?>"/>
	<button>enviar</button>
</form>



<span id="a"> 3 </span>
x
<span id="b"> 5 </span>
=
<input id="r"/>
<button onclick="calcular()"> Comprobar </button>

<script>

function calcular(){
	a=document.getElementById('a').innerHTML;
	b=document.getElementById('b').innerHTML;
	r=document.getElementById('value');
	
	if (r==(a*b)){
		
	}
document.getElementById('a').innerHTML=Math.round(Math.random()*10);
document.getElementById('b').innerHTML=Math.round(Math.random()*10);
}
</script>

