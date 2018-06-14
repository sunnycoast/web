<?php
/**
 * Created by PhpStorm.
 * User: Jonasz
 * Date: 2018-06-14
 * Time: 12:26
 */

namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class VatAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('IdVAT')
            ->add('StawkaVAT')
            ->add('Dotyczy');
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('IdVAT')
            ->add('StawkaVAT')
            ->add('Dotyczy');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('IdVAT')
            ->add('StawkaVAT')
            ->add('Dotyczy');
    }

}