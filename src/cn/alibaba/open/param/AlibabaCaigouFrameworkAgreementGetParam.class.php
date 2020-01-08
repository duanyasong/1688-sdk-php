<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCaigouFrameworkAgreementGetParam {

        
        /**
    * @return 框架协议主健id
    */
        public function getId() {
        $tempResult = $this->sdkStdResult["id"];
        return $tempResult;
    }
    
    /**
     * 设置框架协议主健id     
     * @param Long $id     
     * 参数示例：<pre>1001</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->sdkStdResult["id"] = $id;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>