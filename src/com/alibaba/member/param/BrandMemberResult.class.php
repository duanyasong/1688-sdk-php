<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaMemberBrandQueryParam/BrandInfo.class.php');

class BrandMemberResult extends SDKDomain {

       	
    private $categoryId;
    
        /**
    * @return 3
    */
        public function getCategoryId() {
        return $this->categoryId;
    }
    
    /**
     * 设置3     
     * @param Long $categoryId     
     * 参数示例：<pre>3</pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->categoryId = $categoryId;
    }
    
        	
    private $brandInfoList;
    
        /**
    * @return 3
    */
        public function getBrandInfoList() {
        return $this->brandInfoList;
    }
    
    /**
     * 设置3     
     * @param array include @see BrandInfo[] $brandInfoList     
     * 参数示例：<pre>3</pre>     
     * 此参数必填     */
    public function setBrandInfoList(BrandInfo $brandInfoList) {
        $this->brandInfoList = $brandInfoList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "categoryId", $this->stdResult )) {
    				$this->categoryId = $this->stdResult->{"categoryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "brandInfoList", $this->stdResult )) {
    			$brandInfoListResult=$this->stdResult->{"brandInfoList"};
    				$object = json_decode ( json_encode ( $brandInfoListResult ), true );
					$this->brandInfoList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$BrandInfoResult=new BrandInfo();
						$BrandInfoResult->setArrayResult($arrayobject );
						$this->brandInfoList [$i] = $BrandInfoResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "categoryId", $this->arrayResult )) {
    			$this->categoryId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "brandInfoList", $this->arrayResult )) {
    		$brandInfoListResult=$arrayResult['${paramType.paramName}'];
    			$this->brandInfoList = new BrandInfo();
    			$this->brandInfoList->setStdResult ( $brandInfoListResult);
    		}
    		    	    		}
 
   
}
?>