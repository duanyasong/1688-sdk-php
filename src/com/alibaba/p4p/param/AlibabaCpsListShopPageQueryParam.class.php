<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCpsListShopPageQueryParam {

        
        /**
    * @return 卖家id
    */
        public function getSellerId() {
        $tempResult = $this->sdkStdResult["sellerId"];
        return $tempResult;
    }
    
    /**
     * 设置卖家id     
     * @param Long $sellerId     
     * 参数示例：<pre> </pre>     
     * 此参数必填     */
    public function setSellerId( $sellerId) {
        $this->sdkStdResult["sellerId"] = $sellerId;
    }
    
        
        /**
    * @return 公司名称
    */
        public function getCompanyName() {
        $tempResult = $this->sdkStdResult["companyName"];
        return $tempResult;
    }
    
    /**
     * 设置公司名称     
     * @param String $companyName     
     * 参数示例：<pre> </pre>     
     * 此参数必填     */
    public function setCompanyName( $companyName) {
        $this->sdkStdResult["companyName"] = $companyName;
    }
    
        
        /**
    * @return 类目id
    */
        public function getCategoryId() {
        $tempResult = $this->sdkStdResult["categoryId"];
        return $tempResult;
    }
    
    /**
     * 设置类目id     
     * @param Long $categoryId     
     * 参数示例：<pre>0	全部1	农业2	食品、饮料4	纺织、皮革5	电工电气6	家用电器7	数码、电脑8	化工9	冶金矿产10	能源12	交通运输13	家装、建材15	日用百货17	工艺品、礼品18	运动装备51	代理52	纸业53	传媒、广电54	服饰配件、饰品55	橡塑56	精细化学品57	电子元器件58	照明工业59	五金、工具64	环保65	机械及行业设备66	医药、保养67	办公、文教68	包装69	商务服务70	安全、防护71	汽摩及配件72	印刷73	项目合作96	家纺家饰97	美容护肤/彩妆311	童装312	内衣509	通信产品1426	机床1501	母婴用品1813	玩具2805	加工2829	二手设备转让3007	个人防护10165	男装10166	女装10208	仪器仪表1038378	鞋1042954	箱包皮具122916001	宠物及园艺122916002	汽车用品123614001	钢铁127380009	运动服饰130822002	餐饮生鲜130822220	个护/家清130823000	性保健品</pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->sdkStdResult["categoryId"] = $categoryId;
    }
    
        
        /**
    * @return 属性标签
    */
        public function getDefineTags() {
        $tempResult = $this->sdkStdResult["defineTags"];
        return $tempResult;
    }
    
    /**
     * 设置属性标签     
     * @param String $defineTags     
     * 参数示例：<pre>含实力商家、深度认证、标志
eg:slsj_flag=true,sdrd_flag=true</pre>     
     * 此参数必填     */
    public function setDefineTags( $defineTags) {
        $this->sdkStdResult["defineTags"] = $defineTags;
    }
    
        
        /**
    * @return 佣金比例下限
    */
        public function getFilterRatioMin() {
        $tempResult = $this->sdkStdResult["filterRatioMin"];
        return $tempResult;
    }
    
    /**
     * 设置佣金比例下限     
     * @param Double $filterRatioMin     
     * 参数示例：<pre>佣金比例下限</pre>     
     * 此参数必填     */
    public function setFilterRatioMin( $filterRatioMin) {
        $this->sdkStdResult["filterRatioMin"] = $filterRatioMin;
    }
    
        
        /**
    * @return 佣金比例上限
    */
        public function getFilterRatioMax() {
        $tempResult = $this->sdkStdResult["filterRatioMax"];
        return $tempResult;
    }
    
    /**
     * 设置佣金比例上限     
     * @param Double $filterRatioMax     
     * 参数示例：<pre>佣金比例上限</pre>     
     * 此参数必填     */
    public function setFilterRatioMax( $filterRatioMax) {
        $this->sdkStdResult["filterRatioMax"] = $filterRatioMax;
    }
    
        
        /**
    * @return 排序字段(desc降序，asc升序)
    */
        public function getSortField() {
        $tempResult = $this->sdkStdResult["sortField"];
        return $tempResult;
    }
    
    /**
     * 设置排序字段(desc降序，asc升序)     
     * @param String $sortField     
     * 参数示例：<pre>佣金比例：ratio^asc;
商品数量:productCnt^asc;
30天推广量：tkCnt^asc;</pre>     
     * 此参数必填     */
    public function setSortField( $sortField) {
        $this->sdkStdResult["sortField"] = $sortField;
    }
    
        
        /**
    * @return 页偏移量
    */
        public function getPageNo() {
        $tempResult = $this->sdkStdResult["pageNo"];
        return $tempResult;
    }
    
    /**
     * 设置页偏移量     
     * @param Integer $pageNo     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPageNo( $pageNo) {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }
    
        
        /**
    * @return 分页大小
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置分页大小     
     * @param Integer $pageSize     
     * 参数示例：<pre>100</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>