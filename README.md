# VentasFix

Sistema web de gestión desarrollado para **VentasFix**, orientado a la administración de usuarios, productos y clientes.

La aplicación cuenta con una interfaz gráfica desarrollada con Laravel y Tailwind CSS, además de una API REST autenticada mediante Laravel Sanctum para permitir la interacción con aplicaciones externas.

---

## 1. Tecnologías

- Laravel 13.25.0
- PHP 8.5.8
- SQLite
- Eloquent ORM
- Laravel Sanctum
- Blade
- Tailwind CSS
- Vite
- Node.js 24.16.0
- npm 11.13.0

---

## 2. Funcionalidades

### Autenticación

- Inicio de sesión.
- Cierre de sesión.
- Contraseñas almacenadas mediante hash.
- Protección de rutas mediante autenticación.
- Control de acceso mediante roles.
- Los usuarios utilizan correos del dominio `@ventasfix.cl`.

### Dashboard

El dashboard muestra un resumen de:

- Usuarios registrados.
- Productos registrados.
- Clientes registrados.

### Usuarios

Permite:

- Crear usuarios.
- Consultar usuarios.
- Editar usuarios.
- Eliminar usuarios.

La administración de usuarios está restringida a usuarios con rol `admin`.

### Productos

Permite:

- Crear productos.
- Consultar productos.
- Editar productos.
- Eliminar productos.
- Subir una imagen por producto.
- Reemplazar imágenes.
- Administrar precios y stock.

El precio de venta se calcula automáticamente aplicando un 19% de IVA al precio neto.

### Clientes

Permite:

- Crear clientes.
- Consultar clientes.
- Editar clientes.
- Eliminar clientes.

---

## 3. Requisitos

Para ejecutar el proyecto se requiere:

- PHP 8.5 o compatible con Laravel 13.
- Composer.
- Node.js.
- npm.
- SQLite habilitado en PHP.

No se requiere MySQL para este proyecto.

---

## 4. Estructura general del proyecto

```text
ventasfix/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│   └── Models/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   └── views/
├── routes/
│   ├── api.php
│   └── web.php
├── storage/
│   └── app/
│       └── public/
│           └── products/
├── tests/
├── .env.example
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── package-lock.json
└── vite.config.js

```
---

## 5. Arquitectura del proyecto

### El proyecto utiliza una arquitectura basada en el patrón MVC de Laravel.

```text
app/
├── Http/
│   ├── Controllers/
│   │   ├── Api/
│   │   │   ├── AuthController.php
│   │   │   ├── UserController.php
│   │   │   ├── ProductController.php
│   │   │   └── ClientController.php
│   │   ├── AuthController.php
│   │   ├── DashboardController.php
│   │   ├── UserController.php
│   │   ├── ProductController.php
│   │   └── ClientController.php
│   └── Middleware/
│       └── AdminMiddleware.php
│
├── Models/
│   ├── User.php
│   ├── Product.php
│   └── Client.php
│
resources/
└── views/
    ├── auth/
    ├── components/
    ├── dashboard/
    ├── users/
    ├── products/
    └── clients/

```

---

## 6. Base de datos

### El proyecto utiliza SQLite para facilitar su ejecución y distribución.

##### Las tablas principales son:

- users
- products
- clients

### La estructura de la base de datos se genera mediante las migraciones ubicadas en:

`database/migrations/`

### Los datos iniciales se generan mediante:

`database/seeders/`

---

## 7. Instalación

### Clonar o Descargar el repositorio

```bash
git clone https://github.com/estudianteIPSS/examenDesarrolloSoftwareWeb.git
cd "carpeta del repositorio"
```

---

### Instalar dependencias de PHP

```bash
composer install
```

Esto instalará las dependencias definidas en `composer.json` y `composer.lock`.

---

### Configuración del entorno

#### Crear el archivo `.env` a partir de `.env.example`.

```powershell
Copy-Item .env.example .env
```
#### Verificar que la configuración de base de datos utilice SQLite:

`DB_CONNECTION=sqlite`

---

### Generar la clave de Laravel

Ejecutar:

```bash
php artisan key:generate
```

---

### Configuración de SQLite

#### El proyecto utiliza **SQLite** como motor de base de datos.

#### Crear el archivo de base de datos:

```powershell
New-Item database/database.sqlite -ItemType File
```

---

### Ejecutar migraciones y seeders

```bash
php artisan migrate:fresh --seed
```

#### Este comando:

1. Elimina las tablas existentes.
2. Ejecuta todas las migraciones.
3. Crea las tablas necesarias.
4. Ejecuta `DatabaseSeeder`.
5. Crea 2 usuario Administradores de forma inicial.
6. Crea 10 productos
7. crea 10 clientes

---

### Configurar almacenamiento de imágenes

#### Crear el enlace simbólico de almacenamiento:

```bash
php artisan storage:link
```

#### Las imágenes de productos se encuentran en:

`storage/app/public/products/`

---

### Instalar dependencias frontend

Ejecutar:

```bash
npm install
```
---

### Compilar los recursos frontend

Ejecutar:

```bash
npm run build
```

Esto compila los recursos utilizados por Vite y Tailwind CSS.

---

### Iniciar el servidor:

```bash
composer run dev
```
### Enlace del proyecto

```bash
http://127.0.0.1:8000/dashboard
```
