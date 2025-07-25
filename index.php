<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style2.css">

</head>
<body>  

        <div class="snowflake">❄️</div>
        <div class="snowflake">❅</div>
        <div class="snowflake">❆</div>
    
        <script>
            // JavaScript to create multiple snowflakes
            const snowflakeCount = 50; // Number of snowflakes
        const snowflakeTypes = [ '❅', '❆']; // Array of snowflake types
        const body = document.body;

        for (let i = 0; i < snowflakeCount; i++) {
            const snowflake = document.createElement('div');
            snowflake.className = 'snowflake';

            // Randomly select a snowflake type
            const randomType = Math.floor(Math.random() * snowflakeTypes.length);
            snowflake.textContent = snowflakeTypes[randomType];

            // Randomize position and animation duration
            snowflake.style.left = Math.random() * 100 + 'vw'; // Random horizontal position
            snowflake.style.animationDuration = Math.random() * 5 + 5 + 's'; // Random fall duration
            snowflake.style.fontSize = Math.random() * 15 + 10 + 'px'; // Random size

            body.appendChild(snowflake);
        }
            </script>



<img src="robo.PNG" alt="Shaking Image" class="shake" style="height: 370px; width: 370px; margin-left: -250px;">
<div class="container">
    <div class="container2" id="signup" style="display: none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      <p class="or">
        ----------or--------
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>
</div>

    <div class="container2" id="signIn">
        <h1 class="form-title">Sign In to BUDDY <img src="./vecteezy_illustration-vector-chat-robot-design-kawaii_22032633.svg" style="height: 50px; width: 50px;"></h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
          ----------or--------
        </p>
        <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton">Sign Up</button>
        </div>
      </div>
      <script src="script.js"></script>
</body>
</html>
