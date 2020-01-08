<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ComAlibabaOceanOpenplatformBizPtsResultPtsTagModel extends SDKDomain {

       	
    private $serviceCode;
    
        /**
    * @return 服务码，如jqbz、ssbxsfh、essxsfh等
    */
        public function getServiceCode() {
        return $this->serviceCode;
    }
    
    /**
     * 设置服务码，如jqbz、ssbxsfh、essxsfh等     
     * @param String $serviceCode     
     * 参数示例：<pre>jqbz</pre>     
     * 此参数必填     */
    public function setServiceCode( $serviceCode) {
        $this->serviceCode = $serviceCode;
    }
    
        	
    private $serviceName;
    
        /**
    * @return 服务名称
    */
        public function getServiceName() {
        return $this->serviceName;
    }
    
    /**
     * 设置服务名称     
     * @param String $serviceName     
     * 参数示例：<pre>交期保障</pre>     
     * 此参数必填     */
    public function setServiceName( $serviceName) {
        $this->serviceName = $serviceName;
    }
    
        	
    private $description;
    
        /**
    * @return 服务描述
    */
        public function getDescription() {
        return $this->description;
    }
    
    /**
     * 设置服务描述     
     * @param String $description     
     * 参数示例：<pre>卖家在承诺买家保障服务的基础上，自愿选择向买家提供“交期保障”服务。卖家向买家承诺，买家通过在线交易方式成功下单付款后，卖家将在双方确定的交期内（不可抗力因素除外），发送买家所购实物商品的服务，否则向买家进行赔付。</pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->description = $description;
    }
    
        	
    private $status;
    
        /**
    * @return 服务状态，可为APPLY、OPEN、CLOSE、
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置服务状态，可为APPLY、OPEN、CLOSE、     
     * @param String $status     
     * 参数示例：<pre>OPEN</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $selected;
    
        /**
    * @return 服务是否被选择，被选择为true，否则为false
    */
        public function getSelected() {
        return $this->selected;
    }
    
    /**
     * 设置服务是否被选择，被选择为true，否则为false     
     * @param String $selected     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setSelected( $selected) {
        $this->selected = $selected;
    }
    
        	
    private $required;
    
        /**
    * @return 是否必填
    */
        public function getRequired() {
        return $this->required;
    }
    
    /**
     * 设置是否必填     
     * @param Boolean $required     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setRequired( $required) {
        $this->required = $required;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "serviceCode", $this->stdResult )) {
    				$this->serviceCode = $this->stdResult->{"serviceCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "serviceName", $this->stdResult )) {
    				$this->serviceName = $this->stdResult->{"serviceName"};
    			}
    			    		    				    			    			if (array_key_exists ( "description", $this->stdResult )) {
    				$this->description = $this->stdResult->{"description"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "selected", $this->stdResult )) {
    				$this->selected = $this->stdResult->{"selected"};
    			}
    			    		    				    			    			if (array_key_exists ( "required", $this->stdResult )) {
    				$this->required = $this->stdResult->{"required"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "serviceCode", $this->arrayResult )) {
    			$this->serviceCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "serviceName", $this->arrayResult )) {
    			$this->serviceName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "description", $this->arrayResult )) {
    			$this->description = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "selected", $this->arrayResult )) {
    			$this->selected = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "required", $this->arrayResult )) {
    			$this->required = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>