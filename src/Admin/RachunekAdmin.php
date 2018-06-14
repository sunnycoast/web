<?php
/**
 * Created by PhpStorm.
 * User: Jonasz
 * Date: 2018-06-14
 * Time: 12:04
 */

namespace App\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class RachunekAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('IdRachunku')
            ->add('NaImie')
            ->add('LiczbaOsob')
            ->add('DataOtwarcia')
            ->add('Platnosc')
            ->add('DataZamkniecia')
            ->add('Znizka')
            ->add('UwagiPracownika')
            ->add('UwagiGoscia')
            ->add('IdStolika')
            ->add('IdStalegoKlienta');

    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('IdRachunku')
            ->add('NaImie')
            ->add('LiczbaOsob')
            ->add('DataOtwarcia')
            ->add('Platnosc')
            ->add('DataZamkniecia')
            ->add('Znizka')
            ->add('UwagiPracownika')
            ->add('UwagiGoscia')
            ->add('IdStolika')
            ->add('IdStalegoKlienta');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('IdRachunku')
            ->add('NaImie')
            ->add('LiczbaOsob')
            ->add('DataOtwarcia')
            ->add('Platnosc')
            ->add('DataZamkniecia')
            ->add('Znizka')
            ->add('UwagiPracownika')
            ->add('UwagiGoscia')
            ->add('IdStolika')
            ->add('IdStalegoKlienta')
            //         add custom action links
            ->add('_action','actions',array(
                'actions' =>array(
                    'edit' =>array(),
                )
            ));
    }

}