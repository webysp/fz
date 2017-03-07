<?php
/**
 * Created by PhpStorm.
 * User: 袁少鹏
 * Tel :18538773790
 * Date: 2017/3/7 11:13
 * Project:fz-check.php
 */
use Gregwar\Captcha\CaptchaBuilder;
include_once '../vendor/autoload.php';
$builder = new CaptchaBuilder;
$builder->build();
$builder->save('out.jpg');
header('Content-type: image/jpeg');
$builder->output();
