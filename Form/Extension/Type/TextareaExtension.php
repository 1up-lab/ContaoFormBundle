<?php

namespace Oneup\ContaoFormBundle\Form\Extension\Type;

use Oneup\ContaoFormBundle\Form\Extension\AbstractContaoFormExtension;
use Contao\BackendTemplate;
use Contao\Controller;
use Contao\CoreBundle\Framework\ContaoFrameworkInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

class TextareaExtension extends AbstractContaoFormExtension
{
    protected $framework;

    public function __construct(ContaoFrameworkInterface $framework)
    {
        $this->framework = $framework;
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        if (!isset($options['contao']['rte']) || !$options['contao']['rte']) {
            return;
        }

        $this->framework->initialize();

        Controller::setStaticUrls();

        $template = new BackendTemplate('be_tinyMCE');
        $template->selector = $view->vars['id'];

        $view->vars['tinyMCE_template'] = $template->parse();
    }

    public function getExtendedType()
    {
        return TextareaType::class;
    }

    protected function getType()
    {
        return 'textarea';
    }
}