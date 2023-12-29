---
outline: deep
---

# Laraca Config: Structure

Generally, every key in the config corresponds to a fairly obvious command.

Ex: `cast` key in `structure` corresponds to `make:cast`

## Buildng Your Structure

Build your directory structure through the `path` and `parent` keys. Normal nesting logic here for the most part.

**All that matters is that every key must, itself or through its lineage, lead back to a parent of `app` or `base`.**

_App being inside the app/ folder and base being the application root directory (parent to app/ in a fresh Laravel install)._

## Directory That's Just a Parent

When you want a directory that is just a parent to others, there are two ways to do that:

### Via Path (recommended)

Or avoid bloat in your config and just put it in its path.

```php
'model' => [
    'path' => 'Data/Models',
    'parent' => 'app',
],
```

Results: `app/Data/Models`

### Via Parent

Additional keys can be added to the `structure` to serve as parent directories.

```php
'data' => [
    'path' => 'Data',
    'parent' => 'app',
],
'model' => [
    'path' => 'Models',
    'parent' => 'data',
],
```

Results: `app/Data/Models`

## Default config structure

```
Laravel root
├── app
│   ├── Broadcasting
│   ├── Console
│   │   └── Commands
│   ├── Data
│   │   ├── Casts
│   │   ├── Models
│   │       └── Scopes
│   │   ├── Observers
│   │   └── Values
│   ├── Enums
│   ├── Events
│   ├── Exceptions
│   ├── Http
│   │   ├── Controllers
│   │   ├── Middleware
│   │   ├── Requests
│   │   └── Resources
│   ├── Jobs
│   ├── Listeners
│   ├── Mail
│   ├── Notifications
│   ├── Policies
│   ├── Providers
│   ├── Rules
│   └── View
│       └── Components
├── database
│   ├── factories
│   ├── migrations
│   └── seeders
├── resources
│   └── views
├── routes
└── tests
```

## Things to Know

### You can unset view

If the Laraca config `view` key is not set or throws an error, the command will use the Laravel view path from `config/view.php`.
Why? So, people can use the available Laravel configuration if they choose. And since it's there, it’s a backup if the path throws an error like missing parent or key.