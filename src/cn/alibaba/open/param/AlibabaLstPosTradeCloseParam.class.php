<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaLstPosTradeCloseParam {

        
        /**
    * @return 订单Id
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单Id     
     * @param String $orderId     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 关闭订单原因
    */
        public function getCancelReason() {
        $tempResult = $this->sdkStdResult["cancelReason"];
        return $tempResult;
    }
    
    /**
     * 设置关闭订单原因     
     * @param String $cancelReason     
     * 参数示例：<pre>充值失败</pre>     
     * 此参数必填     */
    public function setCancelReason( $cancelReason) {
        $this->sdkStdResult["cancelReason"] = $cancelReason;
    }
    
        
        /**
    * @return 备注
    */
        public function getRemark() {
        $tempResult = $this->sdkStdResult["remark"];
        return $tempResult;
    }
    
    /**
     * 设置备注     
     * @param String $remark     
     * 参数示例：<pre>代扣失败</pre>     
     * 此参数必填     */
    public function setRemark( $remark) {
        $this->sdkStdResult["remark"] = $remark;
    }
    
        
        /**
    * @return 操作者角色，1:卖家关闭交易，4:买家关闭交易
    */
        public function getCloseOperateType() {
        $tempResult = $this->sdkStdResult["closeOperateType"];
        return $tempResult;
    }
    
    /**
     * 设置操作者角色，1:卖家关闭交易，4:买家关闭交易     
     * @param String $closeOperateType     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setCloseOperateType( $closeOperateType) {
        $this->sdkStdResult["closeOperateType"] = $closeOperateType;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>