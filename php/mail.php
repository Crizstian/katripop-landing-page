	<?php
	
	$mail="contacto@katripop.com ";
	$thank="http://www.katripop.com";
	
	$nombre=$_POST['nombre'];
	$mailU=$_POST['e-mail'];
	$telefono=$_POST['telefono'];
	$comentario=$_POST['comentario'];
	
		$message = " Contacto Katripop. \r\n Nombre del Usuario: ".$nombre." \r\n Correo del Usuario: ".$mailU." \r\n Numero Telefonico: ".$telefono." \r\n Comentario: ".$comentario." \r\n Contacto Realizado en: ".$thank." \r\n ";
		
		$message2= " Contacto Katripop. Agradecemos tu preferencia, usuario: '".$nombre."' \r\n Gracias por visitarnos en: '".$thank."' \r\n ";
		
			if(mail($mailU, "Katripop agradecemos tu preferencia 
!", $message2)){
	}
	if(mail($mail, "Contacto Katripop", $message)){
}

	echo "
	<script>
	document.location.href=('../index.html');
	</script>
";

	?>