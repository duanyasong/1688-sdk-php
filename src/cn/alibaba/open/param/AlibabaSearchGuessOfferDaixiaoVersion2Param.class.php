<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaSearchGuessOfferDaixiaoVersion2Param {

        
        /**
    * @return 用户memberID
    */
        public function getCompanyMemberId() {
        $tempResult = $this->sdkStdResult["companyMemberId"];
        return $tempResult;
    }
    
    /**
     * 设置用户memberID     
     * @param String $companyMemberId     
     * 参数示例：<pre>b2b-1233</pre>     
     * 此参数必填     */
    public function setCompanyMemberId( $companyMemberId) {
        $this->sdkStdResult["companyMemberId"] = $companyMemberId;
    }
    
        
        /**
    * @return offer个数
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置offer个数     
     * @param Integer $pageSize     
     * 参数示例：<pre>10</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>