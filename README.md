# Documentation

## Requirements

* **SERVER**: Apache 2 or NGINX.
* **RAM**: 3 GB or higher.
* **PHP**: 7.4 or higher.
* **For MySQL users**: 5.7.23 or higher.
* **For MariaDB users**: 10.2.7 or Higher.
* **Node**: 8.11.3 LTS or higher.
* **Composer**: 1.6.5 or higher.

## Installation and Configuration

**1. You can install from your console.**

##### Execute these commands below, in order

~~~
1. composer install
~~~

~~~
2. php artisan bagisto:install
~~~

~~~
3. php artisan vendor:publish
~~~

##### select the number of `Provider: Webkul\Shop\Providers\ShopServiceProvider` in the options given

##### On local:

~~~
php artisan serve
~~~


**How to log in as admin:**

> *http(s)://example.com/admin/login*

~~~
email:admin@example.com
password:admin123
~~~

**How to log in as a customer:**

*You can directly register as a customer and then log in.*

> *http(s)://example.com/customer/register*