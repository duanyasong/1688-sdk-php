<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaCaigouMallCreateTradeOrderParam/AlibabaCaigouMallOpenOfferParam.class.php');
include_once ('AlibabaCaigouMallCreateTradeOrderParam/AlibabaCaigouMallOpenInvoiceParam.class.php');
include_once ('AlibabaCaigouMallCreateTradeOrderParam/AlibabaCaigouMallOpenReceiveAddressParam.class.php');

class AlibabaCaigouMallOpenTradeOrderParam extends SDKDomain {

       	
    private $offerList;
    
        /**
    * @return 商品参数
    */
        public function getOfferList() {
        return $this->offerList;
    }
    
    /**
     * 设置商品参数     
     * @param array include @see AlibabaCaigouMallOpenOfferParam[] $offerList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOfferList(AlibabaCaigouMallOpenOfferParam $offerList) {
        $this->offerList = $offerList;
    }
    
        	
    private $invoice;
    
        /**
    * @return 发票信息
    */
        public function getInvoice() {
        return $this->invoice;
    }
    
    /**
     * 设置发票信息     
     * @param AlibabaCaigouMallOpenInvoiceParam $invoice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoice(AlibabaCaigouMallOpenInvoiceParam $invoice) {
        $this->invoice = $invoice;
    }
    
        	
    private $receiveGoodsAddress;
    
        /**
    * @return 临时收货地址
    */
        public function getReceiveGoodsAddress() {
        return $this->receiveGoodsAddress;
    }
    
    /**
     * 设置临时收货地址     
     * @param AlibabaCaigouMallOpenReceiveAddressParam $receiveGoodsAddress     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiveGoodsAddress(AlibabaCaigouMallOpenReceiveAddressParam $receiveGoodsAddress) {
        $this->receiveGoodsAddress = $receiveGoodsAddress;
    }
    
        	
    private $needSellerConfirm;
    
        /**
    * @return 是否需要卖家确认
    */
        public function getNeedSellerConfirm() {
        return $this->needSellerConfirm;
    }
    
    /**
     * 设置是否需要卖家确认     
     * @param String $needSellerConfirm     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setNeedSellerConfirm( $needSellerConfirm) {
        $this->needSellerConfirm = $needSellerConfirm;
    }
    
        	
    private $title;
    
        /**
    * @return 采购单标题
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置采购单标题     
     * @param String $title     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $subLoginId;
    
        /**
    * @return 子账号的登陆账号,这个为下单主体
    */
        public function getSubLoginId() {
        return $this->subLoginId;
    }
    
    /**
     * 设置子账号的登陆账号,这个为下单主体     
     * @param String $subLoginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSubLoginId( $subLoginId) {
        $this->subLoginId = $subLoginId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "offerList", $this->stdResult )) {
    			$offerListResult=$this->stdResult->{"offerList"};
    				$object = json_decode ( json_encode ( $offerListResult ), true );
					$this->offerList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaCaigouMallOpenOfferParamResult=new AlibabaCaigouMallOpenOfferParam();
						$AlibabaCaigouMallOpenOfferParamResult->setArrayResult($arrayobject );
						$this->offerList [$i] = $AlibabaCaigouMallOpenOfferParamResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "invoice", $this->stdResult )) {
    				$invoiceResult=$this->stdResult->{"invoice"};
    				$this->invoice = new AlibabaCaigouMallOpenInvoiceParam();
    				$this->invoice->setStdResult ( $invoiceResult);
    			}
    			    		    				    			    			if (array_key_exists ( "receiveGoodsAddress", $this->stdResult )) {
    				$receiveGoodsAddressResult=$this->stdResult->{"receiveGoodsAddress"};
    				$this->receiveGoodsAddress = new AlibabaCaigouMallOpenReceiveAddressParam();
    				$this->receiveGoodsAddress->setStdResult ( $receiveGoodsAddressResult);
    			}
    			    		    				    			    			if (array_key_exists ( "needSellerConfirm", $this->stdResult )) {
    				$this->needSellerConfirm = $this->stdResult->{"needSellerConfirm"};
    			}
    			    		    				    			    			if (array_key_exists ( "title", $this->stdResult )) {
    				$this->title = $this->stdResult->{"title"};
    			}
    			    		    				    			    			if (array_key_exists ( "subLoginId", $this->stdResult )) {
    				$this->subLoginId = $this->stdResult->{"subLoginId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "offerList", $this->arrayResult )) {
    		$offerListResult=$arrayResult['${paramType.paramName}'];
    			$this->offerList = new AlibabaCaigouMallOpenOfferParam();
    			$this->offerList->setStdResult ( $offerListResult);
    		}
    		    	    			    		    		if (array_key_exists ( "invoice", $this->arrayResult )) {
    		$invoiceResult=$arrayResult['${paramType.paramName}'];
    			    			$this->invoice = new AlibabaCaigouMallOpenInvoiceParam();
    			    			$this->invoice->setStdResult ( $invoiceResult);
    		}
    		    	    			    		    		if (array_key_exists ( "receiveGoodsAddress", $this->arrayResult )) {
    		$receiveGoodsAddressResult=$arrayResult['${paramType.paramName}'];
    			    			$this->receiveGoodsAddress = new AlibabaCaigouMallOpenReceiveAddressParam();
    			    			$this->receiveGoodsAddress->setStdResult ( $receiveGoodsAddressResult);
    		}
    		    	    			    		    			if (array_key_exists ( "needSellerConfirm", $this->arrayResult )) {
    			$this->needSellerConfirm = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "title", $this->arrayResult )) {
    			$this->title = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "subLoginId", $this->arrayResult )) {
    			$this->subLoginId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>