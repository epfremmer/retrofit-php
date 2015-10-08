<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Retrofit\Test\Mock\Service;

use Tebru\Retrofit\Annotation as Rest;
use Tebru\Retrofit\Http\AsyncAware;
use Tebru\Retrofit\Http\Callback;

/**
 * Interface MockServiceBaseUrl
 *
 * @author Nate Brunette <n@tebru.net>
 */
interface MockServiceAsync extends AsyncAware
{
    /**
     * @Rest\GET("/get")
     */
    public function asyncOptional(Callback $callback = null);

    /**
     * @Rest\GET("/get")
     */
    public function asyncNotOptional(Callback $callback);
}
