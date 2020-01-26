<?php

namespace Kanboard\Plugin\RaBe;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->setContentSecurityPolicy(
              array(
                'default-src' => "'self'",
                'style-src' => "'self' fonts.googleapis.com 'unsafe-inline'",
                'font-src' => "'self' fonts.gstatic.com",
                'img-src' => '* data:'
            )
        );

        $this->hook->on('template:layout:css', array('template' => 'plugins/RaBe/Asset/rabe-theme.css'));
    }

    public function getPluginName()
    {
        return 'RaBe Theme';
    }

    public function getPluginAuthor()
    {
        return 'Lucas Bickel';
    }

    public function getPluginVersion()
    {
        return '0.1.0';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.37';
    }
}
