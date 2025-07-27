<?php

namespace QuadPBX\Components\ExtensionsConf;

class ExecIf extends ExtBase
{
    protected $expr;
    protected $app_true;
    protected $data_true;
    protected $app_false;
    protected $data_false;

    public function __construct($expr, $app_true, $data_true = '', $app_false = '', $data_false = '')
    {
        $this->expr = $expr;
        $this->app_true = $app_true;
        $this->data_true = $data_true;
        $this->app_false = $app_false;
        $this->data_false = $data_false;
    }

    public function output(): string
    {
        if ($this->app_false != '') {
            return "ExecIf({$this->expr}?{$this->app_true}({$this->data_true}):{$this->app_false}({$this->data_false}))";
        } else {
            return "ExecIf({$this->expr}?{$this->app_true}({$this->data_true}))";
        }
    }
}
