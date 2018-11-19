<?php 
// Inicia sessões 
	session_start();
	if(!isset($_SESSION["login"]))
		echo "<script>
					alert('ATENÇÃO, área restrita, por favor realize o login antes de continuar!');
					window.location.replace('index.php');
				</script>"; 
?> 