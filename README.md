# Landing Page personalizada en WordPress

## Descripción

Este proyecto consiste en el desarrollo de un theme personalizado en WordPress basado en el diseño compartido en Figma, replicando la estructura visual, composición gráfica, estilos, animaciones y distribución del contenido utilizando HTML, CSS, JavaScript y PHP sin el uso de builders.

El proyecto fue desarrollado mediante templates personalizados de WordPress y contenido dinámico administrado con ACF (Advanced Custom Fields), permitiendo editar múltiples secciones desde el panel administrativo sin necesidad de modificar código.

Adicionalmete, se implementó un sistema personalizado de almacenamiento y administración de contactos mediante un plugin desarrollado en WordPress utilizando PHP y MySQL.

Diseño de referencia:  
https://www.figma.com/proto/c9JpRDbPUf1jdtMbqYejaN/Test?t=q6S8ORdKHYlUuP4u-1&scaling=min-zoom&content-scaling=fixed&page-id=0%3A1&node-id=1-15

---

# Tecnologías utilizadas

El proyecto fue desarrollado utilizando tecnologías y herramientas enfocadas en el desarrollo de themes y plugins personalizados para WordPress.

## Frontend

- HTML5
- CSS3
- JavaScript

## Backend

- PHP
- MySQL
- WordPress

## WordPress y herramientas utilizadas

- ACF (Advanced Custom Fields)
- Hooks nativos de WordPress
- admin-post.php
- `$wpdb`
- Plugins personalizados WordPress
- dbDelta()
- register_activation_hook()

# Estructura del theme

El proyecto fue desarrollado como un theme personalizado de WordPress incluyendo los archivos fundamentales necesarios para su funcionamiento:

- style.css
- functions.php
- front-page.php
- header.php
- footer.php
- index.php

Además, el proyecto cuenta con organización modular de assets y grupos dinámicos de ACF:

- assets/img
- assets/js
- acf-json

---

# Implementación del diseño

La interfaz fue desarrollada tomando como referencia el diseño compartido en Figma, respetando:

- Distribución visual
- Jerarquía tipográfica
- Espaciados
- Colores
- Imágenes decorativas
- Overlays
- Glow effects
- Composición visual
- Estructura general del layout

La implementación se basó principalmente en la versión visual del diseño (“Texts”), manteniendo la apariencia final mostrada en la maqueta principal.

También se utilizaron recursos visuales, imágenes y referencias del archivo editable de Figma para complementar la implementación dinámica del sitio.

---

# Organización CSS

Los estilos fueron desarrollados de forma modular y organizada utilizando:

- Variables globales CSS
- Clases reutilizables
- Naming estructurado por secciones
- Unidades relativas (`rem`)
- Efectos blur
- Overlays decorativos
- Responsive layout para escritorio

Durante la integración dinámica con PHP y ACF se conservaron las estructuras y clases originales para evitar afectar el comportamiento visual del diseño.

---

# Animaciones y efectos implementados

El sitio incorpora efectos visuales y animaciones desarrolladas con CSS y JavaScript.

## Movimiento suave de nubes

Las imágenes decorativas de las nubes del hero principal fueron animadas mediante transformaciones suaves para generar sensación de movimiento dinámico dentro de la sección principal.

## Carrusel de campañas

La sección de campañas fue desarrollada como un slider/carrusel personalizado utilizando JavaScript para permitir transición entre imágenes y navegación visual mediante indicadores.

## Movimiento decorativo de imágenes tipográficas

Las imágenes decorativas de texto como:

- ENCY & ADVISORY
- START HERE

fueron animadas horizontalmente para generar sensación de movimiento continuo dentro de la página.

Aunque visualmente parecen letras animadas, se trabajó directamente con imágenes decorativas integradas en el diseño original.

## Glow effects y overlays

Varias secciones incorporan efectos de iluminación y profundidad utilizando:

- pseudo-elementos
- blur
- gradientes
- opacidad
- overlays
- luces decorativas

siguiendo la estética visual del diseño original.

---

# Contenido dinámico con ACF

Se implementó ACF (Advanced Custom Fields) para permitir la edición del contenido desde el administrador de WordPress sin necesidad de modificar código.

Se crearon múltiples grupos de campos dinámicos para administrar:

- títulos
- subtítulos
- imágenes
- botones
- textos descriptivos
- cards informativas
- frases destacadas
- imágenes decorativas
- elementos visuales

Los campos fueron integrados mediante PHP utilizando `get_field()` manteniendo la estructura HTML original para conservar:

- estilos
- márgenes
- espaciados
- colores
- saltos de línea
- spans decorativos
- comportamiento visual

---

# Exportación y sincronización de grupos ACF

Los grupos de campos dinámicos fueron incluidos dentro de la carpeta:

- `acf-json`

permitiendo:

-sincronización automática de campos en WordPress
-control de versiones del contenido dinámico
-portabilidad del proyecto
-respaldo de configuraciones ACF
-reutilización de grupos de campos
-mejor organización del entorno de desarrollo

## Esto facilita la importación y sincronización de configuraciones ACF en otros entornos sin necesidad de recrear manualmente los campos desde el panel administrativo.

# Secciones implementadas dinámicamente

Actualmente se encuentran integradas dinámicamente mediante ACF las siguientes secciones:

- Header
- Hero principal
- Sección B2B
- Testimonios
- Carrusel de campañas
- Servicios
- With You
- Sales
- Start Here
- Card informativa
- Formulario
- Tarjeta de contacto

---

# Funcionalidades implementadas

Actualmente el proyecto incluye:

- Theme personalizado funcional
- Templates personalizados WordPress
- Integración dinámica con ACF
- Diseño visual basado en Figma
- Carrusel funcional
- Animaciones y efectos visuales
- Header y footer estructurados
- Contenido editable desde WordPress
- Organización modular de assets
- Formulario dinámico funcional
- Persistencia de datos en MySQL
- Plugin personalizado para administración de contactos
- Tabla personalizada creada automáticamente en WordPress
- Panel administrativo para gestión de contactos
- Gestión de estados de contactos
- Eliminación de registros desde WordPress
- Integración con hooks nativos de WordPress
- Validaciones de seguridad mediante nonce
- Sanitización de datos enviados desde formularios
- Uso de consultas MySQL mediante `$wpdb`

---

# Implementación del sistema de contactos

Se desarrolló un plugin personalizado de WordPress encargado de administrar el almacenamiento y gestión de los contactos enviados desde el formulario principal del sitio.

El plugin fue desarrollado utilizando funcionalidades nativas de WordPress y consultas MySQL mediante `$wpdb`.

### Creación automática de tabla personalizada

Al activar el plugin, se crea automáticamente una tabla personalizada en la base de datos utilizando:

- `register_activation_hook()`
- `dbDelta()`

La tabla almacena:

- nombre
- apellido
- cargo
- empresa
- mensaje
- estado
- fecha de creación
- fecha de actualización

---

## Envío y almacenamiento de contactos

El formulario del frontend fue integrado utilizando:

- `admin-post.php`
- hooks de WordPress
- validaciones nonce
- sanitización de datos

Los registros enviados desde el formulario se almacenan automáticamente en la tabla personalizada con estado inicial:

- `pendiente`

---

## Panel administrativo de contactos

Se implementó un módulo administrativo personalizado dentro del panel de WordPress para visualizar los contactos enviados desde el formulario.

Desde esta sección es posible:

- visualizar registros
- cambiar estados
- eliminar contactos

El panel administrativo fue desarrollado utilizando:

- `add_menu_page()`
- tablas HTML personalizadas
- consultas MySQL mediante `$wpdb`

---

## Gestión de estados

Cada contacto puede administrarse mediante los estados:

- Pendiente
- Contactado
- Descartado

La actualización de estados se realiza dinámicamente desde el panel administrativo y los cambios se almacenan directamente en la base de datos utilizando:

- `$wpdb->update()`

---

## Eliminación de contactos

Se implementó la eliminación de registros desde el panel administrativo utilizando:

- formularios independientes
- validaciones nonce
- hooks administrativos
- `$wpdb->delete()`

---

## Seguridad y validaciones

El sistema incorpora validaciones y medidas de seguridad utilizando:

- `wp_nonce_field()`
- `wp_verify_nonce()`
- `sanitize_text_field()`
- `sanitize_textarea_field()`
- `wp_safe_redirect()`

permitiendo procesar formularios de forma segura dentro de WordPress.

---

# Visualización desde WordPress

El sistema de administración de contactos se encuentra integrado directamente dentro del panel administrativo de WordPress mediante una sección personalizada.

Desde esta interfaz es posible:

- visualizar registros enviados desde el formulario
- administrar estados
- eliminar contactos
- consultar información almacenada dinámicamente

---

---
