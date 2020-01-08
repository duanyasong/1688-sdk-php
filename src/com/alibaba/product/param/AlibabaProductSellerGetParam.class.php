<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductSellerGetParam {

        
        /**
    * @return 商品Id列表，即offerId的列表
    */
        public function getProductIdList() {
        $tempResult = $this->sdkStdResult["productIdList"];
        return $tempResult;
    }
    
    /**
     * 设置商品Id列表，即offerId的列表     
     * @param array include @see Long[] $productIdList     
     * 参数示例：<pre>[574209177177]</pre>     
     * 此参数必填     */
    public function setProductIdList( $productIdList) {
        $this->sdkStdResult["productIdList"] = $productIdList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>