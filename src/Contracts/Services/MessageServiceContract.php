<?php

declare(strict_types=1);

namespace Talib\PhpSmartSentry\Contracts\Services;

use Talib\PhpSmartSentry\Clients\TgClient;

interface MessageServiceContract
{
    public function sendMessage(TgClient $client, string $text): bool;
}