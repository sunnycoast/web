<?php
/**
 * Created by PhpStorm.
 * User: Jonasz
 * Date: 2018-06-14
 * Time: 12:21
 */

namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class StolikAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('id')
            ->add('NazwaStolika')
            ->add('KodStolika')
            ->add('LiczbaMiejsc')
            ->add('Zajety')
            ->add('IdSektora');
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('IdStolika')
            ->add('NazwaStolika')
            ->add('KodStolika')
            ->add('LiczbaMiejsc')
            ->add('Zajety')
            ->add('IdSektora');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('IdStolika')
            ->add('NazwaStolika')
            ->add('KodStolika')
            ->add('LiczbaMiejsc')
            ->add('Zajety')
            ->add('IdSektora');
    }

}