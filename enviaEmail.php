
		<!--Enviando dados do formulário para o email com o php -->
		<?php

		// recuperando campos do formulário

		$assunto = $_POST['assunto'];
		$nome =$_POST['nome'];
		$email =$_POST['email'];
		$telefone =$_POST['telefone'];
		$mensagem =$_POST['mensagem'];
		$destino = "FALECONOSCO@SETEVISTORIAS.COM";
		$html = 
		"
				<html>
				<body>
					Mensagem enviada por : <b>$nome</b> <br>
				
						<b>E-mail:</b> $email <br/>
						<b>Telefone:</b> $telefone <br/>
						-----------------------------------<br/>
						<b>Mensagem:</b><br/>
						$mensagem
				</body>
				</html>
		";
						

		// indicar que o formato do e-mail Ã© html
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$headers .= "From: $nome <$email>";
		//$headers .= "Bcc: $EmailPadrao\r\n";

		$enviarEmail= mail($destino,$assunto,$html,$headers);

			if($enviarEmail)
			{
			echo"<script type='text/javascript'>";
			echo "alert('Sua mensagem foi enviada com sucesso.');";
			echo "</script>";
			echo "<meta http-equiv='refresh' content='1;URL=index.php'>";
			
			}
			else 
			{
			echo"<script type='text/javascript'>";
			echo "alert('Não foi possivél enviar sua mensagem, por favor tente novamente.');";
			echo "</script>";
			echo "<meta http-equiv='refresh' content='1;URL=index.php'>";
			}
			
			echo "<meta HTTP-EQUIV='Refresh' CONTENT='1;URL=http://setevistorias.com.br>";
		?>
		<!-- Fim do codigo para enviar email-->	
		
		
					