<?php
/**
 * Created by PhpStorm.
 * User: Jonasz
 * Date: 2018-06-14
 * Time: 12:13
 */

namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class RolaAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('IdRoli')
            ->add('NazwaRoli')
            ->add('OpisRoli');
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('IdRoli')
            ->add('NazwaRoli')
            ->add('OpisRoli');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('IdRoli')
            ->add('NazwaRoli')
            ->add('OpisRoli');
    }

}