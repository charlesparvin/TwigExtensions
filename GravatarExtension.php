<?php

namespace AppBundle\Twig\Extension;

class GravatarExtension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'gravatar_extension';
    }

    public function getFilters()
    {
        return array(new \Twig_SimpleFilter('gravatar', array($this, 'getGravatar')));
    }

    public function getGravatar($email, $size = 64, $defaultImage = '', $rating = 'G')
    {
        return  $grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $defaultImage ) . "&s=" . $size . '&r=' . $rating;
    }
}
