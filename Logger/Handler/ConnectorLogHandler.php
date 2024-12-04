<?php

namespace Magento\SampleMinimal\Logger\Handler;

use Monolog\Logger;

class ConnectorLogHandler extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * @var int
     */
    protected $loggerType = Logger::DEBUG;

    /**
     * @var string
     */
    protected $fileName = '/var/log/dotdigital.log';
}
