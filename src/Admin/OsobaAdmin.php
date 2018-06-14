<?php
/**
 * Created by PhpStorm.
 * User: Jonasz
 * Date: 2018-06-14
 * Time: 11:41
 */

namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class OsobaAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('IdOsoby')
            ->add('Email')
            ->add('Imie')
            ->add('Nazwisko')
            ->add('Plec')
            ->add('NrTelefonu')
            ->add('DataUrodzenia');
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('IdOsoby')
            ->add('Email')
            ->add('Imie')
            ->add('Nazwisko')
            ->add('Plec')
            ->add('NrTelefonu')
            ->add('DataUrodzenia');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('IdOsoby')
            ->add('Email')
            ->add('Imie')
            ->add('Nazwisko')
            ->add('Plec')
            ->add('NrTelefonu')
            ->add('DataUrodzenia')
            //         add custom action links
            ->add('_action','actions',array(
                'actions' =>array(
                    'edit' =>array(),
                )
            ));
    }
}