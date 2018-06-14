<?php
/**
 * Created by PhpStorm.
 * User: Jonasz
 * Date: 2018-06-14
 * Time: 11:23
 */

namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class KategoriaAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('IdKategorii')
            ->add('NazwaKategorii')
            ->add('KolorKategorii');
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('IdKategorii')
            ->add('NazwaKategorii')
            ->add('KolorKategorii');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('IdKategorii')
            ->add('NazwaKategorii')
            ->add('KolorKategorii');
    }

}