<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<meta name="viewport" content="width=device-width">
		<title>Rochinha Eventos</title>
		<meta name="description" content="">
		<meta name="author" content="Pamella Gaiguer">
		<link rel="shortcut icon" href="/favicon.ico">
		<?php 
			echo $this->Html->css(array(
				'bootstrap.css',
				'typografy.css',
				'main.css',
				'estilos.css'
			));
		?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="topo">
						<?php echo $this->Html->image('/images/logo-rochinha-titulo.png', array('id' => 'logo-topo', 'class' => 'img-responsive'));?>
						<div class="botoes-topo">
							<?php echo $this->Html->imagelink('/images/botao-topo-001-eventos.png','#eventos');?>
							<?php echo $this->Html->imagelink('/images/botao-topo-002-pacotes.png','#pacotes');?>
							<?php echo $this->Html->imagelink('/images/botao-topo-003-personalizados.png','#personalizados');?>
							<?php echo $this->Html->imagelink('/images/botao-topo-004-sabores.png','#sabores');?>
							<?php echo $this->Html->imagelink('/images/botao-topo-005-duvidas.png','#duvidas');?>
							<?php echo $this->Html->imagelink('/images/botao-topo-006-pedidos.png','#pedidos');?>
						</div>
					</div>
					<div id="eventos"> 
						<div id="eventos-text" class="container-textos">
							<p class="texto01">Você sabia que sua festa pode ter um</p> 
								<p class="texto02">carrinho recheado com picoles Rochinha?</p>
								<br>
							<p class="texto03">Rochinha disponibiliza carrinhos e freezers, <br> recheados de picolés para vários tipos de <br> eventos, como por exemplo:</p>
							<br>
							<ul class="list-events left">
								<li><?php echo $this->Html->image('/images/icon-aniversario.png');?>Aniversários</li>
								<li><?php echo $this->Html->image('/images/icon-corporativo.png');?>Casamentos</li>
								<li><?php echo $this->Html->image('/images/icon-debutante.png');?>Chá-bares</li>
								<li><?php echo $this->Html->image('/images/icon-formatura.png');?>Batizados</li>
							</ul>
							<ul class="list-events right">
								<li><?php echo $this->Html->image('/images/icon-casamento.png');?>Festa de Debutantes</li>
								<li><?php echo $this->Html->image('/images/icon-batizado.png');?>Bar Mitzvahs</li>
								<li><?php echo $this->Html->image('/images/icon-lancamentos.png');?>Lançamentos Imobiliários</li>
								<li><?php echo $this->Html->image('/images/icon-bar.png');?>Reuniões Corporativas</li>
								
							</ul>
						</div>						
					</div>
					<div id="pacotes">
					<div class="container-textos">
						<p class="pct-01">Nosso pacote máximo de serviço consiste em:</p>
						<ul class="list-pct">
							<li>Pedido de 06 caixas, com 28 picolés cada caixa, equivalentes a um total de 168 picolés.</li>
							<li>Fornecimento de um carrinho, com guarda-sol e buzininha.</li>
							<li>Fornecimento de gelo seco ou placas gelo-gel, suficiente para conservação dos picolés por seis horas.</li>
							<li>Entrega e retirada dos equipamentos no local do evento, em horário comercial.</li>
						</ul>
					</div>					
					</div>						
						
					<div id="personalizados">
						<div class="persona-01">
							<p>Quer personalizar o seu evento? </p>
							<p>Fazer uma ação de palitos premiado? </p>
							<p>Divulgar um novo produto?  </p>
							<p>Ou até mesmo dar desconto através do picolé?  </p>
						</div>
						<div class="persona-02">
							<p>Inove em sua comunicação. A Rochinha abre a possibilidade 
								<br>de trabalhar com picolés personalizados. 
								<br>Nosso pedido mínimo é de 1.500 unidades.</p> 
	
							<p>Tenha o picolé e carrinho da sua marca!
							<br>Agregue o sabor das frutas no palito à excelência em 
							<br>qualidade de produtos Rochinha!
							<br>Desenvolva ações diferenciadas no mercado, 
							<br>surpreendendo amigos e concorrentes!</p>
						</div>						
					</div>
					<div id="sabores">
						<div class="sab-01">
							<p>Não deixe também de ter Caipilé 
							<br>Rochinha nos seus eventos. 
							<br>Deliciosos sorvetes que viram drinks,
							que viram convidados satisfeitos. </p>
						</div>
						<div class="sab-list-01">
							<ul>
								<li>Abacate</li>
								<li>Amendoim</li>
								<li>Banana</li>
								<li>Blue Ice</li>
							</ul>
							<ul>
								<li>Chocolate</li>
								<li>Coco Branco</li>
								<li>Coco com Abóbora</li>
								<li>Coco Queimado</li>
							</ul>
							<ul>
								<li>Doce de Leite</li>
								<li>Golaço</li>
								<li>Leite Condensado</li>
								<li>Milho Verde</li>
								<li>Morango</li>
							</ul>
						</div>
						<br>
						<div class="sab-list-02">
							<ul>
								<li>Abacaxi</li>
								<li>Açaí com Guaraná</li>
								<li>Groselha</li>
								<li>Limão</li>
							</ul>
							<ul>
								<li>Maracujá</li>
								<li>Tangerina</li>
								<li>Uva</li>
							</ul>
						</div>						
					</div>
					<div id="duvidas"> 
						<div class="duv-01">
							<div class="duv-column-01">
								<span class="duvidas-perguntas">1. Quantos sabores posso escolher? </span>
								<p class="duvidas-respostas">Os sabores variam de acordo com a quantidade de caixas que irá adquirir, a mesma é lacrada com 28 unidades de um único sabor. 
								Exemplo de pacote mínimo 6 caixas: 2 coco + 1 Limão + 1 chocolate + 1 banana + 1 milho verde. </p>
								
								<span class="duvidas-perguntas">2. Como é feita a entrega e retirada? </span>
								<p class="duvidas-respostas">Entregamos os picolés e carrinho no local do evento e retiramos após o término. Nosso horário de trabalho vai de segunda a sábado das 08hs às 18h00hs. </p> 
								
								<span class="duvidas-perguntas">3. Qual a forma de pagamento? </span>
								<p class="duvidas-respostas">Sempre antecipado até 72h antes da festa, através de boleto bancário.  </p>
								
								<span class="duvidas-perguntas">4. Quantos dias de antecedência tenho que fechar o evento? </span>
								<p class="duvidas-respostas">Solicitamos que o mesmo seja fechado com 5 dias úteis de antecedência. Após este período vai depender de disponibilidade de agenda.  </p>
								
								<span class="duvidas-perguntas">5. O carrinho é pago a parte?  </span>
								<p class="duvidas-respostas">Não. O mesmo compõe o pacote de festa.  </p>
							</div>
							<div class="duv-column-02">							
								<span class="duvidas-perguntas">6. Posso comprar somente picolés?  </span>
								<p class="duvidas-respostas">Sim. Entregamos no local da festa.  </p>
								
								<span class="duvidas-perguntas">7. Há cobrança de frete?  </span>
								<p class="duvidas-respostas">O frete já está incluso no orçamento passado pelo distribuidor local.  </p>
								
								<span class="duvidas-perguntas">8. Vocês tem serviço de “sorveteiro”?  </span>
								<p class="duvidas-respostas">Não, mas indicamos uma agência que disponibiliza promotores. Favor consultar o atendimento para maiores informações. </p>
								 
								<span class="duvidas-perguntas">9. Não quero carrinho. Vocês disponibilizam freezer?  </span>
								<p class="duvidas-respostas">Sim, mas com pedido mínimo de 15 caixas de picolé. Solicite o orçamento.  </p>
								
								<span class="duvidas-perguntas">10. Quantos picolés cabem em um carrinho?  </span>
								<p class="duvidas-respostas">De 07 a 13 caixas, dependendo do modelo do equipamento. Temos duas variações.</p>
								
								<span class="duvidas-perguntas">11. O que faço com os picolés, caso haja sobra?  </span>
								<p class="duvidas-respostas">Os picolés são seus - não trabalhamos com produtos consignados. Nossa equipe só retira o carrinho. Os picolés restantes ficam em poder do cliente.</p>
							</div>
						</div>						
						
					</div>
					<div id="pedidos">
						<div class="ped-01">
						<h3>Para mais informações e orçamento, preencha os dados abaixo.</h3>
						<?php 
							echo $this->Session->flash('alert');
						?>
							<form method="post">
								<label for="nome">Nome<input type="text" name="nome" /></label>
								<label for="telephone">Telefone<input type="tel" name="telephone" /></label>
								<br>
								
								<label for="email">E-mail <input type="email" name="email" /></label>
								<label for="event-type">Tipo de evento <input type="text" name="event-type" /></label>
								<br>
								
								<label for="event-local">Local do evento <input type="text" name="event-local" /></label>
								<label for="event-date">Data do evento <input type="text" name="event-date" /></label>								
								<label for="convidados">No. de convidados <input type="text" name="convidados" /></label>
								<br>
								
								<label for="msg">Mensagem</label>
								<textarea name="msg"> </textarea>
								<input type="submit" value="Enviar mensagem">
							</form>
						</div>
						<div class="footer">
							<a href="#eventos">Eventos</a> | 
							<a href="#pacotes">Pacotes</a> |
							<a href="#personalizados">Personalizados</a> |
							<a href="#sabores">Sabores</a> |
							<a href="#duvidas">Duvidas</a> |
							<a href="#pedidos">Pedidos</a>
							<?php echo $this->Html->image('/images/logo-rodape.png', array('alt' => 'Sorvetes Rochinha'));?>
						</div>						
					</div>					
				</div>
			</div>	
		</div>		
		
		<?php 
			echo $this->Html->script(array(
				'jquery-2.1.0.js',
				'bootstrap.js',
				'main.js',
			));
		?>
		
		<script type="text/javascript">		
			$(function() {
				var message = '<?php echo $alertMessage ?>';
				
				if (message.trim().length > 0)
					alert(message.trim());
			});
		</script>
	</body>
</html>
