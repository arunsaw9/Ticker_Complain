<?php 

$asset = [
    		['asset' => 'Mehsana'],
    		['asset' => 'Ahmedabad'],
    		['asset' => 'Cambay'],
    		['asset' => 'Ankleshwar'],
    		['asset' => 'Hazira'],
    		['asset' => 'Jodhpur'],

    	];

        array_multisort($asset);
        //print_r($asset);
        //$asset = array_multisort($asset);

    	foreach ($asset as  $value) {
           print_r($value);
    	}

 ?>


 <VirtualHost *:84>
        ServerAdmin webmaster@localhost
        DocumentRoot /var/www/html/laravel6/public/

        <Directory />
                Options FollowSymLinks
                AllowOverride All
        </Directory>
        <Directory /var/www/html/laravel6/public/>
                #Options Indexes FollowSymLinks -MultiViews
                AllowOverride All
                Order allow,deny
                allow from all
        </Directory>

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>



<VirtualHost *:80>
        ServerName laravel.example.com
        Documentroot /var/www/html/laravel6/public
<Directory /var/www/html/laravel6>
                AllowOverride All
        <Directory>
<VirtualHost>

    
NameVirtualHost *:80

<VirtualHost  *:80>
    ServerAdmin webmaster@host.example.com
    DocumentRoot /var/www/html/laravel5/public
    ServerName host.example.com
    ErrorLog logs/dummy-host.example.com-error_log
    CustomLog logs/dummy-host.example.com-access_log common
</VirtualHost>


<VirtualHost *:80>
    ServerAdmin admin@example.com
    DocumentRoot /var/www/example.com
    ServerName example.com
    ServerAlias www.example.com
 
    <Directory /var/www/example.com>
           #Allowoverride all    ###Uncomment if required
    </Directory>
 
    ErrorLog logs/example.com_error.log
    CustomLog logs/example.com_access.log combined
</VirtualHost>



<VirtualHost *:80>
    ServerAdmin admin@board.com
    ServerName www.board.com
    DocumentRoot /var/www/html/board_project/public
    ServerAlias www.board.com

    <Directory /var/www/html/board_project/public/>
           #Allowoverride all    ###Uncomment if required
    </Directory>

    ErrorLog logs/example.com_error.log
    CustomLog logs/example.com_access.log combined
</VirtualHost>


<VirtualHost *:80>
    ServerAdmin admin@scada.com
    ServerName www.scada.com
    DocumentRoot /var/www/html/scada/public
    ServerAlias www.scada.com

    <Directory /var/www/html/scada/public/>
           #Allowoverride all    ###Uncomment if required
    </Directory>

    ErrorLog logs/example.com_error.log
    CustomLog logs/example.com_access.log combined
</VirtualHost>


<VirtualHost *:80>
        ServerName laravel.example.com
        Documentroot /var/www/html/scada/public

        <Directory /var/www/html/scada/public/>
                AllowOverride All
        </Directory>
</VirtualHost>
