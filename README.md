
# MicroWeb
Este proyecto busca solucionar la problemática que plantea Coppel. Buscamos ser un complemento de la página Coppel Emprende, donde, mediante una enseñanza dinámica, ofreceremos que el número de usuarios que terminan los cursos en Coppel Emprende incremente, junto con herramientas de educación financiera que serán desbloqueadas hasta que vean el curso sobre cómo usarlas. Instruyendo a los adultos mayores para que usen tecnología en su Micronegocio.

# Intrucciones para poder ejecutar el programa
- Clonar este repositorio en alguna ubicación de tu computador  Ejemplo: fwscg@PC-Master-Race MINGW64 /c/git
 $ git clone https://github.com/SantiagoGMG/Hackthon.git

- Abrir la ruta del repositorio clonado desde su editor de código de su preferencia (te recomendamos usar VSCode).

- Una vez que accedio al proyecto encontrará un proyecto elaborado en Laravel 11 (Es necesario tener instalado PHP, Composer y Laravel)
- En el proyecto de Laravel cuenta con varias carpetas, pero para hacer funcionar el programa deberá insertar un nuevo archivo nombrado **.env** debajo del .env.example con el contenido de este drive: https://drive.google.com/file/d/1yQwjxvTbwVE2EFLWHy1EVQEfGu132BHF/view?usp=drive_link
- Ahora tendrá que instalar composer en el proyecto para poder generar la carpeta vendor.
- Abra una terminal en su editor de código y posicionece específicamente en la ruta **rutaPersonal\Hackthon\microweb**.
- Ubicado específicamente en microweb deberá ejecutar el siguiente comando **composer install**.
Una vez instaladas todas las dependencias para poder construir un proyecto en Laravel, podrá acceder al servidor ejecutando el comando **php artisan serve**, y le aparecerá un texto similar a este: "Server running on" el cual contiene un enlace que puede copiar y pegar en su navegador o simplemente presionar "ctrl + click" en ese enlace.
Al estar en el servidor, le redireccionará a la parte de inicio donde se podrá ver un ranking de usuarios global que mostrará al usuario con más llaves acumuladas y el progreso de cada uno de los cursos ofrecidos por Coppel Emprende. En el encabezado contamos con los apartados:
- Inicio
- Lecciones
- Herramientas
- Tienda
- Perfil
El apartado de lecciones contiene cursos relevantes para los microempresarios. Puede seleccionar el primero, que es "Fijar precios para ganar más", donde le mandará a unos enlaces de círculos. Presione el círculo uno para poder ejecutar el prototipo de la enseñanza dinámica en la plataforma Coppel Emprende.
El apartado de herramientas cuenta con programas muy sencillos de contabilidad para una empresa, donde mantendremos bloqueadas estas herramientas hasta que el usuario logre completar el curso y pueda aplicar lo aprendido con nuestras herramientas. El apartado de tienda cuenta con productos tecnológicos, para que el microempresario no solo obtenga más educación, sino también productos tecnológicos que le facilitarán muchos procesos en su comercio. El apartado de perfil que se muestra es un ejemplo de cómo estaríamos conectados en la plataforma Coppel Emprende. Mostrando que nosotros queremos ser un complemento a la plataforma Coppel Emprende.
