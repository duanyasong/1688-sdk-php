<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaLstShiporderQueryParam/TmallLstorderClientOpenModelLstThirdPartDetailShipOrderDTO.class.php');

class TmallLstorderClientOpenModelLstThirdPartMainShipOrderDTO extends SDKDomain {

       	
    private $bizOrderId;
    
        /**
    * @return 订单ID
    */
        public function getBizOrderId() {
        return $this->bizOrderId;
    }
    
    /**
     * 设置订单ID     
     * @param Long $bizOrderId     
     * 参数示例：<pre>448888</pre>     
     * 此参数必填     */
    public function setBizOrderId( $bizOrderId) {
        $this->bizOrderId = $bizOrderId;
    }
    
        	
    private $details;
    
        /**
    * @return 订单明细
    */
        public function getDetails() {
        return $this->details;
    }
    
    /**
     * 设置订单明细     
     * @param array include @see TmallLstorderClientOpenModelLstThirdPartDetailShipOrderDTO[] $details     
     * 参数示例：<pre>details</pre>     
     * 此参数必填     */
    public function setDetails(TmallLstorderClientOpenModelLstThirdPartDetailShipOrderDTO $details) {
        $this->details = $details;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 发货单生成时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置发货单生成时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre>2018-08-14 20:36:32</pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 发货单更新时间
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置发货单更新时间     
     * @param Date $gmtModified     
     * 参数示例：<pre>2018-08-14 20:36:32</pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $id;
    
        /**
    * @return 发货单ID	
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置发货单ID	     
     * @param Long $id     
     * 参数示例：<pre>111</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $loadTime;
    
        /**
    * @return 装车时间
    */
        public function getLoadTime() {
        return $this->loadTime;
    }
    
    /**
     * 设置装车时间     
     * @param Date $loadTime     
     * 参数示例：<pre>2018-08-16 10:12:00</pre>     
     * 此参数必填     */
    public function setLoadTime( $loadTime) {
        $this->loadTime = $loadTime;
    }
    
        	
    private $outOrderId;
    
        /**
    * @return 外部订单ID
    */
        public function getOutOrderId() {
        return $this->outOrderId;
    }
    
    /**
     * 设置外部订单ID     
     * @param String $outOrderId     
     * 参数示例：<pre>12121</pre>     
     * 此参数必填     */
    public function setOutOrderId( $outOrderId) {
        $this->outOrderId = $outOrderId;
    }
    
        	
    private $signTime;
    
        /**
    * @return 签收时间
    */
        public function getSignTime() {
        return $this->signTime;
    }
    
    /**
     * 设置签收时间     
     * @param Date $signTime     
     * 参数示例：<pre>2018-08-14 20:48:36	</pre>     
     * 此参数必填     */
    public function setSignTime( $signTime) {
        $this->signTime = $signTime;
    }
    
        	
    private $status;
    
        /**
    * @return 状态
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置状态     
     * @param String $status     
     * 参数示例：<pre>NEW</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "bizOrderId", $this->stdResult )) {
    				$this->bizOrderId = $this->stdResult->{"bizOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "details", $this->stdResult )) {
    			$detailsResult=$this->stdResult->{"details"};
    				$object = json_decode ( json_encode ( $detailsResult ), true );
					$this->details = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$TmallLstorderClientOpenModelLstThirdPartDetailShipOrderDTOResult=new TmallLstorderClientOpenModelLstThirdPartDetailShipOrderDTO();
						$TmallLstorderClientOpenModelLstThirdPartDetailShipOrderDTOResult->setArrayResult($arrayobject );
						$this->details [$i] = $TmallLstorderClientOpenModelLstThirdPartDetailShipOrderDTOResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "loadTime", $this->stdResult )) {
    				$this->loadTime = $this->stdResult->{"loadTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "outOrderId", $this->stdResult )) {
    				$this->outOrderId = $this->stdResult->{"outOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "signTime", $this->stdResult )) {
    				$this->signTime = $this->stdResult->{"signTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "bizOrderId", $this->arrayResult )) {
    			$this->bizOrderId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "details", $this->arrayResult )) {
    		$detailsResult=$arrayResult['${paramType.paramName}'];
    			$this->details = new TmallLstorderClientOpenModelLstThirdPartDetailShipOrderDTO();
    			$this->details->setStdResult ( $detailsResult);
    		}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "loadTime", $this->arrayResult )) {
    			$this->loadTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "outOrderId", $this->arrayResult )) {
    			$this->outOrderId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "signTime", $this->arrayResult )) {
    			$this->signTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>