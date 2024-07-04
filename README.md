# Weaver

Weaver is an e-commerce CMS web application built using Laravel and Livewire. It provides a robust and scalable platform for managing online stores, products, orders, and customers.

## Features

- **Product Management**: Add, edit, and delete products with ease.
- **Order Management**: Track and manage customer orders.
- **Customer Management**: Maintain customer information and purchase history.
- **Inventory Management**: Monitor stock levels and receive notifications for low stock.
- **Dashboard**: An intuitive dashboard to get an overview of your store’s performance.
- **Authentication**: Secure login and registration system using Laravel Breeze.
- **Real-time Updates**: Livewire for dynamic and real-time updates without page refresh.
- **Responsive Design**: Optimized for both desktop and mobile devices.

## Installation

To get started with Weaver, follow these steps:

1. **Clone the Repository**:
    ```sh
    git clone https://github.com/TharinduWijayarathna/weaver.git
    cd weaver
    ```

2. **Install Dependencies**:
    ```sh
    composer install
    npm install
    npm run dev
    ```

3. **Set Up Environment**:
    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

4. **Configure Database**:
    Update your `.env` file with your database credentials:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

5. **Run Migrations**:
    ```sh
    php artisan migrate
    ```

6. **Start the Server**:
    ```sh
    php artisan serve
    ```

You can now access Weaver at `http://localhost:8000`.

## Usage

### Admin Dashboard

- **Login**: Access the admin dashboard using your credentials.
- **Manage Products**: Navigate to the products section to add, edit, or delete products.
- **Manage Orders**: View and process customer orders in the orders section.
- **Manage Customers**: Keep track of customer information and purchase history.
- **View Reports**: Access sales reports and analytics from the dashboard.

### Customer Interface

- **Browse Products**: Customers can browse and search for products.
- **Add to Cart**: Customers can add products to their shopping cart.
- **Checkout**: Secure checkout process for placing orders.
- **Order History**: Customers can view their past orders and track current orders.

## Contributing

We welcome contributions to Weaver! To contribute, follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/your-feature`).
5. Open a pull request.

## License

Weaver is open-source software licensed under the [MIT license](LICENSE).
