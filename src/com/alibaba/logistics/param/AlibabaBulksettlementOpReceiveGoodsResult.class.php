<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaBulksettlementOpCreateBulkSettlementReceiveNoteParam/AlibabaBulksettlementOpReceiveNoteModel.class.php');

class AlibabaBulksettlementOpReceiveGoodsResult extends SDKDomain {

       	
    private $toSellerFee;
    
        /**
    * @return 
    */
        public function getToSellerFee() {
        return $this->toSellerFee;
    }
    
    /**
     * 设置     
     * @param Long $toSellerFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToSellerFee( $toSellerFee) {
        $this->toSellerFee = $toSellerFee;
    }
    
        	
    private $isFinish;
    
        /**
    * @return 
    */
        public function getIsFinish() {
        return $this->isFinish;
    }
    
    /**
     * 设置     
     * @param Boolean $isFinish     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIsFinish( $isFinish) {
        $this->isFinish = $isFinish;
    }
    
        	
    private $opReceiveNoteModel;
    
        /**
    * @return 
    */
        public function getOpReceiveNoteModel() {
        return $this->opReceiveNoteModel;
    }
    
    /**
     * 设置     
     * @param AlibabaBulksettlementOpReceiveNoteModel $opReceiveNoteModel     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOpReceiveNoteModel(AlibabaBulksettlementOpReceiveNoteModel $opReceiveNoteModel) {
        $this->opReceiveNoteModel = $opReceiveNoteModel;
    }
    
        	
    private $modifyPriceFlag;
    
        /**
    * @return 是否修改过商品价格
    */
        public function getModifyPriceFlag() {
        return $this->modifyPriceFlag;
    }
    
    /**
     * 设置是否修改过商品价格     
     * @param Boolean $modifyPriceFlag     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setModifyPriceFlag( $modifyPriceFlag) {
        $this->modifyPriceFlag = $modifyPriceFlag;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "toSellerFee", $this->stdResult )) {
    				$this->toSellerFee = $this->stdResult->{"toSellerFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "isFinish", $this->stdResult )) {
    				$this->isFinish = $this->stdResult->{"isFinish"};
    			}
    			    		    				    			    			if (array_key_exists ( "opReceiveNoteModel", $this->stdResult )) {
    				$opReceiveNoteModelResult=$this->stdResult->{"opReceiveNoteModel"};
    				$this->opReceiveNoteModel = new AlibabaBulksettlementOpReceiveNoteModel();
    				$this->opReceiveNoteModel->setStdResult ( $opReceiveNoteModelResult);
    			}
    			    		    				    			    			if (array_key_exists ( "modifyPriceFlag", $this->stdResult )) {
    				$this->modifyPriceFlag = $this->stdResult->{"modifyPriceFlag"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "toSellerFee", $this->arrayResult )) {
    			$this->toSellerFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "isFinish", $this->arrayResult )) {
    			$this->isFinish = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "opReceiveNoteModel", $this->arrayResult )) {
    		$opReceiveNoteModelResult=$arrayResult['${paramType.paramName}'];
    			    			$this->opReceiveNoteModel = new AlibabaBulksettlementOpReceiveNoteModel();
    			    			$this->opReceiveNoteModel->setStdResult ( $opReceiveNoteModelResult);
    		}
    		    	    			    		    			if (array_key_exists ( "modifyPriceFlag", $this->arrayResult )) {
    			$this->modifyPriceFlag = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>