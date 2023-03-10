
# Desglose de tickets

Somos una empresa de contratación cuyo propósito principal es reservar **Agentes** en **Turnos** para algunas **Instalaciones** publicadas en nuestra plataforma. Estamos trabajando en una nueva funcionalidad la cual generará informes para las **Instalaciones** de nuestros clientes, contienen información sobre cuántas horas trabajó cada **Agente** en un trimestre determinado mediante la suma de todos los **Turnos** laborados. 

El proceso actual es el siguiente:

- La información se guarda en la base de datos en las tablas de **Instalaciones**, **Agentes** y **Turnos**.
- Se llama a una función `getTurnosByInstalacion` con el `id` de la **Instalación**, que devuelve todos los turnos trabajados en ese trimestre, incluyendo algunos metadatos sobre el **Agente** asignado a cada uno.
- Se llama a una función `generateReport` con la lista de turnos. Lo convierte en un PDF.

## Debes trabajar en el ticket. Dice:

**Actualmente el *id* de cada Agente en los reportes que generamos es la id de nuestra base de datos interna. Queremos que las *Instalaciones* que contratan nuestros servicios puedan guardar sus propios id personalizados por cada Agente con el que trabajan y utilizar ese id cuando les generemos su reporte**

Basado en la información proveída debes desglosar el ticket en 2 a 5 tickets individuales. Se lo más detallado posible en cada uno de los tickets, incluyendo criterios de aceptación, estimados de tiempo/esfuerzo y detalles de implementación. Eres libre de tomar decisiones y asumir algunos detalles desconocidos, si asumes algo no puede estar mal

Nos interesa evaluar el nivel de detalle y la claridad de los tickets.

## Aquí debes incluir tus tickets con su respectivo desglose
