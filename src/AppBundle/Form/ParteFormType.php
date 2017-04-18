<?php

namespace AppBundle\Form;

use AppBundle\Entity\Partes;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParteFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder->add('Fecha', DateType::class, array(
           'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
           'label_attr' => array('class' => 'w3-text-teal')
           ))
           ->add('Descripcion', TextType::class, array(
               'label' => 'Descripción',
               'attr' => array('class' => 'w3-input w3-border w3-light-grey'),
               'label_attr' => array('class' => 'w3-text-teal')
           ))
           ->add('Tareas', TextType::class, array(
               'label' => 'Tareas',
               'attr' => array('class' => 'w3-input w3-border w3-light-grey'),
               'label_attr' => array('class' => 'w3-text-teal')
           ))
           ->add('HoraSalidaAula', TimeType::class, array(
               'label' => 'Hora Salida Aula',
               'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
               'label_attr' => array('class' => 'w3-text-teal')
           ))
           ->add('HoraLlegadaJefatura', TimeType::class, array(
               'label' => 'Hora Llegada Jefatura',
               'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
               'label_attr' => array('class' => 'w3-text-teal')
           ))
           ->add('Formato', ChoiceType::class, array(
               'choices' => array(
                   'Papel' => 'Papel',
                   'Digital' => 'Digital'
               ),
               'attr' => array('class' => 'w3-input w3-border w3-light-grey'),
               'label_attr' => array('class' => 'w3-text-teal')
           ))
           ->add('Observacion', TextType::class, array(
               'label' => 'Observación',
               'attr' => array('class' => 'w3-input w3-border w3-light-grey'),
               'label_attr' => array('class' => 'w3-text-teal')
           ))
           ->add('Puntos', IntegerType::class, array(
               'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
               'label_attr' => array('class' => 'w3-text-teal')
           ))
           ->add('idEstado', EntityType::class, array(
               'class' => 'AppBundle:EstadosParte',
               'choice_label' => 'estado',
               'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
               'label_attr' => array('class' => 'w3-text-teal')
           ))
           ->add('idTipo', EntityType::class, array(
               'class' => 'AppBundle:TipoParte',
               'choice_label' => 'tipo',
               'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
               'label_attr' => array('class' => 'w3-text-teal')
           ))
           ->add('idAlumno', EntityType::class, array(
               'class' => 'AppBundle:Alumno',
               'choice_label' => 'nombre',
               'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
               'label_attr' => array('class' => 'w3-text-teal')
           ))
           ->add('idProfesor', EntityType::class, array(
               'class' => 'AppBundle:Profesores',
               'choice_label' => 'nombre',
               'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
               'label_attr' => array('class' => 'w3-text-teal')
           ))
           ->add('idSancion', EntityType::class, array(
               'class' => 'AppBundle:Sanciones',
               'choice_label' => 'sancion',
               'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
               'label_attr' => array('class' => 'w3-text-teal')
           ));
    }

    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault(array(
            'data_class' => Partes::class,
        ));

    }
}