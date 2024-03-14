<?php

namespace App\Form;

use App\Entity\AgencesRoad;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AgencesRoadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Adresse')
            ->add('Contact')
            ->add('EPI')
            ->add('Regime')
            ->add('Renumeration')
            ->add('Lien')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AgencesRoad::class,
        ]);
    }
}
