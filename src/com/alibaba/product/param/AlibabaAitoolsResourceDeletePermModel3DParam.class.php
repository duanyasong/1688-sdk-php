<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsResourceDeletePermModel3DParam {

        
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