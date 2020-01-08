<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class UserCategoryOffersRemoveParam {

        
        /**
    * @return 需要删除的产品序列。多个产品id半角分号分隔
    */
        public function getOfferIds() {
        $tempResult = $this->sdkStdResult["offerIds"];
        return $tempResult;
    }
    
    /**
     * 设置需要删除的产品序列。多个产品id半角分号分隔     
     * @param String $offerIds     
     * 参数示例：<pre>564734531645;564734531646</pre>     
     * 此参数必填     */
    public function setOfferIds( $offerIds) {
        $this->sdkStdResult["offerIds"] = $offerIds;
    }
    
        
        /**
    * @return 要删除的自定义分类ID
    */
        public function getCategoryId() {
        $tempResult = $this->sdkStdResult["categoryId"];
        return $tempResult;
    }
    
    /**
     * 设置要删除的自定义分类ID     
     * @param Long $categoryId     
     * 参数示例：<pre>121</pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->sdkStdResult["categoryId"] = $categoryId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>