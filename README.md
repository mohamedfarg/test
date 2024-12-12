# Laravel TODO Application

This is a simple **Laravel-based TODO application** designed to help you organize your tasks. It allows you to create, edit, mark as completed, and delete tasks in an intuitive interface.

## Features

- **Add Tasks**: Create new TODO items directly from the homepage.
- **Edit Tasks**: Update the title of any TODO.
- **Mark as Completed**: Mark tasks as completed to keep track of your progress.
- **Delete Tasks**: Remove tasks you no longer need.
- **User-Friendly UI**: A clean and responsive interface.

## Prerequisites

Before you begin, ensure you have the following installed on your system:

- PHP (>= 8.0)
- Composer
- Laravel Framework (>= 9.x)
- A database system (e.g., MySQL, SQLite)
- Node.js and npm (for frontend assets, optional)

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/mohamedfarg/laravel-todo-app.git
   cd laravel-todo-app
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Create a `.env` file:
   ```bash
   cp .env.example .env
   ```

4. Configure the database in the `.env` file:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=todo
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. Run migrations to set up the database:
   ```bash
   php artisan migrate
   ```

6. Start the Laravel development server:
   ```bash
   php artisan serve
   ```

7. Open your browser and navigate to:
   ```
   http://localhost:8000
   ```

## Usage

1. **Adding Tasks**:
   - Use the input field on the homepage to add a new task.

2. **Editing Tasks**:
   - Click the "Edit" button next to a task to update its title.

3. **Marking as Completed**:
   - Click the "Completed" button to mark a task as finished. Completed tasks will appear with a strikethrough.

4. **Deleting Tasks**:
   - Click the "Delete" button to remove a task permanently.

## Screenshots

![image](https://github.com/user-attachments/assets/94f214b3-950a-4b33-88fc-419dbc4d2eca)


## License

This project is licensed under the [MIT License](LICENSE).

---

Feel free to contribute to this repository by submitting issues or pull requests!


