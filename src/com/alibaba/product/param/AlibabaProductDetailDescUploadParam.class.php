<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductDetailDescUploadParam {

        
        /**
    * @return 识别号
    */
        public function getRecogniseId() {
        $tempResult = $this->sdkStdResult["recogniseId"];
        return $tempResult;
    }
    
    /**
     * 设置识别号     
     * @param String $recogniseId     
     * 参数示例：<pre>123456abc-1</pre>     
     * 此参数必填     */
    public function setRecogniseId( $recogniseId) {
        $this->sdkStdResult["recogniseId"] = $recogniseId;
    }
    
        
        /**
    * @return 商品详情描述信息，json格式字符串
    */
        public function getProductDescription() {
        $tempResult = $this->sdkStdResult["productDescription"];
        return $tempResult;
    }
    
    /**
     * 设置商品详情描述信息，json格式字符串     
     * @param String $productDescription     
     * 参数示例：<pre>{XXX}</pre>     
     * 此参数必填     */
    public function setProductDescription( $productDescription) {
        $this->sdkStdResult["productDescription"] = $productDescription;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>