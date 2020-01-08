<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaLstShiporderCreateParam/TmallLstorderClientOpenParamLstThirdPartMainShipOrderCreateDTO.class.php');

class AlibabaLstShiporderCreateParam {

        
        /**
    * @return 创建发货单入参
    */
        public function getShipOrder() {
        $tempResult = $this->sdkStdResult["shipOrder"];
        return $tempResult;
    }
    
    /**
     * 设置创建发货单入参     
     * @param TmallLstorderClientOpenParamLstThirdPartMainShipOrderCreateDTO $shipOrder     
     * 参数示例：<pre>{   "receiver_town": "长河街道",   "out_order_id": "121212",   "receiver_zip": "000000",   "receiver_city": "杭州市",   "buyer_message": "这是留言啊",   "pay_fee": 30000,   "receiver_address": "网商路699xx大厦",   "buyer_name": "张三副食批发部",   "receiver_mobile": 18719065946,   "receiver_phone": "8812812",   "receiver_name": "张三",   "receiver_district": "西湖区",   "order_create_time": "2019-04-11 17:08:03",   "details": [     {       "sale_quantity": 10,       "sku_brand": "金龙鱼",       "detail_order_id": "1212121",       "sku_price": 3000,       "sku_name": "金龙鱼优选一级大豆油5L",       "sku_spec": "5L",       "pay_fee": 30000,       "sku_unit": "瓶",       "sku_code": "6948195800460"     }   ],   "receiver_province": "浙江省" }</pre>     
     * 此参数必填     */
    public function setShipOrder(TmallLstorderClientOpenParamLstThirdPartMainShipOrderCreateDTO $shipOrder) {
        $this->sdkStdResult["shipOrder"] = $shipOrder;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>