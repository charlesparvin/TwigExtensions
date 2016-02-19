<?php

namespace AppBundle\Twig\Extension;

class HtmlEntitiesDecodeExtension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'html_entities_decode_extension';
    }

    public function getFilters()
    {
        return array(new \Twig_SimpleFilter('htmldecode', array($this, 'htmldecode')));
    }

    public function htmldecode($value)
    {
        return html_entity_decode($value);
    }
}
