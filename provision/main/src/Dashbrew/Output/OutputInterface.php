<?php

namespace Dashbrew\Output;

/**
 * Output Interface.
 *
 * @package Dashbrew\Output
 */
interface OutputInterface extends \Symfony\Component\Console\Output\ConsoleOutputInterface {

    const PREFIX_INFO   = "Info";
    const PREFIX_DEBUG  = "Debug";
    const PREFIX_ERROR  = "Error";

    /**
     * @param string $message
     */
    public function writeInfo($message);

    /**
     * @param string $message
     */
    public function writeDebug($message);

    /**
     * @param string $message
     */
    public function writeError($message);

}