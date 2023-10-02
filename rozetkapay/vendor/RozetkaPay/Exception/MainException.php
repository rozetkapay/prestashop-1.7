<?php

namespace Payment\RozetkaPay\Exception;

use Exception;

abstract class MainException extends Exception
{
    private $rozetkapayCode;
    private $httpBody;
    private $json;
    private $requestId;

    public function __construct(
        $message,
        $httpStatus = null,
        $json = null
    )
    {
        $this->httpStatus = $httpStatus;
        $this->json = $json;
        $this->rozetkapayCode = isset($json["response"]["response_status"]) ? $message = $json["response"]["error_message"] . ".\n" . $message : null;
        $this->requestId = isset($json["response"]["request_id"]) ? $message .= ' Request ID: ' . $json["response"]["request_id"] . "\n" : null;
        parent::__construct($message);
    }

    public function getRozetkaPayCode()
    {
        return $this->rozetkapayCode;
    }

    public function getHttpBody()
    {
        return $this->httpBody;
    }

    public function getJsonBody()
    {
        return $this->json;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }
}