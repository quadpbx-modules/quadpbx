<?php

namespace QuadPBX\Components\DialplanObjects;

class BackgroundDetect extends BaseDialplanObject
{
    protected string $filename;
    protected string $silence;
    protected int $min;
        protected $max;

    public function __construct(string $filename, int $silence = 1000, int $min = 100, $max = 'infinity')
    {
            $this->filename = $filename;
            $this->silence = $silence;
            $this->min = $min;
            $this->max = $max;
    }
    public function output(): string
    {
            $params = [
                    $this->filename,
                    $this->silence,
                    $this->min,
                    $this->max
            ];
            return 'BackgroundDetect(' . trim(join(',', $params), ',') . ")";
    }
}
