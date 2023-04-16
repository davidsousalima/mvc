<?php
	namespace App\Controller\Pages;

	use \App\Utils\view;
	class Page{
        /**
         * Método responsável por renderizar o topo da página 
         * @param string 
         */
        private static function getHeader(){
            return View::render('pages/header');
        }
        /**
         * Método responsável por renderizar o rodapé da página 
         * @param string 
         */
        private static function getFooter(){
            return View::render('pages/footer');
        }
		
		/**
		 * Método responsável por retornar o conteudo (view) da nossa página generica 
		 * @return string  
		 */
		public static function getPage($title,$content){
			return view::render('pages/page',[
				'title' =>$title,
                'header' =>self::getHeader(),
                'content' =>$content,
                'footer' =>self::getFooter()
			]);
		}
	}
?>