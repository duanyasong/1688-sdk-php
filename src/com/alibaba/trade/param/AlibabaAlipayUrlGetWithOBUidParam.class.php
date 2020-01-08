<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAlipayUrlGetWithOBUidParam {

        
        /**
    * @return 代购用户唯一Id
    */
        public function getObUid() {
        $tempResult = $this->sdkStdResult["obUid"];
        return $tempResult;
    }
    
    /**
     * 设置代购用户唯一Id     
     * @param String $obUid     
     * 参数示例：<pre>T212312311</pre>     
     * 此参数必填     */
    public function setObUid( $obUid) {
        $this->sdkStdResult["obUid"] = $obUid;
    }
    
        
        /**
    * @return 订单Id列表,最多批量30个订单，订单过多会导致超时，建议一次10个订单
    */
        public function getOrderIdList() {
        $tempResult = $this->sdkStdResult["orderIdList"];
        return $tempResult;
    }
    
    /**
     * 设置订单Id列表,最多批量30个订单，订单过多会导致超时，建议一次10个订单     
     * @param array include @see Long[] $orderIdList     
     * 参数示例：<pre>[74321349391498520]</pre>     
     * 此参数必填     */
    public function setOrderIdList( $orderIdList) {
        $this->sdkStdResult["orderIdList"] = $orderIdList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>