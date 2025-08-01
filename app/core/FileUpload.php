<?php
namespace App\Core;


// class FileUpload
//     {
//         private string $uploadDir;
//         private int $maxSize;
//         private array $allowedTypes;

//         public function __construct(
//             string $uploadDir = 'public/uploads/',
//             int $maxSize = 2_000_000,
//             array $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp']
//         ) {
//             $this->uploadDir = rtrim($uploadDir, '/') . '/';
//             $this->maxSize = $maxSize;
//             $this->allowedTypes = $allowedTypes;

//             if (!file_exists($this->uploadDir)) {
//                 mkdir($this->uploadDir, 0755, true);
//             }
//         }

//         public function upload(array $file): string
//         {
//             if (!isset($file['error']) || is_array($file['error'])) {
//                 throw new \RuntimeException('Fichier invalide.');
//             }

//             if ($file['error'] !== UPLOAD_ERR_OK) {
//                 throw new \RuntimeException('Erreur pendant le téléchargement.');
//             }

//             if (!in_array($file['type'], $this->allowedTypes)) {
//                 throw new \RuntimeException('Type de fichier non autorisé.');
//             }

//             if ($file['size'] > $this->maxSize) {
//                 throw new \RuntimeException('Fichier trop volumineux.');
//             }

//             $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
//             $uniqueName = uniqid('img_', true) . '.' . $extension;
//             $destination = $this->uploadDir . $uniqueName;

//             if (!move_uploaded_file($file['tmp_name'], $destination)) {
//                 throw new \RuntimeException('Échec du déplacement du fichier.');
//             }

//             return $uniqueName;
//         }
//     }

// class FileUpload {

//     private string $targetDir;

//     public function __construct(string $targetDir = 'public/images/uploads/')
//     {
//         $this->targetDir = rtrim($targetDir, '/') . '/';
//     }

//     public function upload(array $file, string $prefix = 'img_'): ?string
//     {
//         if ($file['error'] !== UPLOAD_ERR_OK) {
//             return null; 
//         }

//         $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
//         $filename = uniqid($prefix, true) . '.' . $extension;
//         $targetPath = $this->targetDir . $filename;

//         $mime = mime_content_type($file['tmp_name']);
//         if (!in_array($mime, ['image/jpeg', 'image/png', 'image/webp'])) {
//             return null;
//         }

//         if (!move_uploaded_file($file['tmp_name'], $targetPath)) {
//             return null;
//         }

//         return $filename; 
//     }
// } -->
