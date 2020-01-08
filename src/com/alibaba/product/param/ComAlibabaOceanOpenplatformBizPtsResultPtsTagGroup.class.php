<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('AlibabaProductPtsTagQueryParam/ComAlibabaOceanOpenplatformBizPtsResultPtsTagModel.class.php');

class ComAlibabaOceanOpenplatformBizPtsResultPtsTagGroup extends SDKDomain {

       	
    private $groupName;
    
        /**
    * @return 保障服务分组名
    */
        public function getGroupName() {
        return $this->groupName;
    }
    
    /**
     * 设置保障服务分组名     
     * @param String $groupName     
     * 参数示例：<pre>发货服务</pre>     
     * 此参数必填     */
    public function setGroupName( $groupName) {
        $this->groupName = $groupName;
    }
    
        	
    private $required;
    
        /**
    * @return 是否必选
    */
        public function getRequired() {
        return $this->required;
    }
    
    /**
     * 设置是否必选     
     * @param Boolean $required     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setRequired( $required) {
        $this->required = $required;
    }
    
        	
    private $tagModels;
    
        /**
    * @return 当前分组的保障服务
    */
        public function getTagModels() {
        return $this->tagModels;
    }
    
    /**
     * 设置当前分组的保障服务     
     * @param array include @see ComAlibabaOceanOpenplatformBizPtsResultPtsTagModel[] $tagModels     
     * 参数示例：<pre>[]</pre>     
     * 此参数必填     */
    public function setTagModels(ComAlibabaOceanOpenplatformBizPtsResultPtsTagModel $tagModels) {
        $this->tagModels = $tagModels;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "groupName", $this->stdResult )) {
    				$this->groupName = $this->stdResult->{"groupName"};
    			}
    			    		    				    			    			if (array_key_exists ( "required", $this->stdResult )) {
    				$this->required = $this->stdResult->{"required"};
    			}
    			    		    				    			    			if (array_key_exists ( "tagModels", $this->stdResult )) {
    			$tagModelsResult=$this->stdResult->{"tagModels"};
    				$object = json_decode ( json_encode ( $tagModelsResult ), true );
					$this->tagModels = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ComAlibabaOceanOpenplatformBizPtsResultPtsTagModelResult=new ComAlibabaOceanOpenplatformBizPtsResultPtsTagModel();
						$ComAlibabaOceanOpenplatformBizPtsResultPtsTagModelResult->setArrayResult($arrayobject );
						$this->tagModels [$i] = $ComAlibabaOceanOpenplatformBizPtsResultPtsTagModelResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "groupName", $this->arrayResult )) {
    			$this->groupName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "required", $this->arrayResult )) {
    			$this->required = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "tagModels", $this->arrayResult )) {
    		$tagModelsResult=$arrayResult['${paramType.paramName}'];
    			$this->tagModels = new ComAlibabaOceanOpenplatformBizPtsResultPtsTagModel();
    			$this->tagModels->setStdResult ( $tagModelsResult);
    		}
    		    	    		}
 
   
}
?>