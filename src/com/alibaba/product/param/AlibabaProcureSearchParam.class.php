<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProcureSearchParam {

        
        /**
    * @return 海外小b用户账号
    */
        public function getObUid() {
        $tempResult = $this->sdkStdResult["obUid"];
        return $tempResult;
    }
    
    /**
     * 设置海外小b用户账号     
     * @param String $obUid     
     * 参数示例：<pre>th123456789</pre>     
     * 此参数必填     */
    public function setObUid( $obUid) {
        $this->sdkStdResult["obUid"] = $obUid;
    }
    
        
        /**
    * @return 搜索关键字，多个关键字用空格分隔
    */
        public function getKeywords() {
        $tempResult = $this->sdkStdResult["keywords"];
        return $tempResult;
    }
    
    /**
     * 设置搜索关键字，多个关键字用空格分隔     
     * @param String $keywords     
     * 参数示例：<pre>女装 连衣裙</pre>     
     * 此参数必填     */
    public function setKeywords( $keywords) {
        $this->sdkStdResult["keywords"] = $keywords;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>