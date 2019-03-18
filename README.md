# CakePHP Application Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.


## 3. Download CakePHP with Composer

composer create-project --prefer-dist cakephp/app cakeClinicalMS

## 4. Create Database & Tables

1. Create db and tables
2. Connect the app to db
3. test it out

## 5. Create CRUD Dynamically

1. Scaffold: users, patients, invoices, doctors, carriers, appointments
    I:\laragon\www\cakeClinicalMS\bin (master)
    λ cake bake all users
    λ cake bake all patients
    λ cake bake all invoices
    λ cake bake all doctors
    λ cake bake all carriers
    λ cake bake all appointments

## 6. Change Table Configuration

1. Modify column in doctors table from tinyint(4) to tinyint(1)
   NOTE:
   In case needed, to modify a table, you can delete the created file in controller, model, and view. Then do migrations again.
2. In layout/default.ctp, modify the Discription of the app

## 7. Create Top Navigation Bar

Added top navigation to default page

## 8. Dynamic Sidebar Navigation Part 1

modified:   src/Template/Doctors/add.ctp
modified:   src/Template/Doctors/edit.ctp
modified:   src/Template/Doctors/index.ctp
modified:   src/Template/Doctors/view.ctp

src/Template/Element/actions.ctp

## 9. Dynamic Sidebar Navigation Part 2

modified:   src/Template/Appointments/add.ctp
modified:   src/Template/Appointments/edit.ctp
modified:   src/Template/Appointments/index.ctp
modified:   src/Template/Appointments/view.ctp
modified:   src/Template/Carriers/add.ctp
modified:   src/Template/Carriers/edit.ctp
modified:   src/Template/Carriers/index.ctp
modified:   src/Template/Carriers/view.ctp
modified:   src/Template/Invoices/add.ctp
modified:   src/Template/Invoices/edit.ctp
modified:   src/Template/Invoices/index.ctp
modified:   src/Template/Invoices/view.ctp
modified:   src/Template/Patients/add.ctp
modified:   src/Template/Patients/edit.ctp
modified:   src/Template/Patients/index.ctp
modified:   src/Template/Patients/view.ctp
modified:   src/Template/Users/add.ctp
modified:   src/Template/Users/edit.ctp
modified:   src/Template/Users/index.ctp
modified:   src/Template/Users/view.ctp
