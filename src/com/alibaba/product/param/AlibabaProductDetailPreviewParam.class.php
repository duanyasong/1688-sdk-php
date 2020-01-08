<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductDetailPreviewParam {

        
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
     * 参数示例：<pre>0b83b941jyabck-1</pre>     
     * 此参数必填     */
    public function setRecogniseId( $recogniseId) {
        $this->sdkStdResult["recogniseId"] = $recogniseId;
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
     * @param Long $templateId     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setTemplateId( $templateId) {
        $this->sdkStdResult["templateId"] = $templateId;
    }
    
        
        /**
    * @return 模板详情id
    */
        public function getTemplateDetailId() {
        $tempResult = $this->sdkStdResult["templateDetailId"];
        return $tempResult;
    }
    
    /**
     * 设置模板详情id     
     * @param Long $templateDetailId     
     * 参数示例：<pre>123456</pre>     
     * 此参数必填     */
    public function setTemplateDetailId( $templateDetailId) {
        $this->sdkStdResult["templateDetailId"] = $templateDetailId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>