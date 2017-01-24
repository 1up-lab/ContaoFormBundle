<?php

namespace Oneup\ContaoFormBundle\Form\Extension\Type;

use AppBundle\Form\Extension\AbstractContaoFormExtension;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class CheckboxExtension extends AbstractContaoFormExtension
{
    public function getExtendedType()
    {
        return CheckboxType::class;
    }

    public function getType()
    {
        return 'checkbox';
    }
}