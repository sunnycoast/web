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
                    '/admin/app/blokada/list' => array(array('_route' => 'admin_app_blokada_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.blokada', '_sonata_name' => 'admin_app_blokada_list'), null, null, null),
                    '/admin/app/blokada/create' => array(array('_route' => 'admin_app_blokada_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.blokada', '_sonata_name' => 'admin_app_blokada_create'), null, null, null),
                    '/admin/app/blokada/batch' => array(array('_route' => 'admin_app_blokada_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.blokada', '_sonata_name' => 'admin_app_blokada_batch'), null, null, null),
                    '/admin/app/blokada/export' => array(array('_route' => 'admin_app_blokada_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.blokada', '_sonata_name' => 'admin_app_blokada_export'), null, null, null),
                    '/admin/app/kategoria/list' => array(array('_route' => 'admin_app_kategoria_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'admin.kategoria', '_sonata_name' => 'admin_app_kategoria_list'), null, null, null),
                    '/admin/app/kategoria/create' => array(array('_route' => 'admin_app_kategoria_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'admin.kategoria', '_sonata_name' => 'admin_app_kategoria_create'), null, null, null),
                    '/admin/app/kategoria/batch' => array(array('_route' => 'admin_app_kategoria_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'admin.kategoria', '_sonata_name' => 'admin_app_kategoria_batch'), null, null, null),
                    '/admin/app/kategoria/export' => array(array('_route' => 'admin_app_kategoria_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'admin.kategoria', '_sonata_name' => 'admin_app_kategoria_export'), null, null, null),
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
                            .'|blokada/([^/]++)/(?'
                                .'|edit(*:136)'
                                .'|delete(*:150)'
                                .'|show(*:162)'
                            .')'
                            .'|kategoria/([^/]++)/(?'
                                .'|edit(*:197)'
                                .'|delete(*:211)'
                                .'|show(*:223)'
                            .')'
                            .'|o(?'
                                .'|bsluga/([^/]++)/(?'
                                    .'|edit(*:259)'
                                    .'|delete(*:273)'
                                    .'|show(*:285)'
                                .')'
                                .'|soba/([^/]++)/(?'
                                    .'|edit(*:315)'
                                    .'|delete(*:329)'
                                    .'|show(*:341)'
                                .')'
                            .')'
                            .'|p(?'
                                .'|ozycja(?'
                                    .'|zamowienia/([^/]++)/(?'
                                        .'|edit(*:391)'
                                        .'|delete(*:405)'
                                        .'|show(*:417)'
                                    .')'
                                    .'|menu/([^/]++)/(?'
                                        .'|edit(*:447)'
                                        .'|delete(*:461)'
                                        .'|show(*:473)'
                                    .')'
                                .')'
                                .'|r(?'
                                    .'|acownik/([^/]++)/(?'
                                        .'|edit(*:511)'
                                        .'|delete(*:525)'
                                        .'|show(*:537)'
                                    .')'
                                    .'|odukt/([^/]++)/(?'
                                        .'|edit(*:568)'
                                        .'|delete(*:582)'
                                        .'|show(*:594)'
                                    .')'
                                .')'
                            .')'
                            .'|r(?'
                                .'|achunek/([^/]++)/(?'
                                    .'|edit(*:633)'
                                    .'|delete(*:647)'
                                    .'|show(*:659)'
                                .')'
                                .'|ezerwacje/([^/]++)/(?'
                                    .'|edit(*:694)'
                                    .'|delete(*:708)'
                                    .'|show(*:720)'
                                .')'
                                .'|ola/([^/]++)/(?'
                                    .'|edit(*:749)'
                                    .'|delete(*:763)'
                                    .'|show(*:775)'
                                .')'
                            .')'
                            .'|s(?'
                                .'|ektor/([^/]++)/(?'
                                    .'|edit(*:811)'
                                    .'|delete(*:825)'
                                    .'|show(*:837)'
                                .')'
                                .'|t(?'
                                    .'|alyklient/([^/]++)/(?'
                                        .'|edit(*:876)'
                                        .'|delete(*:890)'
                                        .'|show(*:902)'
                                    .')'
                                    .'|olik/([^/]++)/(?'
                                        .'|edit(*:932)'
                                        .'|delete(*:946)'
                                        .'|show(*:958)'
                                    .')'
                                .')'
                            .')'
                            .'|vat/([^/]++)/(?'
                                .'|edit(*:989)'
                                .'|delete(*:1003)'
                                .'|show(*:1016)'
                            .')'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:1059)'
                        .'|wdt/([^/]++)(*:1080)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:1127)'
                                .'|router(*:1142)'
                                .'|exception(?'
                                    .'|(*:1163)'
                                    .'|\\.css(*:1177)'
                                .')'
                            .')'
                            .'|(*:1188)'
                        .')'
                    .')'
                    .'|/([^/]++)/z(?'
                        .'|amowienie(?'
                            .'|(*:1225)'
                            .'|/podsumowanie/zamkniecie/rachunku(*:1267)'
                        .')'
                        .'|emowienie/podsumowanie(*:1299)'
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
                            136 => array(array('_route' => 'admin_app_blokada_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.blokada', '_sonata_name' => 'admin_app_blokada_edit'), array('id'), null, null),
                            150 => array(array('_route' => 'admin_app_blokada_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.blokada', '_sonata_name' => 'admin_app_blokada_delete'), array('id'), null, null),
                            162 => array(array('_route' => 'admin_app_blokada_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.blokada', '_sonata_name' => 'admin_app_blokada_show'), array('id'), null, null),
                            197 => array(array('_route' => 'admin_app_kategoria_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.kategoria', '_sonata_name' => 'admin_app_kategoria_edit'), array('id'), null, null),
                            211 => array(array('_route' => 'admin_app_kategoria_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.kategoria', '_sonata_name' => 'admin_app_kategoria_delete'), array('id'), null, null),
                            223 => array(array('_route' => 'admin_app_kategoria_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.kategoria', '_sonata_name' => 'admin_app_kategoria_show'), array('id'), null, null),
                            259 => array(array('_route' => 'admin_app_obsluga_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.obsluga', '_sonata_name' => 'admin_app_obsluga_edit'), array('id'), null, null),
                            273 => array(array('_route' => 'admin_app_obsluga_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.obsluga', '_sonata_name' => 'admin_app_obsluga_delete'), array('id'), null, null),
                            285 => array(array('_route' => 'admin_app_obsluga_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.obsluga', '_sonata_name' => 'admin_app_obsluga_show'), array('id'), null, null),
                            315 => array(array('_route' => 'admin_app_osoba_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.osoba', '_sonata_name' => 'admin_app_osoba_edit'), array('id'), null, null),
                            329 => array(array('_route' => 'admin_app_osoba_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.osoba', '_sonata_name' => 'admin_app_osoba_delete'), array('id'), null, null),
                            341 => array(array('_route' => 'admin_app_osoba_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.osoba', '_sonata_name' => 'admin_app_osoba_show'), array('id'), null, null),
                            391 => array(array('_route' => 'admin_app_pozycjazamowienia_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.pozycja_zamowienia', '_sonata_name' => 'admin_app_pozycjazamowienia_edit'), array('id'), null, null),
                            405 => array(array('_route' => 'admin_app_pozycjazamowienia_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.pozycja_zamowienia', '_sonata_name' => 'admin_app_pozycjazamowienia_delete'), array('id'), null, null),
                            417 => array(array('_route' => 'admin_app_pozycjazamowienia_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.pozycja_zamowienia', '_sonata_name' => 'admin_app_pozycjazamowienia_show'), array('id'), null, null),
                            447 => array(array('_route' => 'admin_app_pozycjamenu_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.pozycja_menu', '_sonata_name' => 'admin_app_pozycjamenu_edit'), array('id'), null, null),
                            461 => array(array('_route' => 'admin_app_pozycjamenu_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.pozycja_menu', '_sonata_name' => 'admin_app_pozycjamenu_delete'), array('id'), null, null),
                            473 => array(array('_route' => 'admin_app_pozycjamenu_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.pozycja_menu', '_sonata_name' => 'admin_app_pozycjamenu_show'), array('id'), null, null),
                            511 => array(array('_route' => 'admin_app_pracownik_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.pracownik', '_sonata_name' => 'admin_app_pracownik_edit'), array('id'), null, null),
                            525 => array(array('_route' => 'admin_app_pracownik_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.pracownik', '_sonata_name' => 'admin_app_pracownik_delete'), array('id'), null, null),
                            537 => array(array('_route' => 'admin_app_pracownik_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.pracownik', '_sonata_name' => 'admin_app_pracownik_show'), array('id'), null, null),
                            568 => array(array('_route' => 'admin_app_produkt_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.produkt', '_sonata_name' => 'admin_app_produkt_edit'), array('id'), null, null),
                            582 => array(array('_route' => 'admin_app_produkt_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.produkt', '_sonata_name' => 'admin_app_produkt_delete'), array('id'), null, null),
                            594 => array(array('_route' => 'admin_app_produkt_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.produkt', '_sonata_name' => 'admin_app_produkt_show'), array('id'), null, null),
                            633 => array(array('_route' => 'admin_app_rachunek_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.rachunek', '_sonata_name' => 'admin_app_rachunek_edit'), array('id'), null, null),
                            647 => array(array('_route' => 'admin_app_rachunek_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.rachunek', '_sonata_name' => 'admin_app_rachunek_delete'), array('id'), null, null),
                            659 => array(array('_route' => 'admin_app_rachunek_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.rachunek', '_sonata_name' => 'admin_app_rachunek_show'), array('id'), null, null),
                            694 => array(array('_route' => 'admin_app_rezerwacje_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.rezerwacja', '_sonata_name' => 'admin_app_rezerwacje_edit'), array('id'), null, null),
                            708 => array(array('_route' => 'admin_app_rezerwacje_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.rezerwacja', '_sonata_name' => 'admin_app_rezerwacje_delete'), array('id'), null, null),
                            720 => array(array('_route' => 'admin_app_rezerwacje_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.rezerwacja', '_sonata_name' => 'admin_app_rezerwacje_show'), array('id'), null, null),
                            749 => array(array('_route' => 'admin_app_rola_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.rola', '_sonata_name' => 'admin_app_rola_edit'), array('id'), null, null),
                            763 => array(array('_route' => 'admin_app_rola_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.rola', '_sonata_name' => 'admin_app_rola_delete'), array('id'), null, null),
                            775 => array(array('_route' => 'admin_app_rola_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.rola', '_sonata_name' => 'admin_app_rola_show'), array('id'), null, null),
                            811 => array(array('_route' => 'admin_app_sektor_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.sektor', '_sonata_name' => 'admin_app_sektor_edit'), array('id'), null, null),
                            825 => array(array('_route' => 'admin_app_sektor_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.sektor', '_sonata_name' => 'admin_app_sektor_delete'), array('id'), null, null),
                            837 => array(array('_route' => 'admin_app_sektor_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.sektor', '_sonata_name' => 'admin_app_sektor_show'), array('id'), null, null),
                            876 => array(array('_route' => 'admin_app_stalyklient_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.staly_klient', '_sonata_name' => 'admin_app_stalyklient_edit'), array('id'), null, null),
                            890 => array(array('_route' => 'admin_app_stalyklient_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.staly_klient', '_sonata_name' => 'admin_app_stalyklient_delete'), array('id'), null, null),
                            902 => array(array('_route' => 'admin_app_stalyklient_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.staly_klient', '_sonata_name' => 'admin_app_stalyklient_show'), array('id'), null, null),
                            932 => array(array('_route' => 'admin_app_stolik_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.stolik', '_sonata_name' => 'admin_app_stolik_edit'), array('id'), null, null),
                            946 => array(array('_route' => 'admin_app_stolik_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.stolik', '_sonata_name' => 'admin_app_stolik_delete'), array('id'), null, null),
                            958 => array(array('_route' => 'admin_app_stolik_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.stolik', '_sonata_name' => 'admin_app_stolik_show'), array('id'), null, null),
                            989 => array(array('_route' => 'admin_app_vat_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'admin.vat', '_sonata_name' => 'admin_app_vat_edit'), array('id'), null, null),
                            1003 => array(array('_route' => 'admin_app_vat_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'admin.vat', '_sonata_name' => 'admin_app_vat_delete'), array('id'), null, null),
                            1016 => array(array('_route' => 'admin_app_vat_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'admin.vat', '_sonata_name' => 'admin_app_vat_show'), array('id'), null, null),
                            1059 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            1080 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            1127 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            1142 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            1163 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            1177 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            1188 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                            1225 => array(array('_route' => 'zamowienie', 'imie' => '', '_controller' => 'App\\Controller\\\\ZamowienieController::indexAction'), array('imie'), null, null),
                            1267 => array(array('_route' => 'zakoncz', 'imie' => '', '_controller' => 'App\\Controller\\\\ZZamowienieZakonczController::indexAction'), array('imie'), null, null),
                            1299 => array(array('_route' => 'podsumowanie', 'imie' => '', '_controller' => 'App\\Controller\\\\ZamowieniePodsumowanieController::indexAction'), array('imie'), null, null),
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

                if (1299 === $m) {
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
