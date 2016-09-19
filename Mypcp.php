<?php

require_once 'CRM/Core/Page.php';

class CRM_Compucorptask_Page_Mypcp extends CRM_Core_Page {
  public function run() {
	    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
	    CRM_Utils_System::setTitle(ts('Mypcp'));
	    $params = array(
	    'sequential' => 1,
	    'contact_id' => "user_contact_id",
	    // 'api.ContributionPage.get' => array(
	    //     'id' => '1',
	    //     'return' =>array("id","title","goal_amount"),
	    //   ),
	    //'return' => array("contribution_page_id", "source", "contribution_status_id", "total_amount"),
	    );

	   $result = civicrm_api3('Contribution', 'get', $params);
	   $count = $result["count"];
	   $values = $result["values"];
	   
	   $this->assign('count', $count);
	   $this->assign('values', $values);
	   parent::run();
  }
}

//I tried to query the database to fetch other details i needed on the pcp page but it seems thier is no visible connection
 // function returnrt($idincom)
 // {
 // 	$pt = array(
 //    'id' => '$idincom',
 //    );
 // 	try
 // 	{
 //    	$rt = civicrm_api3('ContributionPage', 'get', $pt);
	// }
	// catch (CiviCRM_API3_Exception $e) {
	//     // Handle error here.
	//     $errorMessage = $e->getMessage();
	//     $errorCode = $e->getErrorCode();
	//     $errorData = $e->getExtraParams();
	//     return array(
	//       'error' => $errorMessage,
	//       'error_code' => $errorCode,
	//       'error_data' => $errorData,
	//     );
	//   }
	//   return $rt;
 // }