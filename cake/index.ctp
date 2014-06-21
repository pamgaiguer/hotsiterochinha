<div class="bigcontent">
	<div id="path" style="display: none;"><?php echo $this->Html->url('/img/rochinha/');?></div>
	<script type="text/javascript">
		$(function(){
			var atual;
			var max = <?php echo count($all);?>;
			var min = 1;
			
			$('.listagem ul li a').click(function(){
				var $url = $(this).attr('href');
				var $rel = $(this).attr('rel');

				$('.listagem').hide();
				
				//$('.imagem-grande').append('<img src="'+$url+'" />');
				
				$('.imagem-grande').html('').addClass('loading');
				$.ajax({
					type: 'GET',
					url: '<?php echo $this->Html->url('/home/img');?>',
					data: 'image=' + $url,
					success: function(cHtml) {
						
						$('.imagem-grande').html(cHtml);
						$('.imagem-grande').removeClass('loading');
						
					}
				});
				
				$('.imagem-grande, .carousel').fadeIn('fast');

				if($rel <= min){
					$('.carousel .left').hide();
				}else{
					$('.carousel .left').show();
				}

				if($rel >= max){
					$('.carousel .right').hide();
				}else{
					$('.carousel .right').show()
				}
				atual = $rel;
				return false;
			});

			$('.carousel .right, .carousel .left').click(function(){
				if($(this).hasClass('right')){
					atual = parseInt(atual)+1;
				}else{
					atual = parseInt(atual)-1;
				}
				
				if(atual >= max){  $('.carousel .right').hide(); }else{ $('.carousel .right').show() }
				if(atual <= min){ $('.carousel .left').hide(); }else{ $('.carousel .left').show() }

				$('.imagem-grande').html('').addClass('loading');
				$.ajax({
					type: 'GET',
					url: '<?php echo $this->Html->url('/home/img');?>',
					data: 'image=' + $('#path').text()+'page_imprensa_'+atual+'.jpg',
					success: function(cHtml) {
						
						$('.imagem-grande').html(cHtml);
						$('.imagem-grande').removeClass('loading');
						
					}
				});
				
				//$('.imagem-grande img').attr('src',$('#path').text()+'page_imprensa_'+atual+'.jpg').fadeIn('fast');
			});

			/*$('.imagem-grande').click(function(){
				$(this).hide().html('');
				$('.carousel').hide();
				$('.listagem').fadeIn('fast');
			});*/

			$(".espelho2").FontEffect({
				mirror:true,
				mirrorHeight: 100,
				mirrorOffset: -6,
				mirrorColor: '#fff'
			});
			
			$('.listagem ul li a')[0].click();
		});
	</script>
	<div class="imprensa">
		
		<div class="carousel">
			<div class="left"></div>
			<div class="right"></div>
		</div>
		
		<div class="imagem-grande"></div>
		
		<div class="listagem">		
			<h2 class="espelho2">Imprensa</h2>
			
			<?php 
			$array = array(
				'<br />O Estado de São Paulo',
				'<br />Revista da Hora',
				'<br />Veja São Paulo',
				'<br />Veja São Paulo',
				'<br />Veja São Paulo',
				'<br />Target',
				'<br />Capricho',
				'<br />Veja São Paulo',
				'Pequenas Empresas <br /> Grandes Négocios',
				'<br />Boa Forma',
				'<br />Veja São Paulo',
				'<br />Boa Forma'
			);
			
			echo '<ul>';
			foreach($all as $k => $a):
				$grande = '/files/imprensa/'.$a['Imprensa']['grande'];
				$miniatura = '/files/imprensa/'.$a['Imprensa']['miniatura'];
				
				$qtde = (strlen($a['Imprensa']['nome']));
				$nome = $a['Imprensa']['nome'];
				if($qtde <= 23){
					$nome = '<br />'.$nome;
				}
				
				echo '<li>';
					echo '<p>'.$this->Html->link($nome,$grande,array('escape'=>false,'rel'=>($k+1))).'</p>';
					
					echo '<div class="img">';
						echo $this->Html->imagelink($miniatura,$grande,array(),array('rel'=>($k+1),'escape'=>false));
					echo '</div>';
				echo '</li>';
			endforeach;
			echo '</ul>';
			?>
			<div class="paginacao">
			<?php 
			if($this->Paginator->hasPrev()):
				echo $this->Paginator->prev('<', null, null, array('class' => ''));
			endif;
			
			if($this->Paginator->hasPrev() || $this->Paginator->hasNext()):
				echo $this->Paginator->numbers(array('separator'=>false));
			endif;
			
			if($this->Paginator->hasNext()):
				echo $this->Paginator->next('>');
			end