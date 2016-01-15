<?php

namespace uniSistemas\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class hardwareType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('iPReal')
            ->add('memoria')
            ->add('disco')
            ->add('cPU')
            ->add('hardmaqs')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uniSistemas\Bundle\Entity\hardware'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'unisistemas_bundle_hardware';
    }
}
