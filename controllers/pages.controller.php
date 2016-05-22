<?php
/**
 * Created by PhpStorm.
 * User: kito
 * Date: 22.05.16
 * Time: 17:14
 */

 class PagesController extends Controller
 {
     public function index(){
         echo 'Here will be a pages list';
     }

     public function view() {
         $params = App::getRouter()->getParams();

         if (isset($params[0])){
             $alias = strtolower($params[0]);
             echo "Here will be a page with '{$alias}' alias";
         }
     }
 }