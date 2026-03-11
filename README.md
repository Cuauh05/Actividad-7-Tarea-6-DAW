Sistema de Gestión de Cursos - DAW

Descripción del Proyecto
Este proyecto es una aplicación web desarrollada con Laravel para gestionar cursos de robótica, kits de robótica y usuarios del sistema.

DIAGRAMA: 
<img width="817" height="818" alt="Captura de pantalla 2026-03-09 205808" src="https://github.com/user-attachments/assets/5c61c351-eedd-497b-85c5-3c98dc11cbcc" />

Entidades incluidas en el sistema:

Usuarios
- ID
- Nombre
- Correo electrónico
- Contraseña
- Rol

Cursos
- ID
- Título
- Descripción
- Duración_Horas
- Nivel

Kits de Robótica
- ID
- Nombre
- Descripción
- Precio

Relaciones:
- Un profesor puede crear varios cursos
- Los cursos pueden usar kits de robótica
