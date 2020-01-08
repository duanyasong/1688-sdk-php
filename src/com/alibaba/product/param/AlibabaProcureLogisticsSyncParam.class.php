<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProcureLogisticsSyncParam {

        
        /**
    * @return 1688订单号
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置1688订单号     
     * @param Long $orderId     
     * 参数示例：<pre>123456789</pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 节点动作code
    */
        public function getActionCode() {
        $tempResult = $this->sdkStdResult["actionCode"];
        return $tempResult;
    }
    
    /**
     * 设置节点动作code     
     * @param String $actionCode     
     * 参数示例：<pre>WMS_PACKAGE_ACCEPT</pre>     
     * 此参数必填     */
    public function setActionCode( $actionCode) {
        $this->sdkStdResult["actionCode"] = $actionCode;
    }
    
        
        /**
    * @return 处理时间，系统毫秒数
    */
        public function getActionTime() {
        $tempResult = $this->sdkStdResult["actionTime"];
        return $tempResult;
    }
    
    /**
     * 设置处理时间，系统毫秒数     
     * @param Long $actionTime     
     * 参数示例：<pre>1547536027868</pre>     
     * 此参数必填     */
    public function setActionTime( $actionTime) {
        $this->sdkStdResult["actionTime"] = $actionTime;
    }
    
        
        /**
    * @return 处理类型， 枚举
    */
        public function getActionType() {
        $tempResult = $this->sdkStdResult["actionType"];
        return $tempResult;
    }
    
    /**
     * 设置处理类型， 枚举     
     * @param Integer $actionType     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setActionType( $actionType) {
        $this->sdkStdResult["actionType"] = $actionType;
    }
    
        
        /**
    * @return 扩展信息， json格式
    */
        public function getExt() {
        $tempResult = $this->sdkStdResult["ext"];
        return $tempResult;
    }
    
    /**
     * 设置扩展信息， json格式     
     * @param String $ext     
     * 参数示例：<pre>{ 	"facilityName": "cn", 	"courierName": "EMS", 	"shipmentId": "123456789", 	"weight": "-1", 	"length": "-1", 	"height": "-1", 	"rejectReason": "1" }</pre>     
     * 此参数必填     */
    public function setExt( $ext) {
        $this->sdkStdResult["ext"] = $ext;
    }
    
        
        /**
    * @return 海外小b用户id，多个用户用逗号分隔
    */
        public function getObUid() {
        $tempResult = $this->sdkStdResult["obUid"];
        return $tempResult;
    }
    
    /**
     * 设置海外小b用户id，多个用户用逗号分隔     
     * @param String $obUid     
     * 参数示例：<pre>th123456789</pre>     
     * 此参数必填     */
    public function setObUid( $obUid) {
        $this->sdkStdResult["obUid"] = $obUid;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>