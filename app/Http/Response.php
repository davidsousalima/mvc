<?php
	namespace App\Http;

	class Response{
		/**
		 * Código do Status HTTP
		 * @var integer
		 */
		private $httpCode = 200;
		/**
		 * Cabeçalho do Response
		 * @var array
		 */
		private  $headers = [];
		/**
		 * Tipo de conteudo que está sendo retornado
		 * @var array
		 */
		private $contentType = 'text/html';
		/**
		 * Conteúdo do Response
		 * @var mixad 
		 */
		private $content;
		/**
		 * Método responsável por indicar a classe e definir os valores
		 * @param integer $httpCode
		 * @param mixed  $content
		 * @param string  $contentType
		 */
		public function __construct($httpCode,$content,$contentType = 'text/html'){
			$this->httpCode = $httpCode;
			$this->content = $content;
			$this->setContentType($contentType);
		}
		/**
		 * Método responsável por alterar o contetn type do response
		 * @param string $contentType
		 */
		public function setContentType($contentType){
			$this->contentType = $contentType;
			$this->addHeader('Content-Type',$contentType);
		}
		/**
		 * Metodo responsavel por adicionar um registro no cabeçalho de response
		 * @param string $key
		 * @param string $value
		 */
		public function addHeader($key,$values){
			$this->headers[$key] = $value;
		}
		/**
		 * Método responsável por enviar os headers para o navegador
		 */
		private function sendHeaders(){
			//STATUS 
			http_response_code($this->httpCode);

			//Enviar Headers
			foreach($this->headers as $key=>$values){
				header($key.': '.$value);
			}
		}
		/**
		 * Método responsável por enviar a rsponsta o usuario 
		 */
		public function sendResponse(){
			//ENVIAR OS HEADERS
			$this->sendHeaders();
			//IMPRIME O CONTEUDO
			switch($this->contentType){
				case 'text/html':
					echo $this->content;
					exit;
			}
		}

	}
?>