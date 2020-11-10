# luke/cc-sdk
禄可CRM中心接入开发包

## 安装
`composer require luke/cc-sdk -vvv`

## 使用
```php
$cc = new \Luke\Cc\Application([
    'base_url' => 'http://127.0.0.1:8001',
    'app_id' => 'test',
    'secret' => 'test'
]);

// 发送短信验证码
$response = $cc->sms->sendCode('10000000000', 'register');






```