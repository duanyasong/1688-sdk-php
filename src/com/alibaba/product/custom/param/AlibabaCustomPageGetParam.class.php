<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCustomPageGetParam {

        
        /**
    * @return 流程id
    */
        public function getTransactionId() {
        $tempResult = $this->sdkStdResult["transactionId"];
        return $tempResult;
    }
    
    /**
     * 设置流程id     
     * @param String $transactionId     
     * 参数示例：<pre>ebb502ac2e0f4b</pre>     
     * 此参数必填     */
    public function setTransactionId( $transactionId) {
        $this->sdkStdResult["transactionId"] = $transactionId;
    }
    
        
        /**
    * @return 模板Id
    */
        public function getTemplateId() {
        $tempResult = $this->sdkStdResult["templateId"];
        return $tempResult;
    }
    
    /**
     * 设置模板Id     
     * @param String $templateId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setTemplateId( $templateId) {
        $this->sdkStdResult["templateId"] = $templateId;
    }
    
        
        /**
    * @return 模板所属的ISV的aliId
    */
        public function getIsvAliId() {
        $tempResult = $this->sdkStdResult["isvAliId"];
        return $tempResult;
    }
    
    /**
     * 设置模板所属的ISV的aliId     
     * @param String $isvAliId     
     * 参数示例：<pre>12345678999</pre>     
     * 此参数必填     */
    public function setIsvAliId( $isvAliId) {
        $this->sdkStdResult["isvAliId"] = $isvAliId;
    }
    
        
        /**
    * @return 使用模板的卖家的aliId
    */
        public function getSellerAliId() {
        $tempResult = $this->sdkStdResult["sellerAliId"];
        return $tempResult;
    }
    
    /**
     * 设置使用模板的卖家的aliId     
     * @param String $sellerAliId     
     * 参数示例：<pre>88888888</pre>     
     * 此参数必填     */
    public function setSellerAliId( $sellerAliId) {
        $this->sdkStdResult["sellerAliId"] = $sellerAliId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>