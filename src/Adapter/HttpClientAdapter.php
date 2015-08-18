<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Retrofit\Adapter;

use Tebru\Retrofit\Adapter\Http\Response;

/**
 * Interface HttpClientAdapter
 *
 * @author Nate Brunette <n@tebru.net>
 */
interface HttpClientAdapter
{
    /**
     * Make a request
     *
     * @param string $method
     * @param string $uri
     * @param array $headers
     * @param string $body
     * @return Response
     */
    public function send($method, $uri, array $headers = [], $body = null);
}