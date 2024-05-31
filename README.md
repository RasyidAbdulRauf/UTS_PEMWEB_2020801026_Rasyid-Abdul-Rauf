## UTS PEMWEB RASYID ABDUL RA'UF

Langkah - langkah:
- docker compose up -d --build
- docker exec -it uts_pemweb bash
- composer update
- nano .env (set db)
- php artisan storage:link
- php artisan key:generate
- php artisan migrate
- php artisan db:seed
- chmod 777 -R storage/*
- buka localhost:8050 untuk tampilan user
- buka localhost/admin untuk tampilan admin
