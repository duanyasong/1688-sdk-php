<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaLstShiporderCreateParam/TmallLstorderClientOpenParamLstThirdPartDetailShipOrderCreateDTO.class.php');

class TmallLstorderClientOpenParamLstThirdPartMainShipOrderCreateDTO extends SDKDomain {

       	
    private $buyerMessage;
    
        /**
    * @return 买家留言
    */
        public function getBuyerMessage() {
        return $this->buyerMessage;
    }
    
    /**
     * 设置买家留言     
     * @param String $buyerMessage     
     * 参数示例：<pre>这是留言啊	</pre>     
     * 此参数必填     */
    public function setBuyerMessage( $buyerMessage) {
        $this->buyerMessage = $buyerMessage;
    }
    
        	
    private $buyerName;
    
        /**
    * @return 店铺名称
    */
        public function getBuyerName() {
        return $this->buyerName;
    }
    
    /**
     * 设置店铺名称     
     * @param String $buyerName     
     * 参数示例：<pre>张三副食批发部	</pre>     
     * 此参数必填     */
    public function setBuyerName( $buyerName) {
        $this->buyerName = $buyerName;
    }
    
        	
    private $details;
    
        /**
    * @return 货品明细
    */
        public function getDetails() {
        return $this->details;
    }
    
    /**
     * 设置货品明细     
     * @param array include @see TmallLstorderClientOpenParamLstThirdPartDetailShipOrderCreateDTO[] $details     
     * 参数示例：<pre>details</pre>     
     * 此参数必填     */
    public function setDetails(TmallLstorderClientOpenParamLstThirdPartDetailShipOrderCreateDTO $details) {
        $this->details = $details;
    }
    
        	
    private $orderCreateTime;
    
        /**
    * @return 订单创建时间
    */
        public function getOrderCreateTime() {
        return $this->orderCreateTime;
    }
    
    /**
     * 设置订单创建时间     
     * @param Date $orderCreateTime     
     * 参数示例：<pre>2018-08-14 17:08:03	</pre>     
     * 此参数必填     */
    public function setOrderCreateTime( $orderCreateTime) {
        $this->orderCreateTime = $orderCreateTime;
    }
    
        	
    private $outOrderId;
    
        /**
    * @return 外部订单ID，幂等key
    */
        public function getOutOrderId() {
        return $this->outOrderId;
    }
    
    /**
     * 设置外部订单ID，幂等key     
     * @param String $outOrderId     
     * 参数示例：<pre>11222114</pre>     
     * 此参数必填     */
    public function setOutOrderId( $outOrderId) {
        $this->outOrderId = $outOrderId;
    }
    
        	
    private $payFee;
    
        /**
    * @return 订单实付金额，单位为分
    */
        public function getPayFee() {
        return $this->payFee;
    }
    
    /**
     * 设置订单实付金额，单位为分     
     * @param Long $payFee     
     * 参数示例：<pre>30000	</pre>     
     * 此参数必填     */
    public function setPayFee( $payFee) {
        $this->payFee = $payFee;
    }
    
        	
    private $receiverAddress;
    
        /**
    * @return 详细地址
    */
        public function getReceiverAddress() {
        return $this->receiverAddress;
    }
    
    /**
     * 设置详细地址     
     * @param String $receiverAddress     
     * 参数示例：<pre>网商路699xx大厦	</pre>     
     * 此参数必填     */
    public function setReceiverAddress( $receiverAddress) {
        $this->receiverAddress = $receiverAddress;
    }
    
        	
    private $receiverCity;
    
        /**
    * @return 市
    */
        public function getReceiverCity() {
        return $this->receiverCity;
    }
    
    /**
     * 设置市     
     * @param String $receiverCity     
     * 参数示例：<pre>杭州市	</pre>     
     * 此参数必填     */
    public function setReceiverCity( $receiverCity) {
        $this->receiverCity = $receiverCity;
    }
    
        	
    private $receiverDistrict;
    
        /**
    * @return 区
    */
        public function getReceiverDistrict() {
        return $this->receiverDistrict;
    }
    
    /**
     * 设置区     
     * @param String $receiverDistrict     
     * 参数示例：<pre>西湖区	</pre>     
     * 此参数必填     */
    public function setReceiverDistrict( $receiverDistrict) {
        $this->receiverDistrict = $receiverDistrict;
    }
    
        	
    private $receiverMobile;
    
        /**
    * @return 收货人手机号
    */
        public function getReceiverMobile() {
        return $this->receiverMobile;
    }
    
    /**
     * 设置收货人手机号     
     * @param Long $receiverMobile     
     * 参数示例：<pre>18711111111</pre>     
     * 此参数必填     */
    public function setReceiverMobile( $receiverMobile) {
        $this->receiverMobile = $receiverMobile;
    }
    
        	
    private $receiverName;
    
        /**
    * @return 收货人姓名张三	
    */
        public function getReceiverName() {
        return $this->receiverName;
    }
    
    /**
     * 设置收货人姓名张三	     
     * @param String $receiverName     
     * 参数示例：<pre>张三	</pre>     
     * 此参数必填     */
    public function setReceiverName( $receiverName) {
        $this->receiverName = $receiverName;
    }
    
        	
    private $receiverPhone;
    
        /**
    * @return 电话
    */
        public function getReceiverPhone() {
        return $this->receiverPhone;
    }
    
    /**
     * 设置电话     
     * @param String $receiverPhone     
     * 参数示例：<pre>8812812	</pre>     
     * 此参数必填     */
    public function setReceiverPhone( $receiverPhone) {
        $this->receiverPhone = $receiverPhone;
    }
    
        	
    private $receiverProvince;
    
        /**
    * @return 省
    */
        public function getReceiverProvince() {
        return $this->receiverProvince;
    }
    
    /**
     * 设置省     
     * @param String $receiverProvince     
     * 参数示例：<pre>浙江省</pre>     
     * 此参数必填     */
    public function setReceiverProvince( $receiverProvince) {
        $this->receiverProvince = $receiverProvince;
    }
    
        	
    private $receiverTown;
    
        /**
    * @return 街道
    */
        public function getReceiverTown() {
        return $this->receiverTown;
    }
    
    /**
     * 设置街道     
     * @param String $receiverTown     
     * 参数示例：<pre>长河街道</pre>     
     * 此参数必填     */
    public function setReceiverTown( $receiverTown) {
        $this->receiverTown = $receiverTown;
    }
    
        	
    private $receiverZip;
    
        /**
    * @return 邮编
    */
        public function getReceiverZip() {
        return $this->receiverZip;
    }
    
    /**
     * 设置邮编     
     * @param String $receiverZip     
     * 参数示例：<pre>000000</pre>     
     * 此参数必填     */
    public function setReceiverZip( $receiverZip) {
        $this->receiverZip = $receiverZip;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "buyerMessage", $this->stdResult )) {
    				$this->buyerMessage = $this->stdResult->{"buyerMessage"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerName", $this->stdResult )) {
    				$this->buyerName = $this->stdResult->{"buyerName"};
    			}
    			    		    				    			    			if (array_key_exists ( "details", $this->stdResult )) {
    			$detailsResult=$this->stdResult->{"details"};
    				$object = json_decode ( json_encode ( $detailsResult ), true );
					$this->details = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$TmallLstorderClientOpenParamLstThirdPartDetailShipOrderCreateDTOResult=new TmallLstorderClientOpenParamLstThirdPartDetailShipOrderCreateDTO();
						$TmallLstorderClientOpenParamLstThirdPartDetailShipOrderCreateDTOResult->setArrayResult($arrayobject );
						$this->details [$i] = $TmallLstorderClientOpenParamLstThirdPartDetailShipOrderCreateDTOResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "orderCreateTime", $this->stdResult )) {
    				$this->orderCreateTime = $this->stdResult->{"orderCreateTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "outOrderId", $this->stdResult )) {
    				$this->outOrderId = $this->stdResult->{"outOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "payFee", $this->stdResult )) {
    				$this->payFee = $this->stdResult->{"payFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverAddress", $this->stdResult )) {
    				$this->receiverAddress = $this->stdResult->{"receiverAddress"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverCity", $this->stdResult )) {
    				$this->receiverCity = $this->stdResult->{"receiverCity"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverDistrict", $this->stdResult )) {
    				$this->receiverDistrict = $this->stdResult->{"receiverDistrict"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverMobile", $this->stdResult )) {
    				$this->receiverMobile = $this->stdResult->{"receiverMobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverName", $this->stdResult )) {
    				$this->receiverName = $this->stdResult->{"receiverName"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverPhone", $this->stdResult )) {
    				$this->receiverPhone = $this->stdResult->{"receiverPhone"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverProvince", $this->stdResult )) {
    				$this->receiverProvince = $this->stdResult->{"receiverProvince"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverTown", $this->stdResult )) {
    				$this->receiverTown = $this->stdResult->{"receiverTown"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverZip", $this->stdResult )) {
    				$this->receiverZip = $this->stdResult->{"receiverZip"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "buyerMessage", $this->arrayResult )) {
    			$this->buyerMessage = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerName", $this->arrayResult )) {
    			$this->buyerName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "details", $this->arrayResult )) {
    		$detailsResult=$arrayResult['${paramType.paramName}'];
    			$this->details = new TmallLstorderClientOpenParamLstThirdPartDetailShipOrderCreateDTO();
    			$this->details->setStdResult ( $detailsResult);
    		}
    		    	    			    		    			if (array_key_exists ( "orderCreateTime", $this->arrayResult )) {
    			$this->orderCreateTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "outOrderId", $this->arrayResult )) {
    			$this->outOrderId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "payFee", $this->arrayResult )) {
    			$this->payFee = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverAddress", $this->arrayResult )) {
    			$this->receiverAddress = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverCity", $this->arrayResult )) {
    			$this->receiverCity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverDistrict", $this->arrayResult )) {
    			$this->receiverDistrict = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverMobile", $this->arrayResult )) {
    			$this->receiverMobile = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverName", $this->arrayResult )) {
    			$this->receiverName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverPhone", $this->arrayResult )) {
    			$this->receiverPhone = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverProvince", $this->arrayResult )) {
    			$this->receiverProvince = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverTown", $this->arrayResult )) {
    			$this->receiverTown = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverZip", $this->arrayResult )) {
    			$this->receiverZip = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>