<?php

declare(strict_types=1);

namespace Talib\PhpSmartSentry\Clients;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class TgClient
{
    private string $tgCode;
    private string $chatId;
    private string $sendMessageUrl = 'https://api.telegram.org/bot%s/sendMessage?chat_id=%s&text=%s';
    private Client $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @param  string  $tgCode
     * @return TgClient
     */
    public function setTgCode(string $tgCode): TgClient
    {
        $this->tgCode = $tgCode;

        return $this;
    }

    /**
     * @param  string  $chatId
     * @return TgClient
     */
    public function setChatId(string $chatId): TgClient
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * @param string $text
     * @return void
     */
    public function sendNotification(string $text): void
    {
        $url = sprintf(
            $this->sendMessageUrl,
            $this->tgCode,
            $this->chatId,
            $text,
        );

        try {
            $this->client->get($url);
        } catch (GuzzleException $exception) {
            error_log('Error send message');
        }
    }
}