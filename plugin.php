<?php

class pluginBackToTop extends Plugin {

	public function init()
	{
		// Fields and default values for the database of this plugin
		$this->dbFields = array(
			'color'=> '#343a40',
      'logo'=>none
		);
	}

	public function form()
	{
		global $L;
		global $site;

		$html  = '<div class="alert alert-primary" role="alert">';
		$html .= $this->description();
		$html .= '</div>';

		return $html;
	}

	public function siteHead()
	{
		$dir = basename(dirname(__FILE__));

		echo '<link rel="stylesheet" type="text/css" href="'.DOMAIN_PLUGINS.$dir.'/css/style.css">';
	}

	public function siteBodyEnd()
	{
  <!-- Scroll to top button -->
   echo '<button id="scrollToTopBtn">☝️</button>';
  }
}
