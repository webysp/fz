<?php
use Endroid\QrCode\QrCode;
include_once '../vendor/autoload.php';
$qrCode = new QrCode();
$qrCode
    ->setText('Life is too short to be generating QR codes')
    ->setSize(300)
    ->setPadding(10)
    ->setErrorCorrection('high')
    ->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0])
    ->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0])
    ->setLabel('Scan the code')
    ->setLabelFontSize(16)
    ->setImageType(QrCode::IMAGE_TYPE_PNG);
header('Content-Type: '.$qrCode->getContentType());
$qrCode->render();
$qrCode->save('qrcode.png');
