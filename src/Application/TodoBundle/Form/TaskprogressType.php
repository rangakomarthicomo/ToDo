<?php

namespace Application\TodoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TaskprogressType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('task','entity',array(
                'class' => 'ApplicationTodoBundle:Task',
                'property' => 'name','attr' => array('class'=> 'task')))
                 
            ->add('estimateddays')
            ->add('completeddays')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Application\TodoBundle\Entity\Taskprogress'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'application_todobundle_taskprogress';
    }
}
