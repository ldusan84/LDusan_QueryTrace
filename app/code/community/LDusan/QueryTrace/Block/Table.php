<?php

class LDusan_QueryTrace_Block_Table extends Mage_Core_Block_Template
{
    public function getProfiler()
    {
        return Mage::getSingleton('core/resource')->getConnection('core_write')->getProfiler();
    }
}