<?php

namespace QuadPBX\Components\ExtensionsConf;

class MixMonitor extends ExtBase
{
    protected string $postcommand;

    public function __construct(string $file, string $options = "", string $postcommand = "")
    {
        $this->data = $file;
        $this->options = $options;
        $this->postcommand = $postcommand;
    }

    public function output(): string
    {
        return "MixMonitor(" . $this->data . "," . $this->options . "," . $this->postcommand . ")";
    }
}
