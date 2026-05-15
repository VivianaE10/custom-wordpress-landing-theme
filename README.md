# Landing Page personalizada en WordPress

## Descripción

Este proyecto consiste en el desarrollo de un theme personalizado en WordPress basado en el diseño compartido en Figma, replicando la estructura visual, composición gráfica, estilos, animaciones y distribución del contenido utilizando HTML, CSS, JavaScript y PHP sin el uso de builders.

El proyecto fue desarrollado mediante templates personalizados de WordPress y contenido dinámico administrado con ACF (Advanced Custom Fields), permitiendo editar múltiples secciones desde el panel administrativo sin necesidad de modificar código.

Diseño de referencia:  
https://www.figma.com/proto/c9JpRDbPUf1jdtMbqYejaN/Test?t=q6S8ORdKHYlUuP4u-1&scaling=min-zoom&content-scaling=fixed&page-id=0%3A1&node-id=1-15

---

# Tecnologías utilizadas

- WordPress
- PHP
- HTML5
- CSS3
- JavaScript
- ACF (Advanced Custom Fields)

---

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
- Cards
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

Se conservaron las clases originales durante la integración dinámica con PHP y ACF para evitar afectar el comportamiento visual del diseño.

---

# Animaciones y efectos implementados

El sitio incorpora efectos visuales y animaciones desarrolladas con CSS y JavaScript.

## Movimiento suave de nubes

Las imágenes decorativas de las nubes del hero principal fueron animadas mediante transformaciones suaves para generar sensación de movimiento dinámico dentro de la sección principal.

## Movimiento decorativo de imágenes tipográficas

Las imágenes decorativas de texto como:

- ENCY & ADVISORY
- START HERE

fueron animadas horizontalmente para generar sensación de movimiento continuo dentro de la página.
Aunque visualmente parecen letras animadas, se trabajó directamente con imágenes decorativas integradas en el diseño original.

## Carrusel de campañas

La sección de campañas fue desarrollada como un slider/carrusel personalizado utilizando JavaScript para permitir transición entre imágenes y navegación visual mediante indicadores.

## Efectos hover

Se implementaron efectos interactivos sobre:

- cards

para mejorar la experiencia visual e interacción del usuario.

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

# Integración dinámica y conservación del layout

Durante la implementación dinámica se conservaron las estructuras originales del HTML para evitar afectar el diseño visual del sitio.

En componentes donde el diseño dependía de:

- `<span>`
- `<br>`
- líneas separadas
- colores específicos
- textos destacados

el contenido fue dividido estratégicamente en múltiples campos ACF para preservar la apariencia original del diseño.

---

# Configuración ACF

Los grupos de campos dinámicos fueron incluidos dentro de la carpeta:

- acf-json

permitiendo sincronizar automáticamente la configuración de campos en WordPress mediante ACF.

Esto facilita:

- control de versiones
- portabilidad del proyecto
- sincronización automática de grupos
- trabajo colaborativo
- respaldo de configuración dinámica

---

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

# Estado actual del proyecto

Actualmente el proyecto incluye:

- Theme personalizado funcional
- Estructura modular WordPress
- Templates personalizados
- Integración dinámica con ACF
- Diseño visual basado en Figma
- Carrusel funcional
- Animaciones y efectos visuales
- Header y footer estructurados
- Contenido editable desde WordPress
- Organización modular de assets

---

# Pendiente por implementar

Pendiente por desarrollar:

- Persistencia de datos del formulario
- Tabla personalizada en MySQL
- Plugin personalizado para administración de registros
- Gestión de estados:
  - Pendiente
  - Contactado
  - Descartado
- Panel administrativo para gestión de registros enviados desde el formulario

---

# Autor

Viviana Ospina Escobar
