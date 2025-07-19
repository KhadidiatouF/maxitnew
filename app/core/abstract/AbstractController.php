<?php
namespace App\Core\Abstract;

use App\Core\App;
use App\Core\Session;

abstract class AbstractController {
    protected ?Session $session = null;

    protected string $layout = 'base.layout.php';

    public function __construct()
    {
        // $this->session= Session::getInstance();
        $this->session= App::getDependencie('session');
    }

    abstract public function index();
    abstract public function create();
    abstract public function show();




    public function renderHtml($view, $data=[]){
        extract($data);

        ob_start();

        require_once '../templates/'.$view;
        $containeForLayout = ob_get_clean();

       require_once "../templates/layout/".$this->layout;
    }


}