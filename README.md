
# CV Online — Alizon Rosales

CV profesional desplegado automáticamente con un pipeline CI/CD completo. 
Construido con PHP y Apache en una Raspberry Pi, con Jenkins para el 
despliegue automático, Cloudflare CDN para HTTPS y rendimiento global, 
e ImageKit para optimización de imágenes.


## Tech Stack

PHP, Apache, Docker, Jenkins, Cloudflare, ImageKit, Git



## Environment Variables

No se requieren variables de entorno para ejecutar el proyecto.
La URL de la API de ImageKit se configura directamente en index.php.


## Run Locally

Clona el repositorio:

```bash
  git clone https://github.com/rovalemi/cv-devops.git
```

Copia el archivo a Apache:

```bash
  cp index.php /var/www/html/cv_site/
```

Asegúrate de que Apache esté corriendo:

```bash
  sudo systemctl start apache2
```

Abre en el navegador:

```bash
  http://localhost/cv_site/
```


## Deployment

El despliegue es automático mediante Jenkins + Poll SCM.
Cada git push a main dispara el pipeline que valida y despliega en Apache.
Pipeline: git push → GitHub → Jenkins → Apache



## API Reference

No hay API externa. Los datos del CV están definidos directamente 
en el array $cv dentro de index.php.
## Authors

Alizon Rosales

GitHub: @rovalemi

Email: rovaalemi.es@gmail.com

