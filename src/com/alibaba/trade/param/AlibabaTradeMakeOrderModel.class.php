<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaTradeSaleproxyPreorderParam/AlibabaTradeSimpleBuyer.class.php');
include_once ('AlibabaTradeSaleproxyPreorderParam/AlibabaPaymentPayChannels.class.php');
include_once ('AlibabaTradeSaleproxyPreorderParam/AlibabaTradeSimpleSeller.class.php');
include_once ('AlibabaTradeSaleproxyPreorderParam/AlibabaTradeSimpleSeller.class.php');
include_once ('AlibabaTradeSaleproxyPreorderParam/AlibabaTradeTradeModeModel.class.php');
include_once ('AlibabaTradeSaleproxyPreorderParam/AlibabaTradeToleranceCollection.class.php');
include_once ('AlibabaTradeSaleproxyPreorderParam/AlibabaTradeCargo.class.php');
include_once ('AlibabaTradeSaleproxyPreorderParam/AlibabaTradeOpPromotionInfor.class.php');

class AlibabaTradeMakeOrderModel extends SDKDomain {

       	
    private $additionalFee;
    
        /**
    * @return 
    */
        public function getAdditionalFee() {
        return $this->additionalFee;
    }
    
    /**
     * 设置     
     * @param Long $additionalFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAdditionalFee( $additionalFee) {
        $this->additionalFee = $additionalFee;
    }
    
        	
    private $auccountPeriod;
    
        /**
    * @return 
    */
        public function getAuccountPeriod() {
        return $this->auccountPeriod;
    }
    
    /**
     * 设置     
     * @param Integer $auccountPeriod     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAuccountPeriod( $auccountPeriod) {
        $this->auccountPeriod = $auccountPeriod;
    }
    
        	
    private $bizGroup;
    
        /**
    * @return 
    */
        public function getBizGroup() {
        return $this->bizGroup;
    }
    
    /**
     * 设置     
     * @param String $bizGroup     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBizGroup( $bizGroup) {
        $this->bizGroup = $bizGroup;
    }
    
        	
    private $client;
    
        /**
    * @return 
    */
        public function getClient() {
        return $this->client;
    }
    
    /**
     * 设置     
     * @param String $client     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setClient( $client) {
        $this->client = $client;
    }
    
        	
    private $discountFee;
    
        /**
    * @return 
    */
        public function getDiscountFee() {
        return $this->discountFee;
    }
    
    /**
     * 设置     
     * @param Long $discountFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDiscountFee( $discountFee) {
        $this->discountFee = $discountFee;
    }
    
        	
    private $famousStep;
    
        /**
    * @return 
    */
        public function getFamousStep() {
        return $this->famousStep;
    }
    
    /**
     * 设置     
     * @param Boolean $famousStep     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFamousStep( $famousStep) {
        $this->famousStep = $famousStep;
    }
    
        	
    private $flowFlag;
    
        /**
    * @return 
    */
        public function getFlowFlag() {
        return $this->flowFlag;
    }
    
    /**
     * 设置     
     * @param String $flowFlag     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFlowFlag( $flowFlag) {
        $this->flowFlag = $flowFlag;
    }
    
        	
    private $group;
    
        /**
    * @return 
    */
        public function getGroup() {
        return $this->group;
    }
    
    /**
     * 设置     
     * @param String $group     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroup( $group) {
        $this->group = $group;
    }
    
        	
    private $hasBeenDealtWireless;
    
        /**
    * @return 
    */
        public function getHasBeenDealtWireless() {
        return $this->hasBeenDealtWireless;
    }
    
    /**
     * 设置     
     * @param Boolean $hasBeenDealtWireless     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setHasBeenDealtWireless( $hasBeenDealtWireless) {
        $this->hasBeenDealtWireless = $hasBeenDealtWireless;
    }
    
        	
    private $instantSenceQuota;
    
        /**
    * @return 
    */
        public function getInstantSenceQuota() {
        return $this->instantSenceQuota;
    }
    
    /**
     * 设置     
     * @param Long $instantSenceQuota     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInstantSenceQuota( $instantSenceQuota) {
        $this->instantSenceQuota = $instantSenceQuota;
    }
    
        	
    private $instantSenceRaiseQuota;
    
        /**
    * @return 
    */
        public function getInstantSenceRaiseQuota() {
        return $this->instantSenceRaiseQuota;
    }
    
    /**
     * 设置     
     * @param Long $instantSenceRaiseQuota     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInstantSenceRaiseQuota( $instantSenceRaiseQuota) {
        $this->instantSenceRaiseQuota = $instantSenceRaiseQuota;
    }
    
        	
    private $isSupportNormalPayInsant;
    
        /**
    * @return 
    */
        public function getIsSupportNormalPayInsant() {
        return $this->isSupportNormalPayInsant;
    }
    
    /**
     * 设置     
     * @param Integer $isSupportNormalPayInsant     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsSupportNormalPayInsant( $isSupportNormalPayInsant) {
        $this->isSupportNormalPayInsant = $isSupportNormalPayInsant;
    }
    
        	
    private $message;
    
        /**
    * @return 
    */
        public function getMessage() {
        return $this->message;
    }
    
    /**
     * 设置     
     * @param String $message     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMessage( $message) {
        $this->message = $message;
    }
    
        	
    private $remark;
    
        /**
    * @return 
    */
        public function getRemark() {
        return $this->remark;
    }
    
    /**
     * 设置     
     * @param String $remark     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRemark( $remark) {
        $this->remark = $remark;
    }
    
        	
    private $resultCode;
    
        /**
    * @return 
    */
        public function getResultCode() {
        return $this->resultCode;
    }
    
    /**
     * 设置     
     * @param String $resultCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->resultCode = $resultCode;
    }
    
        	
    private $status;
    
        /**
    * @return 
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置     
     * @param Boolean $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $subBizType;
    
        /**
    * @return 
    */
        public function getSubBizType() {
        return $this->subBizType;
    }
    
    /**
     * 设置     
     * @param String $subBizType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubBizType( $subBizType) {
        $this->subBizType = $subBizType;
    }
    
        	
    private $sumCarriage;
    
        /**
    * @return 
    */
        public function getSumCarriage() {
        return $this->sumCarriage;
    }
    
    /**
     * 设置     
     * @param Long $sumCarriage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSumCarriage( $sumCarriage) {
        $this->sumCarriage = $sumCarriage;
    }
    
        	
    private $sumPayment;
    
        /**
    * @return 
    */
        public function getSumPayment() {
        return $this->sumPayment;
    }
    
    /**
     * 设置     
     * @param Long $sumPayment     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSumPayment( $sumPayment) {
        $this->sumPayment = $sumPayment;
    }
    
        	
    private $sumPaymentNoCarriage;
    
        /**
    * @return 
    */
        public function getSumPaymentNoCarriage() {
        return $this->sumPaymentNoCarriage;
    }
    
    /**
     * 设置     
     * @param Long $sumPaymentNoCarriage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSumPaymentNoCarriage( $sumPaymentNoCarriage) {
        $this->sumPaymentNoCarriage = $sumPaymentNoCarriage;
    }
    
        	
    private $supportInvoice;
    
        /**
    * @return 
    */
        public function getSupportInvoice() {
        return $this->supportInvoice;
    }
    
    /**
     * 设置     
     * @param Boolean $supportInvoice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupportInvoice( $supportInvoice) {
        $this->supportInvoice = $supportInvoice;
    }
    
        	
    private $supportStepPay;
    
        /**
    * @return 
    */
        public function getSupportStepPay() {
        return $this->supportStepPay;
    }
    
    /**
     * 设置     
     * @param String $supportStepPay     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupportStepPay( $supportStepPay) {
        $this->supportStepPay = $supportStepPay;
    }
    
        	
    private $buyer;
    
        /**
    * @return 
    */
        public function getBuyer() {
        return $this->buyer;
    }
    
    /**
     * 设置     
     * @param AlibabaTradeSimpleBuyer $buyer     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyer(AlibabaTradeSimpleBuyer $buyer) {
        $this->buyer = $buyer;
    }
    
        	
    private $payChannels;
    
        /**
    * @return 
    */
        public function getPayChannels() {
        return $this->payChannels;
    }
    
    /**
     * 设置     
     * @param AlibabaPaymentPayChannels $payChannels     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPayChannels(AlibabaPaymentPayChannels $payChannels) {
        $this->payChannels = $payChannels;
    }
    
        	
    private $seller;
    
        /**
    * @return 
    */
        public function getSeller() {
        return $this->seller;
    }
    
    /**
     * 设置     
     * @param AlibabaTradeSimpleSeller $seller     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSeller(AlibabaTradeSimpleSeller $seller) {
        $this->seller = $seller;
    }
    
        	
    private $simpleSeller;
    
        /**
    * @return 
    */
        public function getSimpleSeller() {
        return $this->simpleSeller;
    }
    
    /**
     * 设置     
     * @param AlibabaTradeSimpleSeller $simpleSeller     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSimpleSeller(AlibabaTradeSimpleSeller $simpleSeller) {
        $this->simpleSeller = $simpleSeller;
    }
    
        	
    private $tradeModeModel;
    
        /**
    * @return 
    */
        public function getTradeModeModel() {
        return $this->tradeModeModel;
    }
    
    /**
     * 设置     
     * @param AlibabaTradeTradeModeModel $tradeModeModel     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeModeModel(AlibabaTradeTradeModeModel $tradeModeModel) {
        $this->tradeModeModel = $tradeModeModel;
    }
    
        	
    private $toleranceCollection;
    
        /**
    * @return 
    */
        public function getToleranceCollection() {
        return $this->toleranceCollection;
    }
    
    /**
     * 设置     
     * @param AlibabaTradeToleranceCollection $toleranceCollection     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToleranceCollection(AlibabaTradeToleranceCollection $toleranceCollection) {
        $this->toleranceCollection = $toleranceCollection;
    }
    
        	
    private $cargos;
    
        /**
    * @return 货品信息
    */
        public function getCargos() {
        return $this->cargos;
    }
    
    /**
     * 设置货品信息     
     * @param array include @see AlibabaTradeCargo[] $cargos     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCargos(AlibabaTradeCargo $cargos) {
        $this->cargos = $cargos;
    }
    
        	
    private $shopPromotionInfo;
    
        /**
    * @return 店铺级别的优惠信息
    */
        public function getShopPromotionInfo() {
        return $this->shopPromotionInfo;
    }
    
    /**
     * 设置店铺级别的优惠信息     
     * @param AlibabaTradeOpPromotionInfor $shopPromotionInfo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setShopPromotionInfo(AlibabaTradeOpPromotionInfor $shopPromotionInfo) {
        $this->shopPromotionInfo = $shopPromotionInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "additionalFee", $this->stdResult )) {
    				$this->additionalFee = $this->stdResult->{"additionalFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "auccountPeriod", $this->stdResult )) {
    				$this->auccountPeriod = $this->stdResult->{"auccountPeriod"};
    			}
    			    		    				    			    			if (array_key_exists ( "bizGroup", $this->stdResult )) {
    				$this->bizGroup = $this->stdResult->{"bizGroup"};
    			}
    			    		    				    			    			if (array_key_exists ( "client", $this->stdResult )) {
    				$this->client = $this->stdResult->{"client"};
    			}
    			    		    				    			    			if (array_key_exists ( "discountFee", $this->stdResult )) {
    				$this->discountFee = $this->stdResult->{"discountFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "famousStep", $this->stdResult )) {
    				$this->famousStep = $this->stdResult->{"famousStep"};
    			}
    			    		    				    			    			if (array_key_exists ( "flowFlag", $this->stdResult )) {
    				$this->flowFlag = $this->stdResult->{"flowFlag"};
    			}
    			    		    				    			    			if (array_key_exists ( "group", $this->stdResult )) {
    				$this->group = $this->stdResult->{"group"};
    			}
    			    		    				    			    			if (array_key_exists ( "hasBeenDealtWireless", $this->stdResult )) {
    				$this->hasBeenDealtWireless = $this->stdResult->{"hasBeenDealtWireless"};
    			}
    			    		    				    			    			if (array_key_exists ( "instantSenceQuota", $this->stdResult )) {
    				$this->instantSenceQuota = $this->stdResult->{"instantSenceQuota"};
    			}
    			    		    				    			    			if (array_key_exists ( "instantSenceRaiseQuota", $this->stdResult )) {
    				$this->instantSenceRaiseQuota = $this->stdResult->{"instantSenceRaiseQuota"};
    			}
    			    		    				    			    			if (array_key_exists ( "isSupportNormalPayInsant", $this->stdResult )) {
    				$this->isSupportNormalPayInsant = $this->stdResult->{"isSupportNormalPayInsant"};
    			}
    			    		    				    			    			if (array_key_exists ( "message", $this->stdResult )) {
    				$this->message = $this->stdResult->{"message"};
    			}
    			    		    				    			    			if (array_key_exists ( "remark", $this->stdResult )) {
    				$this->remark = $this->stdResult->{"remark"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultCode", $this->stdResult )) {
    				$this->resultCode = $this->stdResult->{"resultCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "subBizType", $this->stdResult )) {
    				$this->subBizType = $this->stdResult->{"subBizType"};
    			}
    			    		    				    			    			if (array_key_exists ( "sumCarriage", $this->stdResult )) {
    				$this->sumCarriage = $this->stdResult->{"sumCarriage"};
    			}
    			    		    				    			    			if (array_key_exists ( "sumPayment", $this->stdResult )) {
    				$this->sumPayment = $this->stdResult->{"sumPayment"};
    			}
    			    		    				    			    			if (array_key_exists ( "sumPaymentNoCarriage", $this->stdResult )) {
    				$this->sumPaymentNoCarriage = $this->stdResult->{"sumPaymentNoCarriage"};
    			}
    			    		    				    			    			if (array_key_exists ( "supportInvoice", $this->stdResult )) {
    				$this->supportInvoice = $this->stdResult->{"supportInvoice"};
    			}
    			    		    				    			    			if (array_key_exists ( "supportStepPay", $this->stdResult )) {
    				$this->supportStepPay = $this->stdResult->{"supportStepPay"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyer", $this->stdResult )) {
    				$buyerResult=$this->stdResult->{"buyer"};
    				$this->buyer = new AlibabaTradeSimpleBuyer();
    				$this->buyer->setStdResult ( $buyerResult);
    			}
    			    		    				    			    			if (array_key_exists ( "payChannels", $this->stdResult )) {
    				$payChannelsResult=$this->stdResult->{"payChannels"};
    				$this->payChannels = new AlibabaPaymentPayChannels();
    				$this->payChannels->setStdResult ( $payChannelsResult);
    			}
    			    		    				    			    			if (array_key_exists ( "seller", $this->stdResult )) {
    				$sellerResult=$this->stdResult->{"seller"};
    				$this->seller = new AlibabaTradeSimpleSeller();
    				$this->seller->setStdResult ( $sellerResult);
    			}
    			    		    				    			    			if (array_key_exists ( "simpleSeller", $this->stdResult )) {
    				$simpleSellerResult=$this->stdResult->{"simpleSeller"};
    				$this->simpleSeller = new AlibabaTradeSimpleSeller();
    				$this->simpleSeller->setStdResult ( $simpleSellerResult);
    			}
    			    		    				    			    			if (array_key_exists ( "tradeModeModel", $this->stdResult )) {
    				$tradeModeModelResult=$this->stdResult->{"tradeModeModel"};
    				$this->tradeModeModel = new AlibabaTradeTradeModeModel();
    				$this->tradeModeModel->setStdResult ( $tradeModeModelResult);
    			}
    			    		    				    			    			if (array_key_exists ( "toleranceCollection", $this->stdResult )) {
    				$toleranceCollectionResult=$this->stdResult->{"toleranceCollection"};
    				$this->toleranceCollection = new AlibabaTradeToleranceCollection();
    				$this->toleranceCollection->setStdResult ( $toleranceCollectionResult);
    			}
    			    		    				    			    			if (array_key_exists ( "cargos", $this->stdResult )) {
    			$cargosResult=$this->stdResult->{"cargos"};
    				$object = json_decode ( json_encode ( $cargosResult ), true );
					$this->cargos = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaTradeCargoResult=new AlibabaTradeCargo();
						$AlibabaTradeCargoResult->setArrayResult($arrayobject );
						$this->cargos [$i] = $AlibabaTradeCargoResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "shopPromotionInfo", $this->stdResult )) {
    				$shopPromotionInfoResult=$this->stdResult->{"shopPromotionInfo"};
    				$this->shopPromotionInfo = new AlibabaTradeOpPromotionInfor();
    				$this->shopPromotionInfo->setStdResult ( $shopPromotionInfoResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "additionalFee", $this->arrayResult )) {
    			$this->additionalFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "auccountPeriod", $this->arrayResult )) {
    			$this->auccountPeriod = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "bizGroup", $this->arrayResult )) {
    			$this->bizGroup = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "client", $this->arrayResult )) {
    			$this->client = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "discountFee", $this->arrayResult )) {
    			$this->discountFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "famousStep", $this->arrayResult )) {
    			$this->famousStep = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "flowFlag", $this->arrayResult )) {
    			$this->flowFlag = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "group", $this->arrayResult )) {
    			$this->group = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "hasBeenDealtWireless", $this->arrayResult )) {
    			$this->hasBeenDealtWireless = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "instantSenceQuota", $this->arrayResult )) {
    			$this->instantSenceQuota = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "instantSenceRaiseQuota", $this->arrayResult )) {
    			$this->instantSenceRaiseQuota = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "isSupportNormalPayInsant", $this->arrayResult )) {
    			$this->isSupportNormalPayInsant = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "message", $this->arrayResult )) {
    			$this->message = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "remark", $this->arrayResult )) {
    			$this->remark = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "resultCode", $this->arrayResult )) {
    			$this->resultCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subBizType", $this->arrayResult )) {
    			$this->subBizType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sumCarriage", $this->arrayResult )) {
    			$this->sumCarriage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sumPayment", $this->arrayResult )) {
    			$this->sumPayment = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sumPaymentNoCarriage", $this->arrayResult )) {
    			$this->sumPaymentNoCarriage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supportInvoice", $this->arrayResult )) {
    			$this->supportInvoice = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supportStepPay", $this->arrayResult )) {
    			$this->supportStepPay = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "buyer", $this->arrayResult )) {
    		$buyerResult=$arrayResult['${paramType.paramName}'];
    			    			$this->buyer = new AlibabaTradeSimpleBuyer();
    			    			$this->buyer->setStdResult ( $buyerResult);
    		}
    		    	    			    		    		if (array_key_exists ( "payChannels", $this->arrayResult )) {
    		$payChannelsResult=$arrayResult['${paramType.paramName}'];
    			    			$this->payChannels = new AlibabaPaymentPayChannels();
    			    			$this->payChannels->setStdResult ( $payChannelsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "seller", $this->arrayResult )) {
    		$sellerResult=$arrayResult['${paramType.paramName}'];
    			    			$this->seller = new AlibabaTradeSimpleSeller();
    			    			$this->seller->setStdResult ( $sellerResult);
    		}
    		    	    			    		    		if (array_key_exists ( "simpleSeller", $this->arrayResult )) {
    		$simpleSellerResult=$arrayResult['${paramType.paramName}'];
    			    			$this->simpleSeller = new AlibabaTradeSimpleSeller();
    			    			$this->simpleSeller->setStdResult ( $simpleSellerResult);
    		}
    		    	    			    		    		if (array_key_exists ( "tradeModeModel", $this->arrayResult )) {
    		$tradeModeModelResult=$arrayResult['${paramType.paramName}'];
    			    			$this->tradeModeModel = new AlibabaTradeTradeModeModel();
    			    			$this->tradeModeModel->setStdResult ( $tradeModeModelResult);
    		}
    		    	    			    		    		if (array_key_exists ( "toleranceCollection", $this->arrayResult )) {
    		$toleranceCollectionResult=$arrayResult['${paramType.paramName}'];
    			    			$this->toleranceCollection = new AlibabaTradeToleranceCollection();
    			    			$this->toleranceCollection->setStdResult ( $toleranceCollectionResult);
    		}
    		    	    			    		    		if (array_key_exists ( "cargos", $this->arrayResult )) {
    		$cargosResult=$arrayResult['${paramType.paramName}'];
    			$this->cargos = new AlibabaTradeCargo();
    			$this->cargos->setStdResult ( $cargosResult);
    		}
    		    	    			    		    		if (array_key_exists ( "shopPromotionInfo", $this->arrayResult )) {
    		$shopPromotionInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->shopPromotionInfo = new AlibabaTradeOpPromotionInfor();
    			    			$this->shopPromotionInfo->setStdResult ( $shopPromotionInfoResult);
    		}
    		    	    		}
 
   
}
?>