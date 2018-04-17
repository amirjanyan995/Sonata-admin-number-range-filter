<?php
/*
 *
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class NumberRangeType
 * @package AppBundle\Form
 */
class NumberRangeType extends AbstractType
{

    /**
     * {@inheritDoc}
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('start', null, [
            'required' => false,
            'label' => 'Start'
        ]);
        $builder->add('end', null, [
            'required' => false,
            'label' => 'End'
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'field_options'    => array(),
            'field_type'       => 'text',
        ));
    }


    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'number_range';
    }
}
