<?php

namespace PhpHttpRpc\API;

interface Response
{
    /**
     * Returns the error code of the response.
     *
     * @return integer the error code of this response (0 for not-error responses)
     */
    public function faultCode();

    /**
     * Returns the error code of the response.
     *
     * @return string the error string of this response ('' for not-error responses)
     */
    public function faultString();

    /**
     * Returns the value received by the server. If the Response's faultCode is non-zero then the value returned by this
     * method should not be used (it may not even be an object).
     *
     * @return Value|string|mixed the Value object returned by the server. Might be an xml/json/... string or plain php value
     *                            depending on the convention adopted when creating the Response
     */
    public function value();
}