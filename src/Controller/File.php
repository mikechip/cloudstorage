<?php

namespace Mike4ip\Cloud\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Upload\Storage\FileSystem;
use Upload\Validation\Size;
use Zend\Diactoros\Response;

/**
 * Контроллер для управления файлами
 * @package Mike4ip\Cloud\Controller
 */
class File
{
    public function upload(ServerRequestInterface $request): ResponseInterface
    {
        $storage = new FileSystem(__DIR__ . '/../../upload');
        $file = new \Upload\File('file', $storage);
        $file->addValidations([
            new Size('10M')
        ]);
        $new_filename = uniqid();
        $file->setName($new_filename);

        try {
            $file->upload();
        } catch (\Exception $e) {
            // $file->getErrors() ...
        }

        $name = $file->getNameWithExtension();
        $response = new Response\RedirectResponse('/');
        return $response;
    }
}