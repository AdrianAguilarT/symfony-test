<?php

namespace App\Form;

use App\Entity\FizzBuzz;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FizzBuzzType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('initNumber', NumberType::class, [
                'label' => 'Número Inicial'
            ])
            ->add('endNumber', NumberType::class, [
                'label' => 'Número Final'
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Enviar'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FizzBuzz::class,
        ]);
    }
}