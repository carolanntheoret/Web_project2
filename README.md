# HIFF (Horizon Independent Film Festival) Website

This repository contains the source code and files for the HIFF (Horizon Independent Film Festival) website, a fictitious independent film festival. The website is designed to showcase festival information, provide details about different passes and activities, allow users to make reservations, and enable both clients and administrators to manage reservations.

## Features

- **Passes and Activities**: The website offers information about various passes and activities available during the film festival. Users can explore the different options and select the ones they are interested in.

- **Reservation System**: Users can make reservations for the passes and activities on the day they wish to attend. There are no ticket limits, allowing for flexible booking.

- **Client Management**: Users can access a dedicated section to manage their own tickets. Here, they can view their reservations, make changes or cancellations, and stay updated on their festival attendance.

- **Admin Panel**: The website includes an admin section where authorized personnel can manage reservations, view attendee details, and perform administrative tasks related to the festival.

- **News and Updates**: The website features a news feed, providing the latest updates, announcements, and news related to the film festival. Each news article has its own dedicated page for detailed information.

- **Contact Page**: Users can reach out to the festival organizers through the contact page, where they have the informations, and a google map link for the location.

## Technologies Used

The following technologies and frameworks were used to develop the HIFF website:

- **Laravel**: Laravel, a PHP web framework, was chosen as the foundation for the website due to its robustness, scalability, and extensive ecosystem.

- **Masonry**: Masonry was utilized to create a visually appealing layout for the news page, enhancing the overall design and user experience.

## Team Contributions

- **Design and Mockups**: I was responsible for designing the overall look and feel of the website. This included creating mockups, selecting themes, defining the color palette, and ensuring a cohesive visual representation.

- **Client-Side Development**: I implemented the client-side functionality of the website, integrating the provided content and ensuring its proper display. This involved working with HTML, CSS, and JavaScript to create the desired user interface.

- **Responsive Design**: While the responsive aspect of the website was not demanded for the entire project, our main focus was on making the news section responsive. We ensured that the news articles were displayed effectively across different screen sizes and devices.

## Getting Started

To set up the project locally, follow these steps:

1. Clone this repository to your local machine.

2. Install PHP and Composer if they are not already installed on your system.

3. Run `composer install` in the project's root directory to install the necessary dependencies.

4. Copy the `.env.example` file and rename it to `.env`. Update the necessary environment variables such as the database connection details.

5. Generate a new application key by running `php artisan key:generate`.

6. Create a database for the project and run migrations using `php artisan migrate` to set up the required database tables.

7. Start the development server by running `php artisan serve`.

8. Access the website by visiting `http://localhost:8000` in your web browser.

## Contributing

Contributions to the HIFF website project are welcome. If you encounter any issues or have suggestions for improvements, please submit them through the issue tracker in this repository.

## License

This project is licensed under the [MIT License](LICENSE). Feel free to use and modify the code as per the terms of the license.

## Acknowledgments

We would like to acknowledge the contributions of the entire team in bringing the HIFF website project to life. It was a collaborative effort that involved creativity, technical skills, and dedication.
