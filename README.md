# Fintek Prueba Técnica: Nivel Junior

## Pasos utilizados para la elaboración del CRUD

En la prueba se me solicitó crear un CRUD donde se pueda crear, leer, actualizar y eliminar registros de productos con los lenguajes PHP y Mysql.

1. Como primer punto realicé la creación de la base de datos en phpmyadmin, utilizando XAMPP como servidor.

![bandicam 2023-05-21 14-22-22-093](https://github.com/armandojrw/fintekpruebajunior/assets/85651439/e548f4b9-5323-42b7-ae56-b204525d6a78)

2. Procedí a crear mi código para la conección a la base de datos.

![bandicam 2023-05-21 14-26-30-125](https://github.com/armandojrw/fintekpruebajunior/assets/85651439/2c7dfb8a-f780-4073-a7af-25793cd97e7c)

3. Luego cree mi archivo index.php para allí hacer la tabla donde se ven todos los registros de los productos agregados a la base de datos.

![bandicam 2023-05-21 14-29-10-659](https://github.com/armandojrw/fintekpruebajunior/assets/85651439/270fb8d5-999f-47e0-9675-5c3df0e53e6a)

4. Continué creando el archivo add_product.php allí es donde hice todo el código para el formulario de agregar producto, utilicé bootstrap para darle estilo a los inputs y button.

![bandicam 2023-05-21 14-30-40-521](https://github.com/armandojrw/fintekpruebajunior/assets/85651439/0ee0fa81-092c-4abb-9f2a-9f2c8d557135)

5. Luego continuamos con el archivo edit_product.php, allí creamos un formulario y pasamos los valores dependiendo del ID actual seleccionado por el botón editar, utilicé el método GET para pasar el valor y me localice mediante una consulta la fila correspondiente a editar.

![bandicam 2023-05-21 14-37-36-197](https://github.com/armandojrw/fintekpruebajunior/assets/85651439/2b3e434a-a829-4642-80b1-e8f79c172786)

6. Luego continuamos con el archivo delete_product.php, mediante el botón de cada fila pasamos el valor por el método GET así como lo hicimos con el edit_product.php, en esta acción utilizamos lo que es un modal de confirmación(Boostrap).

![bandicam 2023-05-21 14-39-59-816](https://github.com/armandojrw/fintekpruebajunior/assets/85651439/7f59fbb9-0027-4f55-a360-89492ae4fd60)

##Funcionamiento del CRUD de productos

Como primera entrada tenemos lo que es la lista de todos los productos, y también en la parte de arriba tenemos un botón donde dice Agregar Producto, cuando le damos click a ese botón nos lleva a un formulario donde alli podemos agregar un producto.

![bandicam 2023-05-21 14-43-09-607](https://github.com/armandojrw/fintekpruebajunior/assets/85651439/d4dd4adb-e432-48e8-93ed-3cb57cca7090)

![bandicam 2023-05-21 14-43-13-468](https://github.com/armandojrw/fintekpruebajunior/assets/85651439/56864515-8e80-4492-9fdd-68d59eb1e5ec)

Llenamos toda la información de deseamos ingresar en nuestra base de datos y le damos a GUARDAR.

![bandicam 2023-05-21 14-48-28-524](https://github.com/armandojrw/fintekpruebajunior/assets/85651439/70ca883a-fb0f-41dc-8377-ed9ca5ab5954)

Ya tenemos el producto agregado con toda su información.

![bandicam 2023-05-21 14-49-58-959](https://github.com/armandojrw/fintekpruebajunior/assets/85651439/0c647874-f904-42df-a31e-0650882ae442)

Podemos editar o eliminar nuestro producto, a la derecha de cada fila de cada producto está ubicado los botones correspondientes, si le damos click al botón de eliminar va arrojar un modal de confirmación.

![bandicam 2023-05-21 14-52-29-882](https://github.com/armandojrw/fintekpruebajunior/assets/85651439/7d8268fd-aaa4-4970-88cf-7dc1ee11f409)

Listo, estos son todos los pasos para el funcionamiento del CRUD de productos.

## Instalación de CRUD de productos

1. Descargar todos los archivos del proyecto y ubicarlos dentro de un servidor para así poder visualizar nuestro proyecto, recuerde que debe estar encendido nuestro apache y Mysql

2. Importar el archivo gestion_productos.sql en la base de datos Mysql.

![bandicam 2023-05-21 14-56-57-920](https://github.com/armandojrw/fintekpruebajunior/assets/85651439/71dd2d77-aac3-4178-b328-1a5df492abf2)

3. Luego procedemos a ubicar nuestros archivos en la carpeta htdocs, luego vamos a nuestro navegador de preferencia y ponemos https://localhost/nombre-de-carpeta/, listo, ya podemos iniciar en el funcionamiento de nuestro CRUD.



