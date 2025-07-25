<?php

namespace QuadPBX\Install\DotEnv;

use Illuminate\Encryption\Encrypter;

class AppKey
{

    public function generateRandomKey(): string
    {
        return 'base64:' . base64_encode(Encrypter::generateKey('AES-256-CBC'));
    }
}
