## 1   **Alustasin Ubuntu resetiga**

## 2   **Php install ja uuendamine**

    sudo apt update
    sudo apt upgrade
    sudo apt install php

## 3   **Extensionite laadimine**

    sudo apt install php-bcmath 
    ja mis veel vaja oli

## 4   **Composeri laadimine**

    sudo apt install composeri

    composer -v

## 5   **Laraveli install**

    composer global require laravel/installer

    composer create-project --prefer-dist laravel/laravel blog

    cd blog/

    code .

## 6   **Server alustus**

    php artisan serve