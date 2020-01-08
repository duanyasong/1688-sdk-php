<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductPushProductSetupParam {

        
        /**
    * @return 铺货目标的ISV的appkey，并不是调用者的appKey
    */
        public function getAppKey() {
        $tempResult = $this->sdkStdResult["appKey"];
        return $tempResult;
    }
    
    /**
     * 设置铺货目标的ISV的appkey，并不是调用者的appKey     
     * @param String $appKey     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAppKey( $appKey) {
        $this->sdkStdResult["appKey"] = $appKey;
    }
    
        
        /**
    * @return 发起铺货的用户在1688上的标志。该标志在用户授权给ISV时已经传递给ISV。所以ISV可以根据该标志去定位下游平台的用户标志。
    */
        public function getUserIdInSourcePlatform() {
        $tempResult = $this->sdkStdResult["userIdInSourcePlatform"];
        return $tempResult;
    }
    
    /**
     * 设置发起铺货的用户在1688上的标志。该标志在用户授权给ISV时已经传递给ISV。所以ISV可以根据该标志去定位下游平台的用户标志。     
     * @param String $userIdInSourcePlatform     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUserIdInSourcePlatform( $userIdInSourcePlatform) {
        $this->sdkStdResult["userIdInSourcePlatform"] = $userIdInSourcePlatform;
    }
    
        
        /**
    * @return 目标平台标志，该ID是由1688统一定义的。可以通过文档或者API的方式获取这个统一定义的平台标志的涵义。ISV接受到该标志意味着：发起铺货的用户需要把商品铺货到该目标平台。
    */
        public function getTargetPlatformId() {
        $tempResult = $this->sdkStdResult["targetPlatformId"];
        return $tempResult;
    }
    
    /**
     * 设置目标平台标志，该ID是由1688统一定义的。可以通过文档或者API的方式获取这个统一定义的平台标志的涵义。ISV接受到该标志意味着：发起铺货的用户需要把商品铺货到该目标平台。     
     * @param String $targetPlatformId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTargetPlatformId( $targetPlatformId) {
        $this->sdkStdResult["targetPlatformId"] = $targetPlatformId;
    }
    
        
        /**
    * @return 目标平台的店铺标志，由于同一个自然人可能在同一个平台有多个店铺。所以该用户可以在1688上选择一个店铺进行铺货，如果传递了该店铺标志，则ISV需要默认把商品推送到目标平台的该店铺下。
如果1688没有传递该字段，而在ISV的APP上有记录了该用户拥有多个店铺，则ISV需要让用户在APP上选择铺货到那个店铺。
    */
        public function getTargetPlatformShopId() {
        $tempResult = $this->sdkStdResult["targetPlatformShopId"];
        return $tempResult;
    }
    
    /**
     * 设置目标平台的店铺标志，由于同一个自然人可能在同一个平台有多个店铺。所以该用户可以在1688上选择一个店铺进行铺货，如果传递了该店铺标志，则ISV需要默认把商品推送到目标平台的该店铺下。
如果1688没有传递该字段，而在ISV的APP上有记录了该用户拥有多个店铺，则ISV需要让用户在APP上选择铺货到那个店铺。     
     * @param String $targetPlatformShopId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTargetPlatformShopId( $targetPlatformShopId) {
        $this->sdkStdResult["targetPlatformShopId"] = $targetPlatformShopId;
    }
    
        
        /**
    * @return 产品ID列表，如果是多个产品，则以”,”分隔。1688只传递商品ID，ID需要根据商品再获取一次商品详情。如何获取见详情API。
    */
        public function getPushProductIds() {
        $tempResult = $this->sdkStdResult["pushProductIds"];
        return $tempResult;
    }
    
    /**
     * 设置产品ID列表，如果是多个产品，则以”,”分隔。1688只传递商品ID，ID需要根据商品再获取一次商品详情。如何获取见详情API。     
     * @param String $pushProductIds     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPushProductIds( $pushProductIds) {
        $this->sdkStdResult["pushProductIds"] = $pushProductIds;
    }
    
        
        /**
    * @return 在1688通过ISV铺货给目标平台时，可能会携带业务标志，ISV需要记录该业务标志，并且在订单回流时携带该业务标志。如果1688没有传递该标志，则忽略该字段。
    */
        public function getSourceBizId() {
        $tempResult = $this->sdkStdResult["sourceBizId"];
        return $tempResult;
    }
    
    /**
     * 设置在1688通过ISV铺货给目标平台时，可能会携带业务标志，ISV需要记录该业务标志，并且在订单回流时携带该业务标志。如果1688没有传递该标志，则忽略该字段。     
     * @param String $sourceBizId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSourceBizId( $sourceBizId) {
        $this->sdkStdResult["sourceBizId"] = $sourceBizId;
    }
    
        
        /**
    * @return 多渠道铺货的解决方案中，网站会通过开放平台访问ISV的铺货页面，并且嵌入到1688的页面中。在这个过程中可能会出错（比如参数传递的不对，访问权限问题，ISV的APP设置不正确等原因），此时开放平台需要把请求跳转到一个错误页面上，提示稍微友好点的错误提示。该参数为可选字段，如果调用者不传递该字段，则采用API配置的默认错误页面。如果传递了该字段，则把用户重定向到该错误页面。
    */
        public function getErrorPage() {
        $tempResult = $this->sdkStdResult["errorPage"];
        return $tempResult;
    }
    
    /**
     * 设置多渠道铺货的解决方案中，网站会通过开放平台访问ISV的铺货页面，并且嵌入到1688的页面中。在这个过程中可能会出错（比如参数传递的不对，访问权限问题，ISV的APP设置不正确等原因），此时开放平台需要把请求跳转到一个错误页面上，提示稍微友好点的错误提示。该参数为可选字段，如果调用者不传递该字段，则采用API配置的默认错误页面。如果传递了该字段，则把用户重定向到该错误页面。     
     * @param String $errorPage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setErrorPage( $errorPage) {
        $this->sdkStdResult["errorPage"] = $errorPage;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>