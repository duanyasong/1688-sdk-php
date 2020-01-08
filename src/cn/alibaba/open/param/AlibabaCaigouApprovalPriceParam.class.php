<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCaigouApprovalPriceParam {

        
        /**
    * @return 商品ID
    */
        public function getGoodsId() {
        $tempResult = $this->sdkStdResult["goodsId"];
        return $tempResult;
    }
    
    /**
     * 设置商品ID     
     * @param Long $goodsId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setGoodsId( $goodsId) {
        $this->sdkStdResult["goodsId"] = $goodsId;
    }
    
        
        /**
    * @return 是否通过
    */
        public function getIsPass() {
        $tempResult = $this->sdkStdResult["isPass"];
        return $tempResult;
    }
    
    /**
     * 设置是否通过     
     * @param Boolean $isPass     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setIsPass( $isPass) {
        $this->sdkStdResult["isPass"] = $isPass;
    }
    
        
        /**
    * @return 意见
    */
        public function getRemark() {
        $tempResult = $this->sdkStdResult["remark"];
        return $tempResult;
    }
    
    /**
     * 设置意见     
     * @param String $remark     
     * 参数示例：<pre>价格无法接受</pre>     
     * 此参数必填     */
    public function setRemark( $remark) {
        $this->sdkStdResult["remark"] = $remark;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>