FROM chriswayg/apache-php
RUN rm -rf /var/www/html/*
RUN chmod 777 /var/www/html -R && a2enmod rewrite 
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf && service apache2 restart

