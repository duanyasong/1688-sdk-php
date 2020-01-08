<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductGetBySellerCargoNumberParam/AlibabaProductRelateCargoNumberProductRetrieveRequest.class.php');

class AlibabaProductGetBySellerCargoNumberParam {

        
        /**
    * @return 供应商Id及商品信息
    */
        public function getRequest() {
        $tempResult = $this->sdkStdResult["request"];
        return $tempResult;
    }
    
    /**
     * 设置供应商Id及商品信息     
     * @param AlibabaProductRelateCargoNumberProductRetrieveRequest $request     
     * 参数示例：<pre>{"supplyUserId":1623492085,"idListOfSupplier":[{"spuId":"560033667534"}]}</pre>     
     * 此参数必填     */
    public function setRequest(AlibabaProductRelateCargoNumberProductRetrieveRequest $request) {
        $this->sdkStdResult["request"] = $request;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>