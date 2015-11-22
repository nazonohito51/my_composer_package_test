<?php
require_once __DIR__ . '/../vendor/autoload.php';

class AccessLaravelTest
{
    public static function var_dump_all()
    {
        $dsn = 'mysqli://root:ahoaho5151@localhost/laravel_test_local';
        $db =& DB::connect($dsn);
        var_dump($db);

        if (PEAR::isError($db)) {
            echo $db->getMessage();
        }
    }
}
