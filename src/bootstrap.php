<?php declare(strict_types=1);

use Berry\Htmx\BerryHtmx;

(function () {
    static $initialized = false;

    if ($initialized) {
        return;
    }

    BerryHtmx::install();

    $initialized = true;
})();
