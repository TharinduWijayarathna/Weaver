# Weaver - E-commerce CMS

Weaver is a powerful and flexible Content Management System (CMS) designed to help you manage various types of e-commerce stores effortlessly. Whether it's an online mobile shop, toy mart, grocery store, or any other type of retail business, Weaver provides the tools you need to succeed. Built with Laravel Livewire, Weaver offers a seamless user experience and efficient management of your online store.

## Features

- **Product Management**: Easily add, edit, and delete products. Manage product categories, tags, and attributes.
- **Order Management**: View and manage customer orders, update order statuses, and track shipments.
- **User Management**: Handle user registrations, profiles, and permissions.
- **Inventory Management**: Keep track of stock levels, set stock alerts, and manage suppliers.
- **Sales Reports**: Generate detailed sales reports to monitor your store's performance.
- **Responsive Design**: Fully responsive design that looks great on all devices.
- **Customizable**: Highly customizable to fit the needs of different types of stores.

## Technologies Used

- **Laravel**: A PHP framework for building robust and scalable web applications.
- **Laravel Livewire**: A full-stack framework for building dynamic interfaces using Laravel.
- **MySQL**: A reliable and efficient database for storing application data.
- **Tailwind CSS**: A utility-first CSS framework for designing responsive and modern interfaces.

## Installation

### Prerequisites

- PHP >= 8.2
- Composer
- MySQL
- Node.js & npm

### Steps

1. **Clone the repository:**
    ```bash
    git clone https://github.com/TharinduWijayarathna/Weaver.git
    cd weaver
    ```

2. **Install dependencies:**
    ```bash
    composer install
    npm install
    npm run dev
    ```

3. **Set up environment variables:**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Configure the `.env` file:**
    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=weaver
    DB_USERNAME=root
    DB_PASSWORD=yourpassword
    ```

5. **Run migrations and seed the database:**
    ```bash
    php artisan migrate --seed
    ```

6. **Start the development server:**
    ```bash
    php artisan serve
    ```

## Usage

### Admin Panel

1. **Login to the admin panel:**
    - URL: `http://your-domain.com/dashboard`
    - Default credentials:
      - Email: `admin@weaver.com`
      - Password: `password`

2. **Manage your store:**
    - Add and manage products.
    - Process and manage orders.
    - View and manage users.
    - Generate and view sales reports.

### Store Frontend

1. **Visit your store frontend:**
    - URL: `http://your-domain.com`
2. **Browse and purchase products:**
    - Search for products, add to cart, and proceed to checkout.

## Customization

Weaver is designed to be easily customizable. You can extend and modify the functionality to fit your specific needs. Here are a few examples:

- **Customizing Views:** Modify the Blade templates in the `resources/views` directory.
- **Adding New Features:** Use Laravel's artisan commands to generate new controllers, models, and other components.
- **Modifying Styles:** Customize the styles using Tailwind CSS in the `resources/css` directory.

## Contributing

Contributions are welcome! Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Make your changes and commit them with descriptive messages.
4. Push your changes to your forked repository.
5. Create a pull request to the main repository.

## License

Weaver is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contact

For any inquiries or support, please contact us at support@weaver.com.

---

Thank you for using Weaver! We hope it helps you manage your e-commerce store efficiently.
