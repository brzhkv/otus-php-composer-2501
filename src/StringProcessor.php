<?php declare(strict_types = 1);

namespace Brzhkv\OtusPhpComposer2501;

class StringProcessor
{
    public function getLength(string $s): int
    {
        return mb_strlen($s);
    }
}
