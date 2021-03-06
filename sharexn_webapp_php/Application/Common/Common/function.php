<?php

/*
 * 返回配置是否是LOCAL URL
 */
function isLocalURL(){
	return strcmp(C('UILink.LOCAL_URL'), "local");
}

/*
 * 返回UUID
 */
function getUUID($prefix = ""){    //可以指定前缀
    $str = md5(uniqid(mt_rand(), true));   
    $uuid  = substr($str,0,8);   
    $uuid .= substr($str,8,4);   
    $uuid .= substr($str,12,4);   
    $uuid .= substr($str,16,4);   
    $uuid .= substr($str,20,12);   
    return $prefix . $uuid;
}

