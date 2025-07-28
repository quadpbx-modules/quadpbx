<?php

namespace QuadPBX\Components\DialplanObjects;

class MixMonitor extends BaseDialplanObject
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
