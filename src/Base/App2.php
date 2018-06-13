<?php

namespace Base;

use Base\Provider\TwigServiceProvider;
use Base\Provider\DoctrineServiceProvider;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\RequestContext;

class App2
{
    private $config;
    private $view;
    private $entityManager;
    private $urlGenerator;

    public function __construct()
    {
        $this->loadConfig();
        $routs = include  __DIR__.'/../routes.php';
        $this->urlGenerator = new UrlGenerator($routs, new RequestContext());
        $twig = new TwigServiceProvider($this->config['twig']);
        $this->view = $twig->provide(array(
            'urlGenerator' => $this->urlGenerator
        ));
        $doctrine = new DoctrineServiceProvider($this->config['database']);
        $this->entityManager =$doctrine->provide();
    }

    public function render($name, $data = [])
    {
        $body = $this->view->render($name, $data);
        return new Response($body);
    }

    public function getEntityManager()
    {
        return $this->entityManager;
    }

    private function loadConfig()
    {
        $this->config = include(__DIR__.'/../config.php');
    }
}