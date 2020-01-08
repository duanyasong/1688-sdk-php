<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductSuggestParam {

        
        /**
    * @return 一级类目ID
    */
        public function getCategoryId() {
        $tempResult = $this->sdkStdResult["categoryId"];
        return $tempResult;
    }
    
    /**
     * 设置一级类目ID     
     * @param Long $categoryId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->sdkStdResult["categoryId"] = $categoryId;
    }
    
        
        /**
    * @return 1688的登录名
    */
        public function getLoginId() {
        $tempResult = $this->sdkStdResult["loginId"];
        return $tempResult;
    }
    
    /**
     * 设置1688的登录名     
     * @param String $loginId     
     * 参数示例：<pre>alitestforisv01</pre>     
     * 此参数必填     */
    public function setLoginId( $loginId) {
        $this->sdkStdResult["loginId"] = $loginId;
    }
    
        
        /**
    * @return 淘宝昵称
    */
        public function getTaobaoNick() {
        $tempResult = $this->sdkStdResult["taobaoNick"];
        return $tempResult;
    }
    
    /**
     * 设置淘宝昵称     
     * @param String $taobaoNick     
     * 参数示例：<pre>alitestforisv01</pre>     
     * 此参数必填     */
    public function setTaobaoNick( $taobaoNick) {
        $this->sdkStdResult["taobaoNick"] = $taobaoNick;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>