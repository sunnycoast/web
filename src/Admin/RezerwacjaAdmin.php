<?php
/**
 * Created by PhpStorm.
 * User: Jonasz
 * Date: 2018-06-14
 * Time: 12:09
 */

namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class RezerwacjaAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('IdRezerwacji')
            ->add('DataRezerwacji')
            ->add('StolikWybrany')
            ->add('IdRachunku')
            ->add('IdStalegoKlienta');

    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('IdRezerwacji')
            ->add('DataRezerwacji')
            ->add('StolikWybrany')
            ->add('IdRachunku')
            ->add('IdStalegoKlienta');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('IdRezerwacji')
            ->add('DataRezerwacji')
            ->add('StolikWybrany')
            ->add('IdRachunku')
            ->add('IdStalegoKlienta');
    }


}