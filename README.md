# API de Gestión de Mascotas

## Información General

Esta API permite la gestión de usuarios y mascotas con un sistema de autenticación basado en tokens. Los usuarios pueden gestionar sus propias mascotas, mientras que los administradores tienen acceso completo al sistema.

## Autenticación

La API utiliza autenticación basada en tokens. Después del login exitoso, debes incluir el token en todas las peticiones protegidas:

```
Authorization: Bearer {tu_token}
```

## Endpoints Disponibles

### 🔐 Autenticación

#### Registro de Usuario
```http
POST /register
```

**Body (JSON):**
```json
{
  "name": "Nombre Usuario",
  "email": "usuario@email.com",
  "password": "contraseña",
  "password_confirmation": "contraseña"
}
```

**Respuesta exitosa (201):**
```json
{
  "message": "Usuario registrado exitosamente",
  "user": {
    "id": 1,
    "name": "Nombre Usuario",
    "email": "usuario@email.com"
  }
}
```

#### Login
```http
POST /login
```

**Body (JSON):**
```json
{
  "email": "usuario@email.com",
  "password": "contraseña"
}
```

**Respuesta exitosa (200):**
```json
{
  "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJI...",
  "user": {
    "id": 1,
    "name": "Nombre Usuario",
    "email": "usuario@email.com"
  }
}
```

#### Logout
```http
POST /logout
```
🔒 **Requiere autenticación**

**Headers:**
```
Authorization: Bearer {token}
```

**Respuesta exitosa (200):**
```json
{
  "message": "Logout exitoso"
}
```

---

### 🐾 Gestión de Mascotas

#### Ver Mis Mascotas
```http
GET /pets
```
🔒 **Requiere autenticación**

**Respuesta exitosa (200):**
```json
[
  {
    "id": 1,
    "nombre": "Firulais",
    "imagen": "https://inkscape.app/wp-content/uploads/imagen-vectorial.webp",
    "tipo": "Perro",
    "user_id": 1,
    "created_at": "2024-01-01T12:00:00Z",
    "updated_at": "2024-01-01T12:00:00Z"
  }
]
```

#### Crear Nueva Mascota
```http
POST /pets
```
🔒 **Requiere autenticación**

**Body (JSON):**
```json
{
  "nobre": "Nombre de la mascota",
  "imagen": "imagen",
  "tipo": "tipo",
}
```

**Respuesta exitosa (201):**
```json
{
  "id": 2,
  "name": "Nombre de la mascota",
  "imagen": "imagen",
  "tipo": "tipo",
  "user_id": 1,
  "created_at": "2024-01-01T12:00:00Z",
  "updated_at": "2024-01-01T12:00:00Z"
}
```

#### Editar Mascota (Completo)
```http
PUT /pets/{id}
```
🔒 **Requiere autenticación** | Solo puedes editar tus propias mascotas

**Body (JSON):**
```json
{
  "nombre": "Nuevo nombre",
  "imagen": "Nueva imagen",
  "tipo": "Nuevo tipo"
}
```

#### Editar Mascota (Parcial)
```http
PATCH /pets/{id}
```
🔒 **Requiere autenticación** | Solo puedes editar tus propias mascotas

**Body (JSON):** (Solo los campos que quieras actualizar)
```json
{
  "nombre": "Nuevo nombre"
}
```

#### Eliminar Mascota
```http
DELETE /pets/{id}
```
🔒 **Requiere autenticación** | Solo puedes eliminar tus propias mascotas

**Respuesta exitosa (200):**
```json
{
  "message": "Mascota eliminada exitosamente"
}
```

---

### 👑 Endpoints de Administrador

Los siguientes endpoints solo están disponibles para usuarios con rol de administrador.

#### Ver Mascotas de un Usuario
```http
GET /users/{id}/pets
```
🔒 **Requiere autenticación de ADMIN**

**Respuesta exitosa (200):**
```json
[
  {
    "id": 1,
    "nombre": "Firulais",
    "imagen": "https://inkscape.app/wp-content/uploads/imagen-vectorial.webp"
    "tipo": "Perro",
    "user_id": 2,
    "created_at": "2024-01-01T12:00:00Z",
    "updated_at": "2024-01-01T12:00:00Z"
  }
]
```

#### Ver Todos los Usuarios
```http
GET /users
```
🔒 **Requiere autenticación de ADMIN**

**Respuesta exitosa (200):**
```json
[
  {
    "id": 1,
    "name": "Usuario 1",
    "email": "usuario1@email.com",
    "role": "user",
    "created_at": "2024-01-01T12:00:00Z",
    "updated_at": "2024-01-01T12:00:00Z"
  }
]
```

#### Ver Usuario Específico
```http
GET /users/{id}
```
🔒 **Requiere autenticación de ADMIN**

#### Editar Usuario
```http
PUT /users/{id}
```
🔒 **Requiere autenticación de ADMIN**

**Body (JSON):**
```json
{
  "name": "Nuevo nombre",
  "email": "nuevo@email.com",
  "role": "admin"
}
```

#### Eliminar Usuario
```http
DELETE /users/{id}
```
🔒 **Requiere autenticación de ADMIN**

**Respuesta exitosa (200):**
```json
{
  "message": "Usuario eliminado exitosamente"
}
```

---


## Errores Comunes

### Error de Validación (422)
```json
{
  "message": "Los datos no son válidos",
  "errors": {
    "email": ["El email es obligatorio"],
    "password": ["La contraseña debe tener al menos 8 caracteres"]
  }
}
```

### Error de Autenticación (401)
```json
{
  "message": "Token no válido o expirado"
}
```

### Error de Autorización (403)
```json
{
  "message": "No tienes permisos para realizar esta acción"
}
```

## Notas Importantes

1. **Protección de Datos**: Los usuarios solo pueden ver y editar sus propias mascotas
2. **Roles**: Existen dos roles - `user` (usuario normal) y `admin` (administrador)
3. **Tokens**: Los tokens tienen una duración limitada, gestiona la renovación según sea necesario
4. **Relaciones**: Cada mascota está vinculada a un usuario específico través de `user_id`
