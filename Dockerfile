FROM php:7.4-apache 
# (Ou a versão que você estiver usando, ex: 5.6, 7.2...)

# 1. Instalar dependências do sistema necessárias para o Postgres
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# 2. Habilitar mod_rewrite do Apache (padrão do Cake)
RUN a2enmod rewrite

# ... resto das suas configurações ...