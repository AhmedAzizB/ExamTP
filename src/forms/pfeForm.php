<?php

namespace App\forms;

use App\Entity\PFE;
use App\Entity\Entreprise;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;

class pfeForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Student name')
            ->add('Title')
            ->add('designation', EntityType::class, [
                'required' => true,
                'class' => Entreprise::class,
                'attr' => [
                    'class' => 'select2'
                ]
            ]);
    }
}