<?php
/**
 * Doesn't have to inherit from any class.
 */
class Emzee_ExampleExtension_Model_Observer
{
    /**
     * Doesn't have to return $this, but it's kind of a convention.
     * 
     * @param Varien_Event_Observer $observer 
     * @return Emzee_ExampleExtension_Model_Observer
     */
    public function someAction(Varien_Event_Observer $observer)
    {
        /**
         * Get parameters passed in Mage::disptachEvent() with:
         * $someObject = $observer->getEvent()->getSomeObject()
         */
    }
}
