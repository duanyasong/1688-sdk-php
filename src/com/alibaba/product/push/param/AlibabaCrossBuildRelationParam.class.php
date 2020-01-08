<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCrossBuildRelationParam {

        
        /**
    * @return 代购用户唯一Id
    */
        public function getObUid() {
        $tempResult = $this->sdkStdResult["obUid"];
        return $tempResult;
    }
    
    /**
     * 设置代购用户唯一Id     
     * @param String $obUid     
     * 参数示例：<pre>t12412</pre>     
     * 此参数必填     */
    public function setObUid( $obUid) {
        $this->sdkStdResult["obUid"] = $obUid;
    }
    
        
        /**
    * @return 1688的商品ID列表,列表长度不能超过20个
    */
        public function getOfferIdList() {
        $tempResult = $this->sdkStdResult["offerIdList"];
        return $tempResult;
    }
    
    /**
     * 设置1688的商品ID列表,列表长度不能超过20个     
     * @param array include @see Long[] $offerIdList     
     * 参数示例：<pre>[123456]</pre>     
     * 此参数必填     */
    public function setOfferIdList( $offerIdList) {
        $this->sdkStdResult["offerIdList"] = $offerIdList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>