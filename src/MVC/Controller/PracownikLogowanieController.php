<?php

namespace MVC\Controller;

use Base\App;

class PracownikLogowanieController extends App
{
    public function indexAction()
    {
        if( isset($_POST['pin']) )
        {
            $pin 	= $_POST['pin'];
            $err = 'przeszlo';


            $render = $this->render('MVC/View/pracownik_logowanie.html.twig', array(
                'err'    => $err
            ));
        } else
        {
            $render = $this->render('MVC/View/pracownik_logowanie.html.twig', array(
                'err'    => ''
            ));
        }
        return $render;
    }
}