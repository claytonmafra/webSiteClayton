 <?php	
	if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['assunto']) || empty($_POST['mensagem']))
	{
		return false;
	}
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	
	$to = 'contato@claytonmafra.xyz'; // Envios de email são enviados para este endereço

	// Criando email	
	$email_subject = "Mensagem de $nome.";
	$email_body = "Nova mensagem: \n\n".
				  "Nome: $nome \n\nEmail: $email \n\nAssunto: $assunto\n\nMensagem: $mensagem";
	$headers = "From: contato@claytonmafra.xyz\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Envio de mensagem
	return true;			
?>

