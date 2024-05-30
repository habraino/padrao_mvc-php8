<?php

namespace app\routes;

class Routes {

    public static function get() {
        return [
            'get' => [
                '/' => 'IndexController@index',
                '/login'=> 'LoginController@index',
                
            ],
            'post' => [
              
          ]
        ];
    }
}
?>
