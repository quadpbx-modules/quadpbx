<?php

namespace QuadPBX\Interfaces;

use QuadPBX\Components\EtcAsterisk\EtcAsterisk;
use QuadPBX\Interfaces\EtcAsteriskFile;

abstract class AbstractWriterInterface
{
    /**
     * The destination file path where the output will be written.
     *
     * @var string
     */
    private string $destfile;

    /**
     * The EtcAsteriskFile object that will generate the content.
     *
     * @var EtcAsteriskFile
     */
    private EtcAsteriskFile $file;

    /**
     * Constructor
     *
     * @param EtcAsteriskFile $d        The EtcAsteriskFile object.
     * @param string          $destfile The destination file path.
     */
    public function __construct(EtcAsteriskFile $d, string $destfile)
    {
        $this->file = $d;
        $this->destfile = $destfile;
    }

    /**
     * Get the parent EtcAsteriskFile object.
     *
     * @return EtcAsteriskFile
     */
    public function getParent(): EtcAsteriskFile
    {
        return $this->file;
    }

    /**
     * Get related files for this writer. Used to check if files this
     * object will use exist, and can be used to create them. Should
     * be called before write() to check everything.
     *
     * @param EtcAsterisk $e Parent
     *
     * @return array
     */
    public function getRelatedFiles(EtcAsterisk $e): array
    {
        return $this->file->getOtherFiles($e);
    }

    /**
     * Generate and write the output to the destination file.
     *
     * @return void
     */
    public function write()
    {
        echo "Writing to " . $this->destfile . "\n";
        $output = $this->file->generateOutput();
        file_put_contents($this->destfile, $output);
        // This is certainly wrong.
        chmod($this->destfile, 0777);
    }
}
