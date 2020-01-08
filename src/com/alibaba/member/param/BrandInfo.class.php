<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class BrandInfo extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 4
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置4     
     * @param Long $id     
     * 参数示例：<pre>4</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $name;
    
        /**
    * @return 4
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置4     
     * @param String $name     
     * 参数示例：<pre>4</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $chineseName;
    
        /**
    * @return 4
    */
        public function getChineseName() {
        return $this->chineseName;
    }
    
    /**
     * 设置4     
     * @param String $chineseName     
     * 参数示例：<pre>4</pre>     
     * 此参数必填     */
    public function setChineseName( $chineseName) {
        $this->chineseName = $chineseName;
    }
    
        	
    private $englishName;
    
        /**
    * @return 4
    */
        public function getEnglishName() {
        return $this->englishName;
    }
    
    /**
     * 设置4     
     * @param String $englishName     
     * 参数示例：<pre>4</pre>     
     * 此参数必填     */
    public function setEnglishName( $englishName) {
        $this->englishName = $englishName;
    }
    
        	
    private $catIds;
    
        /**
    * @return 4
    */
        public function getCatIds() {
        return $this->catIds;
    }
    
    /**
     * 设置4     
     * @param array include @see Long[] $catIds     
     * 参数示例：<pre>4</pre>     
     * 此参数必填     */
    public function setCatIds( $catIds) {
        $this->catIds = $catIds;
    }
    
        	
    private $defineFeatureId;
    
        /**
    * @return 4
    */
        public function getDefineFeatureId() {
        return $this->defineFeatureId;
    }
    
    /**
     * 设置4     
     * @param Long $defineFeatureId     
     * 参数示例：<pre>4</pre>     
     * 此参数必填     */
    public function setDefineFeatureId( $defineFeatureId) {
        $this->defineFeatureId = $defineFeatureId;
    }
    
        	
    private $defineFeatureValue;
    
        /**
    * @return 4
    */
        public function getDefineFeatureValue() {
        return $this->defineFeatureValue;
    }
    
    /**
     * 设置4     
     * @param String $defineFeatureValue     
     * 参数示例：<pre>4</pre>     
     * 此参数必填     */
    public function setDefineFeatureValue( $defineFeatureValue) {
        $this->defineFeatureValue = $defineFeatureValue;
    }
    
        	
    private $logo;
    
        /**
    * @return 4
    */
        public function getLogo() {
        return $this->logo;
    }
    
    /**
     * 设置4     
     * @param String $logo     
     * 参数示例：<pre>4</pre>     
     * 此参数必填     */
    public function setLogo( $logo) {
        $this->logo = $logo;
    }
    
        	
    private $declaration;
    
        /**
    * @return 4
    */
        public function getDeclaration() {
        return $this->declaration;
    }
    
    /**
     * 设置4     
     * @param String $declaration     
     * 参数示例：<pre>4</pre>     
     * 此参数必填     */
    public function setDeclaration( $declaration) {
        $this->declaration = $declaration;
    }
    
        	
    private $info;
    
        /**
    * @return 4
    */
        public function getInfo() {
        return $this->info;
    }
    
    /**
     * 设置4     
     * @param String $info     
     * 参数示例：<pre>4</pre>     
     * 此参数必填     */
    public function setInfo( $info) {
        $this->info = $info;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "chineseName", $this->stdResult )) {
    				$this->chineseName = $this->stdResult->{"chineseName"};
    			}
    			    		    				    			    			if (array_key_exists ( "englishName", $this->stdResult )) {
    				$this->englishName = $this->stdResult->{"englishName"};
    			}
    			    		    				    			    			if (array_key_exists ( "catIds", $this->stdResult )) {
    				$this->catIds = $this->stdResult->{"catIds"};
    			}
    			    		    				    			    			if (array_key_exists ( "defineFeatureId", $this->stdResult )) {
    				$this->defineFeatureId = $this->stdResult->{"defineFeatureId"};
    			}
    			    		    				    			    			if (array_key_exists ( "defineFeatureValue", $this->stdResult )) {
    				$this->defineFeatureValue = $this->stdResult->{"defineFeatureValue"};
    			}
    			    		    				    			    			if (array_key_exists ( "logo", $this->stdResult )) {
    				$this->logo = $this->stdResult->{"logo"};
    			}
    			    		    				    			    			if (array_key_exists ( "declaration", $this->stdResult )) {
    				$this->declaration = $this->stdResult->{"declaration"};
    			}
    			    		    				    			    			if (array_key_exists ( "info", $this->stdResult )) {
    				$this->info = $this->stdResult->{"info"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "chineseName", $this->arrayResult )) {
    			$this->chineseName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "englishName", $this->arrayResult )) {
    			$this->englishName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "catIds", $this->arrayResult )) {
    			$this->catIds = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "defineFeatureId", $this->arrayResult )) {
    			$this->defineFeatureId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "defineFeatureValue", $this->arrayResult )) {
    			$this->defineFeatureValue = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "logo", $this->arrayResult )) {
    			$this->logo = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "declaration", $this->arrayResult )) {
    			$this->declaration = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "info", $this->arrayResult )) {
    			$this->info = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>