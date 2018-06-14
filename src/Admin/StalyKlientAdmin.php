<?php
/**
 * Created by PhpStorm.
 * User: Jonasz
 * Date: 2018-06-14
 * Time: 12:18
 */

namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class StalyKlientAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('InformacjaHandlowa')
            ->add('password')
            ->add('Znizka')
            ->add('IdOsoby');

    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('IdStalegoKlienta')
            ->add('InformacjaHandlowa')
            ->add('password')
            ->add('Znizka')
            ->add('IdOsoby');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('IdStalegoKlienta')
            ->add('InformacjaHandlowa')
            ->add('password')
            ->add('Znizka')
            ->add('IdOsoby')
            //         add custom action links
            ->add('_action','actions',array(
                'actions' =>array(
                    'edit' =>array(),
                )
            ));
    }

}