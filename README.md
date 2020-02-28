# Patrones de diseño en PHP

Patrones de diseño en PHP y sus ejemplos

# Active Record Pattern

El patrón **active record** consiste en _mapear_ las filas de una tabla o vista en base de datos a un objeto. Por tanto, el objeto se convierte en el responsable de obtener, crear, actualizar y borrar el correspondiente registro asociado en base de datos. En este patrón, cada columna de base de datos se corresponde con una propiedad del objeto sin ningún tipo de manipulación intermedia.

# Adapter Pattern

El patrón adapter resuelve la situación en la que nos vemos con dos componentes que no “encajan” cuando tratamos de emplearlos juntos. Imaginad un enchufe americano y un conector europeo… necesitamos un adaptador intermedio que nos permita conectarnos a la red. Ese mismo concepto es el que se traslada para definir el patrón adapter.

# Decorator Pattern

El patrón decorador aborda el problema de añadir comportamiento específico a objetos de una clase. En POO lo más habitual cuando queremos añadir funcionalidad extra a una clase es recurrir a la herencia, es decir, extender una clase e implementar los métodos que necesitemos.

Pero hay lenguajes que no admiten heredar mas de una clase, por ejemplo PHP.

Es aquí donde aparece el decorator pattern, el cual nos va a permitir añadir comportamiento específico a los objetos de una clase sin tener que añadírselo a la clase a la que pertenece.

# Factory Pattern

El factory pattern aborda el problema de crear objetos sin tener que especificar la clase exacta a la que han de pertenecer y sin tener que acceder directamente a la lógica de creación.

Imaginad por ejemplo la conexión con una base de datos. Habitualmente, lo que nosotros necesitamos es un objeto que nos permita interactuar con la base de datos subyacente independientemente de que sea MySQL, SQL Server o SQLite. Aunque acabemos usando el objeto de conexión de una forma similar (todos dispondrán de los métodos query, insert, delete… ), la lógica de creación puede diferir bastante y es aquí donde entra este patrón de diseño, permitiéndonos obtener un objeto conexión dentro de una clase sin tener que bajar a los detalles de la instanciación de dicho objeto.

# Mock Objects

Cuando estamos desarrollando cierta funcionalidad, es probable que nos encontremos con lo que se conocen como side effects (por ejemplo enviar un email al usuario que acaba de registrarse). Pese a que podamos recurrir a trabajar con sandboxes para realizar pruebas, conforme la aplicación estos entornos de prueba son más difíciles de mantener, y es aquí donde aparece este patrón de diseño.

Los Mock Objects son simulaciones de objetos que replican el comportamiento de objetos reales pero de forma controlada, de modo que podamos estar 100% seguros de cómo van a comportarse al realizar ciertas acciones.

![](https://3ovyg21t17l11k49tk1oma21-wpengine.netdna-ssl.com/wp-content/uploads/2016/07/mock-objects-01-1.jpg)

# MVC (Model — View — Controller)

El patrón MVC surgió para evitar la proliferación de programas en los que un mismo archivo contiene la lógica para la entrada / salida de datos, las operaciones realizadas sobre los datos con los que el programa trabaja y el sistema para el almacenamiento de los mismos, algo que dificulta enormemente su mantenimiento y escalabilidad; realmente parece más un cocktail que una aplicación.

* Modelo, el cual representa los datos con los que la aplicación opera así como toda la lógica para su almacenamiento y su recuperación. Se encarga de enviar a la vista la información para que sea mostrada.
* Vista, la cual se encarga de representar los datos del modelo procedentes del controlador y de recoger todas las interacciones del usuario sobre los elementos allí mostrados para enviarlos al controlador.
* Controlador, que se encarga de procesar las interacciones del usuario con la vista y enviar las acciones al modelo para manipular los datos.

