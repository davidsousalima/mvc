<?php
	namespace App\Controller\Pages;

	use \App\Utils\view;
	class Home{
		/**
		 * Método responsável por retornar o conteudo (view) da nossa home 
		 * @return string  
		 */
		public static function getHome(){
			return view::render('pages/home');
		}
	}
?>