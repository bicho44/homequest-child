#HomeQuest-child

Estos son los cambios para el sitio <http://realestateatblue.com>

##[Sold Press](http://www.soldpress.com/)

####Estilos Custom

Estos estilos pertenecen al Plug-in [Sold Press](http://www.soldpress.com/) que maneja los listados de propiedades.

Los mismos hay que colocarlos en el directorio **wp-uploads/soldpress/custom** si el directorio no existe hay que crearlo.

####Orden de prioridades de los estilos

Para que los estilos afecten el diseño deben entrar en el orden correcto, el mismo es 

1. soldpress.css
2. bootstrap.css
3. bootstrap-responsive.css

Sino entran en este orden el diseño es un caos de **!important** lo cual es de muy mala practica.

Por esta razón hubo que modificar una función en el plug-in de **SoldPress** 