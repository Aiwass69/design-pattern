# Patrones de diseño en PHP

Patrones de diseño en PHP y sus ejemplos

# Patrones creacionales

Son los que facilitan la tarea de creación de nuevos objetos, de tal forma que el proceso de creación pueda ser desacoplado de la implementación del resto del sistema.

Los patrones creacionales están basados en dos conceptos:

1. Encapsular el conocimiento acerca de los tipos concretos que nuestro sistema utiliza. Estos patrones normalmente trabajarán con interfaces, por lo que la implementación concreta que utilicemos queda aislada.
2. Ocultar cómo estas implementaciones concretas necesitan ser creadas y cómo se combinan entre sí.

# Factory Pattern

El factory pattern aborda el problema de crear objetos sin tener que especificar la clase exacta a la que han de pertenecer y sin tener que acceder directamente a la lógica de creación.

Imaginad por ejemplo la conexión con una base de datos. Habitualmente, lo que nosotros necesitamos es un objeto que nos permita interactuar con la base de datos subyacente independientemente de que sea MySQL, SQL Server o SQLite. Aunque acabemos usando el objeto de conexión de una forma similar (todos dispondrán de los métodos query, insert, delete… ), la lógica de creación puede diferir bastante y es aquí donde entra este patrón de diseño, permitiéndonos obtener un objeto conexión dentro de una clase sin tener que bajar a los detalles de la instanciación de dicho objeto.

existen tres tipos de factory, las cuales son:

1. Simple Factory: Una implementación concreta de un Factory, es la implementación sencilla cuando quieres crear diferentes objetos que sabes tienen una relación en concreto con esa fabrica, por ejemplo una fabrica de validadores, que crea implementaciones concretas de algún validador.

2. Factory Method: Se usa para separar diferentes Fabricas de Objetos que estan dentro de un mismo componente común, por ejemplo, un objeto que crea formularios, puede tener un fabrica que cree formularios desde un XML, o desde un array, o desde una BDD, y tienes todos los métodos dentro de la misma fabrica

3. Abstract Factory: es un patrón mucho más complejo pero igual de útil, la idea es que las mismas fábricas de objetos sean interfaces, así como los productos que crean son interfaces, y es la misma aplicación la que decide a travez de inyección de dependencias que implementación de fabrica y producto crear, en la Wikipedia hay un muy buen ejemplo de botones.


![](https://upload.wikimedia.org/wikipedia/commons/4/43/W3sDesign_Factory_Method_Design_Pattern_UML.jpg)

# Active Record Pattern

El patrón **active record** consiste en _mapear_ las filas de una tabla o vista en base de datos a un objeto. Por tanto, el objeto se convierte en el responsable de obtener, crear, actualizar y borrar el correspondiente registro asociado en base de datos. En este patrón, cada columna de base de datos se corresponde con una propiedad del objeto sin ningún tipo de manipulación intermedia.

![](https://miro.medium.com/max/480/1*xE841rHYhcMMBIGnZMs4ow.png)

 # Publish — Subscribe
 
 El patrón publish — subscribe surge con el objetivo de modelar un sistema de comunicación en el que existen por un lado senders, encargados de publicar mensajes y, por el otro, subscribers, los cuales reciben los mensajes acerca del “tema” por el que han mostrado interés.
 
 En este patrón, los publishers no conocen los subscribers que se han suscrito a sus mensajes, es decir, no les envían directamente los mensajes sino que categorizan sus mensajes en clases que son transmitidas a través de un canal de comunicación.
 
 ![](https://realtimeapi.io/wp-content/uploads/2017/09/pubsub-1.png)



# Patrones estructurales

Son patrones que nos facilitan la modelización de nuestros software especificando la forma en la que unas clases se relacionan con otras.

# Adapter Pattern

El patrón adapter resuelve la situación en la que nos vemos con dos componentes que no “encajan” cuando tratamos de emplearlos juntos. Imaginad un enchufe americano y un conector europeo… necesitamos un adaptador intermedio que nos permita conectarnos a la red. Ese mismo concepto es el que se traslada para definir el patrón adapter.

![](https://miro.medium.com/max/504/1*Hdu879lBhjlVphUulWZXzg.jpeg)

# Decorator Pattern

El patrón decorador aborda el problema de añadir comportamiento específico a objetos de una clase. En POO lo más habitual cuando queremos añadir funcionalidad extra a una clase es recurrir a la herencia, es decir, extender una clase e implementar los métodos que necesitemos.

Pero hay lenguajes que no admiten heredar mas de una clase, por ejemplo PHP.

Es aquí donde aparece el decorator pattern, el cual nos va a permitir añadir comportamiento específico a los objetos de una clase sin tener que añadírselo a la clase a la que pertenece.

![](https://www.oreilly.com/library/view/enterprise-application-architecture/9781786468888/assets/image_02_001.png)

 # Command
 
 El patrón Command tiene como objetivo definir la forma en que los objetos interactúan entre ellos. Concretamente, este patrón permite solicitar una determinada operación a un objeto, parametrizando dicha petición en un objeto.
 
 ![](http://radar.oreilly.com/wp-files/2/2014/12/invoker.png)
 
 # Dependecy Injection
  
  Este patrón implementa un sistema por el cual un objeto se encarga de proveer de las dependencias al resto de objetos (clientes) que así lo requieran.
  
  Los clientes reciben sus dependencias por medio del constructor (constructor injection) o mediante un método setter (setter injection), delegando la tarea de buscar y encontrar dichos objetos en un Container. De este modo queda separada la lógica de creación de las depedencias del cliente de su comportamiento, lo cual se traduce en aplicaciones con un acomplamiento más reducido y con clases que responden a los principios Open/Close y Dependency Inversion.
  
  ![](https://miro.medium.com/max/793/1*eW4Tv_27GfXo7OnQ4pmp4Q.png)

# MVC (Model — View — Controller) Pattern

El patrón MVC surgió para evitar la proliferación de programas en los que un mismo archivo contiene la lógica para la entrada / salida de datos, las operaciones realizadas sobre los datos con los que el programa trabaja y el sistema para el almacenamiento de los mismos, algo que dificulta enormemente su mantenimiento y escalabilidad; realmente parece más un cocktail que una aplicación.

* Modelo, el cual representa los datos con los que la aplicación opera así como toda la lógica para su almacenamiento y su recuperación. Se encarga de enviar a la vista la información para que sea mostrada.
* Vista, la cual se encarga de representar los datos del modelo procedentes del controlador y de recoger todas las interacciones del usuario sobre los elementos allí mostrados para enviarlos al controlador.
* Controlador, que se encarga de procesar las interacciones del usuario con la vista y enviar las acciones al modelo para manipular los datos.

![](https://static.packt-cdn.com/products/9781783287987/graphics/7987OS_01_03.jpg)

# ADR (Action — Domain — Responder) Pattern
Con la popularización de las aplicaciones web, el modelo MVC terminó por refinarse en un nuevo patrón de diseño propuesto por Paul M. Jones: el patrón ADR, el cual se ajusta mejor a los problemas que nos puede tocar abordar en desarrollos de aplicaciones de este tipo.

 Su implementación tiene como objetivo modelar el flujo request-response en una comunicación HTTP del mismo modo que el patrón MVC realizaba para aplicaciones de escritorio, pero ajustándose mejor al caso de uso de aplicaciones web.
 
 ![](https://herbertograca.files.wordpress.com/2018/09/adr-22.png)
 

# Patrones de comportamiento

En este último grupo se encuentran la mayoría de los patrones, y se usan para gestionar algoritmos, relaciones y responsabilidades entre objetos.

# Mock Objects Pattern

Cuando estamos desarrollando cierta funcionalidad, es probable que nos encontremos con lo que se conocen como side effects (por ejemplo enviar un email al usuario que acaba de registrarse). Pese a que podamos recurrir a trabajar con sandboxes para realizar pruebas, conforme la aplicación estos entornos de prueba son más difíciles de mantener, y es aquí donde aparece este patrón de diseño.

Los Mock Objects son simulaciones de objetos que replican el comportamiento de objetos reales pero de forma controlada, de modo que podamos estar 100% seguros de cómo van a comportarse al realizar ciertas acciones.

![](https://3ovyg21t17l11k49tk1oma21-wpengine.netdna-ssl.com/wp-content/uploads/2016/07/mock-objects-01-1.jpg)





 

 
 
