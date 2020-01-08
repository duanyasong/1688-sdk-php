<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTradeQuotationOrderCreateParam/AlibabaOpenplatformTradeBizMakeSingleOrderGroup.class.php');
include_once ('AlibabaTradeQuotationOrderCreateParam/AlibabaOpenplatformTradeQuotationIdParam.class.php');

class AlibabaTradeQuotationOrderCreateParam {

        
        /**
    * @return 下单详情信息
    */
        public function getMakeSingleOrderGroup() {
        $tempResult = $this->sdkStdResult["makeSingleOrderGroup"];
        return $tempResult;
    }
    
    /**
     * 设置下单详情信息     
     * @param AlibabaOpenplatformTradeBizMakeSingleOrderGroup $makeSingleOrderGroup     
     * 参数示例：<pre>{"receiveAddressGroup":{"address":"聚合路699号","areaCode":"330108","fullName":"洪洲阳","mobile":"13817748888","postCode":"311200"}}</pre>     
     * 此参数必填     */
    public function setMakeSingleOrderGroup(AlibabaOpenplatformTradeBizMakeSingleOrderGroup $makeSingleOrderGroup) {
        $this->sdkStdResult["makeSingleOrderGroup"] = $makeSingleOrderGroup;
    }
    
        
        /**
    * @return 询报价单参数标志
    */
        public function getQuotationInfo() {
        $tempResult = $this->sdkStdResult["quotationInfo"];
        return $tempResult;
    }
    
    /**
     * 设置询报价单参数标志     
     * @param AlibabaOpenplatformTradeQuotationIdParam $quotationInfo     
     * 参数示例：<pre>{"buyerMemberId":"b2b-2248564064","quoteItemIds":[1107742990902],"supplyNoteId":"959751330902"}</pre>     
     * 此参数必填     */
    public function setQuotationInfo(AlibabaOpenplatformTradeQuotationIdParam $quotationInfo) {
        $this->sdkStdResult["quotationInfo"] = $quotationInfo;
    }
    
        
        /**
    * @return 下单流程类型，普通询报价："buyoffer";分阶段付款："bostep";多种类交易(item种类大于50个)："mulitem";其他方式，在交易下单页面选取："other";
    */
        public function getSubBiz() {
        $tempResult = $this->sdkStdResult["subBiz"];
        return $tempResult;
    }
    
    /**
     * 设置下单流程类型，普通询报价："buyoffer";分阶段付款："bostep";多种类交易(item种类大于50个)："mulitem";其他方式，在交易下单页面选取："other";     
     * @param String $subBiz     
     * 参数示例：<pre>buyoffer</pre>     
     * 此参数必填     */
    public function setSubBiz( $subBiz) {
        $this->sdkStdResult["subBiz"] = $subBiz;
    }
    
        
        /**
    * @return 是否子账号
    */
        public function getSubUser() {
        $tempResult = $this->sdkStdResult["subUser"];
        return $tempResult;
    }
    
    /**
     * 设置是否子账号     
     * @param Boolean $subUser     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setSubUser( $subUser) {
        $this->sdkStdResult["subUser"] = $subUser;
    }
    
        
        /**
    * @return 子账号userid
    */
        public function getSubUserId() {
        $tempResult = $this->sdkStdResult["subUserId"];
        return $tempResult;
    }
    
    /**
     * 设置子账号userid     
     * @param Long $subUserId     
     * 参数示例：<pre>122455</pre>     
     * 此参数必填     */
    public function setSubUserId( $subUserId) {
        $this->sdkStdResult["subUserId"] = $subUserId;
    }
    
        
        /**
    * @return 子账号登录ID
    */
        public function getSubLoginId() {
        $tempResult = $this->sdkStdResult["subLoginId"];
        return $tempResult;
    }
    
    /**
     * 设置子账号登录ID     
     * @param String $subLoginId     
     * 参数示例：<pre>测试:子账号1</pre>     
     * 此参数必填     */
    public function setSubLoginId( $subLoginId) {
        $this->sdkStdResult["subLoginId"] = $subLoginId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>