# Laravel Reports

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](http://makeapullrequest.com)
[![Only 32 Kb](https://badge-size.herokuapp.com/Naereen/StrapDown.js/master/strapdown.min.js)](https://github.com/Naereen/StrapDown.js/blob/master/strapdown.min.js)

It's a countless times to build reports in your dashboard something like latest users registered, user histories, appointments, etc.. Then export this report table as Excel, Or you need to filter the results or get some results based on search criteria so you don't need to do that so and so everytime. With one file and one command you will generate everything you need

## Features

- Generate Report based on `Model` like `User`, `Post`, `History`, etc.. with specific fields like `id`, `name`, `email`,.. 
- Export the results as Excel
- Search by specific fields
- Sort by specific fields

## Report File Structure
```json
{
  "Reports" : 
  [
    {
      "name" : "Users Report",
      "model": "User",
      "fields": ["id", "name", "email", "mobile"],
      "sort_by": "id",
      "filter_by" : ["id", "name", "mobile"],
      "view": "users.index",
      "export_as": ["excel"]
    },
    
    {
      "name" : "History Report",
      "model": "History",
      "fields": ["user_id", "transaction_id", "description"],
      "sort_by": { 
        "field": "created_at",
        "type" : "DESC"
      },
      "filter_by" : ["user_id", "transaction_id"],
      "view": "history.index",
      "export_as": ["excel"]
    }
  ]
}

```

## Installation

Run the following command

```composer require mgamal/laravel-reports```

Laravel >= 5.5 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

## Usage

1. Create file called `reports.json` at the project root
2. Then, run command `php artisan make:report`
3. Finally, go to the url http://_{APP_URL}_/reports/_{model-name-in-lowercase}_

## Development Stack

### Backend

- Laravel 6
- MySQL

### Frontend

- HTML/CSS

## Contribution Guides

- ### Pull Requests

  - Fork the Framework repository
  - Create a new branch for your awesome work
  - Send a pull request

- ### Style Guide

  - All pull requests must adhere to the [PSR-12](https://www.php-fig.org/psr/psr-12/) standard.

- ### Unit Testing

  - All pull requests must be accompanied by passing unit tests.We are using PHPUnit for testing.

## License

- The license under the MIT.
