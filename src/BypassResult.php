<?php

namespace Laxity7\DdosGuardBypass;

use Psr\Http\Message\ResponseInterface;

class BypassResult
{
    private bool $result;
    private ResponseInterface $response;

    public function __construct(bool $result, ResponseInterface $response)
    {
        $this->result = $result;
        $this->response = $response;
    }

    /**
     * Was it possible to bypass the protection?
     *
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->result;
    }

    /**
     * Get a last response.
     *
     * @return ResponseInterface
     */
    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }
}
