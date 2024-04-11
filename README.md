# **TELECOMPARE**
## Introduction


TELECOMPARE is a web application that simplifies the process of selecting mobile plans by allowing users to compare offerings from different carriers. With detailed information about rate plans, including features, prices, and terms, users can easily identify the best value plan based on their individual requirements.

## Features

1. **Carrier Comparison**: View detailed information about rate plans offered by different mobile carriers. Compare features, prices, and terms side by side. Easily identify the best value plan based on individual requirements.

2. **Prepaid and Postpaid Plans**: Explore both prepaid and postpaid options offered by each carrier. Understand the benefits and limitations of each plan type. Choose the most suitable plan based on budget and usage preferences.

3. **Internet Network Coverage**: [Work in Progress] Coming soon! Analyze and compare internet network coverage across different carriers. Evaluate network strength and availability in specific locations. Make informed decisions based on network coverage maps and data.


## User Story

As a mobile phone user, I want to be able to compare rate plans, both prepaid and postpaid, offered by different carriers in one place. Additionally, I would like to have access to information about internet network coverage to help me make a decision about which carrier to choose. TELECOMPARE provides me with a one-stop application for comparing all mobile carriers, their rate plans, and internet network coverage, making it easy for me to select the best plan for my needs.

## How to Run

To run TELECOMPARE on your local machine, follow these steps:


### Prerequisites

1. Install XAMPP: Download and install XAMPP from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html) based on your operating system.

### Setup

1. Clone this repository.
2. Move the project folder to the XAMPP `htdocs` directory:
- For Windows: `C:\xampp\htdocs\`
- For macOS: `/Applications/XAMPP/htdocs/`
- For Linux: `/opt/lampp/htdocs/`

### Database Configuration

1. Start the Apache and MySQL services using the XAMPP control panel.
2. Open phpMyAdmin by visiting [http://localhost/phpmyadmin](http://localhost/phpmyadmin) in your web browser.
3. Create a new database named `telecompare`.
4. Import the SQL file provided in the `database` directory into the `telecompare` database.

### Running the Application

1. Open your web browser and navigate to [http://localhost/telecompare](http://localhost/telecompare).
2. You should now see the TELECOMPARE homepage.

**Please Note:** We are currently in the beta testing phase, and our project is still in progress.

3. Internet Network Coverage feature is currently under development.


## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL


## License

This project is licensed under the [MIT License](LICENSE).

## Contact

For inquiries or suggestions regarding TELECOMPARE, please contact us at [email@example.com](mailto:email@example.com).
