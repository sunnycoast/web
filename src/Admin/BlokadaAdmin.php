<?php
/**
 * Created by PhpStorm.
 * User: Jonasz
 * Date: 2018-06-14
 * Time: 10:59
 */

namespace App\Admin;


use App\Entity\PozycjaMenu;
use App\Entity\Pracownik;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class BlokadaAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->add('DataWprowadzenia')
            ->add('DataWycofania')
            ->add('Powod')
            ->add('IdPozycjiMenu', EntityType::class,[
                'class' => PozycjaMenu::class,
                'choice_label' =>'IdPozycjiMenu',
            ])
            ->add('IdPracownika');
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('IdBlokady')
            ->add('DataWprowadzenia')
            ->add('DataWycofania')
            ->add('Powod')
            ->add('IdPozycjiMenu')
            ->add('IdPracownika');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
            ->addIdentifier('IdBlokady')
            ->add('DataWprowadzenia')
            ->add('DataWycofania')
            ->add('Powod')
            ->add('IdPozycjiMenu')
            ->add('IdPracownika')
//         add custom action links
            ->add('_action','actions',array(
                'actions' =>array(
                    'edit' =>array()
                )
            ));

    }


}