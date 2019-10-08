<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;
>>>>>>> 04d672c50e39fa270d202c42991c425ed25d5ae7

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
<<<<<<< HEAD
     * @var array|string
=======
     * @var array
>>>>>>> 04d672c50e39fa270d202c42991c425ed25d5ae7
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
