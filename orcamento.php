<!-- contact -->
			<div class="contact" id="orcamento">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Peça um orçamento já </h2>
						<!-- paragraph -->
						<span>Respoderemos com a maior agilidade e o melhor preço.</span>
					</div>
					<!-- contact container -->
					<div class="contact-container">	
						<div class="row">
							<div class="col-md-5 col-sm-6">
								<!-- heading -->
								<h3>Formulário de contato</h3>
								<?php if(isset($_GET['orcamento']) && $_GET['orcamento'] == 'erro'){
									        echo " <div style='font-size:1.5rem; color:white; text-align:center;' class='bg-danger'>Aconteceu algum erro, tente novamente.</div>";
									}elseif(isset($_GET['orcamento']) && $_GET['orcamento'] == 'sucesso'){ 
										echo " <div style='font-size:1.5rem; color:white; text-align:center;' class='bg-sucess'>Orçamento enviado com sucesso</div>";
									}	?>
										
								<form action="session/enviar_email.php"role="form" id="contactForm" method="request">
									<div class="form-group">
										<label for="contactName">Nome</label>
										<input class="form-control" type="text" id="contactName" name="contactName"placeholder="Seu nome" />
									</div>
									<div class="form-group">
										<label for="contactPhone">Telefone para contato</label>
										<input class="form-control" type="text" id="contactphone" name="contactphone"placeholder="Telefone ou whatsapp" />
									</div>
									<div class="form-group">
										<label for="contactPhone">Cidade </label>
										<input class="form-control" type="text" id="contactcity" name="contactcity"placeholder="Telefone ou whatsapp" />
									</div>
									<div class="form-group">
										<label for="contactEmail">E-mail</label>
										<input class="form-control" type="email" id="contactEmail" name="contactEmail" placeholder="Seu e-mail" />
									</div>
									<div class="form-group">
										<label for="contactMessage">Mensagem</label>
										<textarea class="form-control" id="contactMessage" name="contactMessage" rows="3" placeholder="Diga qual orçamento deseja, não precisa entrar em detalhes, pois ligaremos para você"></textarea>
									</div>
									<div class="form-group">
										<button type="submit" name="submit" id="submit" class="btn btn-default">Pedir orçamento agora</button>
									</div>
								</form>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- heading -->
								<h3>Endereço</h3>
								<!-- paragraph -->
								<p class="address">Estrada do barreirinho - 2112,<br>
									Santa barbara d'Oeste,<br>
									São Paulo - 13458-534</p>
									<br>
								<!-- heading -->
								<h3>Telefones</h3>
								<!-- paragraph -->
								<p class="address">(19) 99309-8190</p>
								<p class="address">(19) 99503-8778</p>
									<br>
								<!-- heading -->
								<h3>Email</h3>
								<!-- paragraph -->
								<p class="address"><a href="#">JPSerralheriasbo@gmail.com</a></p>
							</div>
							<div class="col-md-4">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.757418429999!2d-47.4056691494194!3d-22.77438208500608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c89e826dedc877%3A0xb7bfda1f1335d896!2sEstr.%20Barreirinho%2C%202112%20-%20Jardim%20Santa%20Alice%2C%20Santa%20B%C3%A1rbara%20d&#39;Oeste%20-%20SP%2C%2013458-571!5e0!3m2!1spt-BR!2sbr!4v1592243858247!5m2!1spt-BR!2sbr" width="330vh" height="330vh" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>