<?php
class LDusan_QueryTrace_Block_Core_Profiler extends Mage_Core_Block_Profiler
{

    protected function _toHtml()
    {
        if (Mage::helper('ldusan_querytrace')->isEnabled()) {
            return parent::_toHtml();
        }
        return '';
    }

}