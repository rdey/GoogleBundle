<?php

namespace AntiMattr\GoogleBundle\Extension;

use AntiMattr\GoogleBundle\Analytics;

class AnalyticsExtension extends \Twig_Extension implements \Twig_Extension_GlobalsInterface
{
    private $analytics;

    public function __construct(Analytics $analytics)
    {
        $this->analytics = $analytics;
    }

    public function getGlobals()
    {
        return array(
            'google_analytics' => $this->analytics
        );
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'google_analytics';
    }
}
