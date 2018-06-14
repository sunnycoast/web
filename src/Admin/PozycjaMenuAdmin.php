<?php
/**
 * Created by PhpStorm.
 * User: Jonasz
 * Date: 2018-06-14
 * Time: 11:47
 */

namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PozycjaMenuAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('IdPozycjiMenu')
            ->add('CenaBrutto')
            ->add('DataWprowadzenia')
            ->add('DataWycofania')
            ->add('IdProduktu')
            ->add('IdVAT');
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('IdPozycjiMenu')
            ->add('CenaBrutto')
            ->add('DataWprowadzenia')
            ->add('DataWycofania')
            ->add('IdProduktu')
            ->add('IdVAT');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('IdPozycjiMenu')
            ->add('CenaBrutto')
            ->add('DataWprowadzenia')
            ->add('DataWycofania')
            ->add('IdProduktu')
            ->add('IdVAT');
    }

}