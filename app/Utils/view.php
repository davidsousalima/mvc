<?php
    namespace App\Utils;

    class View{
        /**
         * Método responsável por retornar o conteudo de uma view 
         * @param string $view
         * @return string 
         */
        private static getContentView($view){
            $file = __DIR__.'/../../resources/view/'.$view.'.html';
            return file_exists($file)? file_get_contents($file) :'';
        }
    /**
     * Método rsponsável por retornar o conteudo renderizado de uma view
     * @param string $view
     * @return string 
     */
    
        public static function render($view){
            //CONTEUDO DE UMA VIEW
            $contentView = self::getContentView($view);

            //CONTEUDO O CONTEUDO RENDERIZADO 
            return $contentView; 
        }
    }
?>