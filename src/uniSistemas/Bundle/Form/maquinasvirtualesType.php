<?php

namespace uniSistemas\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class maquinasvirtualesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('iPVirtual')
            ->add('tareas')
            ->add('descripcion')
            ->add('maqhard')
            ->add('maqsoft')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uniSistemas\Bundle\Entity\maquinasvirtuales'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'unisistemas_bundle_maquinasvirtuales';
    }
}
