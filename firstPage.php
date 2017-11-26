<?php

	$jsF='"background-color:grey;color:black;height:30px;width:300px;text-align:center;"';
	


	echo "A więc, niechaj rozpocznie się przygoda!!!<br><br>";
	echo "Na początek coś prostego. Kliknij na czerwoną ramkę<br>";
	
	echo	"<div id='redText' style='background-color:red; color:red;' onclick='myFunction()'>
					Świeżo odkryty tekst.
	
	
				</div>";
			
	echo "
			<script>
				if(document.getElementById('redText')!=0)document.getElementById('redText').onclick = function (){myFunction()};
				function myFunction(){
					document.getElementById('redText').style=$jsF;
					
				}
			
			</script>
	
	
	
	";







?>