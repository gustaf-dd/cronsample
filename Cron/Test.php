<?php
namespace Magento\SampleMinimal\Cron;

use \Magento\SampleMinimal\Logger\Logger;

class Test {
    protected $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    /**
     * Write to system.log
     *
     * @return void
     */
    public function execute() {
        $this->logger->info('Cron Works with ConnectorLogHandler');
        /*
        $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/dotdigital.log');
        $logger = new \Zend_Log();
        $logger->addWriter($writer);
        $logger->info('custom log');
        */
    }
}
