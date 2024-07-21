<?php

namespace Laxity7\DdosGuardBypass;

use GuzzleHttp\Cookie\SetCookie;

class BypassConfig
{
    /**
     * Path to the file where cookies will be stored. If null, cookies will be stored in memory.
     * If the file does not exist, it will be created.
     */
    public ?string $cookiesFile = null;
    /**
     * Cookies that will be sent with each request.
     * If cookiesFile is set, these cookies will be saved to the file.
     * If cookiesFile is not set, these cookies will be sent with each request.
     * @var SetCookie[] $cookies
     */
    public array $cookies = [];
    /**
     * Headers that will be sent with each request.
     * @var array<string, string> $headers
     */
    public array $headers = [];
}
