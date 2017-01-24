<?php

namespace Oneup\ContaoFormBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\PropertyAccess\PropertyAccess;

abstract class AbstractContaoFormExtension extends AbstractTypeExtension
{
    abstract protected function getType();

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('contao', []);
        $resolver->setAllowedTypes('contao', 'array');
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['contao'] = $form->getConfig()->getOptions()['contao'];
        $view->vars['type'] = $this->getType();
    }
}