<?php
namespace  Prestashop\Module\kjmodulebedrock\Entity;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AvisProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('auteur', TextType::class)
            ->add('commentaire', TextareaType::class)
            ->add('dateAvis', DateTimeType::class)
            ->add('produit', EntityType::class, [
                'class' => 'PrestaShop\PrestaShop\Core\Product\Product',
                'choice_label' => 'name',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'kjmodulebedrock\src\Entity/avis.php',
        ]);
    }
}
