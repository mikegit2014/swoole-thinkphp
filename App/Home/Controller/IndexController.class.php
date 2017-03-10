<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	if(!IS_CLI){
	echo "Cli/Index/index\r\n";
	}
    }
    public function task(){
        echo "async task\r\n";
    }
}
