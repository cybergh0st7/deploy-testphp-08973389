FROM php:8.2-cli

WORKDIR /app

COPY ConstructConnect.php .

EXPOSE 8080

CMD ["php", "-S", "0.0.0.0:8080", "ConstructConnect.php"]