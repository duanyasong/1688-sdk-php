<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaTradeRefundOpAgreeReturnGoodsParam {

        
        /**
    * @return 退款单Id
    */
        public function getRefundId() {
        $tempResult = $this->sdkStdResult["refundId"];
        return $tempResult;
    }
    
    /**
     * 设置退款单Id     
     * @param String $refundId     
     * 参数示例：<pre>TQ123456</pre>     
     * 此参数必填     */
    public function setRefundId( $refundId) {
        $this->sdkStdResult["refundId"] = $refundId;
    }
    
        
        /**
    * @return 卖家收货地址
    */
        public function getAddress() {
        $tempResult = $this->sdkStdResult["address"];
        return $tempResult;
    }
    
    /**
     * 设置卖家收货地址     
     * @param String $address     
     * 参数示例：<pre>浙江省杭州市滨江区XXXX</pre>     
     * 此参数必填     */
    public function setAddress( $address) {
        $this->sdkStdResult["address"] = $address;
    }
    
        
        /**
    * @return 邮编
    */
        public function getPost() {
        $tempResult = $this->sdkStdResult["post"];
        return $tempResult;
    }
    
    /**
     * 设置邮编     
     * @param String $post     
     * 参数示例：<pre>100010</pre>     
     * 此参数必填     */
    public function setPost( $post) {
        $this->sdkStdResult["post"] = $post;
    }
    
        
        /**
    * @return 电话
    */
        public function getPhone() {
        $tempResult = $this->sdkStdResult["phone"];
        return $tempResult;
    }
    
    /**
     * 设置电话     
     * @param String $phone     
     * 参数示例：<pre>0571-XXXXXXXX</pre>     
     * 此参数必填     */
    public function setPhone( $phone) {
        $this->sdkStdResult["phone"] = $phone;
    }
    
        
        /**
    * @return 全名
    */
        public function getFullName() {
        $tempResult = $this->sdkStdResult["fullName"];
        return $tempResult;
    }
    
    /**
     * 设置全名     
     * @param String $fullName     
     * 参数示例：<pre>全名</pre>     
     * 此参数必填     */
    public function setFullName( $fullName) {
        $this->sdkStdResult["fullName"] = $fullName;
    }
    
        
        /**
    * @return 手机
    */
        public function getMobilePhone() {
        $tempResult = $this->sdkStdResult["mobilePhone"];
        return $tempResult;
    }
    
    /**
     * 设置手机     
     * @param String $mobilePhone     
     * 参数示例：<pre>1380000XXXX</pre>     
     * 此参数必填     */
    public function setMobilePhone( $mobilePhone) {
        $this->sdkStdResult["mobilePhone"] = $mobilePhone;
    }
    
        
        /**
    * @return 说明
    */
        public function getDiscription() {
        $tempResult = $this->sdkStdResult["discription"];
        return $tempResult;
    }
    
    /**
     * 设置说明     
     * @param String $discription     
     * 参数示例：<pre> </pre>     
     * 此参数必填     */
    public function setDiscription( $discription) {
        $this->sdkStdResult["discription"] = $discription;
    }
    
        
        /**
    * @return 1表示售中，2表示售后
    */
        public function getDisputeType() {
        $tempResult = $this->sdkStdResult["disputeType"];
        return $tempResult;
    }
    
    /**
     * 设置1表示售中，2表示售后     
     * @param Integer $disputeType     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setDisputeType( $disputeType) {
        $this->sdkStdResult["disputeType"] = $disputeType;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>