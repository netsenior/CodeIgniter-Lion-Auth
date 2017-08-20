# Lion Auth

### Based on Ion Auth 2
by [Ben Edmunds](http://benedmunds.com)

## Installation
Copy the files from this package to the corresponding folder in your
application folder.  

### Relational DB Setup
Run the SQL file ion_auth.sql 

### Default Login
Username: admin@admin.com
Password: password

### Important
It is highly recommended that you use encrypted database sessions for security!

### Optimization
It is recommended that you add your identity column as a unique index.

### Options
Time Based One-Time Password (TOTP) -
There is a Time Based One-Time Password (TOTP) implementation compatible with Google Authenticator available. Feature branch maintained by [biscofil](https://github.com/biscofil) and is available at [https://github.com/benedmunds/CodeIgniter-Ion-Auth/tree/otp](https://github.com/benedmunds/CodeIgniter-Ion-Auth/tree/otp)

### Templating
in application/config/autload.php include 'ion_auth' under $autoload['libraries'];
in any page include <?= $this->load->view('auth/menu','',true); ?> to display the menu