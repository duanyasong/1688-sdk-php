<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductPriceEditParam/AlibabaPriceRangeInfo.class.php');
include_once ('AlibabaProductPriceEditParam/SkuPriceInfo.class.php');

class AlibabaProductPriceEditParam {

        
        /**
    * @return 待修改的商品ID
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置待修改的商品ID     
     * @param String $productId     
     * 参数示例：<pre>501223411123</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 阶梯价格，会覆盖掉之前所有的阶梯价格。注意阶梯价格应该从高到低排列
    */
        public function getPriceRangList() {
        $tempResult = $this->sdkStdResult["priceRangList"];
        return $tempResult;
    }
    
    /**
     * 设置阶梯价格，会覆盖掉之前所有的阶梯价格。注意阶梯价格应该从高到低排列     
     * @param array include @see AlibabaPriceRangeInfo[] $priceRangList     
     * 参数示例：<pre>[],</pre>     
     * 此参数必填     */
    public function setPriceRangList(AlibabaPriceRangeInfo $priceRangList) {
        $this->sdkStdResult["priceRangList"] = $priceRangList;
    }
    
        
        /**
    * @return 规格价格
    */
        public function getSkuPriceList() {
        $tempResult = $this->sdkStdResult["skuPriceList"];
        return $tempResult;
    }
    
    /**
     * 设置规格价格     
     * @param array include @see SkuPriceInfo[] $skuPriceList     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setSkuPriceList(SkuPriceInfo $skuPriceList) {
        $this->sdkStdResult["skuPriceList"] = $skuPriceList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>