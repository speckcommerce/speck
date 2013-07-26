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

The dependencies for SpeckCommerce are set up as Git submodules so you should not have to mess with dependencies.

* PHP 5.4+
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

If you've contributed and we haven't updated the list, please feel free to submit a pull request adding your name here!

Why Zend Framework 2?
---------------------

Simple: The ZF2 module system is awesome and provides the perfect foundation for
a project with goals such as ours.

Installation
------------

* Run `git clone https://github.com/speckcommerce/speck.git` and
  set up a vhost pointing to the public directory.
* Install with Composer -- http://getcomposer.org
  * `cd speck && ../composer.phar install`
* Launch the app from the browser, you will be propted for db info/etc
  * installation module is somewhat fragile, please add issues/pull requests at http://github.com/speckcommerce/SpeckInstall
 
Community
---------

Join us on the Freenode IRC network: #speckcommerce. Our numbers are few right
now, but we're a dedicated small group working on this project full time.
