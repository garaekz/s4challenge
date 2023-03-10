# Refactorízame

Se te han generado dos controllers, `UserController` y `OrderController`, soy muy listo y toda la lógica de negocio está en su propio servicio, `UserService` y `OrderService`. Apenas comencé a trabajar en el proyecto pero solo realicé un endpoint para traer a todos los User con sus lista de ordenes (*hasta traen el total calculado y todo!!!*), también hice un endpoint para crear una nueva orden o actualizar una ya existente.

Generé por ti las pruebas unitarias y un par de pruebas de integración, pero no me dio tiempo de terminarlas, por eso están incompletas. Necesito que hagas tantos como puedas para que cubran la mayor cantidad de casos posibles. Se creativo.

## Para comenzar a refactorizar

- Puedes instalar las dependencias con `composer install`
- No necesitas configurar nada, ya está todo listo
- El comando para correr las pruebas es `php artisan test`
- No necesitas corre el proyecto, solo las pruebas.
- Puedes modificar lo que quieras, crear nuevos archivos, borrar lo que no necesites, etc.
- Puedes hacer tantas pruebas como quieras y modificar las que ya están.
- Puedes usar cualquier librería que necesites aunque lo que ya está instalado es suficiente.
- Asegurate de que las pruebas pasen.
- Si tienes alguna duda, puedes preguntar.
