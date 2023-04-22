<?php
	namespace App\Http;

	class Request{
		/**
		 * Método HTTP da requesição
		 * @var string 
		 */
		private $httpMethod;
		/**
		 * URI da página
		 * @var string
		 */
		private $uri;
		/**
		 * Paramentros do URL($_GET)
		 * @var array
		 */
		private $queyParams = [];
		/**
		 * Variaveis recebidas no POST da pagina
		 */
		private $postVars = [];
		/**
		 * Cabeçalho da requisição
		 * @var array
		 */
		private $headers = [];
		/**
		 * Constructor da classe
		 */
		public function __construct(){
			$this->queryParams =$_GET ??[];
			$this->postvars =$_POST ??[];
			$this->headers =getallheaders();
			$this->httpsMethod =$_SERVER['REQUEST_METHOD']??'';
			$this->uri =$_SERVER['REQUEST_URI']??'';
		}
		/**
		 * Método responsavel por retornar o método HTTP da requisição
		 * @return string
		 */
		public function getHttpMethod(){
			return $this->httpMethod;
		}
		/**
		 * Método responsavel por retornar o método HTTP da requisição
		 * @return string
		 */
		public function getUri(){
			return $this->uri;
		}
		/**
		 * Método responsavel por retornar os headers da requisição
		 * @return array
		 */
		public function getHeaders(){
			return $this->headers;
		}
		/**
		 * Método responsavel por retornar os paramentros da URL  da requisição
		 * @return array
		 */
		public function getQueryParams(){
			return $this->queryParams;
		}
		/**
		 * Método responsavel por retornar as variaveis POST da requisição
		 * @return array
		 */
		public function getPostVars(){
			return $this->postVars;
		}

	}
?>