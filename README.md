# Проект: Реализация архитектурного паттерна `MVC` на примере работы простейшего фреймворка

## Выберите язык:

| Русский  | English                              | Español                              | 中文                              | Français                              | Deutsch                              |
|----------|--------------------------------------|--------------------------------------|---------------------------------|---------------------------------------|--------------------------------------|
| **Выбран** | [English](./docs/langs/README_en.md) | [Español](./docs/langs/README_es.md) | [中文](./docs/langs/README_zh.md) | [Français](./docs/langs/README_fr.md) | [Deutsch](./docs/langs/README_de.md) |

## Используемый стек:

- PHP 8
- Mysql (PDO)
- Bootstrap 5.3

## Описание:

Проект реализует архитектурный шаблон `MVC` на примере простейшего, самописного фреймворка. В рамках фреймворка был реализован CRUD на примере раздела "Статьи":

<details>
  <summary>Создание</summary>

![ajax filter is in operation](./docs/img/create-article.gif)
</details>

<details>
  <summary>Отображение</summary>

![ajax filter is in operation](./docs/img/read-article.gif)
</details>

<details>
  <summary>Обновление</summary>

![ajax filter is in operation](./docs/img/update-article.gif)
</details>

<details>
  <summary>Удаление</summary>

![ajax filter is in operation](./docs/img/delete-article.gif)
</details>

При создании и обновлении статьи реализовано валидация:

<details>
  <summary>Процесс валидации</summary>

![ajax filter is in operation](./docs/img/delete-article.gif)
</details>

В каталоге `docs/conf/` располагается: `nginx-configuration.conf` - пример конфигурации для `nginx`.

## Запуск проекта:

1. Добавьте конфигурацию на ваш сервер. За основу может быть взят файл из `docs/conf/`.
2. Выполните `composer i`
3. Переименуйте `.env.example` в `.env` и секцию `# DB info`
4. Создайте базу данных и импортируйте содержимое файла `db-dump-with-articles.sql`, который находится в `docs/mysql-dump/`.

>> Изменения сделанные в 2024 - минимальны. Я целенаправленно оставил структуру ядра исходной, не стал добавлять функционал контейнера, DI и прочего. Так как это одна из первых моих работ и поэтому я решил сохранить его практически в первозданном виде 😇