<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCouponReadParam {

        
        /**
    * @return 优惠券类型，现在只支持商品优惠券（1）、分销优惠券（60）
    */
        public function getCouponType() {
        $tempResult = $this->sdkStdResult["couponType"];
        return $tempResult;
    }
    
    /**
     * 设置优惠券类型，现在只支持商品优惠券（1）、分销优惠券（60）     
     * @param Integer $couponType     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setCouponType( $couponType) {
        $this->sdkStdResult["couponType"] = $couponType;
    }
    
        
        /**
    * @return 优惠券有效期开始时间范围起始时间
    */
        public function getCouponStartTimeS() {
        $tempResult = $this->sdkStdResult["couponStartTimeS"];
        return $tempResult;
    }
    
    /**
     * 设置优惠券有效期开始时间范围起始时间     
     * @param Date $couponStartTimeS     
     * 参数示例：<pre>20180222000000000+0800</pre>     
     * 此参数必填     */
    public function setCouponStartTimeS( $couponStartTimeS) {
        $this->sdkStdResult["couponStartTimeS"] = $couponStartTimeS;
    }
    
        
        /**
    * @return 每页大小
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页大小     
     * @param Integer $pageSize     
     * 参数示例：<pre>20</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 请求的页码
    */
        public function getPageIndex() {
        $tempResult = $this->sdkStdResult["pageIndex"];
        return $tempResult;
    }
    
    /**
     * 设置请求的页码     
     * @param Integer $pageIndex     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPageIndex( $pageIndex) {
        $this->sdkStdResult["pageIndex"] = $pageIndex;
    }
    
        
        /**
    * @return 买家优惠券状态, 优惠券的状态有：未使用、使用中、已使用、已赠送
     * 未使用：1
     * 使用中：0
     * 已使用：-2
     * 已赠送：3
     * 全部状态：null
    */
        public function getStatus() {
        $tempResult = $this->sdkStdResult["status"];
        return $tempResult;
    }
    
    /**
     * 设置买家优惠券状态, 优惠券的状态有：未使用、使用中、已使用、已赠送
     * 未使用：1
     * 使用中：0
     * 已使用：-2
     * 已赠送：3
     * 全部状态：null     
     * @param Integer $status     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->sdkStdResult["status"] = $status;
    }
    
        
        /**
    * @return 优惠券有效期开始时间的截止范围时间
    */
        public function getCouponEndTimeS() {
        $tempResult = $this->sdkStdResult["couponEndTimeS"];
        return $tempResult;
    }
    
    /**
     * 设置优惠券有效期开始时间的截止范围时间     
     * @param Date $couponEndTimeS     
     * 参数示例：<pre>20180222000000000+0800</pre>     
     * 此参数必填     */
    public function setCouponEndTimeS( $couponEndTimeS) {
        $this->sdkStdResult["couponEndTimeS"] = $couponEndTimeS;
    }
    
        
        /**
    * @return 优惠券有效期结束时间范围的结束时间
    */
        public function getCouponStartTimeE() {
        $tempResult = $this->sdkStdResult["couponStartTimeE"];
        return $tempResult;
    }
    
    /**
     * 设置优惠券有效期结束时间范围的结束时间     
     * @param Date $couponStartTimeE     
     * 参数示例：<pre>20180222000000000+0800</pre>     
     * 此参数必填     */
    public function setCouponStartTimeE( $couponStartTimeE) {
        $this->sdkStdResult["couponStartTimeE"] = $couponStartTimeE;
    }
    
        
        /**
    * @return 优惠券有效期结束时间的截止范围时间
    */
        public function getCouponEndTimeE() {
        $tempResult = $this->sdkStdResult["couponEndTimeE"];
        return $tempResult;
    }
    
    /**
     * 设置优惠券有效期结束时间的截止范围时间     
     * @param Date $couponEndTimeE     
     * 参数示例：<pre>20180222000000000+0800</pre>     
     * 此参数必填     */
    public function setCouponEndTimeE( $couponEndTimeE) {
        $this->sdkStdResult["couponEndTimeE"] = $couponEndTimeE;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>