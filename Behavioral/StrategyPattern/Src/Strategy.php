<?php
echo "<h1>Strategy Design Pattern</h1>";

interface  Logger
{
    public function log();
}

class DataBaseLogger implements Logger
{
    public function log()
    {
        echo "logging content to data base<br>";
    }
}

class FileLogger implements Logger
{
    public function log()
    {
        echo "logging content to file<br>";
    }
}

class LogManager
{
    /**
     * @var Logger
     */
    private $logger;

    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
        return $this;
    }

    public function log()
    {
        $this->logger->log();
    }
}

(new LogManager)->setLogger(new DataBaseLogger)->log();



