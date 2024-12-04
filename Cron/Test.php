<?php
namespace Magento\SampleMinimal\Cron;

use Psr\Log\LoggerInterface;

class Test {
    protected $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    /**
     * Write to system.log
     *
     * @return void
     */
    public function execute() {
        $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/dotdigital.log');
        $logger = new \Zend_Log();
        $logger->addWriter($writer);
        $logger->info('custom log');
    }
}
