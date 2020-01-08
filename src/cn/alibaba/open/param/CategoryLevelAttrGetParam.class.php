<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CategoryLevelAttrGetParam {

        
        /**
    * @return 叶子类目ID
    */
        public function getCatId() {
        $tempResult = $this->sdkStdResult["catId"];
        return $tempResult;
    }
    
    /**
     * 设置叶子类目ID     
     * @param Long $catId     
     * 参数示例：<pre>1031910</pre>     
     * 此参数必填     */
    public function setCatId( $catId) {
        $this->sdkStdResult["catId"] = $catId;
    }
    
        
        /**
    * @return 属性值路径
    */
        public function getPathValues() {
        $tempResult = $this->sdkStdResult["pathValues"];
        return $tempResult;
    }
    
    /**
     * 设置属性值路径     
     * @param String $pathValues     
     * 参数示例：<pre>属性名和属性值以冒号隔开，子属性以大于号隔开。如offer发布连衣裙类目中，要获取 货源类别: 现货 > 是否库存: 是 下面的属性名和属性值，传入 100000691:46874>7108:21958</pre>     
     * 此参数必填     */
    public function setPathValues( $pathValues) {
        $this->sdkStdResult["pathValues"] = $pathValues;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>