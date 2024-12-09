# Parseley Invoicing Utility
> Version 2024w51.01

## New environment installation

`git pull` or `git clone` into your environment.

Run `composer update`.

Create `env.json` using `env.example.json` as a template.

Create `public/.htaccess` using `public/htaccess.example` as a template. Or, if your server automates the creation of .htaccess, check the created version and make sure its settings sufficiently compensate for a) redirecting all visits to index.php, and b) preventing the browser from caching the site.

Point your domain document root to `public`.

## Generate a key for admin access
Using a **terminal** window or **command line interface**, navigate to your root project folder.

Run `php -f mfagen.php`. You should see a line that reads:
```
Scan the QR code at qrcode.png with your authenticator app, or use this secret key: SECRET-KEY
```
As stated in the response, you may either scan the QR code, or manually input the secret key into your authenticator app. The QR code image is saved to the root folder, and may be deleted after you scan and verify it.

**IMPORTANT**: Running `mfagen.php` will **reset** the active admin code!

## Configuration options
Set your configuration options in `env.json`.

### base_url
The root public path to where the Invoicing Utility is installed. For the typical use case, this value will be empty. However, if you installed within a public subdirectory, you'll want to account for that base url with this setting. For example: "www.example.com/path/to/invoicing" will have a `base_url` value of `/path/to/invoicing`.

### company_handle
An abbreviated/shortened version of your company's name. For example, this name is what your authenticor app will use when setting up a new multifactor key.

### admin_secret
When you run `mfagen.php` to set a new admin multifactor key, this value is automatically updated, and is used to validate your six-digit multifator key.

### logo_path
Point this to your logo image file location, relative to `base_url`.