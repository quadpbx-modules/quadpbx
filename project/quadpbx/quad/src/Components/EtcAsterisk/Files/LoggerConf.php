<?php

namespace QuadPBX\Components\EtcAsterisk\Files;

use QuadPBX\Components\EtcAsterisk\EtcAsterisk;
use QuadPBX\Interfaces\EtcAsteriskFile;

class LoggerConf extends EtcAsteriskFile
{
     // phpcs:ignore Generic.Commenting.DocComment.MissingShort
    /**
     * @inheritDoc
     *
     * phpcs:ignore Generic.Commenting.DocComment.ParamNotFirst
     * @param EtcAsterisk $e This is used to reference other objects.
     *
     * @return array
     */
    public function getOtherFiles(EtcAsterisk $e): array
    {
        $this->updateBeforeWrite();

        // We need to figure out where the logs are going to be written.
        $astconf = $e->getWriterByFile('asterisk.conf');
        $vals = $astconf->getParent()->getAsArray();
        $astlogdir = $vals['directories']['astlogdir'];

        $files = [];
        // Now, what log files are we going to write?
        $logfiles = $this->getAsArray()['logfiles'] ?? [];
        foreach (array_keys($logfiles) as $n) {
            if ($n === 'console') {
                continue;
            }
            $file = $astlogdir . '/' . $n;
            $files[$file] = [ 'type' => 'file', 'owner' => 'asterisk', 'mode' => 0644 ];
        }
        return $files;
    }
}
