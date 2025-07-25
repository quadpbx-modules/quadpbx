<?php

namespace QuadPBX\Core;

use Exception;
use QuadPBX\Core\Models\QPBX;

/**
 * This should probably NOT be static, now I think about it.
 *
 * @package QuadPBX\Core
 */
class ConfBackup
{
    public static string $backupFile = "/etc/quadbackup.json";

    /**
     * Look for a backup file, and try to return it as an array
     *
     * @param bool $throwIfMissing
     * @param null|string $backupFile
     * @return array
     * @throws Exception
     */
    public static function findAndLoadBackup(bool $throwIfMissing = true, ?string $backupFile = null): array
    {
        if (!$backupFile) {
            $backupFile = self::$backupFile;
        }
        if (!file_exists($backupFile)) {
            if ($throwIfMissing) {
                throw new \Exception("Cannot load $backupFile, does not exist");
            }
            return [];
        }
        $j = json_decode(file_get_contents($backupFile), true);
        $dotenv = $j['dotenv'] ?? false;
        if (!$dotenv) {
            if ($throwIfMissing) {
                throw new \Exception("No 'dotenv' backup in $backupFile, can't load");
            }
            return [];
        }
        if (empty($dotenv['APP_KEY'])) {
            if ($throwIfMissing) {
                throw new \Exception("APP_KEY not present in dotenv from $backupFile, can't load");
            }
            return [];
        }
        return $j;
    }

    /**
     * This needs more work - currently just checks if it exists
     *
     * @param QPBX $q
     * @param null|string $backupFile
     * @return bool
     */
    public static function isConfBackupValid(QPBX $q, ?string $backupFile = null): bool
    {
        if (!$backupFile) {
            $backupFile = self::$backupFile;
        }
        if (!file_exists($backupFile)) {
            return false;
        }
        // TODO: Actually put more checks in here
        return true;
    }

    /**
     * Write the backup. Will most likely clobber something you don't want
     * clobbered. Maybe loadbackup above should merge into a QPBX object?
     *
     * @param QPBX $q
     * @param null|string $backupFile
     * @return string
     */
    public static function saveConfBackup(QPBX $q, ?string $backupFile = null): string
    {
        if (!$backupFile) {
            $backupFile = self::$backupFile;
        }
        file_put_contents($backupFile, json_encode($q));
        return $backupFile;
    }
}
