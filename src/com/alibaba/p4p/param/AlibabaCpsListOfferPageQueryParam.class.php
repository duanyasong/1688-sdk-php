<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCpsListOfferPageQueryParam {

        
        /**
    * @return 类目id
类目id和feedInfo至少输入一项
    */
        public function getCategoryId() {
        $tempResult = $this->sdkStdResult["categoryId"];
        return $tempResult;
    }
    
    /**
     * 设置类目id
类目id和feedInfo至少输入一项     
     * @param Long $categoryId     
     * 参数示例：<pre>1	农业
2	食品、饮料
4	纺织、皮革
5	电工电气
6	家用电器
7	数码、电脑
8	化工
9	冶金矿产
10	能源
12	交通运输
13	家装、建材
15	日用百货
17	工艺品、礼品
18	运动装备
51	代理
52	纸业
53	传媒、广电
54	服饰配件、饰品
55	橡塑
56	精细化学品
57	电子元器件
58	照明工业
59	五金、工具
64	环保
65	机械及行业设备
66	医药、保养
67	办公、文教
68	包装
69	商务服务
70	安全、防护
71	汽摩及配件
72	印刷
73	项目合作
96	家纺家饰
97	美容护肤/彩妆
311	童装
312	内衣
509	通信产品
1426	机床
1501	母婴用品
1813	玩具
2805	加工
2829	二手设备转让
3007	个人防护
10165	男装
10166	女装
10208	仪器仪表
1038378	鞋
1042954	箱包皮具
122916001	宠物及园艺
122916002	汽车用品
123614001	钢铁
127380009	运动服饰
130822002	餐饮生鲜
130822220	个护/家清
130823000	性保健品</pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->sdkStdResult["categoryId"] = $categoryId;
    }
    
        
        /**
    * @return 关键词或offerId
类目id和feedInfo至少输入一项
    */
        public function getFeedInfo() {
        $tempResult = $this->sdkStdResult["feedInfo"];
        return $tempResult;
    }
    
    /**
     * 设置关键词或offerId
类目id和feedInfo至少输入一项     
     * @param String $feedInfo     
     * 参数示例：<pre>Mp3
537357997672</pre>     
     * 此参数必填     */
    public function setFeedInfo( $feedInfo) {
        $this->sdkStdResult["feedInfo"] = $feedInfo;
    }
    
        
        /**
    * @return 属性标签，属性间以逗号分隔
    */
        public function getDefineTags() {
        $tempResult = $this->sdkStdResult["defineTags"];
        return $tempResult;
    }
    
    /**
     * 设置属性标签，属性间以逗号分隔     
     * @param String $defineTags     
     * 参数示例：<pre>含实力商家、深度认证、一件代发、进口货源、是否包含优惠券等标志eg:slsj_flag=true,sdrd_flag=true,yjdf_flag=true,jkhy_flag=true,yhq_flag=true</pre>     
     * 此参数必填     */
    public function setDefineTags( $defineTags) {
        $this->sdkStdResult["defineTags"] = $defineTags;
    }
    
        
        /**
    * @return 售价下限
    */
        public function getFilterMinPrice() {
        $tempResult = $this->sdkStdResult["filterMinPrice"];
        return $tempResult;
    }
    
    /**
     * 设置售价下限     
     * @param Double $filterMinPrice     
     * 参数示例：<pre>售价下限</pre>     
     * 此参数必填     */
    public function setFilterMinPrice( $filterMinPrice) {
        $this->sdkStdResult["filterMinPrice"] = $filterMinPrice;
    }
    
        
        /**
    * @return 售价上限
    */
        public function getFilterMaxPrice() {
        $tempResult = $this->sdkStdResult["filterMaxPrice"];
        return $tempResult;
    }
    
    /**
     * 设置售价上限     
     * @param Double $filterMaxPrice     
     * 参数示例：<pre>售价上限</pre>     
     * 此参数必填     */
    public function setFilterMaxPrice( $filterMaxPrice) {
        $this->sdkStdResult["filterMaxPrice"] = $filterMaxPrice;
    }
    
        
        /**
    * @return 起批量下限
    */
        public function getFilterQuantityBeginMin() {
        $tempResult = $this->sdkStdResult["filterQuantityBeginMin"];
        return $tempResult;
    }
    
    /**
     * 设置起批量下限     
     * @param Integer $filterQuantityBeginMin     
     * 参数示例：<pre>起批量下限</pre>     
     * 此参数必填     */
    public function setFilterQuantityBeginMin( $filterQuantityBeginMin) {
        $this->sdkStdResult["filterQuantityBeginMin"] = $filterQuantityBeginMin;
    }
    
        
        /**
    * @return 起批量上限
    */
        public function getFilterQuantityBeginMax() {
        $tempResult = $this->sdkStdResult["filterQuantityBeginMax"];
        return $tempResult;
    }
    
    /**
     * 设置起批量上限     
     * @param Integer $filterQuantityBeginMax     
     * 参数示例：<pre>起批量上限</pre>     
     * 此参数必填     */
    public function setFilterQuantityBeginMax( $filterQuantityBeginMax) {
        $this->sdkStdResult["filterQuantityBeginMax"] = $filterQuantityBeginMax;
    }
    
        
        /**
    * @return 销量下限
    */
        public function getFilterSaleQuantityMin() {
        $tempResult = $this->sdkStdResult["filterSaleQuantityMin"];
        return $tempResult;
    }
    
    /**
     * 设置销量下限     
     * @param Integer $filterSaleQuantityMin     
     * 参数示例：<pre>销量下限</pre>     
     * 此参数必填     */
    public function setFilterSaleQuantityMin( $filterSaleQuantityMin) {
        $this->sdkStdResult["filterSaleQuantityMin"] = $filterSaleQuantityMin;
    }
    
        
        /**
    * @return 销量上限
    */
        public function getFilterSaleQuantityMax() {
        $tempResult = $this->sdkStdResult["filterSaleQuantityMax"];
        return $tempResult;
    }
    
    /**
     * 设置销量上限     
     * @param Integer $filterSaleQuantityMax     
     * 参数示例：<pre>销量上限</pre>     
     * 此参数必填     */
    public function setFilterSaleQuantityMax( $filterSaleQuantityMax) {
        $this->sdkStdResult["filterSaleQuantityMax"] = $filterSaleQuantityMax;
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
     * 参数示例：<pre>销量：saleQuantity^asc;
价格：price^desc;
推广量：tkCnt^desc;
分佣比例：ratio^desc;
月支出佣金：tkCommission^desc;
优惠券面值：yhqDiscountFee^desc;</pre>     
     * 此参数必填     */
    public function setSortField( $sortField) {
        $this->sdkStdResult["sortField"] = $sortField;
    }
    
        
        /**
    * @return 页号
    */
        public function getPageNo() {
        $tempResult = $this->sdkStdResult["pageNo"];
        return $tempResult;
    }
    
    /**
     * 设置页号     
     * @param Integer $pageNo     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPageNo( $pageNo) {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }
    
        
        /**
    * @return 页大小
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置页大小     
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