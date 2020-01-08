<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductDescrTemplateCreateModel3DParam/AlibabaProductProductInfo.class.php');
include_once ('AlibabaProductDescrTemplateCreateModel3DParam/AlibabaProductDescriptionDescriptionInfo.class.php');

class AlibabaProductDescrTemplateCreateModel3DResult {

        	
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
    
        	
    private $descriptionInfo;
    
        /**
    * @return 商品详情描述结构化信息。注意，descriptionInfo 中所有包含 URL 信息的字段都是完整 URL。
    */
        public function getDescriptionInfo() {
        return $this->descriptionInfo;
    }
    
    /**
     * 设置商品详情描述结构化信息。注意，descriptionInfo 中所有包含 URL 信息的字段都是完整 URL。     
     * @param AlibabaProductDescriptionDescriptionInfo $descriptionInfo     
          
     * 此参数必填     */
    public function setDescriptionInfo(AlibabaProductDescriptionDescriptionInfo $descriptionInfo) {
        $this->descriptionInfo = $descriptionInfo;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productInfo", $this->stdResult )) {
    				$productInfoResult=$this->stdResult->{"productInfo"};
    				$this->productInfo = new AlibabaProductProductInfo();
    				$this->productInfo->setStdResult ( $productInfoResult);
    			}
    			    		    				    			    			if (array_key_exists ( "descriptionInfo", $this->stdResult )) {
    				$descriptionInfoResult=$this->stdResult->{"descriptionInfo"};
    				$this->descriptionInfo = new AlibabaProductDescriptionDescriptionInfo();
    				$this->descriptionInfo->setStdResult ( $descriptionInfoResult);
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
    		    	    			    		    		if (array_key_exists ( "descriptionInfo", $this->arrayResult )) {
    		$descriptionInfoResult=$arrayResult['${paramType.paramName}'];
    			    			$this->descriptionInfo = new AlibabaProductDescriptionDescriptionInfo();
    			    			$this->descriptionInfo->setStdResult ( $descriptionInfoResult);
    		}
    		    	    		}

}
?>