$(function()
{
	var successMsg = "Sua mensagem foi enviada. Em breve retorno o contato"; // Mensagem caso seja enviada.
	var failMsg = "Desculpe, parece que nosso servidor de email não está respondendo, Desculpe o transtorno!"; // Mensagem caso Falhe o envio.
	
	$("input,textarea").jqBootstrapValidation(
    {
     	preventSubmit: true,
     	submitSuccess: function($form, event)
	 	{
			event.preventDefault(); // Previne o envio em branco.
			
			var processorFile = "./bin/"+$form.attr('id')+".php";
			var formData = {};

			$form.find("input, textarea").each(function(e) // Loop para construção de formulários
			{		
				formData[$(this).attr('id')] = $(this).val();	
			});
	
			$.ajax({
		        url: processorFile,
		    	type: "POST",
		    	data: formData,
		    	cache: false,
		    	success: function() // Sucesso
		 		{  
					$form.append("<div id='form-alert'><div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>"+successMsg+"</strong></div></div>");		
		 	   	},
			   	error: function() // Falha
			   	{
					$form.append("<div id='form-alert'><div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>"+failMsg+"</strong></div></div>");	
			   	},
				complete: function() // Vazio
				{
					$form.trigger("reset");
				},
		   	});
         },
         filter: function() // Controle de elementos ocultos
		 {
			 return $(this).is(":visible");
         },
	 });
});