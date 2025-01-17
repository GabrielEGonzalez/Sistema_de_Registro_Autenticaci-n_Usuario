# Sistema_de_Registro_Autenticaci-n_Usuario
sistema web en PHP que permita a los usuarios registrarse, iniciar sesión y cerrar sesión.


---

### **Reto: Sistema de Registro y Autenticación de Usuarios**
Crea un sistema web en PHP que permita a los usuarios registrarse, iniciar sesión y cerrar sesión.

---

### **Requerimientos:**

1. **Registro de Usuario:**
   - Un formulario donde los usuarios puedan registrarse con los siguientes datos:
     - Nombre de usuario.
     - Correo electrónico.
     - Contraseña.
   - Valida que:
     - El nombre de usuario no esté vacío.
     - El correo tenga un formato válido.
     - La contraseña tenga al menos 8 caracteres.
   - Guarda la información del usuario en una base de datos (o en un archivo como opción inicial).

2. **Inicio de Sesión:**
   - Un formulario donde los usuarios puedan iniciar sesión ingresando su correo y contraseña.
   - Verifica que las credenciales coincidan con las almacenadas.
   - Si son válidas, permite al usuario acceder a una página de bienvenida.
   - Si no son válidas, muestra un mensaje de error.

3. **Cerrar Sesión:**
   - Un botón para que el usuario cierre sesión.
   - Redirige al usuario a la página de inicio después de cerrar sesión.

4. **Seguridad:**
   - Almacena las contraseñas de forma segura utilizando `password_hash()` al registrarlas y `password_verify()` al autenticarlas.
   - Usa sesiones (`$_SESSION`) para manejar el estado de inicio de sesión.

---

### **Extras Opcionales (para profundizar):**
- **Recordar Usuario:**
  Implementa una opción de "Recordarme" usando cookies.
- **Protección de Rutas:**
  Asegúrate de que solo los usuarios autenticados puedan acceder a la página de bienvenida o áreas protegidas.
- **Diseño:**
  Mejora la apariencia de los formularios con CSS o Bootstrap.
- **Base de Datos:**
  Usa una base de datos MySQL para almacenar la información de los usuarios.

---

### **Funcionamiento esperado:**

1. **Registro:**
   - El usuario ingresa sus datos y presiona el botón "Registrar".
   - Si los datos son válidos, se guarda el usuario y se muestra un mensaje de éxito.
   - Si los datos son inválidos, se muestran los errores correspondientes.

2. **Inicio de Sesión:**
   - El usuario ingresa su correo y contraseña y presiona "Iniciar Sesión".
   - Si las credenciales son válidas, accede a la página de bienvenida:
     ```plaintext
     Bienvenido, Gabriel.
     ```
   - Si las credenciales son inválidas, muestra un mensaje:
     ```plaintext
     Error: Usuario o contraseña incorrectos.
     ```

3. **Cerrar Sesión:**
   - Al presionar "Cerrar Sesión", el usuario es redirigido al formulario de inicio de sesión.

---

### **Sugerencia de Estructura:**

#### 1. **Formulario de Registro:**
- Crea un archivo `register.php` con un formulario que envíe los datos a través de `$_POST`.
- Guarda la información del usuario (nombre, correo, contraseña) en una base de datos o archivo.

#### 2. **Formulario de Inicio de Sesión:**
- Crea un archivo `login.php` que reciba el correo y la contraseña ingresados.
- Verifica las credenciales contra la base de datos o archivo.

#### 3. **Página de Bienvenida:**
- Crea un archivo `welcome.php` que muestre un saludo al usuario.
- Asegúrate de que solo se pueda acceder si el usuario está autenticado (usa `$_SESSION`).

#### 4. **Cerrar Sesión:**
- Crea un archivo `logout.php` que destruye la sesión y redirige al usuario al formulario de inicio de sesión.

---

### **Pistas para resolver:**
- Usa `session_start()` para manejar las sesiones.
- Utiliza la función `filter_var()` para validar el correo electrónico.
- Guarda las contraseñas usando:
  ```php
  $hash = password_hash($password, PASSWORD_DEFAULT);
  ```
  Y verifica las contraseñas con:
  ```php
  if (password_verify($passwordIngresada, $hashGuardado)) {
      // Contraseña correcta
  }
  ```
- Para redirigir a los usuarios, usa `header("Location: archivo.php");`.

---

Este reto te ayudará a practicar el manejo de formularios, sesiones, autenticación, validación de datos y seguridad básica en PHP. ¿Quieres detalles sobre alguna parte del reto? 🚀