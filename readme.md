# Subscription Manager

## Description
Subscription Manager is a web application designed to help users manage their subscriptions efficiently. It allows users to add, edit, and delete subscriptions, and provides reminders for upcoming renewals.

## Features
- Add new subscriptions
- Edit existing subscriptions
- Delete subscriptions
- View all subscriptions
- Receive reminders for upcoming renewals

## Installation
1. Clone the repository:
    ```bash
    git clone repo link
    ```
2. Navigate to the project directory:
    ```bash
    cd subscription-manager
    ```
3. Install the required dependencies:
    ```bash
    composer install
    npm install
    ```
4. Set up the environment variables:
    ```bash
    cp .env.example .env
    ```
5. Generate the application key:
    ```bash
    php artisan key:generate
    ```
6. Run the migrations:
    ```bash
    php artisan migrate
    ```

## Usage
1. Start the local development server:
    ```bash
    php artisan serve
    ```
2. Open your browser and navigate to `http://localhost:8000`.

## Contributing
1. Fork the repository.
2. Create a new branch:
    ```bash
    git checkout -b feature-branch
    ```
3. Make your changes.
4. Commit your changes:
    ```bash
    git commit -m "Add some feature"
    ```
5. Push to the branch:
    ```bash
    git push origin feature-branch
    ```
6. Open a pull request.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact
For any inquiries, please contact [yourname@example.com](mailto:yourname@example.com).

## Screenshots
Here are some screenshots of the Subscription Manager application:

- Home Page
    ![Home Page](https://cdn.discordapp.com/attachments/889078845985128449/1333848690464391269/image.png?ex=679a62e5&is=67991165&hm=9830035df1cff58e0c5754c93d7402fa405fae582b1f212f3b9ca982a196d62c&)
- Login Page
    ![Add Subscription](https://cdn.discordapp.com/attachments/889078845985128449/1333848821360496730/image.png?ex=679a6304&is=67991184&hm=0022ee1b1a185f45e1c108c977646c821541ff1ff54fb6e4f37656cee133f984&)
- Register Page
    ![Edit Subscription](https://cdn.discordapp.com/attachments/889078845985128449/1333848879531032730/image.png?ex=679a6312&is=67991192&hm=12b201e0d8bff8ae7230680c636eafc97ebe55d2be7221e3a6c507afd014ebb7&)
- Subscription Page
  
    ![Subscription List](https://cdn.discordapp.com/attachments/889078845985128449/1334163290112397353/image.png?ex=679b87e3&is=679a3663&hm=9de7b7f598a01c07a7d57e7b562b962aa7a8a18a32f6951b992c50886e2d8875&)

## Backend Setup
1. Ensure you have PHP and Composer installed on your machine.
2. Follow the installation steps mentioned above to set up the project.
3. Set up your database and update the `.env` file with your database credentials.
4. Run the migrations to create the necessary tables:
        ```bash
        php artisan migrate
        ```
5. Seed the database with initial data (optional):
        ```bash
        php artisan db:seed
        ```

## Frontend Setup
1. Ensure you have Node.js and npm installed on your machine.
2. Navigate to the project directory and install the frontend dependencies:
        ```bash
        npm install
        ```
3. Compile the frontend assets:
        ```bash
        npm run dev
        ```

## Running Tests
To run the tests for this project, use the following command:
```bash
php artisan test
```

## Technologies Used
- PHP
- Laravel
- HTML
- CSS
- JavaScript
- MySQL

## Acknowledgements
- [Laravel Documentation](https://laravel.com/docs)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
