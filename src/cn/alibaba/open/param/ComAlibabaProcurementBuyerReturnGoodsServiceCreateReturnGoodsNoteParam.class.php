<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('ComAlibabaProcurementBuyerReturnGoodsServiceCreateReturnGoodsNoteParam/AlibabaProcurementApiReturngoodsIntegrationParamCreateReturnGoodsNoteEntryParam.class.php');

class ComAlibabaProcurementBuyerReturnGoodsServiceCreateReturnGoodsNoteParam {

        
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
    * @return 创建退货子单入参列表	
    */
        public function getCreateReturnGoodsNoteEntryParams() {
        $tempResult = $this->sdkStdResult["createReturnGoodsNoteEntryParams"];
        return $tempResult;
    }
    
    /**
     * 设置创建退货子单入参列表	     
     * @param array include @see AlibabaProcurementApiReturngoodsIntegrationParamCreateReturnGoodsNoteEntryParam[] $createReturnGoodsNoteEntryParams     
     * 参数示例：<pre>null</pre>     
     * 此参数必填     */
    public function setCreateReturnGoodsNoteEntryParams(AlibabaProcurementApiReturngoodsIntegrationParamCreateReturnGoodsNoteEntryParam $createReturnGoodsNoteEntryParams) {
        $this->sdkStdResult["createReturnGoodsNoteEntryParams"] = $createReturnGoodsNoteEntryParams;
    }
    
        
        /**
    * @return 退货日期	
    */
        public function getReturnDate() {
        $tempResult = $this->sdkStdResult["returnDate"];
        return $tempResult;
    }
    
    /**
     * 设置退货日期	     
     * @param Date $returnDate     
     * 参数示例：<pre>2018-10-01</pre>     
     * 此参数必填     */
    public function setReturnDate( $returnDate) {
        $this->sdkStdResult["returnDate"] = $returnDate;
    }
    
        
        /**
    * @return 退货类型，基于子订单传:order_entry；基于子收货单传:receive_goods_entry，默认为:order_entry
    */
        public function getType() {
        $tempResult = $this->sdkStdResult["type"];
        return $tempResult;
    }
    
    /**
     * 设置退货类型，基于子订单传:order_entry；基于子收货单传:receive_goods_entry，默认为:order_entry     
     * @param String $type     
     * 参数示例：<pre>order_entry</pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->sdkStdResult["type"] = $type;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>