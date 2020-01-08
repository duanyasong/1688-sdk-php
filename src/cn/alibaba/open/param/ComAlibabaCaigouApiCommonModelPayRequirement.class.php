<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('CaigouApiQuotationBuyerGetQuotationDetailParam/ComAlibabaCaigouApiCommonModelStepPayInfo.class.php');

class ComAlibabaCaigouApiCommonModelPayRequirement extends SDKDomain {

       	
    private $type;
    
        /**
    * @return 类型（guarantee：全额付款，step：分阶段付款，other：其它）
    */
        public function getType() {
        return $this->type;
    }
    
    /**
     * 设置类型（guarantee：全额付款，step：分阶段付款，other：其它）     
     * @param String $type     
     * 参数示例：<pre>guarantee</pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->type = $type;
    }
    
        	
    private $desc;
    
        /**
    * @return 描述
    */
        public function getDesc() {
        return $this->desc;
    }
    
    /**
     * 设置描述     
     * @param String $desc     
     * 参数示例：<pre>全额付款</pre>     
     * 此参数必填     */
    public function setDesc( $desc) {
        $this->desc = $desc;
    }
    
        	
    private $stepPayInfoList;
    
        /**
    * @return 分阶段付款信息（type不是step时为空）
    */
        public function getStepPayInfoList() {
        return $this->stepPayInfoList;
    }
    
    /**
     * 设置分阶段付款信息（type不是step时为空）     
     * @param array include @see ComAlibabaCaigouApiCommonModelStepPayInfo[] $stepPayInfoList     
     * 参数示例：<pre>[...]</pre>     
     * 此参数必填     */
    public function setStepPayInfoList(ComAlibabaCaigouApiCommonModelStepPayInfo $stepPayInfoList) {
        $this->stepPayInfoList = $stepPayInfoList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "type", $this->stdResult )) {
    				$this->type = $this->stdResult->{"type"};
    			}
    			    		    				    			    			if (array_key_exists ( "desc", $this->stdResult )) {
    				$this->desc = $this->stdResult->{"desc"};
    			}
    			    		    				    			    			if (array_key_exists ( "stepPayInfoList", $this->stdResult )) {
    			$stepPayInfoListResult=$this->stdResult->{"stepPayInfoList"};
    				$object = json_decode ( json_encode ( $stepPayInfoListResult ), true );
					$this->stepPayInfoList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaCaigouApiCommonModelStepPayInfoResult=new ComAlibabaCaigouApiCommonModelStepPayInfo();
						$ComAlibabaCaigouApiCommonModelStepPayInfoResult->setArrayResult($arrayobject );
						$this->stepPayInfoList [$i] = $ComAlibabaCaigouApiCommonModelStepPayInfoResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "type", $this->arrayResult )) {
    			$this->type = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "desc", $this->arrayResult )) {
    			$this->desc = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "stepPayInfoList", $this->arrayResult )) {
    		$stepPayInfoListResult=$arrayResult['${paramType.paramName}'];
    			$this->stepPayInfoList = new ComAlibabaCaigouApiCommonModelStepPayInfo();
    			$this->stepPayInfoList->setStdResult ( $stepPayInfoListResult);
    		}
    		    	    		}
 
   
}
?>