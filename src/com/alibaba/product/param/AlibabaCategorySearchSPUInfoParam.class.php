<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCategorySearchSPUInfoParam {

        
        /**
    * @return 类目Id
    */
        public function getCategoryId() {
        $tempResult = $this->sdkStdResult["categoryId"];
        return $tempResult;
    }
    
    /**
     * 设置类目Id     
     * @param Long $categoryId     
     * 参数示例：<pre>1031910</pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->sdkStdResult["categoryId"] = $categoryId;
    }
    
        
        /**
    * @return 是否需要关键属性
    */
        public function getIsNeedKeyAttr() {
        $tempResult = $this->sdkStdResult["isNeedKeyAttr"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要关键属性     
     * @param Boolean $isNeedKeyAttr     
     * 参数示例：<pre> </pre>     
     * 此参数必填     */
    public function setIsNeedKeyAttr( $isNeedKeyAttr) {
        $this->sdkStdResult["isNeedKeyAttr"] = $isNeedKeyAttr;
    }
    
        
        /**
    * @return 是否只需要关键属性
    */
        public function getIsOnlyKeyAttr() {
        $tempResult = $this->sdkStdResult["isOnlyKeyAttr"];
        return $tempResult;
    }
    
    /**
     * 设置是否只需要关键属性     
     * @param Boolean $isOnlyKeyAttr     
     * 参数示例：<pre> </pre>     
     * 此参数必填     */
    public function setIsOnlyKeyAttr( $isOnlyKeyAttr) {
        $this->sdkStdResult["isOnlyKeyAttr"] = $isOnlyKeyAttr;
    }
    
        
        /**
    * @return 当前页，无默认值
    */
        public function getIndex() {
        $tempResult = $this->sdkStdResult["index"];
        return $tempResult;
    }
    
    /**
     * 设置当前页，无默认值     
     * @param Integer $index     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setIndex( $index) {
        $this->sdkStdResult["index"] = $index;
    }
    
        
        /**
    * @return 每页多少记录，无默认值
    */
        public function getSize() {
        $tempResult = $this->sdkStdResult["size"];
        return $tempResult;
    }
    
    /**
     * 设置每页多少记录，无默认值     
     * @param Integer $size     
     * 参数示例：<pre>2</pre>     
     * 此参数必填     */
    public function setSize( $size) {
        $this->sdkStdResult["size"] = $size;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>