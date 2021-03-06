<?php

namespace PhpHttpRpc\HTTP\Core\Exception;

use Psr\Http\Message\RequestInterface;
use PhpHttpRpc\HTTP\API\Exception\RequestException as RequestExceptionInterface;

/**
 * Exception for when a request failed.
 *
 * Examples:
 *      - Request is invalid (eg. method is missing)
 *      - Runtime request errors (like the body stream is not seekable)
 *
 * @todo implement the corresponding HTTP-Client exception interface when it will exist (and we move to php7 as requirement)
 */
class RequestException extends \Exception implements RequestExceptionInterface
{
    /**
     * Returns the request.
     *
     * The request object MAY be a different object from the one passed to HttpClient::sendRequest()
     *
     * @return RequestInterface
     */
    public function getRequest()
    {
        /// @todo
    }
}
