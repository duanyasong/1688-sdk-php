<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaUserDefineCategoryAddParam {

        
        /**
    * @return 要新增的类目的名称
    */
        public function getGroupName() {
        $tempResult = $this->sdkStdResult["groupName"];
        return $tempResult;
    }
    
    /**
     * 设置要新增的类目的名称     
     * @param String $groupName     
     * 参数示例：<pre>女装</pre>     
     * 此参数必填     */
    public function setGroupName( $groupName) {
        $this->sdkStdResult["groupName"] = $groupName;
    }
    
        
        /**
    * @return 上一级类目的id。如果要创建的是一级类目，此处值填0
    */
        public function getParentID() {
        $tempResult = $this->sdkStdResult["parentID"];
        return $tempResult;
    }
    
    /**
     * 设置上一级类目的id。如果要创建的是一级类目，此处值填0     
     * @param Long $parentID     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setParentID( $parentID) {
        $this->sdkStdResult["parentID"] = $parentID;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>