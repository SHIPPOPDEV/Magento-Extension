<?php

namespace Shippop\Ecommerce\Ui\Component;

class ExportButton extends \Magento\Ui\Component\ExportButton
{
    public function prepare()
    {
        $config = $this->getConfig();
        $options = $config['options'];

        // if (!array_key_exists('xml', $options)) {
        //     parent::prepare();
        //     return;
        // }
        unset($options['xml']);
        unset($options['cvs']);
        // echo "<pre>";
        // print_r( $options );
        // die;

        $config['options'] = $options;
        $this->setConfig($config);
        parent::prepare();
    }
}
