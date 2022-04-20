<?php
    class Parametros {
        private static $SEPARATOR_PATH = '/';
        
        public function __construct(){
            if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
                get_include_path();
            } else {
                get_include_path();
                die();
            }
        }
        
        public static function getAssets($source) {
            $newAsset = 'assets'.self::$SEPARATOR_PATH.$source;
            return $newAsset;
        }
        
        public static function getThemes($source) {
            $newTheme = 'themes'.self::$SEPARATOR_PATH.$source;
            return $newTheme;
        }        
    }
?>