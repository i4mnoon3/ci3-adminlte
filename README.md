# ci-adminlte

## cigen

The package includes cigen for auto generating simple CodeIgniter components.

```
# Example
$ php vendor/iescarro/cigen/cigen.php g "user|username,password,salt,name,phone,email"
```

The generated view components are on default views directory. With this template, we need to move it to views/AdminLTE so layout library can find the specified views.