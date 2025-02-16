# 📌 Vacation Rental Website

## 📖 Descripción del Proyecto

Este proyecto es una plataforma de alquiler vacacional que permite a los usuarios buscar y reservar apartamentos y habitaciones de manera fácil y segura. Construido con **PHP nativo**, **MySQL** y **SCSS**, el sistema ofrece una experiencia moderna y responsiva, integrando funcionalidades clave como gestión de hoteles, autenticación de usuarios y pagos en línea.

---

## 🚀 Características Principales

✅ **Gestión de Hoteles y Habitaciones**: Visualización dinámica de hoteles y habitaciones extraídas de la base de datos.
✅ **Sistema de Reservas**: Permite a los usuarios reservar habitaciones con un flujo intuitivo.
✅ **Autenticación de Usuario**: Registro, inicio de sesión y gestión de usuarios con PHP y MySQL.
✅ **Pago Seguro con PayPal**: Integración con PayPal para procesar pagos en línea.
✅ **Sistema de Contacto**: Formulario funcional para consultas de los usuarios.
✅ **Diseño Responsivo y Moderno**: Utilización de **Bootstrap 4** y **SCSS** para un diseño atractivo y adaptable.
✅ **Google Maps API**: Muestra la ubicación de los alojamientos y puntos de interés cercanos.
✅ **Panel de Administración**: Herramienta de gestión para administradores, permitiendo la administración de reservas, usuarios y propiedades.
✅ **Código Modular y Escalable**: Uso de **PDO** para consultas seguras y una estructura de carpetas organizada.

---

## 🛠️ Tecnologías Utilizadas

- **Backend**: PHP (PDO para consultas a la base de datos).
- **Base de Datos**: MySQL.
- **Frontend**: HTML5, CSS3, SCSS, Bootstrap 4, JavaScript (jQuery).
- **API**: Google Maps API.
- **Sistema de Pagos**: PayPal API.

---

## 📌 Requisitos Previos

1. **Servidor Web**: Se recomienda XAMPP o WAMP para entorno local.
2. **PHP**: Versión 7.4 o superior.
3. **MySQL**: Configuración de base de datos lista para importar.
4. **Google Maps API Key**: Necesario para visualizar mapas.
5. **Cuenta de PayPal**: Para realizar pruebas en el sistema de pagos.

---

## 📥 Instalación

### 1️⃣ Clonar el Repositorio
```bash
git clone https://github.com/usuario/repositorio.git
```

### 2️⃣ Configurar la Base de Datos
1. Crear una base de datos en MySQL con el nombre **hotel-booking**.
2. Importar el archivo **database.sql** que contiene la estructura y datos iniciales.

### 3️⃣ Configurar el Proyecto
Editar el archivo `config/config.php` con los datos de conexión:
```php
// Configuración de la base de datos
define("HOST", "localhost");
define("DBNAME", "hotel-booking");
define("USER", "root");
define("PASS", "");
```

### 4️⃣ Ejecutar el Proyecto
1. Asegurarse de que el servidor web está en ejecución.
2. Colocar los archivos del proyecto en el directorio raíz (`htdocs` en XAMPP).
3. Acceder desde el navegador en: `http://localhost/nombre-del-proyecto`.

---

## 📂 Estructura del Proyecto

```plaintext
├── auth/                # Gestión de autenticación (login, registro, logout)
├── config/              # Configuración del proyecto
│   └── config.php       # Parámetros de conexión a la base de datos
├── css/                 # Archivos CSS compilados
├── fonts/               # Fuentes utilizadas en el diseño
├── images/              # Imágenes del proyecto
├── includes/            # Archivos comunes (header, footer, etc.)
├── js/                  # Scripts JavaScript
├── scss/                # Archivos SCSS para los estilos
├── rooms/               # Páginas relacionadas con habitaciones
│   └── room-single.php  # Detalles de una habitación específica
├── about.php            # Página de información sobre el proyecto
├── contact.php          # Página de contacto
├── index.php            # Página principal
├── rooms.html           # Página de listado de habitaciones
├── services.html        # Servicios ofrecidos
```

---

## 🔑 Funcionalidades Clave

### 🏨 1. Visualización de Hoteles y Habitaciones
Los datos de hoteles y habitaciones se gestionan en la base de datos y se cargan dinámicamente mediante consultas PDO.
```php
$hotel = $conn->query("SELECT * FROM hotels WHERE Status = 1");
$allHotels = $hotel->fetchAll(PDO::FETCH_OBJ);
```

### 📩 2. Sistema de Contacto
Formulario de contacto con validación de datos para consultas de los usuarios.

### 📱 3. Diseño Responsivo
Desarrollado con **Bootstrap 4** y **SCSS**, asegurando una experiencia fluida en todos los dispositivos.

### 🔒 4. Autenticación de Usuarios
Sistema seguro de **registro e inicio de sesión** con sesiones PHP y **hashing de contraseñas**.

### 💳 5. Pago con PayPal
Implementación de la API de **PayPal** para procesar pagos en línea de forma segura.

---

## 🎨 Personalización
Puedes personalizar el proyecto editando los siguientes archivos:

🎨 **Estilos**: Modifica los archivos **SCSS** en la carpeta `scss/` y recompila usando un preprocesador SCSS.
⚙️ **Configuración de Base de Datos**: Edita `config/config.php` para cambiar los parámetros de conexión.
📜 **Contenido Dinámico**: Actualiza los datos en la base de datos para reflejar nuevos hoteles, habitaciones o servicios.

---

## 📚 Recursos de Aprendizaje

Este proyecto se basa en conocimientos adquiridos del curso:
- **"PHP con MySQL: Construcción de un sistema de gestión de reservas de hoteles"**
  - Aprendizaje de autenticación segura.
  - Implementación de pagos con **PayPal**.
  - Uso de **PDO** para consultas SQL avanzadas.
  - Creación de un panel de administración robusto.
  - Validación de datos y prevención de vulnerabilidades.

---
