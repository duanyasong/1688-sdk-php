<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductTemplateCreateModel3DParam/AlibabaProductProductInfo.class.php');

class AlibabaProductTemplateCreateModel3DResult {

        	
    private $productInfo;
    
        /**
    * @return 基于产品模型生成的模版信息
    */
        public function getProductInfo() {
        return $this->productInfo;
    }
    
    /**
     * 设置基于产品模型生成的模版信息     
     * @param AlibabaProductProductInfo $productInfo     
          
     * 此参数必填     */
    public function setProductInfo(AlibabaProductProductInfo $productInfo) {
        $this->productInfo = $productInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productInfo", $this->stdResult )) {
    				$productInfoResult=$this->stdResult->{"productInfo"};
    				$this->productInfo = new AlibabaProductProductInfo();
    				$this->productInfo->setStdResult ( $productInfoResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "productInfo", $this->arrayResult )) {
    		$productInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->productInfo = new AlibabaProductProductInfo();
    			    			$this->productInfo->setStdResult ( $productInfoResult);
    		}
    		    	    		}

}
?>