<?php
/**
 * Created by PhpStorm.
 * User: kito
 * Date: 22.05.16
 * Time: 20:25
 */

class ContactsController extends Controller
{

    public function __construct($data=array())
    {
        parent::__construct($data);
        $this->model = new Message();
    }

    public function index()
    {
      if ($_POST) {
          if ($this->model->save($_POST)) {
              Session::setFlash('Than you! Your message was sent successfully');
          }
      }
    }
}