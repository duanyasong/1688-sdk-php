<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsResourceDeleteModel3DParam {

        
        /**
    * @return aliId
    */
        public function getAliId() {
        $tempResult = $this->sdkStdResult["aliId"];
        return $tempResult;
    }
    
    /**
     * 设置aliId     
     * @param Long $aliId     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setAliId( $aliId) {
        $this->sdkStdResult["aliId"] = $aliId;
    }
    
        
        /**
    * @return 要删除的 3D 模型识别号列表
    */
        public function getRecogniseIDList() {
        $tempResult = $this->sdkStdResult["recogniseIDList"];
        return $tempResult;
    }
    
    /**
     * 设置要删除的 3D 模型识别号列表     
     * @param array include @see String[] $recogniseIDList     
     * 参数示例：<pre>["xxxxxxxxxxx-xxx"]</pre>     
     * 此参数必填     */
    public function setRecogniseIDList( $recogniseIDList) {
        $this->sdkStdResult["recogniseIDList"] = $recogniseIDList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>