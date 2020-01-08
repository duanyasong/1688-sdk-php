<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaOceanOpenplatformBizLogisticsResultCainiaoCountryInfoModel extends SDKDomain {

       	
    private $areaId;
    
        /**
    * @return 地区ID
    */
        public function getAreaId() {
        return $this->areaId;
    }
    
    /**
     * 设置地区ID     
     * @param Long $areaId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setAreaId( $areaId) {
        $this->areaId = $areaId;
    }
    
        	
    private $country;
    
        /**
    * @return 国家
    */
        public function getCountry() {
        return $this->country;
    }
    
    /**
     * 设置国家     
     * @param String $country     
     * 参数示例：<pre>China</pre>     
     * 此参数必填     */
    public function setCountry( $country) {
        $this->country = $country;
    }
    
        	
    private $iso;
    
        /**
    * @return 国家编码
    */
        public function getIso() {
        return $this->iso;
    }
    
    /**
     * 设置国家编码     
     * @param String $iso     
     * 参数示例：<pre>CN</pre>     
     * 此参数必填     */
    public function setIso( $iso) {
        $this->iso = $iso;
    }
    
        	
    private $language;
    
        /**
    * @return 本地语言
    */
        public function getLanguage() {
        return $this->language;
    }
    
    /**
     * 设置本地语言     
     * @param String $language     
     * 参数示例：<pre>CN</pre>     
     * 此参数必填     */
    public function setLanguage( $language) {
        $this->language = $language;
    }
    
        	
    private $searchName;
    
        /**
    * @return 搜索名称
    */
        public function getSearchName() {
        return $this->searchName;
    }
    
    /**
     * 设置搜索名称     
     * @param String $searchName     
     * 参数示例：<pre>中国</pre>     
     * 此参数必填     */
    public function setSearchName( $searchName) {
        $this->searchName = $searchName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "areaId", $this->stdResult )) {
    				$this->areaId = $this->stdResult->{"areaId"};
    			}
    			    		    				    			    			if (array_key_exists ( "country", $this->stdResult )) {
    				$this->country = $this->stdResult->{"country"};
    			}
    			    		    				    			    			if (array_key_exists ( "iso", $this->stdResult )) {
    				$this->iso = $this->stdResult->{"iso"};
    			}
    			    		    				    			    			if (array_key_exists ( "language", $this->stdResult )) {
    				$this->language = $this->stdResult->{"language"};
    			}
    			    		    				    			    			if (array_key_exists ( "searchName", $this->stdResult )) {
    				$this->searchName = $this->stdResult->{"searchName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "areaId", $this->arrayResult )) {
    			$this->areaId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "country", $this->arrayResult )) {
    			$this->country = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "iso", $this->arrayResult )) {
    			$this->iso = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "language", $this->arrayResult )) {
    			$this->language = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "searchName", $this->arrayResult )) {
    			$this->searchName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>