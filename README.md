<Center><h1>Sviluppatore: Laravel Background Job Runner</h1></Center>

<p>This project creates a unique Laravel background task runner that doesn't rely on the integrated queue system. Delay execution, priority handling, logging, retry attempts, and a web-based job management dashboard are all supported by the system.</p>

# Features:
- Custom Job Execution: Run PHP classes and methods as background jobs.
- Job Delays: Delay job execution by a specified number of seconds.
- Job Priority: Higher-priority jobs execute before lower-priority ones.
- Logging: Tracks job execution, status (success/failure), and errors.
- Retry Mechanism: Configurable retry attempts for failed jobs.
- Web Dashboard: View active jobs, logs, and cancel running jobs.

  # Requirements:
- PHP 8.1 or higher.
- Laravel 10.x or higher.
- Composer.

## Setup Instructions
- Clone the Repository: git clone https://github.com/DaLebza10111/Backend-Assessment.git
- Using [Command Prompt or CMD], run "composer install".


### Configurre the Environment:
  - Using [Command Prompt or CMD], run "cp .env.example .env".

### On your ".env" file
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=your_database_name
- DB_USERNAME=your_username
- DB_PASSWORD=your_password

## Run Migrations:
- php artisan migrate
  
## Start the Server:
- Run "php artisan serve"

# EXAMPLE COMMAND:
[Paste this on CMD] php artisan job:run "App\Services\ExampleJob" "execute" --params='["Hello World"]' --delay=5
