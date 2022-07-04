<?php

namespace Atlas\HelloWorld\Controller\Page;

class index extends \Magento\Framework\App\Action\Action {
    public function execute(){
        echo 'Hello World!';
    }
}