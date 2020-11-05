# ci3-adminlte

It's a simple themed CodeIgniter 3 with AdminLTE.

## Install

You can download the zip file and extract it to your htdocs.

## cigen

The package includes cigen for auto generating simple CodeIgniter components. Run composer before using this vendor asset.

```
# Example
$ php vendor/iescarro/cigen/cigen.php g "user|username,password,salt,name,phone,email"
```

The generated view components are on default views directory. With this template, we need to move it to views/AdminLTE so layout library can find the specified views.

## Contribute

See https://github.com/iescarro/ci3-adminlte/issues Thanks!

## Donate

[![](https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png)](https://www.buymeacoffee.com/iescarro)
