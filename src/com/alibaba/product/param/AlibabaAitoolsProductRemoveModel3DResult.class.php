<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaAitoolsProductRemoveModel3DResult {

        	
    private $productID;
    
        /**
    * @return 1688 商品 ID。若 API 调用无错误，则表示 3D 信息移除成功。
    */
        public function getProductID() {
        return $this->productID;
    }
    
    /**
     * 设置1688 商品 ID。若 API 调用无错误，则表示 3D 信息移除成功。     
     * @param Long $productID     
          
     * 此参数必填     */
    public function setProductID( $productID) {
        $this->productID = $productID;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productID", $this->stdResult )) {
    				$this->productID = $this->stdResult->{"productID"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "productID", $this->arrayResult )) {
    			$this->productID = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}

}
?>