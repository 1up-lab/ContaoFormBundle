<?php

namespace Oneup\ContaoFormBundle\Form\Extension\Type;

use Oneup\ContaoFormBundle\Form\Extension\AbstractContaoFormExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ChoiceExtension extends AbstractContaoFormExtension
{
    public function getExtendedType()
    {
        return ChoiceType::class;
    }

    protected function getType()
    {
        return 'choice';
    }
}