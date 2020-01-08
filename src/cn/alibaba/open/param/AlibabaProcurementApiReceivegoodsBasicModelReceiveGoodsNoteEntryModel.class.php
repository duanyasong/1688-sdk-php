<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProcurementApiReceivegoodsBasicModelReceiveGoodsNoteEntryModel extends SDKDomain {

       	
    private $brand;
    
        /**
    * @return 品牌
    */
        public function getBrand() {
        return $this->brand;
    }
    
    /**
     * 设置品牌     
     * @param String $brand     
     * 参数示例：<pre>iphone</pre>     
     * 此参数必填     */
    public function setBrand( $brand) {
        $this->brand = $brand;
    }
    
        	
    private $factoryCode;
    
        /**
    * @return 工厂编码
    */
        public function getFactoryCode() {
        return $this->factoryCode;
    }
    
    /**
     * 设置工厂编码     
     * @param String $factoryCode     
     * 参数示例：<pre>f01</pre>     
     * 此参数必填     */
    public function setFactoryCode( $factoryCode) {
        $this->factoryCode = $factoryCode;
    }
    
        	
    private $factoryName;
    
        /**
    * @return 工厂名
    */
        public function getFactoryName() {
        return $this->factoryName;
    }
    
    /**
     * 设置工厂名     
     * @param String $factoryName     
     * 参数示例：<pre>城西工厂</pre>     
     * 此参数必填     */
    public function setFactoryName( $factoryName) {
        $this->factoryName = $factoryName;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置创建时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre>2018-10-01</pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 修改时间
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置修改时间     
     * @param Date $gmtModified     
     * 参数示例：<pre>2018-10-01</pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $id;
    
        /**
    * @return 收货子单id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置收货子单id     
     * @param Long $id     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $materielCode;
    
        /**
    * @return 物料编码
    */
        public function getMaterielCode() {
        return $this->materielCode;
    }
    
    /**
     * 设置物料编码     
     * @param String $materielCode     
     * 参数示例：<pre>M123456</pre>     
     * 此参数必填     */
    public function setMaterielCode( $materielCode) {
        $this->materielCode = $materielCode;
    }
    
        	
    private $materielName;
    
        /**
    * @return 物料名
    */
        public function getMaterielName() {
        return $this->materielName;
    }
    
    /**
     * 设置物料名     
     * @param String $materielName     
     * 参数示例：<pre>iphone手机壳</pre>     
     * 此参数必填     */
    public function setMaterielName( $materielName) {
        $this->materielName = $materielName;
    }
    
        	
    private $modelNumber;
    
        /**
    * @return 型号
    */
        public function getModelNumber() {
        return $this->modelNumber;
    }
    
    /**
     * 设置型号     
     * @param String $modelNumber     
     * 参数示例：<pre>x</pre>     
     * 此参数必填     */
    public function setModelNumber( $modelNumber) {
        $this->modelNumber = $modelNumber;
    }
    
        	
    private $poOrderEntryId;
    
        /**
    * @return 采购子订单id
    */
        public function getPoOrderEntryId() {
        return $this->poOrderEntryId;
    }
    
    /**
     * 设置采购子订单id     
     * @param Long $poOrderEntryId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPoOrderEntryId( $poOrderEntryId) {
        $this->poOrderEntryId = $poOrderEntryId;
    }
    
        	
    private $poOrderEntryRowid;
    
        /**
    * @return 采购子订单行号
    */
        public function getPoOrderEntryRowid() {
        return $this->poOrderEntryRowid;
    }
    
    /**
     * 设置采购子订单行号     
     * @param String $poOrderEntryRowid     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPoOrderEntryRowid( $poOrderEntryRowid) {
        $this->poOrderEntryRowid = $poOrderEntryRowid;
    }
    
        	
    private $poOrderId;
    
        /**
    * @return 采购订单id
    */
        public function getPoOrderId() {
        return $this->poOrderId;
    }
    
    /**
     * 设置采购订单id     
     * @param Long $poOrderId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPoOrderId( $poOrderId) {
        $this->poOrderId = $poOrderId;
    }
    
        	
    private $poRnId;
    
        /**
    * @return 收货单id
    */
        public function getPoRnId() {
        return $this->poRnId;
    }
    
    /**
     * 设置收货单id     
     * @param Long $poRnId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPoRnId( $poRnId) {
        $this->poRnId = $poRnId;
    }
    
        	
    private $poSgEntryId;
    
        /**
    * @return 发货子单id
    */
        public function getPoSgEntryId() {
        return $this->poSgEntryId;
    }
    
    /**
     * 设置发货子单id     
     * @param Long $poSgEntryId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPoSgEntryId( $poSgEntryId) {
        $this->poSgEntryId = $poSgEntryId;
    }
    
        	
    private $poSgEntryRowid;
    
        /**
    * @return 发货子单行号
    */
        public function getPoSgEntryRowid() {
        return $this->poSgEntryRowid;
    }
    
    /**
     * 设置发货子单行号     
     * @param String $poSgEntryRowid     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPoSgEntryRowid( $poSgEntryRowid) {
        $this->poSgEntryRowid = $poSgEntryRowid;
    }
    
        	
    private $poSgId;
    
        /**
    * @return 发货单id
    */
        public function getPoSgId() {
        return $this->poSgId;
    }
    
    /**
     * 设置发货单id     
     * @param Long $poSgId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPoSgId( $poSgId) {
        $this->poSgId = $poSgId;
    }
    
        	
    private $present;
    
        /**
    * @return 是否赠品
    */
        public function getPresent() {
        return $this->present;
    }
    
    /**
     * 设置是否赠品     
     * @param Boolean $present     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setPresent( $present) {
        $this->present = $present;
    }
    
        	
    private $quantity;
    
        /**
    * @return 收货量
    */
        public function getQuantity() {
        return $this->quantity;
    }
    
    /**
     * 设置收货量     
     * @param BigDecimal $quantity     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setQuantity( $quantity) {
        $this->quantity = $quantity;
    }
    
        	
    private $returnQuantity;
    
        /**
    * @return 发起退货数量
    */
        public function getReturnQuantity() {
        return $this->returnQuantity;
    }
    
    /**
     * 设置发起退货数量     
     * @param BigDecimal $returnQuantity     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setReturnQuantity( $returnQuantity) {
        $this->returnQuantity = $returnQuantity;
    }
    
        	
    private $returnStatus;
    
        /**
    * @return 退货状态
    */
        public function getReturnStatus() {
        return $this->returnStatus;
    }
    
    /**
     * 设置退货状态     
     * @param Integer $returnStatus     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setReturnStatus( $returnStatus) {
        $this->returnStatus = $returnStatus;
    }
    
        	
    private $returnableQuantity;
    
        /**
    * @return 可退货量
    */
        public function getReturnableQuantity() {
        return $this->returnableQuantity;
    }
    
    /**
     * 设置可退货量     
     * @param BigDecimal $returnableQuantity     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setReturnableQuantity( $returnableQuantity) {
        $this->returnableQuantity = $returnableQuantity;
    }
    
        	
    private $rowId;
    
        /**
    * @return 行号
    */
        public function getRowId() {
        return $this->rowId;
    }
    
    /**
     * 设置行号     
     * @param String $rowId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setRowId( $rowId) {
        $this->rowId = $rowId;
    }
    
        	
    private $sentQuantity;
    
        /**
    * @return 发货量
    */
        public function getSentQuantity() {
        return $this->sentQuantity;
    }
    
    /**
     * 设置发货量     
     * @param BigDecimal $sentQuantity     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setSentQuantity( $sentQuantity) {
        $this->sentQuantity = $sentQuantity;
    }
    
        	
    private $settleStatus;
    
        /**
    * @return 结算状态
    */
        public function getSettleStatus() {
        return $this->settleStatus;
    }
    
    /**
     * 设置结算状态     
     * @param Integer $settleStatus     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setSettleStatus( $settleStatus) {
        $this->settleStatus = $settleStatus;
    }
    
        	
    private $status;
    
        /**
    * @return 状态
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置状态     
     * @param String $status     
     * 参数示例：<pre>approved</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $storehouseCode;
    
        /**
    * @return 仓库编码
    */
        public function getStorehouseCode() {
        return $this->storehouseCode;
    }
    
    /**
     * 设置仓库编码     
     * @param String $storehouseCode     
     * 参数示例：<pre>s-01</pre>     
     * 此参数必填     */
    public function setStorehouseCode( $storehouseCode) {
        $this->storehouseCode = $storehouseCode;
    }
    
        	
    private $storehouseName;
    
        /**
    * @return 仓库名
    */
        public function getStorehouseName() {
        return $this->storehouseName;
    }
    
    /**
     * 设置仓库名     
     * @param String $storehouseName     
     * 参数示例：<pre>配件仓库</pre>     
     * 此参数必填     */
    public function setStorehouseName( $storehouseName) {
        $this->storehouseName = $storehouseName;
    }
    
        	
    private $unitCode;
    
        /**
    * @return 单位编码
    */
        public function getUnitCode() {
        return $this->unitCode;
    }
    
    /**
     * 设置单位编码     
     * @param String $unitCode     
     * 参数示例：<pre>t</pre>     
     * 此参数必填     */
    public function setUnitCode( $unitCode) {
        $this->unitCode = $unitCode;
    }
    
        	
    private $unitName;
    
        /**
    * @return 单位名
    */
        public function getUnitName() {
        return $this->unitName;
    }
    
    /**
     * 设置单位名     
     * @param String $unitName     
     * 参数示例：<pre>吨</pre>     
     * 此参数必填     */
    public function setUnitName( $unitName) {
        $this->unitName = $unitName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "brand", $this->stdResult )) {
    				$this->brand = $this->stdResult->{"brand"};
    			}
    			    		    				    			    			if (array_key_exists ( "factoryCode", $this->stdResult )) {
    				$this->factoryCode = $this->stdResult->{"factoryCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "factoryName", $this->stdResult )) {
    				$this->factoryName = $this->stdResult->{"factoryName"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "materielCode", $this->stdResult )) {
    				$this->materielCode = $this->stdResult->{"materielCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "materielName", $this->stdResult )) {
    				$this->materielName = $this->stdResult->{"materielName"};
    			}
    			    		    				    			    			if (array_key_exists ( "modelNumber", $this->stdResult )) {
    				$this->modelNumber = $this->stdResult->{"modelNumber"};
    			}
    			    		    				    			    			if (array_key_exists ( "poOrderEntryId", $this->stdResult )) {
    				$this->poOrderEntryId = $this->stdResult->{"poOrderEntryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "poOrderEntryRowid", $this->stdResult )) {
    				$this->poOrderEntryRowid = $this->stdResult->{"poOrderEntryRowid"};
    			}
    			    		    				    			    			if (array_key_exists ( "poOrderId", $this->stdResult )) {
    				$this->poOrderId = $this->stdResult->{"poOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "poRnId", $this->stdResult )) {
    				$this->poRnId = $this->stdResult->{"poRnId"};
    			}
    			    		    				    			    			if (array_key_exists ( "poSgEntryId", $this->stdResult )) {
    				$this->poSgEntryId = $this->stdResult->{"poSgEntryId"};
    			}
    			    		    				    			    			if (array_key_exists ( "poSgEntryRowid", $this->stdResult )) {
    				$this->poSgEntryRowid = $this->stdResult->{"poSgEntryRowid"};
    			}
    			    		    				    			    			if (array_key_exists ( "poSgId", $this->stdResult )) {
    				$this->poSgId = $this->stdResult->{"poSgId"};
    			}
    			    		    				    			    			if (array_key_exists ( "present", $this->stdResult )) {
    				$this->present = $this->stdResult->{"present"};
    			}
    			    		    				    			    			if (array_key_exists ( "quantity", $this->stdResult )) {
    				$this->quantity = $this->stdResult->{"quantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "returnQuantity", $this->stdResult )) {
    				$this->returnQuantity = $this->stdResult->{"returnQuantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "returnStatus", $this->stdResult )) {
    				$this->returnStatus = $this->stdResult->{"returnStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "returnableQuantity", $this->stdResult )) {
    				$this->returnableQuantity = $this->stdResult->{"returnableQuantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "rowId", $this->stdResult )) {
    				$this->rowId = $this->stdResult->{"rowId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sentQuantity", $this->stdResult )) {
    				$this->sentQuantity = $this->stdResult->{"sentQuantity"};
    			}
    			    		    				    			    			if (array_key_exists ( "settleStatus", $this->stdResult )) {
    				$this->settleStatus = $this->stdResult->{"settleStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "storehouseCode", $this->stdResult )) {
    				$this->storehouseCode = $this->stdResult->{"storehouseCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "storehouseName", $this->stdResult )) {
    				$this->storehouseName = $this->stdResult->{"storehouseName"};
    			}
    			    		    				    			    			if (array_key_exists ( "unitCode", $this->stdResult )) {
    				$this->unitCode = $this->stdResult->{"unitCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "unitName", $this->stdResult )) {
    				$this->unitName = $this->stdResult->{"unitName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "brand", $this->arrayResult )) {
    			$this->brand = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "factoryCode", $this->arrayResult )) {
    			$this->factoryCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "factoryName", $this->arrayResult )) {
    			$this->factoryName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "materielCode", $this->arrayResult )) {
    			$this->materielCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "materielName", $this->arrayResult )) {
    			$this->materielName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "modelNumber", $this->arrayResult )) {
    			$this->modelNumber = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "poOrderEntryId", $this->arrayResult )) {
    			$this->poOrderEntryId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "poOrderEntryRowid", $this->arrayResult )) {
    			$this->poOrderEntryRowid = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "poOrderId", $this->arrayResult )) {
    			$this->poOrderId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "poRnId", $this->arrayResult )) {
    			$this->poRnId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "poSgEntryId", $this->arrayResult )) {
    			$this->poSgEntryId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "poSgEntryRowid", $this->arrayResult )) {
    			$this->poSgEntryRowid = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "poSgId", $this->arrayResult )) {
    			$this->poSgId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "present", $this->arrayResult )) {
    			$this->present = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "quantity", $this->arrayResult )) {
    			$this->quantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "returnQuantity", $this->arrayResult )) {
    			$this->returnQuantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "returnStatus", $this->arrayResult )) {
    			$this->returnStatus = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "returnableQuantity", $this->arrayResult )) {
    			$this->returnableQuantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "rowId", $this->arrayResult )) {
    			$this->rowId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "sentQuantity", $this->arrayResult )) {
    			$this->sentQuantity = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "settleStatus", $this->arrayResult )) {
    			$this->settleStatus = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "storehouseCode", $this->arrayResult )) {
    			$this->storehouseCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "storehouseName", $this->arrayResult )) {
    			$this->storehouseName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "unitCode", $this->arrayResult )) {
    			$this->unitCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "unitName", $this->arrayResult )) {
    			$this->unitName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}
 
   
}
?>