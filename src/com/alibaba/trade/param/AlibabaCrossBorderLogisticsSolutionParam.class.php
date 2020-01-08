<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCrossBorderLogisticsSolutionParam/QueryParamSkuInfo.class.php');

class AlibabaCrossBorderLogisticsSolutionParam {

        
        /**
    * @return 商品ID
    */
        public function getOfferId() {
        $tempResult = $this->sdkStdResult["offerId"];
        return $tempResult;
    }
    
    /**
     * 设置商品ID     
     * @param String $offerId     
     * 参数示例：<pre>546775917010</pre>     
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->sdkStdResult["offerId"] = $offerId;
    }
    
        
        /**
    * @return 收件人的地址信息
    */
        public function getToAddressText() {
        $tempResult = $this->sdkStdResult["toAddressText"];
        return $tempResult;
    }
    
    /**
     * 设置收件人的地址信息     
     * @param String $toAddressText     
     * 参数示例：<pre> </pre>     
     * 此参数必填     */
    public function setToAddressText( $toAddressText) {
        $this->sdkStdResult["toAddressText"] = $toAddressText;
    }
    
        
        /**
    * @return 收件人的地区ID
    */
        public function getToDivisionId() {
        $tempResult = $this->sdkStdResult["toDivisionId"];
        return $tempResult;
    }
    
    /**
     * 设置收件人的地区ID     
     * @param String $toDivisionId     
     * 参数示例：<pre>2</pre>     
     * 此参数必填     */
    public function setToDivisionId( $toDivisionId) {
        $this->sdkStdResult["toDivisionId"] = $toDivisionId;
    }
    
        
        /**
    * @return 购买的数量及规格信息
    */
        public function getSkuInfoList() {
        $tempResult = $this->sdkStdResult["skuInfoList"];
        return $tempResult;
    }
    
    /**
     * 设置购买的数量及规格信息     
     * @param array include @see QueryParamSkuInfo[] $skuInfoList     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setSkuInfoList(QueryParamSkuInfo $skuInfoList) {
        $this->sdkStdResult["skuInfoList"] = $skuInfoList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>