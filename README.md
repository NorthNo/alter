## About This Project
This project is my Full Stack web project for licence key selling. The 'Alter' have a lot of features for my first full stack project, features like a Payment integration, Mail verification with SMTP, Phone verification with SMS, User login, logout, register, product controls.

### Build With
<ul>
    <li>HTML, CSS, JS</li>
    <li>Laravel</li>
</ul>

## Getting Started


### Prerequisites
<ul>
    <li>PHP >= 8.0</li>
    <li>Composer</li>
    <li>MySQL or other supported database</li>
    <li>Git</li>
</ul>

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/NorthNo/alter.git
   cd alter
   ```
2. Install vendor packages
   ```sh
   composer install
   ```
3. Create .env file
   ```sh
   cp .env.example .env
   ```
4. Create your API key and last things
   ```sh
   php artisan key:generate
   php artisan migrate --seed
   php artisan serve
   ```
    
<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Licence

Distributed under the Unlicense License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Contact

Emin Yıldız - [@iimmemiin](https://x.com/iimmemiin) - emin.yildiz.dev@gmail.com

Project Link: [https://github.com/NorthNo/alter](https://github.com/NorthNo/alter)

<p align="right">(<a href="#readme-top">back to top</a>)</p>
