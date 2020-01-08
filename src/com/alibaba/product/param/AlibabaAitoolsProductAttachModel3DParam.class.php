<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsProductAttachModel3DParam {

        
        /**
    * @return 1688 商品 ID，可在商品发布后取得
    */
        public function getProductID() {
        $tempResult = $this->sdkStdResult["productID"];
        return $tempResult;
    }
    
    /**
     * 设置1688 商品 ID，可在商品发布后取得     
     * @param String $productID     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setProductID( $productID) {
        $this->sdkStdResult["productID"] = $productID;
    }
    
        
        /**
    * @return 识别号，上传 3D 模型后取得的识别号
    */
        public function getRecogniseID() {
        $tempResult = $this->sdkStdResult["recogniseID"];
        return $tempResult;
    }
    
    /**
     * 设置识别号，上传 3D 模型后取得的识别号     
     * @param String $recogniseID     
     * 参数示例：<pre>xxxxxxxxxx-xxx</pre>     
     * 此参数必填     */
    public function setRecogniseID( $recogniseID) {
        $this->sdkStdResult["recogniseID"] = $recogniseID;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>