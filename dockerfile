FROM nimmis/apache-php5
RUN rm  /var/www/html/index.html
RUN chmod 777 /var/www/html -R && a2enmod rewrite 
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf && service apache2 restart

