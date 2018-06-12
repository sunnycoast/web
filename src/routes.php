<?php
//test
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();

$routes->add('start', new Route( '', array(
        '_controller' => 'MVC\\Controller\\StartController::indexAction'
)));

$routes->add('staly_klient_logowanie', new Route( '/staly_klient_logowanie', array(
    '_controller' => 'MVC\\Controller\\StalyKlientLogowanieController::indexAction'
)));

$routes->add('gosc_logowanie', new Route( '/gosc_logowanie', array(
    '_controller' => 'MVC\\Controller\\GoscLogowanieController::indexAction'
)));

$routes->add('produkty_kategorii', new Route( '/produkty_kategorii', array(
    '_controller' => 'MVC\\Controller\\ProduktyKategorii::indexAction'
)));

$routes->add('menu', new Route( '/menu', array(
    '_controller' => 'MVC\\Controller\\MenuController::indexAction'
)));

$routes->add('podglad_sali', new Route( '/podglad_sali', array(
    '_controller' => 'MVC\\Controller\\PodgladSaliController::indexAction'
)));

$routes->add('kelner_podglad_sali', new Route( '/kelner_podglad_sali', array(
    '_controller' => 'MVC\\Controller\\KelnerPodgladSaliController::indexAction'
)));

$routes->add('podglad_stolika', new Route( '/podglad_stolika', array(
    '_controller' => 'MVC\\Controller\\PodgladStolikaController::indexAction'
)));

$routes->add('zamowienie', new Route( '/{imie}/zamowienie', array(
        'imie' => '',
        '_controller' => 'MVC\\Controller\\ZamowienieController::indexAction'
)));

$routes->add('podsumowanie', new Route( '/{imie}/zamowienie/podsumowanie', array(
    'imie' => '',
    '_controller' => 'MVC\\Controller\\ZamowieniePodsumowanieController::indexAction'
)));

$routes->add('zakoncz', new Route( '/{imie}/zamowienie/podsumowanie/zamkniecie/rachunku', array(
    'imie' => '',
    '_controller' => 'MVC\\Controller\\ZamowienieZakonczController::indexAction'
)));

$routes->add('pracownik_logowanie', new Route( '/pracownik_logowanie', array(
    '_controller' => 'MVC\\Controller\\PracownikLogowanieController::indexAction'
)));

$routes->add('staly_klient_zaloz_konto', new Route( '/staly_klient_zaloz_konto', array(
    '_controller' => 'MVC\\Controller\\StalyKlientZalozKontoController::indexAction'
)));

$routes->add('rezerwacje', new Route( '/{imie}/rezerwacje', array(
    '_controller' => 'MVC\\Controller\\StalyKlientZalozKontoController::indexAction'
)));

$routes->add('rezerwacje', new Route( '/{imie}/rezerwacje/nowa', array(
    '_controller' => 'MVC\\Controller\\StalyKlientZalozKontoController::indexAction'
)));

return $routes;