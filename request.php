<?php
// تهيئة الاتصال
$ch = curl_init();

// تعيين الرابط الذي تريد الاتصال به
curl_setopt($ch, CURLOPT_URL, "https://imapi.bevatel.com/whatsapp/api/message");


// تهيئة رأس الطلب
$headers = array(
    'Content-Type: application/json',
    'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MTk3OCwic3BhY2VJZCI6MTE0MjQ1LCJvcmdJZCI6NjIxMTAsInR5cGUiOiJhcGkiLCJpYXQiOjE2ODM4OTgyMTl9.p256XUsPJL31YNQ2LEVR5nphrILOCOJBjk2kz0bbdjY'
);

// تعيين رأس الطلب
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// تعيين الخيارات الإضافية
curl_setopt($ch, CURLOPT_POST, true);

// تحديد البيانات التي ترسلها في الجسم لطلب POST
$data = '{
    "phone": "962795451057",
    "channelId": 118987,
    "templateName": "hello_world",
    "languageCode": "en_US",
    "text": "Hello World Welcome and congratulations!! This message demonstrates your ability to send a WhatsApp message notification from the Cloud API, hosted by Meta. Thank you for taking the time to test with us.",

    "parameters": [
        "name"
    ],
    "tags": [
        "api",
        "test"
    ]
}';

curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// تنفيذ الاتصال واسترداد البيانات
$response = curl_exec($ch);

// التحقق من عملية الاتصال
if ($response === false) {
    echo 'خطأ في الاتصال بـ cURL: ' . curl_error($ch);
}

// إغلاق الاتصال
curl_close($ch);
?><?php
// تهيئة الاتصال
$ch = curl_init();

// تعيين الرابط الذي تريد الاتصال به
curl_setopt($ch, CURLOPT_URL, "https://imapi.bevatel.com/whatsapp/api/message");


// تهيئة رأس الطلب
$headers = array(
    'Content-Type: application/json',
    'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MTk3OCwic3BhY2VJZCI6MTE0MjQ1LCJvcmdJZCI6NjIxMTAsInR5cGUiOiJhcGkiLCJpYXQiOjE2ODM4OTgyMTl9.p256XUsPJL31YNQ2LEVR5nphrILOCOJBjk2kz0bbdjY'
);

// تعيين رأس الطلب
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// تعيين الخيارات الإضافية
curl_setopt($ch, CURLOPT_POST, true);

// تحديد البيانات التي ترسلها في الجسم لطلب POST
$data = '{
    "phone": "962795451057",
    "channelId": 118987,
    "templateName": "hello_world",
    "languageCode": "en_US",
    "text": "Hello World Welcome and congratulations!! This message demonstrates your ability to send a WhatsApp message notification from the Cloud API, hosted by Meta. Thank you for taking the time to test with us.",

    "parameters": [
        "name"
    ],
    "tags": [
        "api",
        "test"
    ]
}';

curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// تنفيذ الاتصال واسترداد البيانات
$response = curl_exec($ch);

// التحقق من عملية الاتصال
if ($response === false) {
    echo 'خطأ في الاتصال بـ cURL: ' . curl_error($ch);
}

// إغلاق الاتصال
curl_close($ch);
?>