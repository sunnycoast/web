<?php
/**
 * Created by PhpStorm.
 * User: Jonasz
 * Date: 2018-06-14
 * Time: 11:56
 */

namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PracownikAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('PIN')
            ->add('IdRoli')
            ->add('IdOsoby');
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('IdPracownika')
            ->add('PIN')
            ->add('IdRoli')
            ->add('IdOsoby');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('IdPracownika')
            ->add('PIN')
            ->add('IdRoli')
            ->add('IdOsoby')
            //         add custom action links
            ->add('_action','actions',array(
                'actions' =>array(
                    'edit' =>array(),
                )
            ));
    }

}