<?php
namespace App\Core;

class Validator {
    private static array $errors=[];

    public static function isValidSenegalPhone($numero, $key, $message) {
        $numero = str_replace(' ', '', $numero);
        if (!preg_match('/^(?:\+221)?7[05678][0-9]{7}$/', $numero)) {
            self::$errors[$key] = $message;
        }
    }


   public static function isValidCni($cni, $key, $message) {
        $effacer = str_replace(' ', '', $cni);
        if (!preg_match('/^[0-9]{13}$/', $effacer)) {
            self::$errors[$key] = $message;
            return;
        }
   }


    public static function isEmpty($value, $key, $message) {
        if (empty($value)) {
            self::$errors[$key] = $message;
        }
    }

    public static function addErrors($key, $message) {
        self::$errors[$key] = $message;
    }

    public static function isUnique($value, $key, $message, callable $checkFunc) {
        if (!$checkFunc($value)) {
            self::$errors[$key] = $message;
        }
    }

    public static function getErrors(): array {
        return self::$errors;
    }

    public static function isValid(): bool {
        return empty(self::$errors);
    }

    public static function reset(){
        self::$errors=[];
    }


    // public static function isFileUploaded(array $file, string $key, string $message): void {
    //     if (!isset($file['error']) || $file['error'] !== UPLOAD_ERR_OK) {
    //         self::$errors[$key] = $message;
    //     }
    // }


}







// namespace App\Core;

// class Validator{

//     private static array $valide=[];
//     private static array $messages = [
//         "obligatoire" => "Le champs est requis."
//     ];

//     private static array $errors=[];

//     public static function init(){
//        self::$valide = [
//         'obligatoire'=> function($champ){
//             return empty($champ) ? self::$messages["obligatoire" ] : true;}     
//         ];
//     }

//     public static function valider($regles , $champs){
//         self::init();
//         foreach($regles as $key => $values){
//             foreach( $values as $value){
//                 foreach($champs as $champ){
//                     self::$errors[$key]=self::$valide[$value]($champ);
//                 }
//             }
//         }
//     }
    
//     public static function getError(){
//         return self::$errors;
//     }

//     public static function isValide(){
//         foreach (self::$errors as $key => $value) {
//             if (is_string($value)) {
//                 return false;
//             }
//             return true;
//         }
//     }

// }