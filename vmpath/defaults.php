<?php

class OC_Theme {

	private $themename;
	private $themetitle;
	private $slogan;
	private $entity;
	private $longfooter;
	private $baseurl;
	private $docurl;
	private $syncurl;

   function __construct() {
		$this->themename = "VMPath Theme v1"; /* short name, used when referring to the software */
		$this->themetitle = "VMPath Cloud v1"; /* can be a longer name, for titles */
		$this->slogan = "Vos fichiers, votre cloud."; /* slogan */
		$this->entity = "VMPath"; /* e.g. company name, used for footers and copyright notices */
		/*$this->longfooter = ""; replace short footer with a longer version */
		$this->baseurl = "https://moncloud.vmpath.net"; /* main site URL */
		$this->docurl = "http://aide.vmpath.net"; /* main help URL */
		$this->syncurl = "http://owncloud.org/sync-clients/"; /* client binaries download URL */
   }
   
   public function getName() {
		return $this->themename;
   }
   
   public function getTitle() {
		return $this->themetitle;
   }
   
   public function getEntity() {
		return $this->entity;
   }
   
	public function getSlogan() {
		return $this->slogan;
   }
   
   	public function getBaseUrl() {
		return $this->baseurl;
   }
   
   	public function getDocBaseUrl() {
		return $this->docurl;
   }   
   
   	public function getSyncClientUrl() {
		return $this->syncurl;
   }
   
/*  public function getLongFooter() {
			return $this->longfooter;
   }
*/   

}
	
?>