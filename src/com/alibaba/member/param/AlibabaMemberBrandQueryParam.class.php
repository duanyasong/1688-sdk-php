<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaMemberBrandQueryParam {

        
        /**
    * @return 需要查询的商品叶子类目id列表
    */
        public function getLeafCatIds() {
        $tempResult = $this->sdkStdResult["leafCatIds"];
        return $tempResult;
    }
    
    /**
     * 设置需要查询的商品叶子类目id列表     
     * @param array include @see Long[] $leafCatIds     
     * 参数示例：<pre>[12306]</pre>     
     * 此参数必填     */
    public function setLeafCatIds( $leafCatIds) {
        $this->sdkStdResult["leafCatIds"] = $leafCatIds;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>