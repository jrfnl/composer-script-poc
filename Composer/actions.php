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

    public static function exit_two()
    {
        // Do something.
        exit( 2 );
    }

    public static function exit_more()
    {
        // Do something.
        exit( 137 );
    }

    public static function exit_variable()
    {
        @\passthru( "composer exit-two", $return );

        exit( $return );
    }


    public static function exit_two_no_const()
    {
        @\passthru( "composer exit-two-plus", $return );

        exit ( ( ( \defined( 'YOASTCS_ABOVE_THRESHOLD' ) && \YOASTCS_ABOVE_THRESHOLD === true ) || $return > 2 ) ? $return : 0 );
    }

    public static function exit_two_with_const()
    {
        @\passthru( "composer exit-two-set-const", $return );

        var_dump(\defined( 'YOASTCS_ABOVE_THRESHOLD' ));
        var_dump(\YOASTCS_ABOVE_THRESHOLD);

        exit ( ( ( \defined( 'YOASTCS_ABOVE_THRESHOLD' ) && \YOASTCS_ABOVE_THRESHOLD === true ) || $return > 2 ) ? $return : 0 );
    }

    public static function exit_more_no_const()
    {
        @\passthru( "composer exit-more", $return );

        exit ( ( ( \defined( 'YOASTCS_ABOVE_THRESHOLD' ) && \YOASTCS_ABOVE_THRESHOLD === true ) || $return > 2 ) ? $return : 0 );
    }

    public static function exit_two_set_const()
    {
        define( 'YOASTCS_ABOVE_THRESHOLD', true );

        exit( 2 );
    }

    public static function exit_two_no_env()
    {
        @\passthru( "composer exit-two-plus", $return );

        exit ( ( \getenv( 'YOASTCS_ABOVE_THRESHOLD' ) || $return > 2 ) ? $return : 0 );
    }

    public static function exit_two_with_env()
    {
        @\passthru( "composer exit-two-set-env", $return );

        var_dump(\getenv( 'YOASTCS_ABOVE_THRESHOLD' ));

        exit ( ( \getenv( 'YOASTCS_ABOVE_THRESHOLD' ) || $return > 2 ) ? $return : 0 );
    }

    public static function exit_more_no_env()
    {
        @\passthru( "composer exit-more", $return );

        exit ( ( \getenv( 'YOASTCS_ABOVE_THRESHOLD' ) || $return > 2 ) ? $return : 0 );
    }

    public static function exit_two_set_env()
    {
        putenv( 'YOASTCS_ABOVE_THRESHOLD=true' );

        exit( 2 );
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
