Introducción 

El proyecto consiste en un módulo blog que tenga la particularidad de poder generar entradas de texto y subida de imágenes en dos vistas conjuntas, una sólo de texto y la otra de imagenes. Para la realización del projecto, se decidió que el Frontend se mantendrá lo mas básico posible para centrar el sistema en las funcionalidades más que en el diseño. Para ello, se utilizará en conjunto el Framework "Bootstrap CSS", ya que aporta muchas herramientas sin mayor complejidad. En temas de backend, se utilizará LAMP (GNU/Linux, Apache, MySql, PHP) en conjunto a un Framework llamado "Laravel", ya que este último permite de forma sencilla poder construir proyectos en MVC (Modelo Vista Controlador) sólidos, gracias a que la herramienta posee características de aprendibilidad y usabilidad rápida, se planea crear una API Rest ya que es el modelo que mejor se ajusta al blog.

Stack

1.Frontend:

•HTML

•Javascript

•Bootstrap (CSS)

•Jquery

•Bower (Package Manager)

2.Backend: (L.A.M.P.)

•S.O.  bajo  los  servicios:  GNU/Linux  (Distribu-ción a evaluar)

•Framework Laravel (PHP)

•Servidor Web: Apache HTTP Server

•Sistema gestor de base de datos: MySQL

•Composer (Package Manager)

Módulos:

-Despliegue:

Se encargará de mostrar las entradas almacenadas en la base de datos, esta consta de dos vistas: Una que se ocupa del blog y otra de las galerías de imágenes, en ambas se puede dejar un comentario de manera anonima, con un pseudonimo o si se desea se puede conectar con facebook para dejar un comentario con tu cuenta, permitiendo tambien acceder al sistema de "Like". Ademas estas vistas tienen como función ser la entrada principal para cualquier visitante, con una estructura basica de baner, logo, publicaciones destacadas, historial de entradas, y links a redes sociales.

-Administrador:

Este módulo se accede mediante una verificación utilizando Json-Webtokens, entregando al usuario control total sobre la API Rest (CRUD), este tendrá la capacidad de gestionar entradas de imágenes y de blog, con este ultimo utilizando un sistema WYSIWYG para la costumización.
