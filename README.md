
# Mywaapi PHP Lib

This is PHP library for [mywaapi](https://github.com/yama24/mywaapi)


## Installation

Install with composer

```bash
  composer require yama/mywaapi-php-lib
```
## Usage/Examples

```php
<?php

require_once __DIR__ . "/vendor/autoload.php";

use Yama\MywaapiPhpLib\Mywaapi;

$wa = new Mywaapi("http://localhost:8000/");
```

for send message to contact

```php
echo $wa->sendMessage('6281292267204', 'example message');
 ```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `number` | `string` | **Required**. 6281292267204 |
| `message` | `string` | **Required**. example message |

for information of connection 

```php
echo $wa->info();
 ```

for check the number is registered or not 

```php
echo $wa->isRegistered("6281292267204");
 ```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `number` | `string` | **Required**. 6281292267204 |

for set the webhook/callback 

```php
echo $wa->setWebhook("https://webhook.site/365b1f55-5334-48e0-8380-91443516515b");
 ```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `url` | `string` | **Required**. webhook url |

for get the webhook/callback 

```php
echo $wa->getWebhook();
 ```

for send media to contact or group

```php
echo $wa->sendMedia('6281292267204', 'example media caption', "https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/479px-WhatsApp.svg.png");
 ```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `numberOrGroupId` | `string` | **Required**. 6281292267204 (you can use a number or group id) |
| `caption` | `string` | example media caption (you can fill with empty string) |
| `file` | `string` | **Required**. (you can fill it with base64 url data) |


for send message to group 

```php
echo $wa->sendGroupMessage('628986182128-1627374981@g.us', 'example group message');
 ```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `id` | `string` | **Required**. 628986182128-1627374981@g.us |
| `message` | `string` | **Required**. example group message |

for clear all message in the chat 

```php
echo $wa->clearMessage('6281292267204');
 ```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `numberOrGroupId` | `string` | **Required**. 6281292267204 (you can use a number or group id) |

for delete chat 

```php
echo $wa->deleteChat('6281292267204');
 ```
| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `numberOrGroupId` | `string` | **Required**. 6281292267204 (you can use a number or group id) |


## Please check this out

 - [mywaapi](https://github.com/yama24/mywaapi)
 - [Data URLs format](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/Data_URLs)

