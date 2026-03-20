# DFADeploy

Este proyecto contiene una aplicación muy simple de PHP y MySQL para crear y listar usuarios mediante una interfaz web simple.
El propósito principal de este repositorio es tener un **ejemplo básico para un despliegue con contenedores de docker**.


## Requisitos

- Requiere que Docker Engine esté correctamente instalado antes de ejecutar la aplicación.

### Instalación de Docker Engine

#### Windows 10

1. Descargar [Docker Desktop para Windows](https://www.docker.com/products/docker-desktop)
2. Ejecutar el instalador y seguir el asistente de instalación
3. Reiniciar el equipo
4. Verificar la instalación: `docker --version`

#### Ubuntu

```bash
sudo apt-get update
sudo apt-get install docker.io
sudo usermod -aG docker $USER
newgrp docker
docker --version
```


## Comenzar

### Inicio Rápido con Docker

Para iniciar la infraestructura de la aplicación, ejecuta:

```bash
docker compose up -d --build
```

Este comando:
- Creará las imágenes de Docker
- Iniciará los servicios definidos en docker compose (PHP, MySQL)

### Detener la Aplicación

```bash
docker compose down
```

## Características

- Creación de nuevos usuarios
- Listado de todos los usuarios en el interfaz principal

## Estructura del Proyecto

```
DFADeploy/
├── docker-compose.yml
├── Dockerfile
├── src/
│   └── (archivos de aplicación PHP)
└── README.md
```

## Notas
Una vez ejecutado `docker compose up -d --build`, la aplicación estará disponible en:

- **Aplicación PHP**: http://localhost:8080
- **phpMyAdmin**: http://localhost:8081  (root/root)



