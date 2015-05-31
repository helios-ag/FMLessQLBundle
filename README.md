FMLessQLBundle
==============

[LessQL](https://github.com/morris/lessql) integration in Symfony2

LessQL is a lightweight and powerful alternative to Object-Relational Mapping for PHP.


## Installation


### Step 1: Installation

Using Composer, just add the following configuration to your `composer.json`:

Or you can use composer to install this bundle:
Add FMBbcodeBundle in your composer.json:

```sh
    composer require helios-ag/fm-lessql-bundle
```

Now tell composer to download the bundle by running the command:

```sh
    composer update helios-ag/fm-lessql-bundle
```

### Step 2: Enable the bundle

Finally, enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new FM\LessqlBundle\FMLessqlBundle(),
    );
}
```

## Configuration

You can configure bundle as follows
```yaml
fm_lessql:
    instances:
        default:
            dsn: sqlite:%kernel.root_dir%/test.sqlite3
            username: ''
            password: ''
            options:
        mysql:
            dsn: mysql:host=localhost;dbname=testdb;charset=utf8
            username: root
            password: 12345
            options:
              'PDO::ATTR_EMULATE_PREPARES': { value: false }
              'PDO::ATTR_ERRMODE': { value: 'PDO::ERRMODE_EXCEPTION' }
```

##Usage
Controller
```php

class AppController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction()
    {

        $db = $this->get('fm_lessql.manager')->getDB('default');
        $posts = array();
        $result = $db->table_name();
        $result = $db->table( 'post' );
        $row = $result->fetch();      // fetch next row in result
        $rows = $result->fetchAll();  // fetch all rows
    }     
}
```        
            
More information can be found at http://lessql.net/            