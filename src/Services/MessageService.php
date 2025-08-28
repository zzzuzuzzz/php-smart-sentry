<?php

declare(strict_types=1);

namespace Talib\PhpSmartSentry\Services;

use Talib\PhpSmartSentry\Clients\TgClient;
use Talib\PhpSmartSentry\Contracts\Services\MessageServiceContract;

class MessageService implements MessageServiceContract
{

    /**
     * @param  TgClient  $client
     * @param  string  $text
     * @return bool
     */
    public function sendMessage(
        TgClient $client,
        string $text
    ): bool {
        if (empty($text)) {
            return false;
        }

        $client->sendNotification($text);

        return true;
    }
}