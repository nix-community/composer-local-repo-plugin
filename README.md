# composer-local-repo-plugin

## Usage

Install the plugin globally once:

```
composer global require loophp/composer-local-repo-plugin
```

Then, for each project where you want to create a local composer repository, do:

```
composer build-local-repo /path/to/local/repository
composer config repo.packagist false
composer config repo.composer '{"type": "composer", "url": "file:///path/to/local/reposity"}'
composer install
```

This project is inspired by `fossar/composition-c4` at https://github.com/fossar/composition-c4/
