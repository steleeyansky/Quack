# Quack Form Plugin

### Description

Quack Form is a comprehensive form solution for WordPress, enabling users to easily submit their information and receive a personalized certificate in PDF format via email. This plugin is designed to provide a seamless user experience for form submission, data validation, and certificate generation.

### Requirements

The plugin requires:
- PHP Version 7.4 or higher
- A working SMTP or mail server configuration for sending emails

### Installation

Install the Quack Form plugin manually:

1. Log into your WordPress admin dashboard.
2. Navigate to the Plugins page and click on "Add New".
3. Click on the "Upload Plugin" button.
4. Choose the Quack Form plugin ZIP file and click "Install Now".

If you cannot upload plugins directly in WordPress:

1. Unzip the plugin file; a folder named `quack-form` will be created.
2. Upload the `quack-form` folder to the `../wp-content/plugins/` directory of your WordPress installation.
3. Return to the Plugins page in the admin dashboard and activate the Quack Form plugin.

## Using Quack Form

### Form Submission and Certificate Download

After activating the plugin, users can fill out the form and submit their information. Upon successful submission, a PDF certificate is generated, and an email with a download link is sent to the user's email address.

Ensure that your WordPress site is configured with a working SMTP or mail server to handle email delivery. You can use plugins like WP Mail SMTP to configure email settings.

### Shortcodes

#### [quackform_form]
- Add the shortcode `[quackform_form]` to any page or post to display the form.
- Users can fill in their details, and upon submission, a certificate is generated and emailed.

## Features

- Front-end form with fields for email, first name, last name, date of birth, and phone number.
- Server-side validation of submitted data.
- PDF generation for user certificates.
- Email delivery of PDF download link.

### Notes

- SMTP or a properly configured mail server is required for the email functionality. We recommend using services like Mailtrap for development and testing.
- For the PDF generation feature to work, ensure your server has the necessary libraries installed as per the documentation of the PDF library used by the plugin.
