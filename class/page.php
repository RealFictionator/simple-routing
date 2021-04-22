<?php
class Page {
    public $pageName = "";
    public $pagePath = "";
    function __construct() {
        $this->pageName = '';
        $this->pagePath = '';
    }
    public function getPage($routingList,$page){
        foreach ($routingList as $folder) {
            if(in_array($page,$folder)) {
                $this->pageName = $folder[1];
                $this->pagePath = 'views/'.$folder[0].$folder[1].'/'.$folder[1].'.php';
            }
            else {
                $this->pageName = ucfirst('start');
                $this->pagePath = 'views/1start/start.php';
            }
        }
        return $this;
    }
    public static function getRoutingList() {
        $dir = 'views';
        $scan = scandir(ROOT.$dir);
        $routingList = array();
        foreach ($scan as $folder) {
            if(substr($folder, 0, 1) != '.') {
                $routingList[] = array(preg_replace('/[^0-9]/', '', $folder), preg_replace('/[0-9]/', '', $folder));
            }
        }
        return $routingList;
    }
}