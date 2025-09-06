# 🚀 Proyecto Laravel - Encuestas de Vehículos y Clientes

Este proyecto permite registrar vehículos y clientes, editar su información y gestionarlos desde una interfaz con AdminLTE.

## 📦 Requisitos previos

Asegúrate de tener instalado en tu máquina:

- [PHP ^8.3.6](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [MySQL o MariaDB](https://www.mysql.com/)
## ⚙️ Instalación

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/usuario/proyecto-laravel.git
   cd vip2cars
3. **Crear la BD**
   ```bash
   usando el script que se encuentra dentro dle proyecto
   o generando la base de datos en local llamada db_encuestas_anonimas_vip2cars

3. **Ejecutar la Coneccion en BD en el .env**
   ```bash
   DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=db_encuestas_anonimas_vip2cars
    DB_USERNAME=root
    DB_PASSWORD=
4. **Ejecutar las Migraciones**
   ```bash
   php artisan migrate

5. **Ejecutar los Seeders**
   ```bash
   php artisan db:seed
6. **Cargar el Proyecto**
   ```bash
   php artisan serve   

