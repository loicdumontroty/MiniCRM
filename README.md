<p align="center">
    </a>
    <h1 align="center">Mini-CRM</h1>
    <br>
</p>

The goal of the project is to create a mini CRM with [Yii 2](http://www.yiiframework.com/). It can help an admin to manage different companies and their employees.

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      migrations/         contains the migrations schemes.
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources

CONFIGURATION
-------------

### Database

Edit the file `config/db.php` datas from your own database:

```
$hostname = 'YOUR_HOSTNAME'; // Replace it by the hostname of your database.
$dbName = 'YOUR_DB_NAME'; // Replace it the name of your DB.
$username = 'YOUR_USERNAME'; // Replace it with your own username.
$password = 'YOUR_PASSWORD'; // Replace it with your own password.
```

### Logos

By default, the companies logos are stored in  `\web\uploads\logos`.
