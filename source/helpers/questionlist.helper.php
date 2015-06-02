<?php 
	function truncate($string, $max){
		if(strlen($string) > $max){
			return substr($string, 0, $max)."...";
		} else {
			return $string;
		}
	}

	function label($status){
		if ($status == "answered"){
		    return "<div class=\"green lighten-1 secondary-content question-badge\">answered</div>";
		} elseif ($status == "modified"){
			return "<div class=\"light-green lighten-1 secondary-content question-badge\">modified</div>";
		} elseif ($status == "open"){
			return "<div class=\"orange lighten-2 secondary-content question-badge\">open</div>";
		} elseif($status == "clarify"){
			return "<div class=\"purple lighten-2 secondary-content question-badge\">clarify</div>";
		} elseif ($status == "read"){
			return "<div class=\"secondary-content grey-text text-lighten-1\">
	    				<i class=\"mdi-action-done small\"></i>
	    			</div>";
		} elseif ($status == "fined") {
			return "<div class=\"secondary-content red-text tooltipped\"
						 data-position=\"left\" data-delay=\"10\" data-tooltip=\"Question Level Changed!\">
	    				<i class=\"mdi-av-new-releases small\"></i>
	    			</div>";
		} else{
			return "";
		}
	}

	function avatar($subject){
		
		$file = "/resources/images/general.svg";
		$style = "blue lighten-3";

		switch ($subject) {
			case "Maths":
				$file = "/resources/images/math.svg";
				$style = "red lighten-2";
				break;

			case "Physics":
				$file = "/resources/images/physics.svg";
				$style = "amber lighten-2";
				break;

			case "Chemistry":
				$file = "/resources/images/chemistry.svg";
				$style = "purple lighten-3";
				break;

			case "Biology":
				$file = "/resources/images/bio.svg";
				$style = "green lighten-2";
				break;

			default:
				$subject = "General";
				break;
		}
              

		return "<div class=\"circle $style tooltipped\"
					data-position=\"left\" data-delay=\"10\" data-tooltip=\"$subject\" >
	    			<img src=\"$file\" class=\"icon\">
    			</div>";
	}

	function service($serviceLevel){

		if($serviceLevel == 1){
			return "";
		}

		require_once $_SERVER['DOCUMENT_ROOT']."/models/service.model.php";

		return '<div class="right '.(($serviceLevel==3) ? 'red-text' : 'green-text').' tooltipped"
					 data-position="left" data-delay="10" data-tooltip="'.ServiceLevel::getServiceLevel($serviceLevel)['name'].'">
    				<i class="mdi-action-alarm small"></i>
    			</div>';
	}
?>
