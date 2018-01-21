<?php
namespace checker;
header("Content-Type: text/plain");

$modules = array();
require_once("modules-magento.php");

$errors = array();
foreach($modules as $module)
{
	if($module["required"]===false) continue;

	if($module["class"]=="")
	{
		# Looking for system default methods
		if(!function_exists($module["method"]))
		{
			$errors[] = $module;
		}
	}
	else
	{
		# Looking for specific classes
		if(class_exists($module["class"]))
		{
			if(!method_exists($module["class"], $module["method"]))
			{
				$errors[] = $module;
			}
		}
		else
		{
			$errors[] = $module;
		}
	}
}

if(!defined("\PDO::MYSQL_ATTR_LOCAL_INFILE"))
#if(!extension_loaded("pdo_mysql"));
{
	$errors[] = array(
		"name" => "PDO MySQL",
		"help" => "",
	);
}

/**
 * Process requirements matching status
 */
if(count($errors)==0)
{
	echo "All ok! You may continue to setup your application.";
}
else
{
	$lacking = array();
	foreach($errors as $module)
	{
		#$lacking[] = "{$module['name']}: {$module['class']}->{$module['method']}();";
		$lacking[] = "{$module['name']}: {$module['help']}";
	}
	echo "You are lacking these modules:", "\r\n\t";
	echo implode("\r\n\t", $lacking);
}
echo "\r\n";
