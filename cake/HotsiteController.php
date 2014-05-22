<?php
class HotsiteController extends AppController {
	public function index() {
		$this->layout = false;
		$this->set('alertMessage', '');
		
		if($this->request->isPost() || $this->request->isPut()):
			$data = $this->request->data;
			$this->set('data',$data);
			
			$config = array(
				'to'=>'eventos@sorvetesrochinha.com.br',
				'type'=>'html',
				'template'=>'hotsite_contato',
				'subject'=>'Evento - Contato'
			);
			
			$retorno = $this->_sendMail($config);
			
			if($retorno):
				$this->set('alertMessage', 'Formulário de contato enviado com sucesso.');
			endif;
			
			//$this->redirect('/hotsite/');
		endif;
	}
}