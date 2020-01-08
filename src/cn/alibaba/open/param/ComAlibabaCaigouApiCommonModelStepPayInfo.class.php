<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaCaigouApiCommonModelStepPayInfo extends SDKDomain {

       	
    private $percent;
    
        /**
    * @return 分摊比例：0~1之间的小数.三位小数
    */
        public function getPercent() {
        return $this->percent;
    }
    
    /**
     * 设置分摊比例：0~1之间的小数.三位小数     
     * @param Double $percent     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPercent( $percent) {
        $this->percent = $percent;
    }
    
        	
    private $supplyNoteId;
    
        /**
    * @return 报价单或者投标单id
    */
        public function getSupplyNoteId() {
        return $this->supplyNoteId;
    }
    
    /**
     * 设置报价单或者投标单id     
     * @param String $supplyNoteId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplyNoteId( $supplyNoteId) {
        $this->supplyNoteId = $supplyNoteId;
    }
    
        	
    private $stepNo;
    
        /**
    * @return 阶段序列
    */
        public function getStepNo() {
        return $this->stepNo;
    }
    
    /**
     * 设置阶段序列     
     * @param Integer $stepNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStepNo( $stepNo) {
        $this->stepNo = $stepNo;
    }
    
        	
    private $templateId;
    
        /**
    * @return 使用的模板id
    */
        public function getTemplateId() {
        return $this->templateId;
    }
    
    /**
     * 设置使用的模板id     
     * @param Long $templateId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTemplateId( $templateId) {
        $this->templateId = $templateId;
    }
    
        	
    private $stepName;
    
        /**
    * @return 当前步骤的名称
    */
        public function getStepName() {
        return $this->stepName;
    }
    
    /**
     * 设置当前步骤的名称     
     * @param String $stepName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStepName( $stepName) {
        $this->stepName = $stepName;
    }
    
        	
    private $instantPay;
    
        /**
    * @return 是否允许即时到帐 1 是 0否
    */
        public function getInstantPay() {
        return $this->instantPay;
    }
    
    /**
     * 设置是否允许即时到帐 1 是 0否     
     * @param Integer $instantPay     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInstantPay( $instantPay) {
        $this->instantPay = $instantPay;
    }
    
        	
    private $sellerActionName;
    
        /**
    * @return 卖家动作名称
    */
        public function getSellerActionName() {
        return $this->sellerActionName;
    }
    
    /**
     * 设置卖家动作名称     
     * @param String $sellerActionName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerActionName( $sellerActionName) {
        $this->sellerActionName = $sellerActionName;
    }
    
        	
    private $buyerPayTimeout;
    
        /**
    * @return 买家不付款的超时时间
    */
        public function getBuyerPayTimeout() {
        return $this->buyerPayTimeout;
    }
    
    /**
     * 设置买家不付款的超时时间     
     * @param Long $buyerPayTimeout     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerPayTimeout( $buyerPayTimeout) {
        $this->buyerPayTimeout = $buyerPayTimeout;
    }
    
        	
    private $buyerConfirmTimeout;
    
        /**
    * @return 买家不确认的超时时间
    */
        public function getBuyerConfirmTimeout() {
        return $this->buyerConfirmTimeout;
    }
    
    /**
     * 设置买家不确认的超时时间     
     * @param Long $buyerConfirmTimeout     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerConfirmTimeout( $buyerConfirmTimeout) {
        $this->buyerConfirmTimeout = $buyerConfirmTimeout;
    }
    
        	
    private $needLogistics;
    
        /**
    * @return 是否需要物流.0：不需要，1需要. 多个阶段中，只能且必须有一个阶段承担运费
    */
        public function getNeedLogistics() {
        return $this->needLogistics;
    }
    
    /**
     * 设置是否需要物流.0：不需要，1需要. 多个阶段中，只能且必须有一个阶段承担运费     
     * @param Integer $needLogistics     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedLogistics( $needLogistics) {
        $this->needLogistics = $needLogistics;
    }
    
        	
    private $needSellerAction;
    
        /**
    * @return 是否需要卖家操作和买家确认. 0:不需要，1：需要
    */
        public function getNeedSellerAction() {
        return $this->needSellerAction;
    }
    
    /**
     * 设置是否需要卖家操作和买家确认. 0:不需要，1：需要     
     * @param Integer $needSellerAction     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedSellerAction( $needSellerAction) {
        $this->needSellerAction = $needSellerAction;
    }
    
        	
    private $transferAfterConfirm;
    
        /**
    * @return 阶段结束是否打款. 0:不需要，1：需要
    */
        public function getTransferAfterConfirm() {
        return $this->transferAfterConfirm;
    }
    
    /**
     * 设置阶段结束是否打款. 0:不需要，1：需要     
     * @param Integer $transferAfterConfirm     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTransferAfterConfirm( $transferAfterConfirm) {
        $this->transferAfterConfirm = $transferAfterConfirm;
    }
    
        	
    private $needSellerCallNext;
    
        /**
    * @return 是否需要卖家推进. 0 直接进入下一阶段 1 需要卖家推进才开放下一阶段
    */
        public function getNeedSellerCallNext() {
        return $this->needSellerCallNext;
    }
    
    /**
     * 设置是否需要卖家推进. 0 直接进入下一阶段 1 需要卖家推进才开放下一阶段     
     * @param Integer $needSellerCallNext     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedSellerCallNext( $needSellerCallNext) {
        $this->needSellerCallNext = $needSellerCallNext;
    }
    
        	
    private $isStepPayAll;
    
        /**
    * @return 是否一次性付款. 0:不是. 1：是一次性付款
    */
        public function getIsStepPayAll() {
        return $this->isStepPayAll;
    }
    
    /**
     * 设置是否一次性付款. 0:不是. 1：是一次性付款     
     * @param Integer $isStepPayAll     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsStepPayAll( $isStepPayAll) {
        $this->isStepPayAll = $isStepPayAll;
    }
    
        	
    private $agreement;
    
        /**
    * @return 协议路径.提供一个协议的url地址
    */
        public function getAgreement() {
        return $this->agreement;
    }
    
    /**
     * 设置协议路径.提供一个协议的url地址     
     * @param String $agreement     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAgreement( $agreement) {
        $this->agreement = $agreement;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "percent", $this->stdResult )) {
    				$this->percent = $this->stdResult->{"percent"};
    			}
    			    		    				    			    			if (array_key_exists ( "supplyNoteId", $this->stdResult )) {
    				$this->supplyNoteId = $this->stdResult->{"supplyNoteId"};
    			}
    			    		    				    			    			if (array_key_exists ( "stepNo", $this->stdResult )) {
    				$this->stepNo = $this->stdResult->{"stepNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "templateId", $this->stdResult )) {
    				$this->templateId = $this->stdResult->{"templateId"};
    			}
    			    		    				    			    			if (array_key_exists ( "stepName", $this->stdResult )) {
    				$this->stepName = $this->stdResult->{"stepName"};
    			}
    			    		    				    			    			if (array_key_exists ( "instantPay", $this->stdResult )) {
    				$this->instantPay = $this->stdResult->{"instantPay"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerActionName", $this->stdResult )) {
    				$this->sellerActionName = $this->stdResult->{"sellerActionName"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerPayTimeout", $this->stdResult )) {
    				$this->buyerPayTimeout = $this->stdResult->{"buyerPayTimeout"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerConfirmTimeout", $this->stdResult )) {
    				$this->buyerConfirmTimeout = $this->stdResult->{"buyerConfirmTimeout"};
    			}
    			    		    				    			    			if (array_key_exists ( "needLogistics", $this->stdResult )) {
    				$this->needLogistics = $this->stdResult->{"needLogistics"};
    			}
    			    		    				    			    			if (array_key_exists ( "needSellerAction", $this->stdResult )) {
    				$this->needSellerAction = $this->stdResult->{"needSellerAction"};
    			}
    			    		    				    			    			if (array_key_exists ( "transferAfterConfirm", $this->stdResult )) {
    				$this->transferAfterConfirm = $this->stdResult->{"transferAfterConfirm"};
    			}
    			    		    				    			    			if (array_key_exists ( "needSellerCallNext", $this->stdResult )) {
    				$this->needSellerCallNext = $this->stdResult->{"needSellerCallNext"};
    			}
    			    		    				    			    			if (array_key_exists ( "isStepPayAll", $this->stdResult )) {
    				$this->isStepPayAll = $this->stdResult->{"isStepPayAll"};
    			}
    			    		    				    			    			if (array_key_exists ( "agreement", $this->stdResult )) {
    				$this->agreement = $this->stdResult->{"agreement"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "percent", $this->arrayResult )) {
    			$this->percent = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "supplyNoteId", $this->arrayResult )) {
    			$this->supplyNoteId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "stepNo", $this->arrayResult )) {
    			$this->stepNo = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "templateId", $this->arrayResult )) {
    			$this->templateId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "stepName", $this->arrayResult )) {
    			$this->stepName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "instantPay", $this->arrayResult )) {
    			$this->instantPay = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerActionName", $this->arrayResult )) {
    			$this->sellerActionName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerPayTimeout", $this->arrayResult )) {
    			$this->buyerPayTimeout = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerConfirmTimeout", $this->arrayResult )) {
    			$this->buyerConfirmTimeout = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "needLogistics", $this->arrayResult )) {
    			$this->needLogistics = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "needSellerAction", $this->arrayResult )) {
    			$this->needSellerAction = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "transferAfterConfirm", $this->arrayResult )) {
    			$this->transferAfterConfirm = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "needSellerCallNext", $this->arrayResult )) {
    			$this->needSellerCallNext = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "isStepPayAll", $this->arrayResult )) {
    			$this->isStepPayAll = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "agreement", $this->arrayResult )) {
    			$this->agreement = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>