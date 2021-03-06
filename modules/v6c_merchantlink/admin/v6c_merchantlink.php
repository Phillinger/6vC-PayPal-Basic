<?php
/*
* Based off of shop.php.  Use that file as a basis for merging diffs for updates.
*/

/**
 * Admin shop manager.
 * Returns template that arranges the following two templates into frames:
 * 	v6c_merchantlink_list.tpl (overrides default v6c_list.tpl)
 * 	v6c_merchantlink_main.tpl
 */
class v6c_MerchantLink extends oxAdminView
{
    /**
     * Executes parent method parent::render() and returns name of template
     * file "shop.tpl".
     *
     * @return string
     */
    public function render()
    {
        parent::render();

            $sCurrentAdminShop = oxRegistry::get('oxSession')->getVariable("currentadminshop");

            if (!$sCurrentAdminShop) {
                if (oxRegistry::get('oxSession')->getVariable( "malladmin"))
                    $sCurrentAdminShop = "oxbaseshop";
                else
                    $sCurrentAdminShop = oxRegistry::get('oxSession')->getVariable( "actshop");
            }

            $this->_aViewData["currentadminshop"] = $sCurrentAdminShop;
            oxRegistry::get('oxSession')->setVariable("currentadminshop", $sCurrentAdminShop);


        return "v6c_container.tpl";
    }
}
