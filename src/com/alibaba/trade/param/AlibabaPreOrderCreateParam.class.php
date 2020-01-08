<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaPreOrderCreateParam/AlibabaPreOrderItemCreateParam.class.php');

class AlibabaPreOrderCreateParam {

        
        /**
    * @return 专业市场与业务场景名称，dxc：大象城，hqb：华强北，cloudMfr：云制造
    */
        public function getMarketName() {
        $tempResult = $this->sdkStdResult["marketName"];
        return $tempResult;
    }
    
    /**
     * 设置专业市场与业务场景名称，dxc：大象城，hqb：华强北，cloudMfr：云制造     
     * @param String $marketName     
     * 参数示例：<pre>dxc</pre>     
     * 此参数必填     */
    public function setMarketName( $marketName) {
        $this->sdkStdResult["marketName"] = $marketName;
    }
    
        
        /**
    * @return 运费，单位分
    */
        public function getPostFee() {
        $tempResult = $this->sdkStdResult["postFee"];
        return $tempResult;
    }
    
    /**
     * 设置运费，单位分     
     * @param Long $postFee     
     * 参数示例：<pre>100</pre>     
     * 此参数必填     */
    public function setPostFee( $postFee) {
        $this->sdkStdResult["postFee"] = $postFee;
    }
    
        
        /**
    * @return 开单备注信息
    */
        public function getRemark() {
        $tempResult = $this->sdkStdResult["remark"];
        return $tempResult;
    }
    
    /**
     * 设置开单备注信息     
     * @param String $remark     
     * 参数示例：<pre>备注</pre>     
     * 此参数必填     */
    public function setRemark( $remark) {
        $this->sdkStdResult["remark"] = $remark;
    }
    
        
        /**
    * @return 详情列表
    */
        public function getItemList() {
        $tempResult = $this->sdkStdResult["itemList"];
        return $tempResult;
    }
    
    /**
     * 设置详情列表     
     * @param array include @see AlibabaPreOrderItemCreateParam[] $itemList     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setItemList(AlibabaPreOrderItemCreateParam $itemList) {
        $this->sdkStdResult["itemList"] = $itemList;
    }
    
        
        /**
    * @return 货品总金额。货品总额+运费=应付总额，货品总额不传时使用货品单价计算
    */
        public function getTotalFee() {
        $tempResult = $this->sdkStdResult["totalFee"];
        return $tempResult;
    }
    
    /**
     * 设置货品总金额。货品总额+运费=应付总额，货品总额不传时使用货品单价计算     
     * @param Long $totalFee     
     * 参数示例：<pre>100</pre>     
     * 此参数必填     */
    public function setTotalFee( $totalFee) {
        $this->sdkStdResult["totalFee"] = $totalFee;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>