# API de Gestión de Almacén Fruver

<p align="center">
  <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel" width="150">
</p>
<p align="center">
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
  <a href="https://php.net/"><img src="https://img.shields.io/badge/PHP-8.1+-777BB4?logo=php&logoColor=white" alt="PHP Version"></a>
  <a href="https://laravel.com/docs/10.x/sanctum"><img src="https://img.shields.io/badge/Laravel%20Sanctum-10.x-FF2D20?logo=laravel" alt="Laravel Sanctum"></a>
</p>

## Descripción

API RESTful para la gestión de un almacén de frutas y verduras (Fruver). Esta API permite gestionar categorías, productos, proveedores, compras y ventas de manera eficiente.

## Características

- Autenticación con Laravel Sanctum
- Gestión de categorías de productos
- Gestión de productos con control de stock
- Registro de proveedores
- Registro de compras a proveedores
- Registro de ventas a clientes
- Control de inventario automático
- Documentación de la API

## Requisitos

- PHP 8.1 o superior
- Composer
- MySQL 5.7+ o MariaDB 10.3+
- Node.js y NPM (para assets frontend)

## Instalación

1. Clonar el repositorio:
   ```bash
   git clone https://github.com/tu-usuario/frutymax-back-php.git
   cd frutymax-back-php
   ```

2. Instalar dependencias de PHP:
   ```bash
   composer install
   ```

3. Configurar el archivo .env:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configurar la base de datos en el archivo .env:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=frutymax
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```

5. Ejecutar migraciones y seeders:
   ```bash
   php artisan migrate --seed
   ```

6. Instalar dependencias de frontend (si es necesario):
   ```bash
   npm install
   npm run dev
   ```

7. Iniciar el servidor de desarrollo:
   ```bash
   php artisan serve
   ```

## Estructura de la API

### Endpoints disponibles

#### Autenticación
- `POST /api/register` - Registrar un nuevo usuario
- `POST /api/login` - Iniciar sesión
- `POST /api/logout` - Cerrar sesión
- `GET /api/user` - Obtener información del usuario autenticado

#### Categorías
- `GET /api/categorias` - Listar todas las categorías
- `POST /api/categorias` - Crear una nueva categoría
- `GET /api/categorias/{id}` - Obtener una categoría específica
- `PUT /api/categorias/{id}` - Actualizar una categoría
- `DELETE /api/categorias/{id}` - Eliminar una categoría

#### Productos
- `GET /api/productos` - Listar todos los productos
- `POST /api/productos` - Crear un nuevo producto
- `GET /api/productos/{id}` - Obtener un producto específico
- `PUT /api/productos/{id}` - Actualizar un producto
- `DELETE /api/productos/{id}` - Eliminar un producto

#### Proveedores
- `GET /api/proveedores` - Listar todos los proveedores
- `POST /api/proveedores` - Crear un nuevo proveedor
- `GET /api/proveedores/{id}` - Obtener un proveedor específico
- `PUT /api/proveedores/{id}` - Actualizar un proveedor
- `DELETE /api/proveedores/{id}` - Eliminar un proveedor

#### Compras
- `GET /api/compras` - Listar todas las compras
- `POST /api/compras` - Registrar una nueva compra
- `GET /api/compras/{id}` - Obtener una compra específica
- `PUT /api/compras/{id}` - Actualizar una compra
- `DELETE /api/compras/{id}` - Eliminar una compra

#### Ventas
- `GET /api/ventas` - Listar todas las ventas
- `POST /api/ventas` - Registrar una nueva venta
- `GET /api/ventas/{id}` - Obtener una venta específica
- `PUT /api/ventas/{id}` - Actualizar una venta
- `DELETE /api/ventas/{id}` - Eliminar una venta

## Autenticación

La API utiliza Laravel Sanctum para la autenticación. Para acceder a los endpoints protegidos, debes incluir el token de autenticación en el encabezado de la solicitud:

```
Authorization: Bearer {token}
```

## Ejemplos de Uso

### Registrar un nuevo usuario

```bash
curl -X POST http://localhost:8000/api/register \
  -H "Content-Type: application/json" \
  -d '{"name": "Usuario Ejemplo", "email": "usuario@ejemplo.com", "password": "contraseña"}'
```

### Iniciar sesión

```bash
curl -X POST http://localhost:8000/api/login \
  -H "Content-Type: application/json" \
  -d '{"email": "usuario@ejemplo.com", "password": "contraseña"}'
```

### Crear una nueva categoría

```bash
curl -X POST http://localhost:8000/api/categorias \
  -H "Authorization: Bearer {token}" \
  -H "Content-Type: application/json" \
  -d '{"nombre": "Frutas", "descripcion": "Frutas frescas"}'
```

### Registrar una nueva compra

```bash
curl -X POST http://localhost:8000/api/compras \
  -H "Authorization: Bearer {token}" \
  -H "Content-Type: application/json" \
  -d '{
    "fecha": "2025-05-27",
    "proveedor_id": 1,
    "detalles": [
      {
        "producto_id": 1,
        "cantidad": 10,
        "precio_unitario": 1.50
      },
      {
        "producto_id": 2,
        "cantidad": 5,
        "precio_unitario": 2.00
      }
    ]
  }'
```

## Contribución

¡Las contribuciones son bienvenidas! Si encuentras algún error o tienes alguna sugerencia, por favor crea un issue o envía un pull request.

## Seguridad

Si descubres alguna vulnerabilidad de seguridad, por favor envía un correo a soporte@frutymax.com. Todas las vulnerabilidades serán atendidas con prioridad.

## Créditos

- [Laravel](https://laravel.com)
- [Laravel Sanctum](https://laravel.com/docs/sanctum)

## Licencia

Este proyecto está bajo la [Licencia MIT](https://opensource.org/licenses/MIT).
