<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaCpsOpenTradeBillDTO extends SDKDomain {

       	
    private $bizId;
    
        /**
    * @return 主订单号
    */
        public function getBizId() {
        return $this->bizId;
    }
    
    /**
     * 设置主订单号     
     * @param Long $bizId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizId( $bizId) {
        $this->bizId = $bizId;
    }
    
        	
    private $bizSubId;
    
        /**
    * @return 子订单号
    */
        public function getBizSubId() {
        return $this->bizSubId;
    }
    
    /**
     * 设置子订单号     
     * @param Long $bizSubId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizSubId( $bizSubId) {
        $this->bizSubId = $bizSubId;
    }
    
        	
    private $feedId;
    
        /**
    * @return 商品ID
    */
        public function getFeedId() {
        return $this->feedId;
    }
    
    /**
     * 设置商品ID     
     * @param Long $feedId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFeedId( $feedId) {
        $this->feedId = $feedId;
    }
    
        	
    private $name;
    
        /**
    * @return 商品名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置商品名称     
     * @param String $name     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $tradeAmount;
    
        /**
    * @return 成交金额
    */
        public function getTradeAmount() {
        return $this->tradeAmount;
    }
    
    /**
     * 设置成交金额     
     * @param Double $tradeAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeAmount( $tradeAmount) {
        $this->tradeAmount = $tradeAmount;
    }
    
        	
    private $tradeNumber;
    
        /**
    * @return 成交商品数
    */
        public function getTradeNumber() {
        return $this->tradeNumber;
    }
    
    /**
     * 设置成交商品数     
     * @param Integer $tradeNumber     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeNumber( $tradeNumber) {
        $this->tradeNumber = $tradeNumber;
    }
    
        	
    private $createTime;
    
        /**
    * @return 创建时间
    */
        public function getCreateTime() {
        return $this->createTime;
    }
    
    /**
     * 设置创建时间     
     * @param Date $createTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCreateTime( $createTime) {
        $this->createTime = $createTime;
    }
    
        	
    private $confirmTime;
    
        /**
    * @return 确定收货时间
    */
        public function getConfirmTime() {
        return $this->confirmTime;
    }
    
    /**
     * 设置确定收货时间     
     * @param Date $confirmTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setConfirmTime( $confirmTime) {
        $this->confirmTime = $confirmTime;
    }
    
        	
    private $orderState;
    
        /**
    * @return 订单状态
    */
        public function getOrderState() {
        return $this->orderState;
    }
    
    /**
     * 设置订单状态     
     * @param Integer $orderState     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderState( $orderState) {
        $this->orderState = $orderState;
    }
    
        	
    private $settleTime;
    
        /**
    * @return 结算时间
    */
        public function getSettleTime() {
        return $this->settleTime;
    }
    
    /**
     * 设置结算时间     
     * @param Date $settleTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSettleTime( $settleTime) {
        $this->settleTime = $settleTime;
    }
    
        	
    private $settleState;
    
        /**
    * @return 结算状态
    */
        public function getSettleState() {
        return $this->settleState;
    }
    
    /**
     * 设置结算状态     
     * @param Integer $settleState     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSettleState( $settleState) {
        $this->settleState = $settleState;
    }
    
        	
    private $ratio;
    
        /**
    * @return 佣金比例
    */
        public function getRatio() {
        return $this->ratio;
    }
    
    /**
     * 设置佣金比例     
     * @param Double $ratio     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRatio( $ratio) {
        $this->ratio = $ratio;
    }
    
        	
    private $commission;
    
        /**
    * @return 佣金金额
    */
        public function getCommission() {
        return $this->commission;
    }
    
    /**
     * 设置佣金金额     
     * @param Double $commission     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCommission( $commission) {
        $this->commission = $commission;
    }
    
        	
    private $subCommission;
    
        /**
    * @return 子推客佣金
    */
        public function getSubCommission() {
        return $this->subCommission;
    }
    
    /**
     * 设置子推客佣金     
     * @param Double $subCommission     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubCommission( $subCommission) {
        $this->subCommission = $subCommission;
    }
    
        	
    private $type;
    
        /**
    * @return 推广类型 0：商品，1：店铺，2：活动，9：三方
    */
        public function getType() {
        return $this->type;
    }
    
    /**
     * 设置推广类型 0：商品，1：店铺，2：活动，9：三方     
     * @param Integer $type     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->type = $type;
    }
    
        	
    private $mediaId;
    
        /**
    * @return 媒体
    */
        public function getMediaId() {
        return $this->mediaId;
    }
    
    /**
     * 设置媒体     
     * @param Long $mediaId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMediaId( $mediaId) {
        $this->mediaId = $mediaId;
    }
    
        	
    private $mediaZoneId;
    
        /**
    * @return 推广位
    */
        public function getMediaZoneId() {
        return $this->mediaZoneId;
    }
    
    /**
     * 设置推广位     
     * @param Long $mediaZoneId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMediaZoneId( $mediaZoneId) {
        $this->mediaZoneId = $mediaZoneId;
    }
    
        	
    private $tkId;
    
        /**
    * @return 推客id
    */
        public function getTkId() {
        return $this->tkId;
    }
    
    /**
     * 设置推客id     
     * @param Long $tkId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTkId( $tkId) {
        $this->tkId = $tkId;
    }
    
        	
    private $subTkId;
    
        /**
    * @return 子推客id
    */
        public function getSubTkId() {
        return $this->subTkId;
    }
    
    /**
     * 设置子推客id     
     * @param Long $subTkId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubTkId( $subTkId) {
        $this->subTkId = $subTkId;
    }
    
        	
    private $tkRatio;
    
        /**
    * @return 主推客的分佣比例
    */
        public function getTkRatio() {
        return $this->tkRatio;
    }
    
    /**
     * 设置主推客的分佣比例     
     * @param Double $tkRatio     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTkRatio( $tkRatio) {
        $this->tkRatio = $tkRatio;
    }
    
        	
    private $subTkRatio;
    
        /**
    * @return 子推客分佣比例
    */
        public function getSubTkRatio() {
        return $this->subTkRatio;
    }
    
    /**
     * 设置子推客分佣比例     
     * @param Double $subTkRatio     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubTkRatio( $subTkRatio) {
        $this->subTkRatio = $subTkRatio;
    }
    
        	
    private $platformRatio;
    
        /**
    * @return 平台分成比例
    */
        public function getPlatformRatio() {
        return $this->platformRatio;
    }
    
    /**
     * 设置平台分成比例     
     * @param Double $platformRatio     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPlatformRatio( $platformRatio) {
        $this->platformRatio = $platformRatio;
    }
    
        	
    private $buyerId;
    
        /**
    * @return 买家id
    */
        public function getBuyerId() {
        return $this->buyerId;
    }
    
    /**
     * 设置买家id     
     * @param Long $buyerId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerId( $buyerId) {
        $this->buyerId = $buyerId;
    }
    
        	
    private $sellerId;
    
        /**
    * @return 卖家id
    */
        public function getSellerId() {
        return $this->sellerId;
    }
    
    /**
     * 设置卖家id     
     * @param Long $sellerId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerId( $sellerId) {
        $this->sellerId = $sellerId;
    }
    
        	
    private $tradeType;
    
        /**
    * @return 交易类型，对应交易线的类型
    */
        public function getTradeType() {
        return $this->tradeType;
    }
    
    /**
     * 设置交易类型，对应交易线的类型     
     * @param String $tradeType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeType( $tradeType) {
        $this->tradeType = $tradeType;
    }
    
        	
    private $subsidizationRatio;
    
        /**
    * @return 补贴金额比例
    */
        public function getSubsidizationRatio() {
        return $this->subsidizationRatio;
    }
    
    /**
     * 设置补贴金额比例     
     * @param Double $subsidizationRatio     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubsidizationRatio( $subsidizationRatio) {
        $this->subsidizationRatio = $subsidizationRatio;
    }
    
        	
    private $subsidizationAmount;
    
        /**
    * @return 推客补贴金额
    */
        public function getSubsidizationAmount() {
        return $this->subsidizationAmount;
    }
    
    /**
     * 设置推客补贴金额     
     * @param Double $subsidizationAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubsidizationAmount( $subsidizationAmount) {
        $this->subsidizationAmount = $subsidizationAmount;
    }
    
        	
    private $subSubsidizationAmount;
    
        /**
    * @return 子推客补贴金额
    */
        public function getSubSubsidizationAmount() {
        return $this->subSubsidizationAmount;
    }
    
    /**
     * 设置子推客补贴金额     
     * @param Double $subSubsidizationAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubSubsidizationAmount( $subSubsidizationAmount) {
        $this->subSubsidizationAmount = $subSubsidizationAmount;
    }
    
        	
    private $ext;
    
        /**
    * @return ext字段
    */
        public function getExt() {
        return $this->ext;
    }
    
    /**
     * 设置ext字段     
     * @param String $ext     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setExt( $ext) {
        $this->ext = $ext;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "bizId", $this->stdResult )) {
    				$this->bizId = $this->stdResult->{"bizId"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizSubId", $this->stdResult )) {
    				$this->bizSubId = $this->stdResult->{"bizSubId"};
    			}
    			    		    				    			    			if (array_key_exists ( "feedId", $this->stdResult )) {
    				$this->feedId = $this->stdResult->{"feedId"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "tradeAmount", $this->stdResult )) {
    				$this->tradeAmount = $this->stdResult->{"tradeAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "tradeNumber", $this->stdResult )) {
    				$this->tradeNumber = $this->stdResult->{"tradeNumber"};
    			}
    			    		    				    			    			if (array_key_exists ( "createTime", $this->stdResult )) {
    				$this->createTime = $this->stdResult->{"createTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "confirmTime", $this->stdResult )) {
    				$this->confirmTime = $this->stdResult->{"confirmTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderState", $this->stdResult )) {
    				$this->orderState = $this->stdResult->{"orderState"};
    			}
    			    		    				    			    			if (array_key_exists ( "settleTime", $this->stdResult )) {
    				$this->settleTime = $this->stdResult->{"settleTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "settleState", $this->stdResult )) {
    				$this->settleState = $this->stdResult->{"settleState"};
    			}
    			    		    				    			    			if (array_key_exists ( "ratio", $this->stdResult )) {
    				$this->ratio = $this->stdResult->{"ratio"};
    			}
    			    		    				    			    			if (array_key_exists ( "commission", $this->stdResult )) {
    				$this->commission = $this->stdResult->{"commission"};
    			}
    			    		    				    			    			if (array_key_exists ( "subCommission", $this->stdResult )) {
    				$this->subCommission = $this->stdResult->{"subCommission"};
    			}
    			    		    				    			    			if (array_key_exists ( "type", $this->stdResult )) {
    				$this->type = $this->stdResult->{"type"};
    			}
    			    		    				    			    			if (array_key_exists ( "mediaId", $this->stdResult )) {
    				$this->mediaId = $this->stdResult->{"mediaId"};
    			}
    			    		    				    			    			if (array_key_exists ( "mediaZoneId", $this->stdResult )) {
    				$this->mediaZoneId = $this->stdResult->{"mediaZoneId"};
    			}
    			    		    				    			    			if (array_key_exists ( "tkId", $this->stdResult )) {
    				$this->tkId = $this->stdResult->{"tkId"};
    			}
    			    		    				    			    			if (array_key_exists ( "subTkId", $this->stdResult )) {
    				$this->subTkId = $this->stdResult->{"subTkId"};
    			}
    			    		    				    			    			if (array_key_exists ( "tkRatio", $this->stdResult )) {
    				$this->tkRatio = $this->stdResult->{"tkRatio"};
    			}
    			    		    				    			    			if (array_key_exists ( "subTkRatio", $this->stdResult )) {
    				$this->subTkRatio = $this->stdResult->{"subTkRatio"};
    			}
    			    		    				    			    			if (array_key_exists ( "platformRatio", $this->stdResult )) {
    				$this->platformRatio = $this->stdResult->{"platformRatio"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerId", $this->stdResult )) {
    				$this->buyerId = $this->stdResult->{"buyerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerId", $this->stdResult )) {
    				$this->sellerId = $this->stdResult->{"sellerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "tradeType", $this->stdResult )) {
    				$this->tradeType = $this->stdResult->{"tradeType"};
    			}
    			    		    				    			    			if (array_key_exists ( "subsidizationRatio", $this->stdResult )) {
    				$this->subsidizationRatio = $this->stdResult->{"subsidizationRatio"};
    			}
    			    		    				    			    			if (array_key_exists ( "subsidizationAmount", $this->stdResult )) {
    				$this->subsidizationAmount = $this->stdResult->{"subsidizationAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "subSubsidizationAmount", $this->stdResult )) {
    				$this->subSubsidizationAmount = $this->stdResult->{"subSubsidizationAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "ext", $this->stdResult )) {
    				$this->ext = $this->stdResult->{"ext"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "bizId", $this->arrayResult )) {
    			$this->bizId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizSubId", $this->arrayResult )) {
    			$this->bizSubId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "feedId", $this->arrayResult )) {
    			$this->feedId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "tradeAmount", $this->arrayResult )) {
    			$this->tradeAmount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "tradeNumber", $this->arrayResult )) {
    			$this->tradeNumber = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "createTime", $this->arrayResult )) {
    			$this->createTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "confirmTime", $this->arrayResult )) {
    			$this->confirmTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderState", $this->arrayResult )) {
    			$this->orderState = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "settleTime", $this->arrayResult )) {
    			$this->settleTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "settleState", $this->arrayResult )) {
    			$this->settleState = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "ratio", $this->arrayResult )) {
    			$this->ratio = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "commission", $this->arrayResult )) {
    			$this->commission = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subCommission", $this->arrayResult )) {
    			$this->subCommission = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "type", $this->arrayResult )) {
    			$this->type = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "mediaId", $this->arrayResult )) {
    			$this->mediaId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "mediaZoneId", $this->arrayResult )) {
    			$this->mediaZoneId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "tkId", $this->arrayResult )) {
    			$this->tkId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subTkId", $this->arrayResult )) {
    			$this->subTkId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "tkRatio", $this->arrayResult )) {
    			$this->tkRatio = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subTkRatio", $this->arrayResult )) {
    			$this->subTkRatio = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "platformRatio", $this->arrayResult )) {
    			$this->platformRatio = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerId", $this->arrayResult )) {
    			$this->buyerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerId", $this->arrayResult )) {
    			$this->sellerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "tradeType", $this->arrayResult )) {
    			$this->tradeType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subsidizationRatio", $this->arrayResult )) {
    			$this->subsidizationRatio = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subsidizationAmount", $this->arrayResult )) {
    			$this->subsidizationAmount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subSubsidizationAmount", $this->arrayResult )) {
    			$this->subSubsidizationAmount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "ext", $this->arrayResult )) {
    			$this->ext = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>