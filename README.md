NGUYỄN TIẾN ĐẠT
PHP-DEV-Standar-TDD


Getting Started

    'git clone https://github.com/DatD5/PHP-DEV-Standar-TDD-.git'
    php artisan serve
    
DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=task-management

DB_USERNAME=root

DB_PASSWORD=

![Screenshot 2024-12-30 141951](https://github.com/user-attachments/assets/796fe3d9-c6f5-43b1-abb9-eda92364bacf)


Tools/commands used

Create Migration:

    php artisan make:migration create_tasks_table
    php artisan migrate
    
Tạo Model và Controller:

    php artisan make:model Task
    php artisan make:controller Task

Create Form Request Validation

    php artisan make:request CreateTaskRequest
    php artisan make:request UpdateTaskRequest

Create Factory and Seed dữ liệu mẫu

    php artisan make:factory TaskFactory
    php artisan tinker
    App\Models\Task::factory(100)->create()
    App\Models\User::factory()->create(['password'=>bcrypt(12345678)]
    
Creating feature Test

    php artisan make:test CreateNewTaskTest
    php artisan make:test DeleteTaskTest
    php artisan make:test EditTaskTest
    php artisan make:test GetListTaskTest
    php artisan make:test ViewTaskTest
    
Create tasks

    cd resources/views/tasks
    mkdir create.blade.php
    mkdir edit.blade.php
    mkdir index.blade.php
    mkdir show.blade.php
Install Laravel UI and Auth

    composer require laravel/ui
    php artisan ui vue --auth
    npm install; npm run dev
    
Run TEST

    php artisan test --filter test

Run
List Task

![Screenshot 2024-12-30 111938](https://github.com/user-attachments/assets/be436ce2-2c25-4680-bfd1-edd5f50131a3)



Create Task

![Screenshot 2024-12-30 120118](https://github.com/user-attachments/assets/c5581f06-6932-41d5-b733-0a4ee1b38f24)

View Task

![Screenshot 2024-12-30 141700](https://github.com/user-attachments/assets/f2615119-1dd2-4dee-88af-cddc3ad3dae9)


Edit Task

![Screenshot 2024-12-30 140817](https://github.com/user-attachments/assets/e03eddab-5d06-403b-b4a8-26c37d472dec)

List Users

![Screenshot 2025-01-10 145442](https://github.com/user-attachments/assets/263671ff-96b0-416a-8c91-979e9aaebe54)


Create User

![Screenshot 2025-01-10 145505](https://github.com/user-attachments/assets/c24af5ed-85f7-4840-957c-ad032fac49f1)


View User

![Screenshot 2025-01-10 145539](https://github.com/user-attachments/assets/48e890ed-7040-4b7e-88a7-47a365f63ae9)


Edit User

![Screenshot 2025-01-10 145601](https://github.com/user-attachments/assets/37ac8f98-3ab9-456a-ad77-708b41a848c2)



