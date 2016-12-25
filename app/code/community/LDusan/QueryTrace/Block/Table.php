<?php

class LDusan_QueryTrace_Block_Table extends Mage_Core_Block_Template
{
    public function getProfiler()
    {
        return Mage::getSingleton('core/resource')->getConnection('core_write')->getProfiler();
    }

    public function _toHtml()
    {
        if (Mage::helper('ldusan_querytrace')->getHideDefault()) {
            return '';    
        }
        return parent::_toHtml();
    }

    protected function formatFilePath($filePath)
    {
        return trim(str_replace(Mage::getBaseDir(), '', $filePath), '/');
    }

    protected function formatClassAndMethod($part)
    {
        $out = $part['class'];
        $out .= (isset($part['class']) && isset($part['function'])) ? '::' : '';
        $out .= $part['function'];
        return $out;
    }

}