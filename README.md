# optimizely-full-stack-demo

Demo of Optimizely X Full Stack (using the PHP SDK)

The `start` directory contains the version of the Cakes & Bread website without Optimizely Full Stack integration.
The `finish` directory contains the Cakes & Bread website *with* the Optimizely Full Stack integration.

## Installation

Go to the `finish` directory and run the following command:

`php composer.phar update`

Then create an Apache virtual host:

```
<VirtualHost *:80>
    ServerAdmin webmaster@localhost

    DocumentRoot /path/to/finish/directory
    
	<Directory /path/to/finish/directory/>
        DirectoryIndex index.php
        AllowOverride All
        Require all granted
    </Directory>

</VirtualHost>
```

Restart Apache.

Now you should be able to access the website by the following link: `http://localhost`.

Enjoy!