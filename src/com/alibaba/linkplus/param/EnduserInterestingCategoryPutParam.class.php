<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class EnduserInterestingCategoryPutParam {

        
        /**
    * @return erp内部的企业身份id	
    */
        public function getOrgId() {
        $tempResult = $this->sdkStdResult["orgId"];
        return $tempResult;
    }
    
    /**
     * 设置erp内部的企业身份id	     
     * @param String $orgId     
     * 参数示例：<pre>ORG_001</pre>     
     * 此参数必填     */
    public function setOrgId( $orgId) {
        $this->sdkStdResult["orgId"] = $orgId;
    }
    
        
        /**
    * @return erp内部的用户身份id	
    */
        public function getEndUserId() {
        $tempResult = $this->sdkStdResult["endUserId"];
        return $tempResult;
    }
    
    /**
     * 设置erp内部的用户身份id	     
     * @param String $endUserId     
     * 参数示例：<pre>ORGUSER_001</pre>     
     * 此参数必填     */
    public function setEndUserId( $endUserId) {
        $this->sdkStdResult["endUserId"] = $endUserId;
    }
    
        
        /**
    * @return 感兴趣的1688类目id,逗号分隔。任意123级类目均可填写
    */
        public function getCategoryIds() {
        $tempResult = $this->sdkStdResult["categoryIds"];
        return $tempResult;
    }
    
    /**
     * 设置感兴趣的1688类目id,逗号分隔。任意123级类目均可填写     
     * @param String $categoryIds     
     * 参数示例：<pre>123926004,8</pre>     
     * 此参数必填     */
    public function setCategoryIds( $categoryIds) {
        $this->sdkStdResult["categoryIds"] = $categoryIds;
    }
    
        
        /**
    * @return 感兴趣的1688类目名称,逗号分隔。任意123级类目均可填写
    */
        public function getCategoryNames() {
        $tempResult = $this->sdkStdResult["categoryNames"];
        return $tempResult;
    }
    
    /**
     * 设置感兴趣的1688类目名称,逗号分隔。任意123级类目均可填写     
     * @param String $categoryNames     
     * 参数示例：<pre>焦化苯,化工</pre>     
     * 此参数必填     */
    public function setCategoryNames( $categoryNames) {
        $this->sdkStdResult["categoryNames"] = $categoryNames;
    }
    
        
        /**
    * @return 感兴趣的自定义类目名称,逗号分隔
    */
        public function getUdfCategoryNames() {
        $tempResult = $this->sdkStdResult["udfCategoryNames"];
        return $tempResult;
    }
    
    /**
     * 设置感兴趣的自定义类目名称,逗号分隔     
     * @param String $udfCategoryNames     
     * 参数示例：<pre>小米手机,锤子手机</pre>     
     * 此参数必填     */
    public function setUdfCategoryNames( $udfCategoryNames) {
        $this->sdkStdResult["udfCategoryNames"] = $udfCategoryNames;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>