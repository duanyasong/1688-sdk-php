<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductDescrTmplListParam {

        
        /**
    * @return 过滤提供者，为空时返回所有提供者模板
    */
        public function getVendor() {
        $tempResult = $this->sdkStdResult["vendor"];
        return $tempResult;
    }
    
    /**
     * 设置过滤提供者，为空时返回所有提供者模板     
     * @param String $vendor     
     * 参数示例：<pre>""</pre>     
     * 此参数必填     */
    public function setVendor( $vendor) {
        $this->sdkStdResult["vendor"] = $vendor;
    }
    
        
        /**
    * @return 过滤模板名，为空时不过滤
    */
        public function getTitle() {
        $tempResult = $this->sdkStdResult["title"];
        return $tempResult;
    }
    
    /**
     * 设置过滤模板名，为空时不过滤     
     * @param String $title     
     * 参数示例：<pre>清新模板</pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->sdkStdResult["title"] = $title;
    }
    
        
        /**
    * @return 页码，从 1 开始，默认为 1
    */
        public function getPage() {
        $tempResult = $this->sdkStdResult["page"];
        return $tempResult;
    }
    
    /**
     * 设置页码，从 1 开始，默认为 1     
     * @param Integer $page     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPage( $page) {
        $this->sdkStdResult["page"] = $page;
    }
    
        
        /**
    * @return 页大小，默认为 20，最大不超过 200
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置页大小，默认为 20，最大不超过 200     
     * @param Integer $pageSize     
     * 参数示例：<pre>20</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>