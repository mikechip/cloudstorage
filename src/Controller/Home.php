<?php

namespace Mike4ip\Cloud\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response;

/**
 * Контроллер для главных страниц (авторизация и само окно с файловым хранилищем)
 * @package Mike4ip\Cloud
 */
class Home
{
    /**
     * Главный интерфейс файлового хранилища;
     * доступен только если пользователь авторизован
     * @param ServerRequestInterface $request
     * @return ResponseInterface
     */
    public function index(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response;
        $response->getBody()->write('test');
        return $response;
    }

    public function login(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response;
        $response->getBody()->write('test');
        return $response;
    }

    public function register(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response;
        $response->getBody()->write('test');
        return $response;
    }
}