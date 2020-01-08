<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCaigouMallCreateTradeOrderParam/AlibabaCaigouMallOpenTradeOrderParam.class.php');

class AlibabaCaigouMallCreateTradeOrderParam {

        
        /**
    * @return 内部商城下单参数
    */
        public function getOpenTradeOrderParam() {
        $tempResult = $this->sdkStdResult["openTradeOrderParam"];
        return $tempResult;
    }
    
    /**
     * 设置内部商城下单参数     
     * @param AlibabaCaigouMallOpenTradeOrderParam $openTradeOrderParam     
     * 参数示例：<pre>{     "offerList": [       {         "quantity": "11",         "offerId": "571603706512",         "buyerMessaage": null       }     ],     "invoice": {       "invoiceHead": {         "country": "滨江区",         "accountId": "33001616235050000559",         "bank": "建设银行杭州吴山支行",         "province": "浙江省",         "taxpayerIdentify": "91330000712561789G",         "streetAddress": "江陵路2031#钱江大厦25楼",         "city": "杭州市",         "phone": "0571-87669575",         "title": "浙江交工集团股份有限公司"       },       "invoiceHeadUseExists": "true",       "receiveAddress": {         "province": "浙江省",         "phone": "133131313",         "city": "杭州市",         "street": "测试，请不要发货",         "mobile": "133131313",         "county": "滨江区",         "postCode": "100000",         "userName": "董杰"       },       "invoiceType": "vat"     },     "needSellerConfirm": "true",     "title": "内部商城测试",     "receiveGoodsAddress": {       "province": "浙江省",       "phone": "133131313",       "city": "杭州市",       "street": "测试，请不要发货",       "mobile": "133131313",       "county": "滨江区",       "postCode": "100000",       "userName": "董杰"     }   }</pre>     
     * 此参数必填     */
    public function setOpenTradeOrderParam(AlibabaCaigouMallOpenTradeOrderParam $openTradeOrderParam) {
        $this->sdkStdResult["openTradeOrderParam"] = $openTradeOrderParam;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>