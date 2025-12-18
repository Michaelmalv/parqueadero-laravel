**README – ParkingExpress (CRUD Laravel)** 

**Descripción del Proyecto** 

ParkingExpress es un sistema web desarrollado en Laravel que permite gestionar el ingreso y salida de vehículos en un parqueadero. El sistema digitaliza el registro que antes se realizaba en papel, evitando pérdidas de información y facilitando el control de vehículos en tiempo real. 

El proyecto fue desarrollado como práctica para reforzar el uso de la arquitectura MVC y la implementación de un CRUD completo en Laravel. 

**Arquitectura Utilizada** 

Se utilizó la arquitectura **MVC (Modelo – Vista – Controlador)**: 

- **Modelo:** Vehiculo

  Encargado de la representación de los datos y la interacción con la base de datos. 

- **Vista:** Blade + Bootstrap 

  Interfaz simple, clara y adaptable a dispositivos móviles. 

- **Controlador:** VehiculoController

  Gestiona la lógica del negocio y conecta el modelo con las vistas. 

**Decisiones de Diseño** 

- **Eliminación lógica:** 

  En lugar de eliminar registros físicamente, los vehículos se marcan como inactivos (activo = false) cuando salen del parqueadero. Esto permite mantener un historial y evita pérdida de información. 

- **Fecha y hora automática:** 

  La hora de ingreso se registra automáticamente desde la base de datos para evitar errores manuales. 

- **Interfaz responsive:** 

  Se utilizó Bootstrap para asegurar que el sistema sea usable desde dispositivos móviles, tal como solicitó el cliente. 

- **Validaciones:** 

  Se aplicaron validaciones en el controlador para asegurar que los datos ingresados sean correctos. 

**Tecnologías Utilizadas** 

- PHP 8.x 
- Laravel 10 
- MySQL 
- Blade 
- Bootstrap 5 
- Git y GitHub 
- PHPStorm 
- Laravel Herd 

**Instrucciones de Ejecución**

1. Clonar el repositorio 
1. Configurar el archivo .env
1. Crear la base de datos parqueadero
1. Ejecutar migraciones: 
1. php artisan migrate 
1. Iniciar el servidor: 
1. php artisan serve 

**Usuario Final** 

Administrador del parqueadero (Don Ramiro)
