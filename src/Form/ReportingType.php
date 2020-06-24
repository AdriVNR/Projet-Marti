<?php

namespace App\Form;

use App\Entity\Reporting;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\Response;
use App\Entity\Patient;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Question ;


class ReportingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('value', TextType::class)
            ->add('question', EntityType::class, [
                'class' => Question::class,
                'choice_label' => 'code'
            ])
            ->add('patient', EntityType::class, [
                'class' => Patient::class,
                'choice_label' => 'name',
                'choice_label' => 'age'
            ])
            ->add('response', EntityType::class, [
            'class' => Response::class,
            'choice_label' => 'code'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reporting::class,
        ]);
    }
}
