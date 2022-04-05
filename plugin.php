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

	public function siteBodyEnd()
	{
		include('/js/buttonscript.js');
  	}
}
