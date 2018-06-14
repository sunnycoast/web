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
                    '/admin/' => array(array('_route' => 'sonata_admin_redirect', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'), null, null, null),
                    '/admin/dashboard' => array(array('_route' => 'sonata_admin_dashboard', '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction'), null, null, null),
                    '/admin/core/get-form-field-element' => array(array('_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.controller.admin::retrieveFormFieldElementAction'), null, null, null),
                    '/admin/core/append-form-field-element' => array(array('_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.controller.admin::appendFormFieldElementAction'), null, null, null),
                    '/admin/core/set-object-field-value' => array(array('_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.controller.admin::setObjectFieldValueAction'), null, null, null),
                    '/admin/search' => array(array('_route' => 'sonata_admin_search', '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction'), null, null, null),
                    '/admin/core/get-autocomplete-items' => array(array('_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.controller.admin::retrieveAutocompleteItemsAction'), null, null, null),
                    '/admin/app/obsluga/list' => array(array('_route' => 'admin_app_obsluga_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.obsluga', '_sonata_name' => 'admin_app_obsluga_list'), null, null, null),
                    '/admin/app/obsluga/create' => array(array('_route' => 'admin_app_obsluga_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.obsluga', '_sonata_name' => 'admin_app_obsluga_create'), null, null, null),
                    '/admin/app/obsluga/batch' => array(array('_route' => 'admin_app_obsluga_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.obsluga', '_sonata_name' => 'admin_app_obsluga_batch'), null, null, null),
                    '/admin/app/obsluga/export' => array(array('_route' => 'admin_app_obsluga_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.obsluga', '_sonata_name' => 'admin_app_obsluga_export'), null, null, null),
                    '/admin/app/osoba/list' => array(array('_route' => 'admin_app_osoba_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.osoba', '_sonata_name' => 'admin_app_osoba_list'), null, null, null),
                    '/admin/app/osoba/create' => array(array('_route' => 'admin_app_osoba_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.osoba', '_sonata_name' => 'admin_app_osoba_create'), null, null, null),
                    '/admin/app/osoba/batch' => array(array('_route' => 'admin_app_osoba_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.osoba', '_sonata_name' => 'admin_app_osoba_batch'), null, null, null),
                    '/admin/app/osoba/export' => array(array('_route' => 'admin_app_osoba_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.osoba', '_sonata_name' => 'admin_app_osoba_export'), null, null, null),
                    '/admin/app/pozycjazamowienia/list' => array(array('_route' => 'admin_app_pozycjazamowienia_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.pozycja_zamowienia', '_sonata_name' => 'admin_app_pozycjazamowienia_list'), null, null, null),
                    '/admin/app/pozycjazamowienia/create' => array(array('_route' => 'admin_app_pozycjazamowienia_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.pozycja_zamowienia', '_sonata_name' => 'admin_app_pozycjazamowienia_create'), null, null, null),
                    '/admin/app/pozycjazamowienia/batch' => array(array('_route' => 'admin_app_pozycjazamowienia_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.pozycja_zamowienia', '_sonata_name' => 'admin_app_pozycjazamowienia_batch'), null, null, null),
                    '/admin/app/pozycjazamowienia/export' => array(array('_route' => 'admin_app_pozycjazamowienia_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.pozycja_zamowienia', '_sonata_name' => 'admin_app_pozycjazamowienia_export'), null, null, null),
                    '/admin/app/pracownik/list' => array(array('_route' => 'admin_app_pracownik_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.pracownik', '_sonata_name' => 'admin_app_pracownik_list'), null, null, null),
                    '/admin/app/pracownik/create' => array(array('_route' => 'admin_app_pracownik_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.pracownik', '_sonata_name' => 'admin_app_pracownik_create'), null, null, null),
                    '/admin/app/pracownik/batch' => array(array('_route' => 'admin_app_pracownik_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.pracownik', '_sonata_name' => 'admin_app_pracownik_batch'), null, null, null),
                    '/admin/app/pracownik/export' => array(array('_route' => 'admin_app_pracownik_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.pracownik', '_sonata_name' => 'admin_app_pracownik_export'), null, null, null),
                    '/admin/app/produkt/list' => array(array('_route' => 'admin_app_produkt_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.produkt', '_sonata_name' => 'admin_app_produkt_list'), null, null, null),
                    '/admin/app/produkt/create' => array(array('_route' => 'admin_app_produkt_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.produkt', '_sonata_name' => 'admin_app_produkt_create'), null, null, null),
                    '/admin/app/produkt/batch' => array(array('_route' => 'admin_app_produkt_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.produkt', '_sonata_name' => 'admin_app_produkt_batch'), null, null, null),
                    '/admin/app/produkt/export' => array(array('_route' => 'admin_app_produkt_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.produkt', '_sonata_name' => 'admin_app_produkt_export'), null, null, null),
                    '/admin/app/rachunek/list' => array(array('_route' => 'admin_app_rachunek_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.rachunek', '_sonata_name' => 'admin_app_rachunek_list'), null, null, null),
                    '/admin/app/rachunek/create' => array(array('_route' => 'admin_app_rachunek_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.rachunek', '_sonata_name' => 'admin_app_rachunek_create'), null, null, null),
                    '/admin/app/rachunek/batch' => array(array('_route' => 'admin_app_rachunek_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.rachunek', '_sonata_name' => 'admin_app_rachunek_batch'), null, null, null),
                    '/admin/app/rachunek/export' => array(array('_route' => 'admin_app_rachunek_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.rachunek', '_sonata_name' => 'admin_app_rachunek_export'), null, null, null),
                    '/admin/app/rezerwacje/list' => array(array('_route' => 'admin_app_rezerwacje_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.rezerwacja', '_sonata_name' => 'admin_app_rezerwacje_list'), null, null, null),
                    '/admin/app/rezerwacje/create' => array(array('_route' => 'admin_app_rezerwacje_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.rezerwacja', '_sonata_name' => 'admin_app_rezerwacje_create'), null, null, null),
                    '/admin/app/rezerwacje/batch' => array(array('_route' => 'admin_app_rezerwacje_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.rezerwacja', '_sonata_name' => 'admin_app_rezerwacje_batch'), null, null, null),
                    '/admin/app/rezerwacje/export' => array(array('_route' => 'admin_app_rezerwacje_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.rezerwacja', '_sonata_name' => 'admin_app_rezerwacje_export'), null, null, null),
                    '/admin/app/rola/list' => array(array('_route' => 'admin_app_rola_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.rola', '_sonata_name' => 'admin_app_rola_list'), null, null, null),
                    '/admin/app/rola/create' => array(array('_route' => 'admin_app_rola_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.rola', '_sonata_name' => 'admin_app_rola_create'), null, null, null),
                    '/admin/app/rola/batch' => array(array('_route' => 'admin_app_rola_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.rola', '_sonata_name' => 'admin_app_rola_batch'), null, null, null),
                    '/admin/app/rola/export' => array(array('_route' => 'admin_app_rola_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.rola', '_sonata_name' => 'admin_app_rola_export'), null, null, null),
                    '/admin/app/pozycjamenu/list' => array(array('_route' => 'admin_app_pozycjamenu_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.pozycja_menu', '_sonata_name' => 'admin_app_pozycjamenu_list'), null, null, null),
                    '/admin/app/pozycjamenu/create' => array(array('_route' => 'admin_app_pozycjamenu_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.pozycja_menu', '_sonata_name' => 'admin_app_pozycjamenu_create'), null, null, null),
                    '/admin/app/pozycjamenu/batch' => array(array('_route' => 'admin_app_pozycjamenu_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.pozycja_menu', '_sonata_name' => 'admin_app_pozycjamenu_batch'), null, null, null),
                    '/admin/app/pozycjamenu/export' => array(array('_route' => 'admin_app_pozycjamenu_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.pozycja_menu', '_sonata_name' => 'admin_app_pozycjamenu_export'), null, null, null),
                    '/admin/app/kategoria/list' => array(array('_route' => 'admin_app_kategoria_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.kategoria', '_sonata_name' => 'admin_app_kategoria_list'), null, null, null),
                    '/admin/app/kategoria/create' => array(array('_route' => 'admin_app_kategoria_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.kategoria', '_sonata_name' => 'admin_app_kategoria_create'), null, null, null),
                    '/admin/app/kategoria/batch' => array(array('_route' => 'admin_app_kategoria_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.kategoria', '_sonata_name' => 'admin_app_kategoria_batch'), null, null, null),
                    '/admin/app/kategoria/export' => array(array('_route' => 'admin_app_kategoria_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.kategoria', '_sonata_name' => 'admin_app_kategoria_export'), null, null, null),
                    '/admin/app/sektor/list' => array(array('_route' => 'admin_app_sektor_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.sektor', '_sonata_name' => 'admin_app_sektor_list'), null, null, null),
                    '/admin/app/sektor/create' => array(array('_route' => 'admin_app_sektor_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.sektor', '_sonata_name' => 'admin_app_sektor_create'), null, null, null),
                    '/admin/app/sektor/batch' => array(array('_route' => 'admin_app_sektor_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.sektor', '_sonata_name' => 'admin_app_sektor_batch'), null, null, null),
                    '/admin/app/sektor/export' => array(array('_route' => 'admin_app_sektor_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.sektor', '_sonata_name' => 'admin_app_sektor_export'), null, null, null),
                    '/admin/app/stalyklient/list' => array(array('_route' => 'admin_app_stalyklient_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.staly_klient', '_sonata_name' => 'admin_app_stalyklient_list'), null, null, null),
                    '/admin/app/stalyklient/create' => array(array('_route' => 'admin_app_stalyklient_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.staly_klient', '_sonata_name' => 'admin_app_stalyklient_create'), null, null, null),
                    '/admin/app/stalyklient/batch' => array(array('_route' => 'admin_app_stalyklient_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.staly_klient', '_sonata_name' => 'admin_app_stalyklient_batch'), null, null, null),
                    '/admin/app/stalyklient/export' => array(array('_route' => 'admin_app_stalyklient_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.staly_klient', '_sonata_name' => 'admin_app_stalyklient_export'), null, null, null),
                    '/admin/app/stolik/list' => array(array('_route' => 'admin_app_stolik_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.stolik', '_sonata_name' => 'admin_app_stolik_list'), null, null, null),
                    '/admin/app/stolik/create' => array(array('_route' => 'admin_app_stolik_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.stolik', '_sonata_name' => 'admin_app_stolik_create'), null, null, null),
                    '/admin/app/stolik/batch' => array(array('_route' => 'admin_app_stolik_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.stolik', '_sonata_name' => 'admin_app_stolik_batch'), null, null, null),
                    '/admin/app/stolik/export' => array(array('_route' => 'admin_app_stolik_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.stolik', '_sonata_name' => 'admin_app_stolik_export'), null, null, null),
                    '/admin/app/vat/list' => array(array('_route' => 'admin_app_vat_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.vat', '_sonata_name' => 'admin_app_vat_list'), null, null, null),
                    '/admin/app/vat/create' => array(array('_route' => 'admin_app_vat_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.vat', '_sonata_name' => 'admin_app_vat_create'), null, null, null),
                    '/admin/app/vat/batch' => array(array('_route' => 'admin_app_vat_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.vat', '_sonata_name' => 'admin_app_vat_batch'), null, null, null),
                    '/admin/app/vat/export' => array(array('_route' => 'admin_app_vat_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.vat', '_sonata_name' => 'admin_app_vat_export'), null, null, null),
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
                    .'|/admin/(?'
                        .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:98)'
                        .'|app/(?'
                            .'|o(?'
                                .'|bsluga/([^/]++)/(?'
                                    .'|edit(*:139)'
                                    .'|delete(*:153)'
                                    .'|show(*:165)'
                                .')'
                                .'|soba/([^/]++)/(?'
                                    .'|edit(*:195)'
                                    .'|delete(*:209)'
                                    .'|show(*:221)'
                                .')'
                            .')'
                            .'|p(?'
                                .'|ozycja(?'
                                    .'|zamowienia/([^/]++)/(?'
                                        .'|edit(*:271)'
                                        .'|delete(*:285)'
                                        .'|show(*:297)'
                                    .')'
                                    .'|menu/([^/]++)/(?'
                                        .'|edit(*:327)'
                                        .'|delete(*:341)'
                                        .'|show(*:353)'
                                    .')'
                                .')'
                                .'|r(?'
                                    .'|acownik/([^/]++)/(?'
                                        .'|edit(*:391)'
                                        .'|delete(*:405)'
                                        .'|show(*:417)'
                                    .')'
                                    .'|odukt/([^/]++)/(?'
                                        .'|edit(*:448)'
                                        .'|delete(*:462)'
                                        .'|show(*:474)'
                                    .')'
                                .')'
                            .')'
                            .'|r(?'
                                .'|achunek/([^/]++)/(?'
                                    .'|edit(*:513)'
                                    .'|delete(*:527)'
                                    .'|show(*:539)'
                                .')'
                                .'|ezerwacje/([^/]++)/(?'
                                    .'|edit(*:574)'
                                    .'|delete(*:588)'
                                    .'|show(*:600)'
                                .')'
                                .'|ola/([^/]++)/(?'
                                    .'|edit(*:629)'
                                    .'|delete(*:643)'
                                    .'|show(*:655)'
                                .')'
                            .')'
                            .'|kategoria/([^/]++)/(?'
                                .'|edit(*:691)'
                                .'|delete(*:705)'
                                .'|show(*:717)'
                            .')'
                            .'|s(?'
                                .'|ektor/([^/]++)/(?'
                                    .'|edit(*:752)'
                                    .'|delete(*:766)'
                                    .'|show(*:778)'
                                .')'
                                .'|t(?'
                                    .'|alyklient/([^/]++)/(?'
                                        .'|edit(*:817)'
                                        .'|delete(*:831)'
                                        .'|show(*:843)'
                                    .')'
                                    .'|olik/([^/]++)/(?'
                                        .'|edit(*:873)'
                                        .'|delete(*:887)'
                                        .'|show(*:899)'
                                    .')'
                                .')'
                            .')'
                            .'|vat/([^/]++)/(?'
                                .'|edit(*:930)'
                                .'|delete(*:944)'
                                .'|show(*:956)'
                            .')'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:998)'
                        .'|wdt/([^/]++)(*:1018)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:1065)'
                                .'|router(*:1080)'
                                .'|exception(?'
                                    .'|(*:1101)'
                                    .'|\\.css(*:1115)'
                                .')'
                            .')'
                            .'|(*:1126)'
                        .')'
                    .')'
                    .'|/([^/]++)/z(?'
                        .'|amowienie(?'
                            .'|(*:1163)'
                            .'|/podsumowanie/zamkniecie/rachunku(*:1205)'
                        .')'
                        .'|emowienie/podsumowanie(*:1237)'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            27 => array(array('_route' => 'app_zamowienie_index', '_controller' => 'App\\Controller\\ZamowienieController::indexAction'), array('imie'), null, null),
                            98 => array(array('_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.controller.admin::getShortObjectDescriptionAction', '_format' => 'html'), array('_format'), null, null),
                            139 => array(array('_route' => 'admin_app_obsluga_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.obsluga', '_sonata_name' => 'admin_app_obsluga_edit'), array('id'), null, null),
                            153 => array(array('_route' => 'admin_app_obsluga_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.obsluga', '_sonata_name' => 'admin_app_obsluga_delete'), array('id'), null, null),
                            165 => array(array('_route' => 'admin_app_obsluga_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.obsluga', '_sonata_name' => 'admin_app_obsluga_show'), array('id'), null, null),
                            195 => array(array('_route' => 'admin_app_osoba_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.osoba', '_sonata_name' => 'admin_app_osoba_edit'), array('id'), null, null),
                            209 => array(array('_route' => 'admin_app_osoba_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.osoba', '_sonata_name' => 'admin_app_osoba_delete'), array('id'), null, null),
                            221 => array(array('_route' => 'admin_app_osoba_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.osoba', '_sonata_name' => 'admin_app_osoba_show'), array('id'), null, null),
                            271 => array(array('_route' => 'admin_app_pozycjazamowienia_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.pozycja_zamowienia', '_sonata_name' => 'admin_app_pozycjazamowienia_edit'), array('id'), null, null),
                            285 => array(array('_route' => 'admin_app_pozycjazamowienia_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.pozycja_zamowienia', '_sonata_name' => 'admin_app_pozycjazamowienia_delete'), array('id'), null, null),
                            297 => array(array('_route' => 'admin_app_pozycjazamowienia_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.pozycja_zamowienia', '_sonata_name' => 'admin_app_pozycjazamowienia_show'), array('id'), null, null),
                            327 => array(array('_route' => 'admin_app_pozycjamenu_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.pozycja_menu', '_sonata_name' => 'admin_app_pozycjamenu_edit'), array('id'), null, null),
                            341 => array(array('_route' => 'admin_app_pozycjamenu_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.pozycja_menu', '_sonata_name' => 'admin_app_pozycjamenu_delete'), array('id'), null, null),
                            353 => array(array('_route' => 'admin_app_pozycjamenu_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.pozycja_menu', '_sonata_name' => 'admin_app_pozycjamenu_show'), array('id'), null, null),
                            391 => array(array('_route' => 'admin_app_pracownik_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.pracownik', '_sonata_name' => 'admin_app_pracownik_edit'), array('id'), null, null),
                            405 => array(array('_route' => 'admin_app_pracownik_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.pracownik', '_sonata_name' => 'admin_app_pracownik_delete'), array('id'), null, null),
                            417 => array(array('_route' => 'admin_app_pracownik_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.pracownik', '_sonata_name' => 'admin_app_pracownik_show'), array('id'), null, null),
                            448 => array(array('_route' => 'admin_app_produkt_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.produkt', '_sonata_name' => 'admin_app_produkt_edit'), array('id'), null, null),
                            462 => array(array('_route' => 'admin_app_produkt_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.produkt', '_sonata_name' => 'admin_app_produkt_delete'), array('id'), null, null),
                            474 => array(array('_route' => 'admin_app_produkt_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.produkt', '_sonata_name' => 'admin_app_produkt_show'), array('id'), null, null),
                            513 => array(array('_route' => 'admin_app_rachunek_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.rachunek', '_sonata_name' => 'admin_app_rachunek_edit'), array('id'), null, null),
                            527 => array(array('_route' => 'admin_app_rachunek_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.rachunek', '_sonata_name' => 'admin_app_rachunek_delete'), array('id'), null, null),
                            539 => array(array('_route' => 'admin_app_rachunek_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.rachunek', '_sonata_name' => 'admin_app_rachunek_show'), array('id'), null, null),
                            574 => array(array('_route' => 'admin_app_rezerwacje_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.rezerwacja', '_sonata_name' => 'admin_app_rezerwacje_edit'), array('id'), null, null),
                            588 => array(array('_route' => 'admin_app_rezerwacje_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.rezerwacja', '_sonata_name' => 'admin_app_rezerwacje_delete'), array('id'), null, null),
                            600 => array(array('_route' => 'admin_app_rezerwacje_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.rezerwacja', '_sonata_name' => 'admin_app_rezerwacje_show'), array('id'), null, null),
                            629 => array(array('_route' => 'admin_app_rola_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.rola', '_sonata_name' => 'admin_app_rola_edit'), array('id'), null, null),
                            643 => array(array('_route' => 'admin_app_rola_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.rola', '_sonata_name' => 'admin_app_rola_delete'), array('id'), null, null),
                            655 => array(array('_route' => 'admin_app_rola_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.rola', '_sonata_name' => 'admin_app_rola_show'), array('id'), null, null),
                            691 => array(array('_route' => 'admin_app_kategoria_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.kategoria', '_sonata_name' => 'admin_app_kategoria_edit'), array('id'), null, null),
                            705 => array(array('_route' => 'admin_app_kategoria_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.kategoria', '_sonata_name' => 'admin_app_kategoria_delete'), array('id'), null, null),
                            717 => array(array('_route' => 'admin_app_kategoria_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.kategoria', '_sonata_name' => 'admin_app_kategoria_show'), array('id'), null, null),
                            752 => array(array('_route' => 'admin_app_sektor_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.sektor', '_sonata_name' => 'admin_app_sektor_edit'), array('id'), null, null),
                            766 => array(array('_route' => 'admin_app_sektor_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.sektor', '_sonata_name' => 'admin_app_sektor_delete'), array('id'), null, null),
                            778 => array(array('_route' => 'admin_app_sektor_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.sektor', '_sonata_name' => 'admin_app_sektor_show'), array('id'), null, null),
                            817 => array(array('_route' => 'admin_app_stalyklient_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.staly_klient', '_sonata_name' => 'admin_app_stalyklient_edit'), array('id'), null, null),
                            831 => array(array('_route' => 'admin_app_stalyklient_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.staly_klient', '_sonata_name' => 'admin_app_stalyklient_delete'), array('id'), null, null),
                            843 => array(array('_route' => 'admin_app_stalyklient_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.staly_klient', '_sonata_name' => 'admin_app_stalyklient_show'), array('id'), null, null),
                            873 => array(array('_route' => 'admin_app_stolik_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.stolik', '_sonata_name' => 'admin_app_stolik_edit'), array('id'), null, null),
                            887 => array(array('_route' => 'admin_app_stolik_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.stolik', '_sonata_name' => 'admin_app_stolik_delete'), array('id'), null, null),
                            899 => array(array('_route' => 'admin_app_stolik_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.stolik', '_sonata_name' => 'admin_app_stolik_show'), array('id'), null, null),
                            930 => array(array('_route' => 'admin_app_vat_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.vat', '_sonata_name' => 'admin_app_vat_edit'), array('id'), null, null),
                            944 => array(array('_route' => 'admin_app_vat_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.vat', '_sonata_name' => 'admin_app_vat_delete'), array('id'), null, null),
                            956 => array(array('_route' => 'admin_app_vat_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.vat', '_sonata_name' => 'admin_app_vat_show'), array('id'), null, null),
                            998 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            1018 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            1065 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            1080 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            1101 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            1115 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            1126 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                            1163 => array(array('_route' => 'zamowienie', 'imie' => '', '_controller' => 'App\\Controller\\\\ZamowienieController::indexAction'), array('imie'), null, null),
                            1205 => array(array('_route' => 'zakoncz', 'imie' => '', '_controller' => 'App\\Controller\\\\ZZamowienieZakonczController::indexAction'), array('imie'), null, null),
                            1237 => array(array('_route' => 'podsumowanie', 'imie' => '', '_controller' => 'App\\Controller\\\\ZamowieniePodsumowanieController::indexAction'), array('imie'), null, null),
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

                if (1237 === $m) {
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
