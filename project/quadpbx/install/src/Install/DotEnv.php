<?php

namespace QuadPBX\Install;

use Exception;
use QuadPBX\Core\ConfBackup;
use QuadPBX\Core\Core;
use QuadPBX\Core\Models\QPBX;
use QuadPBX\Install\DotEnv\AppKey;
use Random\RandomException;

/** @package QuadPBX\Install */
class DotEnv
{
    private string $dotenv;
    private array $current;
    private array $backup = [];
    private QPBX $qpbx;

    /**
     * If we're given an existing QPBX object, use that
     *
     * @param null|QPBX $qpbx
     * @return void
     * @throws Exception
     */
    public function __construct(?QPBX $qpbx = null)
    {
        // If we were given a QPBX model, use that.
        if ($qpbx) {
            $this->qpbx = $qpbx;
            $this->dotenv = $qpbx->quadconf['dotenvpath'];
            $this->current = $qpbx->dotenv;
            return;
        }
        $projectdir = Core::getProjectDir();
        $this->dotenv = $projectdir . "/.env";
        $data = [
            "quadconf" => [
                "dotenvpath" => $this->dotenv,
            ],
        ];
        $this->qpbx = new QPBX($data);
        if (file_exists($this->dotenv)) {
            $this->current = parse_ini_file($this->dotenv, false, INI_SCANNER_RAW);
        } else {
            $this->current = parse_ini_file(__DIR__ . "/../../templates/dotenv.template", false, INI_SCANNER_RAW);
            $this->current['__DOTENV_REGENERATE'] = true;
            $this->backup = ConfBackup::findAndLoadBackup(false);
        }
        $this->qpbx->dotenv = $this->current;
    }

    /**
     * WARNING: HAS SIDE EFFECTS (Updates $this->qbx)
     *
     * Checks if anything needs to be udpated in dotenv, and
     * updates the model.
     *
     * @return boolean
     * @throws Exception
     * @throws RandomException
     */
    public function needsSaving(): bool
    {
        $update = false;
        $de = $this->qpbx->dotenv;
        if (isset($de['__DOTENV_REGENERATE'])) {
            $update = true;
            $debackup = $this->backup['dotenv'] ?? [];
            foreach ($debackup as $k => $v) {
                $this->qpbx->dotenv[$k] = $v;
            }
        }
        $ak = $this->qpbx->dotenv['APP_KEY'] ?? false;
        if (!$ak) {
            throw new \Exception("No appkey in dotenv??");
        }
        if (strpos($ak, 'base64') !== 0) {
            // Regenerate the app key, that's the important bit
            $update = true;
            $ak = (new AppKey())->generateRandomKey();
            $this->qpbx->dotenv['APP_KEY'] = $ak;
        }
        return $update;
    }

    /**
     * This is SUPER UNSAFE. It will clobber the conf backup
     * with whatever you hand it - even an empty qpbx object.
     *
     * Be careful
     *
     * @return string Location of .env
     */
    public function saveDotEnv(): string
    {
        $path = $this->qpbx->quadconf['dotenvpath'];
        $ini = $this->generateDotEnv() . "\n";
        file_put_contents($path, $ini);
        ConfBackup::saveConfBackup($this->qpbx);
        return $path;
    }

    /**
     * Generates the ini to save to .env. Probably unsafe.
     *
     * @return string
     */
    private function generateDotEnv(): string
    {
        $ini = [
            '; Generated from QPBX Version ' . Core::getQuadVersion(),
        ];
        $de = $this->qpbx->dotenv;
        foreach ($de as $k => $v) {
            if (strpos($k, '__') === 0) {
                continue;
            }
            if (strpos($k, '#') === 0) {
                continue;
            }
            // TODO: Should this be cleaned and escaped?
            // $cleaned = escapeshellcmd(preg_replace('/[^\x20-\x7E]/', '', $v));
            $cleaned = preg_replace('/[^\x20-\x7E]/', '', $v);
            $ini[] = "$k=$cleaned";
        }
        return join("\n", $ini);
    }
}
