<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaOceanOpenplatformBizMarketParamBizCouponActivityParam extends SDKDomain {

       	
    private $couponIds;
    
        /**
    * @return 优惠券ID列表
    */
        public function getCouponIds() {
        return $this->couponIds;
    }
    
    /**
     * 设置优惠券ID列表     
     * @param array include @see Long[] $couponIds     
     * 参数示例：<pre>[1234566]</pre>     
     * 此参数必填     */
    public function setCouponIds( $couponIds) {
        $this->couponIds = $couponIds;
    }
    
        	
    private $couponName;
    
        /**
    * @return 优惠券名称
    */
        public function getCouponName() {
        return $this->couponName;
    }
    
    /**
     * 设置优惠券名称     
     * @param String $couponName     
     * 参数示例：<pre>优惠券</pre>     
     * 此参数必填     */
    public function setCouponName( $couponName) {
        $this->couponName = $couponName;
    }
    
        	
    private $couponTypes;
    
        /**
    * @return 优惠券类型，0：店铺优惠券，1：商品优惠券，8：包邮券
    */
        public function getCouponTypes() {
        return $this->couponTypes;
    }
    
    /**
     * 设置优惠券类型，0：店铺优惠券，1：商品优惠券，8：包邮券     
     * @param array include @see Integer[] $couponTypes     
     * 参数示例：<pre>[8]</pre>     
     * 此参数必填     */
    public function setCouponTypes( $couponTypes) {
        $this->couponTypes = $couponTypes;
    }
    
        	
    private $isValid;
    
        /**
    * @return 是否只查询有效优惠券，传true时状态statuses无效，不传则可以使用状态条件
    */
        public function getIsValid() {
        return $this->isValid;
    }
    
    /**
     * 设置是否只查询有效优惠券，传true时状态statuses无效，不传则可以使用状态条件     
     * @param Boolean $isValid     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setIsValid( $isValid) {
        $this->isValid = $isValid;
    }
    
        	
    private $pageIndex;
    
        /**
    * @return 分页参数起始页为1
    */
        public function getPageIndex() {
        return $this->pageIndex;
    }
    
    /**
     * 设置分页参数起始页为1     
     * @param Integer $pageIndex     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPageIndex( $pageIndex) {
        $this->pageIndex = $pageIndex;
    }
    
        	
    private $pageSize;
    
        /**
    * @return 每页大小，最大50
    */
        public function getPageSize() {
        return $this->pageSize;
    }
    
    /**
     * 设置每页大小，最大50     
     * @param Integer $pageSize     
     * 参数示例：<pre>50</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->pageSize = $pageSize;
    }
    
        	
    private $statuses;
    
        /**
    * @return 优惠券状态，1：查询有效和过期，-1：查询删除，0：查询过期
    */
        public function getStatuses() {
        return $this->statuses;
    }
    
    /**
     * 设置优惠券状态，1：查询有效和过期，-1：查询删除，0：查询过期     
     * @param array include @see Integer[] $statuses     
     * 参数示例：<pre>[1]</pre>     
     * 此参数必填     */
    public function setStatuses( $statuses) {
        $this->statuses = $statuses;
    }
    
        	
    private $terminal;
    
        /**
    * @return 适用终端类型，不传此字段：所有，0：PC和手机，2：手机专享
    */
        public function getTerminal() {
        return $this->terminal;
    }
    
    /**
     * 设置适用终端类型，不传此字段：所有，0：PC和手机，2：手机专享     
     * @param Integer $terminal     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setTerminal( $terminal) {
        $this->terminal = $terminal;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "couponIds", $this->stdResult )) {
    				$this->couponIds = $this->stdResult->{"couponIds"};
    			}
    			    		    				    			    			if (array_key_exists ( "couponName", $this->stdResult )) {
    				$this->couponName = $this->stdResult->{"couponName"};
    			}
    			    		    				    			    			if (array_key_exists ( "couponTypes", $this->stdResult )) {
    				$this->couponTypes = $this->stdResult->{"couponTypes"};
    			}
    			    		    				    			    			if (array_key_exists ( "isValid", $this->stdResult )) {
    				$this->isValid = $this->stdResult->{"isValid"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageIndex", $this->stdResult )) {
    				$this->pageIndex = $this->stdResult->{"pageIndex"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageSize", $this->stdResult )) {
    				$this->pageSize = $this->stdResult->{"pageSize"};
    			}
    			    		    				    			    			if (array_key_exists ( "statuses", $this->stdResult )) {
    				$this->statuses = $this->stdResult->{"statuses"};
    			}
    			    		    				    			    			if (array_key_exists ( "terminal", $this->stdResult )) {
    				$this->terminal = $this->stdResult->{"terminal"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "couponIds", $this->arrayResult )) {
    			$this->couponIds = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "couponName", $this->arrayResult )) {
    			$this->couponName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "couponTypes", $this->arrayResult )) {
    			$this->couponTypes = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "isValid", $this->arrayResult )) {
    			$this->isValid = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageIndex", $this->arrayResult )) {
    			$this->pageIndex = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageSize", $this->arrayResult )) {
    			$this->pageSize = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "statuses", $this->arrayResult )) {
    			$this->statuses = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "terminal", $this->arrayResult )) {
    			$this->terminal = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>