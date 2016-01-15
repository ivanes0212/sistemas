<?php

namespace uniSistemas\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class sistemasType extends AbstractType
{

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uniSistemas\Bundle\Entity\sistemas'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'unisistemas_bundle_sistemas';
    }
}
