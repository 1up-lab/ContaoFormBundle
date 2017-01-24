<?php

namespace Oneup\ContaoFormBundle\Form\Extension\Type;

use Oneup\ContaoFormBundle\Form\Extension\AbstractContaoFormExtension;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TextExtension extends AbstractContaoFormExtension
{
    public function getExtendedType()
    {
        return TextType::class;
    }

    protected function getType()
    {
        return 'text';
    }
}