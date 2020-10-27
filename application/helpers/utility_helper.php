<?php
function web_asset_url($uri = "") {
    return base_url() . "assets/web/" . $uri;
}

function module_asset_url($uri = "") {
	return base_url() . "assets/modules/" . $uri;
}

function doc_url($uri = "") {
	return base_url() . "docs/" . $uri;
}

function doc_platform_url($uri = "") {
	return base_url() . "docs/platform_doc/" . $uri;
}

function camel_case($string = "", $includeFirstWord = false) {
    if ($string == "") {
        return "";
    }
    $strReturn = "";
    $arrString = explode(" ", $string);
    foreach ($arrString as $key => $value) {
        if ($key == 0 && $includeFirstWord == false) {
            $strReturn .= strtolower($value);
            continue;
        }
        $strReturn .= ucfirst(strtolower($value));
    }
    return $strReturn;
}

function ucfirst_text($string = "") {
    if ($string == "") {
        return "";
    }
    $strReturn = "";
    $arrString = explode(" ", $string);
    foreach ($arrString as $value) {
        $strReturn .= " " . ucfirst(strtolower($value));
    }
    return $strReturn;
}

function clean_data($arr = '') {
	if (is_null($arr) || $arr == '')
		return null;
	if (is_string($arr)) {
		$arr = htmlspecialchars($arr);
		if (get_magic_quotes_gpc()) {
			$arr = stripslashes($arr);
		}
	}
	if (is_array($arr)) {
		$arr = array_map('clean_data', $arr);
	}
	return $arr;
}

function alert_box($message, $box_type = 'success', $clean = true) {
	$arr_icon = array(
		'success'	=> 'fa-check',
		'danger'	=> 'fa-ban',
		'info'		=> 'fa-info',
		'warning'	=> 'fa-warning'
	);
	$str_return = '
	<div class="alert alert-' . $box_type . ' alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa ' . $arr_icon[$box_type] . '"></i> Alert!</h4>
		' . ($clean ? clean_data($message) : $message)  . '
	</div>';
	return $str_return;
}

function url_encode($string) {
	if (defined('URL_PARAM_ENCRYPTED') && URL_PARAM_ENCRYPTED == 1) {
		$ci =& get_instance();
		$ret = $ci->encrypt->encode($string);
		$ret = strtr(
			$ret,
			array(
				'+' => '.',
				'=' => '_',
				'/' => '~'
			)
		);
		return $ret;
	} else {
		return $string;
	}
}

function url_decode($string) {
	if (defined('URL_PARAM_ENCRYPTED') && URL_PARAM_ENCRYPTED == 1) {
		$ci =& get_instance();
		$string = strtr(
			$string,
			array(
				'.' => '+',
				'_' => '=',
				'~' => '/'
			)
		);
		return $ci->encrypt->decode($string);
	} else {
		return $string;
	}
}

function format_date_frontend($str_date) {
	return date(FORMAT_DATE_FRONTEND, strtotime($str_date));
}

function format_date_backend($str_date) {
	return date(FORMAT_DATE_BACKEND, strtotime($str_date));
}

function format_number_frontend($number) {
	return number_format($number, FORMAT_NUMBER_DECIMAL, FORMAT_NUMBER_DECIMAL_POINT, FORMAT_NUMBER_THOUSAND_SEPARATOR);
}

function format_number_backend($formatted_number) {
	return str_replace(FORMAT_NUMBER_THOUSAND_SEPARATOR, "", $formatted_number);
}

function send_mail($fromAs = "Alert System", $to = array(), $subject = "", $message = "", $attachment = array(), $cc = array(), $bcc = array(), $embedded_img = array()) {
    
    $ci = & get_instance();
    
    $ci->load->library('nusoap');
    $ci->load->config('alert');
    
    $arr_return = array(
        'success'   => false,
        'message'   => 'Error execute mailer.'
    );
    
    $server = $ci->config->item('host');
    $from = array(
        "email" => "alert.system@listrindo.local",
        "name"  => $fromAs
    );
    
    $attachment_final = array();
    foreach ($attachment as $file) {
        $filename = pathinfo($file, PATHINFO_BASENAME);
        $fileString = base64_encode(fread(fopen($file, "r"), filesize($file)));
        $attachment_final[] = array(
            'filename'  => $filename,
            'encoded'   => $fileString
        );
    }
    
    $embedded_final = array();
    foreach ($embedded_img as $key => $file) {
        $filename = pathinfo($file, PATHINFO_BASENAME);
        $fileString = base64_encode(fread(fopen($file, "r"), filesize($file)));
        $embedded_final[] = array(
            'id'        => $key,
            'filename'  => $filename,
            'encoded'   => $fileString
        );
    }
    
    $param = array(
        "from"          => $from,
        "to"            => $to,
        "subject"       => $subject,
        "message"       => $message,
        "attachment"    => $attachment_final,
        "cc"            => $cc,
        "bcc"           => $bcc,
        "embeddedImage" => $embedded_final
    );

    $client = new nusoap_client($server, true);

    $error  = $client->getError();
    if ($error) {
        $arr_return['message'] = $error;
        return $arr_return;
    }

    $result = $client->call("sendMail", $param);
    if ($client->fault) {
        return $arr_return;
    } else {
        $error = $client->getError();
        if ($error) {
            $arr_return['message'] = $error;
            return $arr_return;
        } else {
            return $result;
        }
    }
    
}
