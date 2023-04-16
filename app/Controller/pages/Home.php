<?php
	namespace App\Controller\Pages;

	use \App\Utils\view;
	use \App\Model\Entity\Organization;
	class Home extends Page{
		/**
		 * Método responsável por retornar o conteudo (view) da nossa home 
		 * @return string  
		 */
		public static function getHome(){
			//Organização
			$obOrganization = new Organization;
			
			//VIEW DA HOME 
			$content = view::render('pages/home',[
				'name' =>$obOrganization->name,
				'description' =>$obOrganization->description,
				'site' =>$obOrganization->site
			]);
			//RETORNA A VIEW DA PAGINA 
			return parent::getPage('WDEV - Canal - HOME',$content);
		}
	}
?>