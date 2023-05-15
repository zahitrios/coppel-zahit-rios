# Omar Zahit Rios Mercado

Prueba técnica para Coppel

## Usuario de prueba

user: test

password: test


## Mejoras al sistema

Se pueden registrar entregas por día, no es necesario registrar todas las entregas del mes. El sistema es capaz de agrupar las entregas realizadas por el trabajador y entregar el resultado del pago al trabajador

## Seeders o fixtures
El sistema ya cuenta con ejemplos de usuarios y roles en el sistema que el usuario puede usar para registrar entregas y calcular los salarios mensuales

Los fixtures son cargados en orden gracias a la interfaz DependentFixtureInterface

## Store procedures vs Subscribers

Con la finalidad de dejar toda la lógica versionada en el repositorio, no utilicé store proceduers y en el proyecto configuré los siguientes subcribers:

- Para los roles el sueldo base mensual se calcula cada vez que alguna entidad del modelo Rol se crea o se actualiza


## Descripción técnica del proyecto

**Lenguaje**: PHP 8.1

**Framework**: Symfony 6.2

**Bundles**:
- **Doctrine** -> ORM de la base de datos
- **Easy admin** -> creador de CRUDs 
- **Apache pack** -> router
- **Security bundle**
    - Protección contra ataques CSRF
    - Firewall para determinar que partes de la aplicación necesitan autenticación
    - Tipo de autenticación
    - Password hasher


