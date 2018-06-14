<?php
/**
 * Created by PhpStorm.
 * User: Jonasz
 * Date: 2018-06-14
 * Time: 11:58
 */

namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ProduktAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('NazwaProduktu')
            ->add('Przepis')
            ->add('Opis')
            ->add('IdKategorii');
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('IdProduktu')
            ->add('NazwaProduktu')
            ->add('Przepis')
            ->add('Opis')
            ->add('IdKategorii');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('IdProduktu')
            ->add('NazwaProduktu')
            ->add('Przepis')
            ->add('Opis')
            ->add('IdKategorii')
            //         add custom action links
            ->add('_action','actions',array(
                'actions' =>array(
                    'edit' =>array(),
                )
            ));
    }

}