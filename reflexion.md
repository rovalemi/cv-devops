# Reflexión — DevOps 2026

## 1. ¿Qué ventajas tiene usar CI/CD frente a desplegar manualmente?

Con CI/CD basta con hacer git push para que el código llegue a producción solo,
sin conectarse al servidor, sin copiar archivos a mano y sin riesgo de olvidar
pasos. Si algo falla, el pipeline lo detecta antes de desplegar y el servidor
nunca recibe código roto. Además, todo el proceso queda registrado y es
reproducible por cualquier miembro del equipo.

## 2. ¿Por qué Jenkins se ejecuta en Docker y no directamente en el sistema?

Docker aísla Jenkins en un contenedor con su propia versión de Java y sus
dependencias, sin interferir con Apache, PHP ni ningún otro servicio instalado
en la Raspberry Pi. Si algo falla, se elimina el contenedor y se vuelve a crear
en segundos. La configuración de Jenkins se guarda en un volumen separado,
así que no se pierde nada.

## 3. ¿Qué diferencia hay entre GitHub Actions y Jenkins, y cuándo usarías cada uno?

GitHub Actions se ejecuta en servidores de GitHub, sin necesidad de servidor
propio. Es ideal para el frontend (React, Vercel) porque es rápido de configurar
y no requiere mantenimiento. Jenkins se ejecuta en tu propio servidor, por lo
que puede acceder a la red local y desplegar en máquinas internas como la
Raspberry Pi. En el mercado real se usan los dos: GitHub Actions para el
frontend y Jenkins para el backend o infraestructura corporativa.
