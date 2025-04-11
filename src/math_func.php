<?php
namespace HayesZ\CommonFunc;

/**
 * round_bcadd、round_bcsub、round_bcmul、round_bcdiv
 * 解决使用 bcmath 计算后四舍五入的问题
 */

function round_bcadd($num1,$num2,$scale=2){
    return round(bcadd($num1,$num2,$scale+2),$scale);
}

/**
 * 减法
 * @param $num1
 * @param $num2
 * @param $scale
 * @return float
 */
function round_bcsub($num1,$num2,$scale=2){
    return round(bcsub($num1,$num2,$scale+2),$scale);
}

/**
 * 乘法
 * @param $num1
 * @param $num2
 * @param $scale
 * @return float
 */
function round_bcmul($num1,$num2,$scale=2){
    return round(bcmul($num1,$num2,$scale+2),$scale);
}

/**
 * 除法
 * @param $num1
 * @param $num2
 * @param $scale
 * @return float
 */
function round_bcdiv($num1,$num2,$scale=2){
    return round(bcdiv($num1,$num2,$scale+2),$scale);
}