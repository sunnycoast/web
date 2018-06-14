<?php
/**
 * Created by PhpStorm.
 * User: Jonasz
 * Date: 2018-06-14
 * Time: 11:53
 */

namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PozycjaZamowieniaAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('IdZamowienia')
            ->add('IdPozycjiMenu')
            ->add('LiczbaProduktu')
            ->add('StanRealizacji');
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('IdZamowienia')
            ->add('IdPozycjiMenu')
            ->add('LiczbaProduktu')
            ->add('StanRealizacji');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('IdZamowienia')
            ->add('IdPozycjiMenu')
            ->add('LiczbaProduktu')
            ->add('StanRealizacji');
    }

}