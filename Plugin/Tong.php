<?php
namespace AHTUI\BurningLog\Plugin;

class Tong
{
    public function beforeSum(\AHTUI\BurningLog\Controller\Adminhtml\Post\Index $subject, $a, $b=null)
    {
        $a = 7;
        // $b = 9;
        // die(1);
        return [$a,$b];
    }

    // public function afterSum(\AHTUI\BurningLog\Controller\Adminhtml\Post\Index $subject, $result )
    // {
        
    //     return $result + 5;
    // }

    public function aroundSum(\AHTUI\BurningLog\Controller\Adminhtml\Post\Index $subject, callable $proceed, $a, $b)
    {
        $a = 2;
        $b = 6;
        // $result = $proceed($a,$b);
        $result = $a * $b;
        return $result;
    }
}
