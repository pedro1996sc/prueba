*Implementación en Laravel*

Se ha creado una implementación en Laravel siguiendo las instrucciones proporcionadas. Esta implementación consta de tres tablas: clientes, compras y eventos. La relación entre el cliente y su evento se establece a través de la tabla de compras. La base de datos se encuentra en el archivo prueba.sql.

El desarrollo incluye 9 rutas definidas en el archivo api.php dentro de la carpeta routes. Estas rutas cubren las funcionalidades solicitadas en el controlador, así como algunas adicionales utilizadas para pruebas. El enfoque fue básico, tratando de abarcar la mayor cantidad de respuestas en una solución sencilla.

La solución incluye las siguientes funcionalidades:

*Eventos*: Se puede obtener el listado de eventos disponibles con su estado.

*Clientes*: Los clientes se manejan como la entidad compradora.

*Compras*: La compra representa la acción del cliente.

Se adjunta la colección de la API en POSTMAN en el archivo test Haulmer.postman_collection.json. Esta colección incluye:

*GET /events*: Obtiene los datos específicos de los eventos que están en estado true.

*GET /event*: Trae todos los eventos existentes, independientemente de su estado, con sus detalles.

*POST /purchase*: Permite generar una compra, asociando dicha compra a un evento.

*GET /orders*: Filtra las compras por cliente.

*GET /clients*: Obtiene la lista de clientes, facilitando la búsqueda de órdenes.

