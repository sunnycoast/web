<?php
/**
 * Created by PhpStorm.
 * User: Jonasz
 * Date: 2018-06-14
 * Time: 11:36
 */

namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ObslugaAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('IdRachunku')
            ->add('IdPracownika')
            ->add('DataOtwarcia');
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('IdRachunku')
            ->add('IdPracownika')
            ->add('DataOtwarcia');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('IdRachunku')
            ->add('IdPracownika')
            ->add('DataOtwarcia')
            //         add custom action links
            ->add('_action','actions',array(
                'actions' =>array(
                    'edit' =>array(),
                )
            ));
    }

}