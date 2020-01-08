<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiQuotationBuyerGetQuotationListByBuyOfferIdParam {

        
        /**
    * @return 询价单id
    */
        public function getBuyofferId() {
        $tempResult = $this->sdkStdResult["buyofferId"];
        return $tempResult;
    }
    
    /**
     * 设置询价单id     
     * @param Long $buyofferId     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setBuyofferId( $buyofferId) {
        $this->sdkStdResult["buyofferId"] = $buyofferId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>