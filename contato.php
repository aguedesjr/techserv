<?php include 'header.php';?>
<body>
<div id="wrapper">
	<div id="wrapper2">
		<div id="header" class="container">
			<div id="logo">
				<!-- <h1><a href="#">Modelling </a></h1>
				<p>template design by <a href="http://www.freecsstemplates.org">FCT</a></p> -->
				<img src="images/techserv_logo.png" alt="Techserv Logo" width="235" height="150" />
			</div>
			<div id="menu">
				<ul>
					<li><a href="index.php">Homepage</a></li>
					<li><a href="suporte.php">Suporte</a></li>
					<li><a href="clientes.php">Clientes</a></li>
					<li><a href="cobertura.php">Cobertura</a></li>
					<li class="current_page_item"><a href="contato.php">Contato</a></li>
				</ul>
			</div>
		</div>
		<!-- end #header -->
		<div id="banner-wrapper"></div>
		<div id="page">
			<div id="content">
				<div class="post">
					<h2 class="title"><a href="#">Localização</a></h2>
					<p class="meta"><span class="date">Como chegar</span></p>
					<div style="clear: both;">&nbsp;</div>
					<div class="entry">
						<iframe width="960" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="//maps.google.com/maps?q=Av.+S%C3%A3o+Fid%C3%A9lis%2C+522+-+pecu%C3%A1ria%2C+Campos+dos+Goytacazes+-+RJ%2C+28055-512&amp;t=m&amp;z=15&amp;hl=pt_BR&amp;output=embed"></iframe>
							<div id="content1">
								<div class="post">
									<h2 class="title"><a href="#">Entre em contato conosco</a></h2>
									<p class="meta"><span class="date">Todos os campos são obrigatórios</span><!--<span class="posted">Como Chegar</span>--></p>
									<div style="clear: both;">&nbsp;</div>
									<div class="entry">
										
										<div id="cp_contact_form">
				
						                    <form method="post" action="enviaremail.php"> 
												
												<label for="author">Nome:</label> 
						                        <input name="author" type="text" class="required input_field" id="author" maxlength="40" required /> 
											    <div class="cleaner h10"></div>
											    
											    <label for="email">Email:</label> 
						                        <input name="email" type="text" class="validate-email required input_field" id="email" maxlength="40" required /> 
											    <div class="cleaner h10"></div>
											    
											    <label for="tel">Tel:</label> 
						                        <input name="tel" type="text" class="required input_field" id="tel" maxlength="40" required /> 
											    <div class="cleaner h10"></div>
							
												<label for="subject">Assunto:</label> 
						                  		<input name="subject" type="text" class="validate-subject required input_field" id="subject" maxlength="80" required /> 
											    <div class="cleaner h10"></div> 
							
												<label for="text">Mensagem:</label> 
						                		<textarea id="text" name="text" rows="0" cols="0" class="required" required></textarea> 
												<div class="cleaner h10"></div>                
							
												<input type="submit" value="Enviar" id="submit" name="submit" class="submit_btn float_l" /> 
												<!-- <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />  --> 
							
											</form>
						    
						            	</div>
										
										
										
										
									</div>
								</div>
							</div>
							<div id="sidebar">
								<ul>
									<li>
										<h2>Nosso Endereço</h2>
										<ul>
											<li><b>TechServ Soluções</b></li>
											<li>Av. São Fidélis, 522 <br />
											Campos dos Goytacazes/RJ <br />
											Telefone: (22) 3015-6332 <br />
											contato@techservsolucoes.com.br
											</li>
											
										</ul>
									</li>
								</ul>
							</div>
						<!-- end #sidebar -->
					</div>
				</div>
			</div>
			<!-- end #content -->
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #page --> 
	</div>
</div>

<?php include 'footer.php';?>
</body>
</html>
