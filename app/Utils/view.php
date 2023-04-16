<?php
    namespace App\Utils;

    class View{
        /**
         * Método responsável por retornar o conteudo de uma view 
         * @param string $view
         * @return string 
         */
        private static  function getContentView($view){
            $file = __DIR__.'/../../resources/view/'.$view.'.html';
            return file_exists($file)? file_get_contents($file) :'';
        }
    /**
     * Método rsponsável por retornar o conteudo renderizado de uma view
     * @param string $view
     * @param array $vars (strings /numericos)
     * @return string 
     */
    
        public static function render($view, $vars =[]){
            //CONTEUDO DE UMA VIEW
            $contentView = self::getContentView($view);
            //CHAVES DO ARRAY DE VARIAVEIS
            $keys = array_keys($vars);
            $keys = array_map(function($item){
                return '{{'.$item.'}}';

            },$keys);
           
            //CONTEUDO O CONTEUDO RENDERIZADO 
            return str_replace($keys,array_values($vars),$contentView); 
        }
    }
?>