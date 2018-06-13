<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            case '/gosc_logowanie':
                // app_gosclogowanie_index
                return array('_route' => 'app_gosclogowanie_index', '_controller' => 'App\\Controller\\GoscLogowanieController::indexAction');
                // gosc_logowanie
                return array('_route' => 'gosc_logowanie', '_controller' => 'App\\Controller\\\\GoscLogowanieController::indexAction');
                break;
            case '/menu':
                // app_menu_index
                return array('_route' => 'app_menu_index', '_controller' => 'App\\Controller\\MenuController::indexAction');
                // menu
                return array('_route' => 'menu', '_controller' => 'App\\Controller\\\\MenuController::indexAction');
                break;
            case '/podglad_sali':
                // app_podgladsali_index
                return array('_route' => 'app_podgladsali_index', '_controller' => 'App\\Controller\\PodgladSaliController::indexAction');
                // podglad_sali
                return array('_route' => 'podglad_sali', '_controller' => 'App\\Controller\\\\PodgladSaliController::indexAction');
                break;
            case '/pracownik_logowanie':
                // app_pracowniklogowanie_index
                return array('_route' => 'app_pracowniklogowanie_index', '_controller' => 'App\\Controller\\PracownikLogowanieController::indexAction');
                // pracownik_logowanie
                return array('_route' => 'pracownik_logowanie', '_controller' => 'App\\Controller\\\\PracownikLogowanieController::indexAction');
                break;
            case '/produkty_kategorii':
                // app_produktykategorii_index
                return array('_route' => 'app_produktykategorii_index', '_controller' => 'App\\Controller\\ProduktyKategorii::indexAction');
                // produkty_kategorii
                return array('_route' => 'produkty_kategorii', '_controller' => 'App\\Controller\\\\ProduktyKategorii::indexAction');
                break;
            case '/staly_klient_logowanie':
                // app_stalyklientlogowanie_index
                return array('_route' => 'app_stalyklientlogowanie_index', '_controller' => 'App\\Controller\\StalyKlientLogowanieController::indexAction');
                // staly_klient_logowanie
                return array('_route' => 'staly_klient_logowanie', '_controller' => 'App\\Controller\\\\StalyKlientLogowanieController::indexAction');
                break;
            case '/':
                // app_start_index
                return array('_route' => 'app_start_index', '_controller' => 'App\\Controller\\StartController::indexAction');
                // index
                return array('_route' => 'index', '_controller' => 'App\\Controller\\StartController::indexAction');
                break;
            default:
                $routes = array(
                    '/admin' => array(array('_route' => 'app_default_admin', '_controller' => 'App\\Controller\\DefaultController::admin'), null, null, null),
                    '/kategoria' => array(array('_route' => 'kategoria', '_controller' => 'App\\Controller\\KategoriaController::index'), null, null, null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                    '/kelner_podglad_sali' => array(array('_route' => 'kelner_podglad_sali', '_controller' => 'App\\Controller\\\\KelnerPodgladSaliController::indexAction'), null, null, null),
                    '/staly_klient_zaloz_konto' => array(array('_route' => 'staly_klient_zaloz_konto', '_controller' => 'App\\Controller\\\\StalyKlientZalozKontoController::indexAction'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/([^/]++)/zamowienie(*:27)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:65)'
                        .'|wdt/([^/]++)(*:84)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:129)'
                                .'|router(*:143)'
                                .'|exception(?'
                                    .'|(*:163)'
                                    .'|\\.css(*:176)'
                                .')'
                            .')'
                            .'|(*:186)'
                        .')'
                    .')'
                    .'|/([^/]++)/z(?'
                        .'|amowienie(?'
                            .'|(*:222)'
                            .'|/podsumowanie/zamkniecie/rachunku(*:263)'
                        .')'
                        .'|emowienie/podsumowanie(*:294)'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            27 => array(array('_route' => 'app_zamowienie_index', '_controller' => 'App\\Controller\\ZamowienieController::indexAction'), array('imie'), null, null),
                            65 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            84 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            129 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            143 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            163 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            176 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            186 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                            222 => array(array('_route' => 'zamowienie', 'imie' => '', '_controller' => 'App\\Controller\\\\ZamowienieController::indexAction'), array('imie'), null, null),
                            263 => array(array('_route' => 'zakoncz', 'imie' => '', '_controller' => 'App\\Controller\\\\ZZamowienieZakonczController::indexAction'), array('imie'), null, null),
                            294 => array(array('_route' => 'podsumowanie', 'imie' => '', '_controller' => 'App\\Controller\\\\ZamowieniePodsumowanieController::indexAction'), array('imie'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (294 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
