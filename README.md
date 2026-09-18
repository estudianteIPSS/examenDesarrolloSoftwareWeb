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

## 4. Instalación

### 4.1 Descargar el proyecto

Descargar el proyecto desde el repositorio de GitHub:

**Repositorio:**  
[PEGAR AQUÍ EL ENLACE DE GITHUB]

Ingresar a la carpeta:

```bash
cd ventasfix
