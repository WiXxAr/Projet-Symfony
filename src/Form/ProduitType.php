<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Libelle')
            ->add('Prix')
            ->add('Description')
            ->add('QteStock')
            ->add('Image')
            ->add('Categorie', EntityType::class, array(
                'class' => 'App\Entity\Categorie',
                'choice_label'=>'libelle',
                'expanded'=>false,
                'multiple'=>false,
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
