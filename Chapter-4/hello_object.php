<!doctype html>
<!--
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 6/16/2015
 * Time: 6:22 PM
 */
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hello, World!</title>
    </head>
    <body>
        <?php
            function __autoload($class){
                require($class . '.php');
            }

            $obj = new HelloWorld();

            $obj->sayHello();
            $obj->sayHello('Italian');
            $obj->sayHello('Dutch');
            $obj->sayHello('French');

            unset($obj);
        ?>
    </body>
</html>
