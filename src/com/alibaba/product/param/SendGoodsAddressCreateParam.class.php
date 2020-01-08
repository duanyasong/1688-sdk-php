<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class SendGoodsAddressCreateParam {

        
        /**
    * @return 省
    */
        public function getProvince() {
        $tempResult = $this->sdkStdResult["province"];
        return $tempResult;
    }
    
    /**
     * 设置省     
     * @param String $province     
     * 参数示例：<pre>浙江省</pre>     
     * 此参数必填     */
    public function setProvince( $province) {
        $this->sdkStdResult["province"] = $province;
    }
    
        
        /**
    * @return 城市名
    */
        public function getCity() {
        $tempResult = $this->sdkStdResult["city"];
        return $tempResult;
    }
    
    /**
     * 设置城市名     
     * @param String $city     
     * 参数示例：<pre>杭州市</pre>     
     * 此参数必填     */
    public function setCity( $city) {
        $this->sdkStdResult["city"] = $city;
    }
    
        
        /**
    * @return 区，没有区可以使用城市名称
    */
        public function getArea() {
        $tempResult = $this->sdkStdResult["area"];
        return $tempResult;
    }
    
    /**
     * 设置区，没有区可以使用城市名称     
     * @param String $area     
     * 参数示例：<pre>滨江区</pre>     
     * 此参数必填     */
    public function setArea( $area) {
        $this->sdkStdResult["area"] = $area;
    }
    
        
        /**
    * @return 镇，可能为空
    */
        public function getTown() {
        $tempResult = $this->sdkStdResult["town"];
        return $tempResult;
    }
    
    /**
     * 设置镇，可能为空     
     * @param String $town     
     * 参数示例：<pre>**镇</pre>     
     * 此参数必填     */
    public function setTown( $town) {
        $this->sdkStdResult["town"] = $town;
    }
    
        
        /**
    * @return 详细地址
    */
        public function getAddress() {
        $tempResult = $this->sdkStdResult["address"];
        return $tempResult;
    }
    
    /**
     * 设置详细地址     
     * @param String $address     
     * 参数示例：<pre>网商路699号</pre>     
     * 此参数必填     */
    public function setAddress( $address) {
        $this->sdkStdResult["address"] = $address;
    }
    
        
        /**
    * @return 联系人
    */
        public function getContactor() {
        $tempResult = $this->sdkStdResult["contactor"];
        return $tempResult;
    }
    
    /**
     * 设置联系人     
     * @param String $contactor     
     * 参数示例：<pre>王小二</pre>     
     * 此参数必填     */
    public function setContactor( $contactor) {
        $this->sdkStdResult["contactor"] = $contactor;
    }
    
        
        /**
    * @return 移动电话，不可和phone同时为空
    */
        public function getMobile() {
        $tempResult = $this->sdkStdResult["mobile"];
        return $tempResult;
    }
    
    /**
     * 设置移动电话，不可和phone同时为空     
     * @param String $mobile     
     * 参数示例：<pre>1380000****</pre>     
     * 此参数必填     */
    public function setMobile( $mobile) {
        $this->sdkStdResult["mobile"] = $mobile;
    }
    
        
        /**
    * @return 固定电话，不可和mobile同时为空，电话格式为：区号-电话号码-分机号
    */
        public function getPhone() {
        $tempResult = $this->sdkStdResult["phone"];
        return $tempResult;
    }
    
    /**
     * 设置固定电话，不可和mobile同时为空，电话格式为：区号-电话号码-分机号     
     * @param String $phone     
     * 参数示例：<pre>010-62281010-01</pre>     
     * 此参数必填     */
    public function setPhone( $phone) {
        $this->sdkStdResult["phone"] = $phone;
    }
    
        
        /**
    * @return 邮政编码
    */
        public function getPost() {
        $tempResult = $this->sdkStdResult["post"];
        return $tempResult;
    }
    
    /**
     * 设置邮政编码     
     * @param String $post     
     * 参数示例：<pre>100001</pre>     
     * 此参数必填     */
    public function setPost( $post) {
        $this->sdkStdResult["post"] = $post;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>