<?php

namespace App\Services;

use App\Http\Controllers\API\V1\PostController as V1PostController;
use App\Http\Controllers\API\V2\PostController as V2PostController;
use App\Models\Post;

class Versioning
{
    
    /**
     * Display all posts or a specific post according to the address entered by the user
     * 
     * @param string $versionRoute for determine version of post or posts
     * @param object $post for determine one of post 
     * @return object post or all posts by json format
     */

        public static function showPost($versionRoute , $post){

            
            $apiNamespace= 'App\Http\Controllers\API\\';

            $apiPostControllerName= '\PostController';

            $class= $apiNamespace.$versionRoute.$apiPostControllerName;

            $obj= '';

            $dir = app_path('Http'.DIRECTORY_SEPARATOR.'Controllers'.DIRECTORY_SEPARATOR.'API');


            if(!empty($versionRoute) && class_exists($class)){
                
                $obj = new $class;

                if(empty($post)){

                    return $obj->index();

                }else{

                    if(method_exists($obj,'show')){

                       return $obj->show($post);

                    }else{

                        foreach(scandir($dir) as $subDirectory){

                            $class= $apiNamespace.$subDirectory.$apiPostControllerName;

                            if(class_exists($class) && method_exists($class,'show')){

                                $obj= new $class;
                                return $obj->show($post);
                                break;

                            }
                        }
                    }
                }
            }else{

                abort(404);

            }
        }
}
