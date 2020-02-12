<?php

namespace Mike4ip\Cloud\Controller;

use Mike4ip\Cloud\Core\Templater;
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
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index(ServerRequestInterface $request): ResponseInterface
    {
        $template = Templater::i()->load('main.html')->render();

        $response = new Response;
        $response->getBody()->write($template);
        return $response;
    }

    public function login(ServerRequestInterface $request): ResponseInterface
    {
        $template = Templater::i()->load('login.html')->render();

        $response = new Response;
        $response->getBody()->write($template);
        return $response;
    }

    public function logout(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response;
        return $response;
    }

    public function register(ServerRequestInterface $request): ResponseInterface
    {
        $template = Templater::i()->load('register.html')->render();

        $response = new Response;
        $response->getBody()->write($template);
        return $response;
    }
}