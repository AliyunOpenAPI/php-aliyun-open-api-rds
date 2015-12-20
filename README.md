The RDS SDK for Aliyun OpenAPI
==============================

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


The RDS SDK for Aliyun OpenAPI


## Install

Via Composer

``` bash
$ composer require lokielse/aliyun-open-api-rds
```

## Usage

```php
/**
 * 访问信息
 */
$config = [
	'AccessKeyId'=>'<your access_key_id>',
	'AccessKeySecret'=>'<your access_key_secret>',
];

/**
 * 授权资料
 */
$profile = DefaultProfile::getProfile('cn-hangzhou', $config['AccessKeyId'], $config['AccessKeySecret']);


/**
 * 请求对象
 */
$request = new XXXRequest();
$request->setAAA();
$request->setBBB();

$client  = new DefaultAcsClient($profile);
$response = $client->getAcsResponse($request);

var_dump($response);
```
[官方文档](https://help.aliyun.com/document_detail/rds/OpenAPI-manual/RDS-OpenAPI-Invoke/rquest-structure.html)