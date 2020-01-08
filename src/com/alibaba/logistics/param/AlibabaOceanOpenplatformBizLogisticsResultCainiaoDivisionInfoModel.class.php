<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaOceanOpenplatformBizLogisticsResultCainiaoDivisionInfoModel extends SDKDomain {

       	
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
     * 参数示例：<pre>530000</pre>     
     * 此参数必填     */
    public function setAreaId( $areaId) {
        $this->areaId = $areaId;
    }
    
        	
    private $delFlag;
    
        /**
    * @return 是否删除
    */
        public function getDelFlag() {
        return $this->delFlag;
    }
    
    /**
     * 设置是否删除     
     * @param Boolean $delFlag     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setDelFlag( $delFlag) {
        $this->delFlag = $delFlag;
    }
    
        	
    private $level;
    
        /**
    * @return 地区层级
    */
        public function getLevel() {
        return $this->level;
    }
    
    /**
     * 设置地区层级     
     * @param Integer $level     
     * 参数示例：<pre>3</pre>     
     * 此参数必填     */
    public function setLevel( $level) {
        $this->level = $level;
    }
    
        	
    private $name;
    
        /**
    * @return 地区名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置地区名称     
     * @param String $name     
     * 参数示例：<pre>云南省</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $parentId;
    
        /**
    * @return 上层级地区ID
    */
        public function getParentId() {
        return $this->parentId;
    }
    
    /**
     * 设置上层级地区ID     
     * @param Long $parentId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setParentId( $parentId) {
        $this->parentId = $parentId;
    }
    
        	
    private $parentName;
    
        /**
    * @return 上层级地区名称
    */
        public function getParentName() {
        return $this->parentName;
    }
    
    /**
     * 设置上层级地区名称     
     * @param String $parentName     
     * 参数示例：<pre>中国</pre>     
     * 此参数必填     */
    public function setParentName( $parentName) {
        $this->parentName = $parentName;
    }
    
        	
    private $pinyin;
    
        /**
    * @return 地区拼音
    */
        public function getPinyin() {
        return $this->pinyin;
    }
    
    /**
     * 设置地区拼音     
     * @param String $pinyin     
     * 参数示例：<pre>yun nan sheng</pre>     
     * 此参数必填     */
    public function setPinyin( $pinyin) {
        $this->pinyin = $pinyin;
    }
    
        	
    private $postCodeList;
    
        /**
    * @return 邮编
    */
        public function getPostCodeList() {
        return $this->postCodeList;
    }
    
    /**
     * 设置邮编     
     * @param String $postCodeList     
     * 参数示例：<pre>[100001,100002]</pre>     
     * 此参数必填     */
    public function setPostCodeList( $postCodeList) {
        $this->postCodeList = $postCodeList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "areaId", $this->stdResult )) {
    				$this->areaId = $this->stdResult->{"areaId"};
    			}
    			    		    				    			    			if (array_key_exists ( "delFlag", $this->stdResult )) {
    				$this->delFlag = $this->stdResult->{"delFlag"};
    			}
    			    		    				    			    			if (array_key_exists ( "level", $this->stdResult )) {
    				$this->level = $this->stdResult->{"level"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "parentId", $this->stdResult )) {
    				$this->parentId = $this->stdResult->{"parentId"};
    			}
    			    		    				    			    			if (array_key_exists ( "parentName", $this->stdResult )) {
    				$this->parentName = $this->stdResult->{"parentName"};
    			}
    			    		    				    			    			if (array_key_exists ( "pinyin", $this->stdResult )) {
    				$this->pinyin = $this->stdResult->{"pinyin"};
    			}
    			    		    				    			    			if (array_key_exists ( "postCodeList", $this->stdResult )) {
    				$this->postCodeList = $this->stdResult->{"postCodeList"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "areaId", $this->arrayResult )) {
    			$this->areaId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "delFlag", $this->arrayResult )) {
    			$this->delFlag = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "level", $this->arrayResult )) {
    			$this->level = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "parentId", $this->arrayResult )) {
    			$this->parentId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "parentName", $this->arrayResult )) {
    			$this->parentName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "pinyin", $this->arrayResult )) {
    			$this->pinyin = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "postCodeList", $this->arrayResult )) {
    			$this->postCodeList = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>