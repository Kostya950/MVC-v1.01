<?php
/**
 * Created by PhpStorm.
 * User: kito
 * Date: 22.05.16
 * Time: 17:14
 */

 class PagesController extends Controller
 {

     public function __construct($data = array())
     {
         parent::__construct($data);
         $this->model = new Page();

     }

     public function index(){
        $this->data['pages'] = $this->model->getList();
     }

     public function view() {
         $params = App::getRouter()->getParams();

         if (isset($params[0])){
             $alias = strtolower($params[0]);
             $this->data['page'] = $this->model->getByAlias($alias);
         }
     }
 }