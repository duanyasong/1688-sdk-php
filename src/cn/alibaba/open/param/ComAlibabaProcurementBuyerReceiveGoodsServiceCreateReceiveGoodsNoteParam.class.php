<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('ComAlibabaProcurementBuyerReceiveGoodsServiceCreateReceiveGoodsNoteParam/AlibabaProcurementApiReceivegoodsIntegrationParamCreateReceiveGoodsNoteEntryParam.class.php');

class ComAlibabaProcurementBuyerReceiveGoodsServiceCreateReceiveGoodsNoteParam {

        
        /**
    * @return 买家对内备注	
    */
        public function getBuyerInsideRemark() {
        $tempResult = $this->sdkStdResult["buyerInsideRemark"];
        return $tempResult;
    }
    
    /**
     * 设置买家对内备注	     
     * @param String $buyerInsideRemark     
     * 参数示例：<pre>给自己内部看的备注</pre>     
     * 此参数必填     */
    public function setBuyerInsideRemark( $buyerInsideRemark) {
        $this->sdkStdResult["buyerInsideRemark"] = $buyerInsideRemark;
    }
    
        
        /**
    * @return 买家对外备注	
    */
        public function getBuyerOutsideRemark() {
        $tempResult = $this->sdkStdResult["buyerOutsideRemark"];
        return $tempResult;
    }
    
    /**
     * 设置买家对外备注	     
     * @param String $buyerOutsideRemark     
     * 参数示例：<pre>给卖家看的备注</pre>     
     * 此参数必填     */
    public function setBuyerOutsideRemark( $buyerOutsideRemark) {
        $this->sdkStdResult["buyerOutsideRemark"] = $buyerOutsideRemark;
    }
    
        
        /**
    * @return 创建收货子单入参列表	
    */
        public function getCreateReceiveGoodsNoteEntryParams() {
        $tempResult = $this->sdkStdResult["createReceiveGoodsNoteEntryParams"];
        return $tempResult;
    }
    
    /**
     * 设置创建收货子单入参列表	     
     * @param array include @see AlibabaProcurementApiReceivegoodsIntegrationParamCreateReceiveGoodsNoteEntryParam[] $createReceiveGoodsNoteEntryParams     
     * 参数示例：<pre>null</pre>     
     * 此参数必填     */
    public function setCreateReceiveGoodsNoteEntryParams(AlibabaProcurementApiReceivegoodsIntegrationParamCreateReceiveGoodsNoteEntryParam $createReceiveGoodsNoteEntryParams) {
        $this->sdkStdResult["createReceiveGoodsNoteEntryParams"] = $createReceiveGoodsNoteEntryParams;
    }
    
        
        /**
    * @return 收货日期
    */
        public function getReceiveDate() {
        $tempResult = $this->sdkStdResult["receiveDate"];
        return $tempResult;
    }
    
    /**
     * 设置收货日期     
     * @param Date $receiveDate     
     * 参数示例：<pre>2018-10-01</pre>     
     * 此参数必填     */
    public function setReceiveDate( $receiveDate) {
        $this->sdkStdResult["receiveDate"] = $receiveDate;
    }
    
        
        /**
    * @return 类型，有2个值：send_goods_entry（基于发货子单）和order_entry（基于采购子订单）
    */
        public function getType() {
        $tempResult = $this->sdkStdResult["type"];
        return $tempResult;
    }
    
    /**
     * 设置类型，有2个值：send_goods_entry（基于发货子单）和order_entry（基于采购子订单）     
     * @param String $type     
     * 参数示例：<pre>order_entry</pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->sdkStdResult["type"] = $type;
    }
    
        
        /**
    * @return 子账号LoginId
    */
        public function getSubUserLoginId() {
        $tempResult = $this->sdkStdResult["subUserLoginId"];
        return $tempResult;
    }
    
    /**
     * 设置子账号LoginId     
     * @param String $subUserLoginId     
     * 参数示例：<pre>阿里:张三</pre>     
     * 此参数必填     */
    public function setSubUserLoginId( $subUserLoginId) {
        $this->sdkStdResult["subUserLoginId"] = $subUserLoginId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>