SpeckCommerce
=============
Version 0.0.1

Introduction
------------

SpeckCommerce is an open source e-commerce platform written on Zend Framework 2.
The most notable feature of SpeckCommerce is the incredibly flexible [modular
design](https://github.com/speckcommerce/speck/wiki/Module-Separation-Strategy).
The SpeckCommerce project was started by companies and developers who were
unsatisfied with the overall quality of the
[existing](http://www.magentocommerce.com/) [open](http://www.oscommerce.com/)
[source](http://www.zen-cart.com/) [e-commerce](http://www.ecartcommerce.com/)
[platforms](http://www.opencart.com/) written in PHP.  Leveraging our collective
e-commerce knowledge and years of experience building and working with
e-commerce platforms, we're developing what we hope to be the fastest, most
flexible, and well-built e-commerce platform built in PHP.

A secondary goal of SpeckCommerce is to be an exemplary model of the powerful
new module system in Zend Framework 2.

Requirements
------------

The dependencies for SpeckCommerce are set up as Git submodules so you should not hav

* PHP 5.3.3+
* [Zend Framework 2](https://github.com/zendframework/zf2) (latest master)
* [ZfcBase](https://github.com/ZF-Commons/ZfcBase)
* [ZfcUser](https://github.com/ZF-Commons/ZfcUser)
* [SpeckCatalog](https://github.com/speckcommerce/SpeckCatalog)
* [SpeckCart](https://github.com/speckcommerce/SpeckCart)


Contributors
------------

* [Evan Coury] (https://github.com/EvanDotPro) (aka EvanDotPro)
* [Nigel Lundsten](https://github.com/nclundsten) (aka nlundsten)
* [Ben Youngblod](https://github.com/bjyoungblood) (aka bjy or bjyoungblood)
* [Zachary Burnham](https://github.com/zburnham) (aka Evil\_Otto)
* [Yanick Rochon](https://github.com/yanickrochon) (aka yanick)
* [Kathryn Reeve](https://github.com/BinaryKitten) (aka BinaryKitten)

Why Zend Framework 2?
---------------------

Simple: The ZF2 module system is awesome and provides the perfect foundation for
a project with goals such as ours.

Installation
------------

* Run `git clone --recursive https://github.com/speckcommerce/speck.git` and
  set up a vhost pointing to the public directory.
* Copy `./config/autoload/database.local.php.dist` to
  `./config/autoload/database.local.php` and update credentials as needed.
* Import the DB schemas from:
 * `./vendor/SpeckAddress/data/schema.sql`
 * `./vendor/SpeckCart/data/schema.sql`
 * `./vendor/SpeckCatalog/data/schema.sql`
 * `./vendor/SpeckUserAddress/data/schema.sql`
 * `./vendor/ZfcUser/data/schema.sql`

Working on modules
------------------

We've made it easy to help us work on the various Speck modules without having to worry yourself with the details of Git submodules.

0. Fork the module you wish to work on, on GitHub.
1. Clone **your fork** of the module into the `./devmodules` directory. SpeckCommerce will now be using this copy of the module instead of the one under `./vendor`.
2. cd into `./devmodules/{modulename}`, and run `git remote add upstream https://github.com/speckcommerce/{modulename}.git`
3. Always work in branches and do not commit to master! See [this post](http://blog.evan.pro/keeping-a-clean-github-fork-part-1). There's also a nice [bash script](https://gist.github.com/1506822) to help keep your master branch up to date.



Community
---------

Join us on the Freenode IRC network: #speckcommerce. Our numbers are few right
now, but we're a dedicated small group working on this project full time.
