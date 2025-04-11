<?php

namespace HayesZ\CommonFunc;

/**
 * 生成随机字符串
 * LC 小写字母 UC 大写字母 NUM 数字 SYM 字符
 * @param $length
 * @param $rules
 * @return string
 * @throws \Exception
 */
function random_string($length,$rules=['LC','UC','NUM']){
    $rules = array_unique($rules);
    $str_map = array(
        'UC' => "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
        'LC' => "abcdefghijklmnopqrstuvwxyz",
        'NUM' => "0123456789",
        'SYM' => "!@#$%^&*?_~",
    );
    $charactersArr = [];
    foreach ($rules as $r){
        $charactersArr[] = $str_map[$r];
    }
    $characters = implode('',$charactersArr);
    $charLength = strlen($characters);

    $returnString = '';
    for ($i = 0; $i < $length; ++$i) {
        // 直接映射 0-255 到 字符
        $returnString .= $characters[mt_rand(0,$charLength-1)];
    }
    return $returnString;
}

/**
 * 判断是否是json字符串
 * @param $string
 * @return bool
 */
function is_json($string){
    if (!is_string($string) || trim($string) === '') {
        return false;
    }

    $data = json_decode($string);
    if (json_last_error() !== JSON_ERROR_NONE) {
        return false;
    }

    return is_object($data) || is_array($data);
}