[{assign var="oConf" value=$oViewConf->getConfig()}]

[{if $oConf->getConfigParam('v6c_Sideb')}]
    [{oxifcontent ident="oxdeliveryinfo" object="oCont"}]
    <a href="[{ $oCont->getLink() }]" rel="nofollow"><img src="[{ $oViewConf->getModuleUrl('v6c_merchantlink','out/src/paypal.png')}]" alt="" title="PayPal"></a>
    [{/oxifcontent}]
[{$smarty.block.parent}]
[{else}]
[{$smarty.block.parent}]
[{/if}]