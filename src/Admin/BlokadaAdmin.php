<?php
/**
 * Created by PhpStorm.
 * User: Jonasz
 * Date: 2018-06-14
 * Time: 10:59
 */

namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class BlokadaAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('IdBlokady')
            ->add('DataWprowadzenia')
            ->add('DataWycofania')
            ->add('Powod')
            ->add('IdPozycjiMenu')
            ->add('IdPracownika');
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('IdBlokady')
            ->add('DataWprowadzenia')
            ->add('DataWycofania')
            ->add('Powod')
            ->add('IdPozycjiMenu')
            ->add('IdPracownika');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('IdBlokady')
            ->add('DataWprowadzenia')
            ->add('DataWycofania')
            ->add('Powod')
            ->add('IdPozycjiMenu')
            ->add('IdPracownika');
    }


}