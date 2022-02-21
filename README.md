# Custom Bar for Magento 2

This extension allows your Magento store to show text with logged in customer group name logged at top of the page.

[![Build Status](https://travis-ci.org/wdevs/module-custom-bar.svg?branch=develop)](https://travis-ci.org/wdevs/module-custom-bar) [![Packagist](https://img.shields.io/packagist/v/wdevs/module-custom-bar.svg)](https://packagist.org/packages/wdevs/module-custom-bar) [![Downloads](https://img.shields.io/packagist/dt/wdevs/module-custom-bar.svg)](https://packagist.org/packages/wdevs/module-custom-bar)


## Installation

### Install via composer (recommended)

Run the following command in Magento 2 root folder:
```sh
composer require wdevs/module-custom-bar
```

### Using GIT clone

Run the following command in Magento 2 root folder:
```sh
git clone git@github.com:wdevs/module-custom-bar.git app/code/Wdevs/CustomBar
```

## 2. Activation

Run the following command in Magento 2 root folder:
```sh
php bin/magento module:enable Wdevs_CustomBar
```
```sh
php bin/magento setup:upgrade
```

Clear the caches:
```sh
php bin/magento cache:clean
```

## 3. Configuration

1. Go to **STORES** > **Configuration** > **Wdevs** > **Custom Bar**.
2. Select **Enabled** option to enable module.

## Contribution

Want to contribute to this extension? The quickest way is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).


## Support

If you encounter any problems or bugs, please open an issue on [GitHub](https://github.com/wdevs/module-custom-bar/issues).

Need help setting up or want to customize this extension to meet your business needs? Please open an issue and if we like your idea we will add this feature for free.

## Known issues
