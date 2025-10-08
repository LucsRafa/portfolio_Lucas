FROM php:8.2-cli
WORKDIR /app
COPY . /app
CMD ["bash", "-lc", "php -S 0.0.0.0:${PORT:-8000} -t /app"]
