<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<?php	$url=Yii::app()->request->baseUrl;?>
<link href="<?php echo $url;?>/css/static.css" rel="stylesheet" tpye="text/css"/>
<?php Yii::app()->clientScript->registerCoreScript('jquery');?>

<link href="<?php echo $url;?>/css/form.css" rel="stylesheet" type="text/css" />

<?php echo $content;?>

