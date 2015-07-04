<?php
/**
 * Created by PhpStorm.
 * User: ET
 * Date: 6/16/2015
 * Time: 6:09 PM
 *
 * This simple class will allow you to say Hello, world! in different languages
 * through the magic of objects! (Okay, so it’s completely unnecessary,
 * but it’s a fine introductory demonstration.)
 */

class HelloWorld {

        // This method prints a greeting.
        // It takes one argument: the language to use.
        // Default language is english.
        function sayHello($language = 'English'){
            echo '<p>';

            switch($language){
                case 'Dutch':
                    echo 'Hallo, wereld!';
                    break;
                case 'French':
                    echo 'Bonjour, monde!';
                    break;
                case 'Italian':
                    echo 'Ciao, mondo!';
                    break;
                case 'Spanish':
                    echo 'Hola, mundo!';
                    break;
                case 'English':
                    echo 'Hello, world!';
                    break;
            } // End of switch.

            echo '</p>';
        } // end sayHello method
} // End of HelloWorld class.