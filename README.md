<p><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Laravel Todo アプリ

**シンプルな Laravel ベースの Todo（やること）管理アプリケーションです。**

[![Image from Gyazo](https://i.gyazo.com/6dbf31c6cc877edf9f40e7f4f01bd3a3.png)](https://gyazo.com/6dbf31c6cc877edf9f40e7f4f01bd3a3)

---

## 目次

1. [概要](#概要)
2. [機能](#機能)
3. [使用技術スタック](#使用技術スタック)
4. [動作環境](#動作環境)
5. [セットアップ手順](#セットアップ手順)
6. [使い方](#使い方)

---

## 概要

このリポジトリは、Laravelフレームワークを使ってTodoアプリケーションを学習目的で構築したものです。
基本的なCRUD操作（作成・表示・編集・削除）を通して、Laravelの基礎的な機能（ルーティング、コントローラー、ビュー、モデル、マイグレーション、Bladeテンプレートなど）の理解を深めることを目的としています。

---

## 機能

* Todoの一覧表示
* Todoの新規作成
* Todoの編集機能
* Todoの削除機能
* バリデーション：タイトル入力必須、文字数制限など

---

## 使用技術スタック

* PHP
* Laravel フレームワーク
* Blade テンプレートエンジン
* データベース：SQLite

---

## 動作環境

* PHP 8.4.10
* Composer
* Laravel 8.83.29
* データベース：SQLite

---

## セットアップ手順

```bash
# リポジトリをクローン
git clone https://github.com/monaka0309/laravel-tutorial.git
cd laravel-tutorial

# 依存関係をインストール
composer install

# 環境変数ファイルをコピー
cp .env.example .env    

# データベース設定（SQLite）
# .env に以下のように設定
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db
DB_USERNAME=user
DB_PASSWORD=password


# マイグレーション実行
php artisan migrate

# 開発サーバーを起動
php artisan serve

# ブラウザでアクセス
# http://127.0.0.1:8000
```

---

## 使い方

1. アプリを起動後、トップページにアクセス。
2. Todoを追加するには、タイトルを入力して「追加」ボタンをクリック。
3. 一覧に表示されたTodo項目に対して「編集」または「削除」を行えます。
4. 入力内容に不備がある場合、バリデーションエラーメッセージが表示されます。

---

## ディレクトリ構成（主要ファイル）

```
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── TodoController.php
│   ├── Models/
│   │   └── Todo.php
├── database/
│   ├── migrations/
│   │   └── xxxx_xx_xx_create_todos_table.php
├── resources/
│   ├── views/
│   │   ├── todos/
│   │   │   ├── index.blade.php
│   │   │   ├── create.blade.php
│   │   │   └── edit.blade.php
├── routes/
│   └── web.php
├── .env.example
├── composer.json
└── README.md
```



