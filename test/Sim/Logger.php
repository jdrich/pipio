<?php

namespace Pipio\Test\Sim;

class Logger implements \Psr\Log\LoggerInterface {
    protected $log;

    public function __construct() {
        $this->log = [];
    }

    public function emergency($message, array $context = array()) {
        $this->log('emergency', $message, $context);
    }

    public function alert($message, array $context = array()) {
        $this->log('alert', $message, $context);
    }

    public function critical($message, array $context = array()) {
        $this->log('critical', $message, $context);
    }

    public function error($message, array $context = array()) {
        $this->log('error', $message, $context);
    }

    public function warning($message, array $context = array()) {
        $this->log('warning', $message, $context);
    }

    public function notice($message, array $context = array()) {
        $this->log('notice', $message, $context);
    }

    public function info($message, array $context = array()) {
        $this->log('info', $message, $context);
    }

    public function debug($message, array $context = array()) {
        $this->log('debug', $message, $context);
    }

    public function log($level, $message, array $context = array()) {
        $this->log[] = [$level, $message, $context];
    }

    public function getLog() {
        return $this->log;
    }

    public function getLastLog() {
        return $this->log[count($this->log) - 1];
    }
}
