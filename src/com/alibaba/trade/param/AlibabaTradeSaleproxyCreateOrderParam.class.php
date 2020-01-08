<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTradeSaleproxyCreateOrderParam/AlibabaOpenplatformTradeBizCargoGroup.class.php');
include_once ('AlibabaTradeSaleproxyCreateOrderParam/AlibabaOpenplatformTradeBizInvoiceGroup.class.php');
include_once ('AlibabaTradeSaleproxyCreateOrderParam/AlibabaOpenplatformTradeBizOtherInfoGroup.class.php');
include_once ('AlibabaTradeSaleproxyCreateOrderParam/AlibabaOpenplatformTradeBizReceiveAddressGroup.class.php');

class AlibabaTradeSaleproxyCreateOrderParam {

        
        /**
    * @return 商品信息列表。JSON串，其中：offerId，quantity（数量），specId（sku offer对应的specId），unitPrice（单价）这几个字段必须有值
    */
        public function getCargoGroups() {
        $tempResult = $this->sdkStdResult["cargoGroups"];
        return $tempResult;
    }
    
    /**
     * 设置商品信息列表。JSON串，其中：offerId，quantity（数量），specId（sku offer对应的specId），unitPrice（单价）这几个字段必须有值     
     * @param array include @see AlibabaOpenplatformTradeBizCargoGroup[] $cargoGroups     
     * 参数示例：<pre>[
    {
        "buyerCharge": false,
        "chooseFreeFreight": 0,
        "free": false,
        "isVirtual": 0,
        "offerId": 1234567890,
        "priceFactor": 1,
        "quantity": 2,
        "specId": "891c26ad4c825b5a8b9cddbe383376a8",
        "unitPrice": 2
    }
]</pre>     
     * 此参数必填     */
    public function setCargoGroups(AlibabaOpenplatformTradeBizCargoGroup $cargoGroups) {
        $this->sdkStdResult["cargoGroups"] = $cargoGroups;
    }
    
        
        /**
    * @return 发票信息，若没有可不填。
    */
        public function getInvoiceGroup() {
        $tempResult = $this->sdkStdResult["invoiceGroup"];
        return $tempResult;
    }
    
    /**
     * 设置发票信息，若没有可不填。     
     * @param AlibabaOpenplatformTradeBizInvoiceGroup $invoiceGroup     
     * 参数示例：<pre>{}</pre>     
     * 此参数必填     */
    public function setInvoiceGroup(AlibabaOpenplatformTradeBizInvoiceGroup $invoiceGroup) {
        $this->sdkStdResult["invoiceGroup"] = $invoiceGroup;
    }
    
        
        /**
    * @return 其它信息，针对订单级别。JSON串格式，重要字段：message（买家留言），totalAmount（必填字段，总金额= 货品总金额 + 运费，单位: 元），mixAmount（混批金额，必填），mixNumber（混批数量），sumCarriage（总运费，单位元），filledCarriage（用户填写的运费 单位:元），promotionId(优惠id，如果有订单级别优惠，必须传此值才有效)，additionalFee（附加费,单位元）
    */
        public function getOtherInfoGroup() {
        $tempResult = $this->sdkStdResult["otherInfoGroup"];
        return $tempResult;
    }
    
    /**
     * 设置其它信息，针对订单级别。JSON串格式，重要字段：message（买家留言），totalAmount（必填字段，总金额= 货品总金额 + 运费，单位: 元），mixAmount（混批金额，必填），mixNumber（混批数量），sumCarriage（总运费，单位元），filledCarriage（用户填写的运费 单位:元），promotionId(优惠id，如果有订单级别优惠，必须传此值才有效)，additionalFee（附加费,单位元）     
     * @param AlibabaOpenplatformTradeBizOtherInfoGroup $otherInfoGroup     
     * 参数示例：<pre>{
    "additionalFee": 0,
    "chooseFreeFreight": "0",
    "discountFee": 0,
    "filledCarriage": 0,
    "guaranteeFee": 0,
    "message": "testCreateOrder",
    "needCheckCode": false,
    "needCheckInstant": -1,
    "needInstallment": false,
    "needRegist": false,
    "orderCodFee": 0,
    "payEntry": "multiStep",
    "payWay": "42",
    "sumCarriage": 0,
    "supportInvoice": false,
    "toleranceFreight": "0",
    "totalAmount": 4,
    "totalProductAmount": 0,
    "umpSysAvailble": "1",
    "mixAmount": "3",
    "mixNumber": "3"
}</pre>     
     * 此参数必填     */
    public function setOtherInfoGroup(AlibabaOpenplatformTradeBizOtherInfoGroup $otherInfoGroup) {
        $this->sdkStdResult["otherInfoGroup"] = $otherInfoGroup;
    }
    
        
        /**
    * @return 收货地址。JSON串，主要字段：addressId（用户在阿里巴巴保存的地址的id。若能提供，其他可以不填。若不能提供，请设为-1），fullName（收货人姓名），areaCode，cityCode，provinceCode（县/区，市，省份编码。参考”行政区划代码“），address（街道地址），mobile（手机），phone（电话），postCode（邮编）
    */
        public function getReceiveAddressGroup() {
        $tempResult = $this->sdkStdResult["receiveAddressGroup"];
        return $tempResult;
    }
    
    /**
     * 设置收货地址。JSON串，主要字段：addressId（用户在阿里巴巴保存的地址的id。若能提供，其他可以不填。若不能提供，请设为-1），fullName（收货人姓名），areaCode，cityCode，provinceCode（县/区，市，省份编码。参考”行政区划代码“），address（街道地址），mobile（手机），phone（电话），postCode（邮编）     
     * @param AlibabaOpenplatformTradeBizReceiveAddressGroup $receiveAddressGroup     
     * 参数示例：<pre>"address": "网商路699号",
    "addressCode": "330108",
    "areaCode": "330108",
    "fullName": "张三2222",
    "group": "123",
    "isDefault": false,
    "isTemp": false,
    "isText": false,
    "mobile": "15170421517",
    "postCode": "310052"
}</pre>     
     * 此参数必填     */
    public function setReceiveAddressGroup(AlibabaOpenplatformTradeBizReceiveAddressGroup $receiveAddressGroup) {
        $this->sdkStdResult["receiveAddressGroup"] = $receiveAddressGroup;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>