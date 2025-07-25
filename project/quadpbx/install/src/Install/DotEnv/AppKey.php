<?php

namespace QuadPBX\Install\DotEnv;

use Illuminate\Encryption\Encrypter;
use Random\RandomException;

class AppKey
{
    /**
     * Generate a random app key, using the same code from Laravel
     * Framework
     *
     * @return string
     * @throws RandomException
     */
    public function generateRandomKey(): string
    {
        return 'base64:' . base64_encode(Encrypter::generateKey('AES-256-CBC'));
    }
}
