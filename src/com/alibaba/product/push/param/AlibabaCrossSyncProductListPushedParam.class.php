<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCrossSyncProductListPushedParam {

        
        /**
    * @return 1688的商品ID列表,列表长度不能超过20个
    */
        public function getProductIdList() {
        $tempResult = $this->sdkStdResult["productIdList"];
        return $tempResult;
    }
    
    /**
     * 设置1688的商品ID列表,列表长度不能超过20个     
     * @param array include @see Long[] $productIdList     
     * 参数示例：<pre>[123456]</pre>     
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