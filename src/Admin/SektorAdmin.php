<?php
/**
 * Created by PhpStorm.
 * User: Jonasz
 * Date: 2018-06-14
 * Time: 12:16
 */

namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class SektorAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('NazwaSektora')
            ->add('Aktywny');
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('IdSektora')
            ->add('NazwaSektora')
            ->add('Aktywny');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('IdSektora')
            ->add('NazwaSektora')
            ->add('Aktywny')
            //         add custom action links
            ->add('_action','actions',array(
                'actions' =>array(
                    'edit' =>array(),
                )
            ));
    }

}