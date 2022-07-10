<?php

namespace Yama\MywaapiPhpLib;

class Mywaapi
{
    var string $url;

    function __construct(string $url)
    {
        $this->url = $url;
    }

    private function curl($path, $array = null)
    {
        $urlPath = (substr($this->url, -1) == '/' ? $this->url : $this->url . '/') . $path;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $urlPath,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $array,
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    public function sendMessage(string $number, string $message): string
    {
        return $this->curl('send-message', ['number' => $number, 'message' => $message]);
    }

    public function info(): string
    {
        return $this->curl('info');
    }

    public function isRegistered(string $number): string
    {
        return $this->curl('is-registered', ['number' => $number]);
    }

    public function setWebhook(string $url): string
    {
        return $this->curl('set-webhook', ['url' => $url]);
    }

    public function getWebhook(): string
    {
        return $this->curl('get-webhook');
    }

    public function sendMedia(string $numberOrGroupId, string $caption, string $file): string
    {
        return $this->curl('send-media', ['number' => $numberOrGroupId, 'caption' => $caption, 'file' => $file]);
    }

    public function sendGroupMessage(string $groupId, string $message): string
    {
        return $this->curl('send-group-message', ['id' => $groupId, 'message' => $message]);
    }

    public function clearMessage(string $numberOrGroupId): string
    {
        return $this->curl('clear-message', ['number' => $numberOrGroupId]);
    }

    public function deleteChat(string $numberOrGroupId): string
    {
        return $this->curl('delete-chat', ['number' => $numberOrGroupId]);
    }
}
