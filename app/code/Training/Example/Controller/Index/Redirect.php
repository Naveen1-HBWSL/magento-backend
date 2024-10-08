<?php 

declare(strict_types=1); 
namespace training\example\controller\index ;

use Magento\Framework\App\ActionInterface;


class Redirect implements ActionInterface { 
protected $redirectFactory;

public function __construct(\magento\framework\Controller\Result\RedirectFactory $redirectFactory){
    $this->redirectFactory=$redirectFactory;
} 

public function execute() {
    return  $this->redirectFactory->create()->setUrl('/example/index/page'); 
} 

} 
