<?php

namespace AppBundle\Form;

use AppBundle\Entity\Sanciones;
use AppBundle\Repository\SancionesRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SancionFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->choices = $options['compound'];

        $builder
            ->add('idAlumno', EntityType::class, array(
                'label' => 'Alumno',
                'class' => 'AppBundle:Alumno',
                'choices' => $this->choices[0],
                'choice_label' => function ($alumno) {
                    return $alumno->getNombreCompletoYCurso();
                },
                'attr' => array(
                    'class' => 'w3-select w3-border w3-light-grey chosen-select',
                    'id' => 'selectAlumno',
                    'data-placeholder' => 'Selecciona un alumno...',
                ),
                'label_attr' => array('class' => 'w3-text-teal')
            ))
//            ->add('Fecha', DateType::class, array(
//                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
//                'label_attr' => array('class' => 'w3-text-teal')
//            ))
            ->add('idTipo', EntityType::class, array(
                'class' => 'AppBundle:TipoSancion',
                'choices' => $this->choices[1],
                'choice_label' => function ($tipo) {
                    return $tipo->getTipo();
                },
                'attr' => array('class' => 'w3-select w3-border w3-light-grey marginBottom'),
                'label_attr' => array('class' => 'w3-text-teal')
            ))
//            ->add('FechaInicio', DateType::class, array(
//                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
//                'label_attr' => array('class' => 'w3-text-teal')
//            ))
//            ->add('FechaFinal', DateType::class, array(
//                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
//                'label_attr' => array('class' => 'w3-text-teal')
//            ))
            ->add('Sancion', TextType::class, array(
                'label' => 'Sanción',
                'attr' => array('class' => 'w3-input w3-border w3-light-grey'),
                'label_attr' => array('class' => 'w3-text-teal')
            ))
            ->add('Observaciones', TextareaType::class, array(
                'required' =>false,
                'empty_data' => '',
                'attr' => array('class' => 'w3-input w3-border w3-light-grey minTextArea'),
                'label_attr' => array('class' => 'w3-text-teal')
            ))
            ->add('Evaluacion', TextType::class, array(
                'required' =>false,
                'empty_data' => '',
                'label' => 'Evaluación',
                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
                'label_attr' => array('class' => 'w3-text-teal')
            ))
            ->add('fechaConfirmacion', TextType::class, array(
                'required' =>false,
                'attr' => array('class' => 'w3-select datepicker w3-border w3-light-grey'),
                'label_attr' => array('class' => 'w3-text-teal')
            ))
            ->add('fechaComunicacion', TextType::class, array(
                'required' =>false,
                'attr' => array('class' => 'w3-select datepicker w3-border w3-light-grey marginBottom'),
                'label_attr' => array('class' => 'w3-text-teal')
            ));
//            ->add('PuntosRecuperados', IntegerType::class, array(
//                'required' =>false,
//                'empty_data' => 0,
//                'label' => 'Puntos Recuperados',
//                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
//                'label_attr' => array('class' => 'w3-text-teal')
//            ));
//            ->add('idEstado', EntityType::class, array(
//                'class' => 'AppBundle:EstadosSancion',
//                'choice_label' => 'estado',
//                'attr' => array('class' => 'w3-select w3-border w3-light-grey'),
//                'label_attr' => array('class' => 'w3-text-teal')
//            ));
    }

    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault(array(
            'data_class' => Sanciones::class,
        ));
    }

}