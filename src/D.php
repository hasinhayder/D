<?php
namespace HasinHayder\D;
class D {
    static $_bucket;
    static function echo ( ...$data ) {
        static::$_bucket[] = join( ",", $data );
    }

    static function print( $data ) {
        static::$_bucket[] = $data;
    }

    static function print_r( $data ) {
        static::$_bucket[] = print_r( $data, true );
    }

    static function printf( ...$data ) {
        static::$_bucket[] = sprintf( ...$data );
    }

    static function var_dump( $data ) {
        ob_start();
        var_dump( $data );
        static::$_bucket[] = ob_get_clean();
    }
    static function dump() {
        foreach ( static::$_bucket as $line ) {
            echo $line . "\n";
        }
    }
    static function dumpJSON() {
        echo json_encode( static::$_bucket );
    }
}