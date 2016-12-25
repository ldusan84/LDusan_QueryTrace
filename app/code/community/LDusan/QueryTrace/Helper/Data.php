<?php

class LDusan_QueryTrace_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isEnabled()
    {
        return (bool) Mage::getStoreConfig('dev/ldusanquerytrace/enable');
    }

    public function getHideDefault()
    {
        return (bool) Mage::getStoreConfig('dev/ldusanquerytrace/hidedefault');
    }
}