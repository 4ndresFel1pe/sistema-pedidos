# 📦 Sistema Web de Gestión de Pedidos Vendidos

## 📖 Descripción
Una tienda de ventas locales registra diariamente múltiples pedidos de diferentes productos.  
Actualmente, este proceso se realiza de forma manual en un cuaderno, lo que genera **errores frecuentes**, dificultad para consultar información histórica y pérdida de datos importantes.  

Este proyecto implementa un **sistema web de gestión de pedidos**, que permite:
- Registrar cada venta (Create).
- Consultar los pedidos realizados (Read).
- Actualizarlos en caso de cambios (Update).
- Eliminarlos si es necesario (Delete).

De esta manera se busca garantizar un control más organizado, confiable y seguro de las ventas de la tienda.

---

## 🛠️ Tecnologías utilizadas
El sistema está basado en una **arquitectura de tres capas (Three-Tier Architecture)**:

- **Frontend (Presentación):**
  - HTML5
  - CSS3
  - JavaScript (interactividad en el navegador)

- **Backend (Lógica de negocio):**
  - PHP (procesamiento de pedidos y reglas CRUD)

- **Base de datos (Capa de datos):**
  - MySQL (almacenamiento de la información de pedidos)
  - XAMPP como servidor local de desarrollo

---

## 🎯 Objetivos

### Objetivo general
Desarrollar un sistema web de gestión de pedidos vendidos, basado en arquitectura de tres capas, que permita registrar, consultar, actualizar y eliminar pedidos de manera eficiente, garantizando la organización y recuperación confiable de la información.

### Objetivos específicos
- Diseñar una **base de datos en MySQL** que almacene de forma estructurada la información de los pedidos.
- Implementar un **backend en PHP** que gestione las operaciones CRUD y la conexión con la base de datos.
- Construir una **interfaz web en HTML, CSS y JavaScript** que permita a los usuarios interactuar con el sistema.
- Validar el correcto funcionamiento del sistema a través de pruebas de registro, consulta, edición y eliminación de pedidos.

---

## ⚙️ Funcionalidades principales
- 📋 Registrar un nuevo pedido con datos como: `ID, Cliente, Producto, Cantidad, Precio, Fecha`.
- 🔎 Consultar los pedidos realizados en una tabla dinámica.
- ✏️ Editar/actualizar la información de un pedido existente.
- ❌ Eliminar pedidos cuando sea necesario.
- 💾 Información centralizada y persistente en una base de datos MySQL.

---
