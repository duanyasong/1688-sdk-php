<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAppOrderListbyIdsParam {

        
        /**
    * @return 订单ID列表
    */
        public function getOrderIdList() {
        $tempResult = $this->sdkStdResult["orderIdList"];
        return $tempResult;
    }
    
    /**
     * 设置订单ID列表     
     * @param array include @see String[] $orderIdList     
     * 参数示例：<pre>["W112****3123_1"]</pre>     
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