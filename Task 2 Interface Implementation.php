<?php

// Logging interface
interface Logger {
    public function log($message);
}

// File logger implementation
class FileLogger implements Logger {
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function log($message) {
        $formattedMessage = "[" . date('Y-m-d H:i:s') . "] " . $message . PHP_EOL;
        file_put_contents($this->filename, $formattedMessage, FILE_APPEND);
    }
}

// Console logger implementation
class ConsoleLogger implements Logger {
    public function log($message) {
        echo "[" . date('Y-m-d H:i:s') . "] " . $message . PHP_EOL;
    }
}

// Usage
$fileLogger = new FileLogger("log.txt");
$consoleLogger = new ConsoleLogger();

$fileLogger->log("This message will be logged to a file.");
$consoleLogger->log("This message will be logged to the console.");

?>
