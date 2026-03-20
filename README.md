# DFADeploy

Aplicación simple de PHP y MySQL para crear y listar usuarios.

## Descripción General

Este proyecto demuestra un sistema básico de gestión de usuarios construido con PHP y MySQL. Proporciona funcionalidad para crear nuevos usuarios y ver una lista de usuarios existentes a través de una interfaz web simple.

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

Este comando hará:
- Construir las imágenes de Docker
- Iniciar todos los servicios requeridos (PHP, MySQL)
- Ejecutar la aplicación en modo desacoplado

### Detener la Aplicación

```bash
docker compose down
```

## Características

- Crear nuevos usuarios
- Listar todos los usuarios
- Interfaz simple y limpia
- Containerizado con Docker para fácil implementación

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



