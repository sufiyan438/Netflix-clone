<?php
    class FormSanitizer{
        
        public static function sanitizeFormString($inputText){
            $inputText = strip_tags($inputText); //Remove's any HTML tags
            $inputText = str_replace(" ", "", $inputText);
            $inputText = strtolower($inputText);
            $inputText = ucfirst($inputText);
            return $inputText;
        }

        public static function sanitizeFormUsername($inputText){
            $inputText = strip_tags($inputText); //Remove's any HTML tags
            $inputText = str_replace(" ", "", $inputText);
            return $inputText;
        }

        public static function sanitizeFormPassword($inputText){
            $inputText = strip_tags($inputText); //Remove's any HTML tags
            return $inputText;
        }

        public static function sanitizeFormEmail($inputText){
            $inputText = strip_tags($inputText); //Remove's any HTML tags
            $inputText = str_replace(" ", "", $inputText);
            return $inputText;
        }
    }
?>