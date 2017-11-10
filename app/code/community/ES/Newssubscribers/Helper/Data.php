<?php

class ES_Newssubscribers_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getExtensionVersion()
    {
        return (string) Mage::getConfig()->getNode()->modules->ES_Newssubscribers->version;
    }
}