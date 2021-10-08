<?php

namespace Jrfnl\Composer;

/**
 * Class to handle Composer actions and events.
 */
class Actions {

    public static function exit_zero()
    {
        // Do something.
        exit( 0 );
    }

    public static function exit_one()
    {
        // Do something.
        exit( 1 );
    }

    public static function exit_more()
    {
        // Do something.
        exit( 137 );
    }

    public static function return_zero()
    {
        // Do something.
        return 0;
    }

    public static function return_one()
    {
        // Do something.
        return 1;
    }

    public static function return_more()
    {
        // Do something.
        return 121;
    }
}
