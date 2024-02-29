<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AHD Gym</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <img src="gymicon.png" alt="Gym logo" id="logo" />
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="About.html">About</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="Gallery.html">Gallery</a></li>
          <li>
            <select onchange="location = this.value;">
              <option value="index.html">Service</option>
              <option value="member.html">Membership</option>
              <option value="Personal training.html">Personal Training</option>
              <option value="Groupfit.html">Group Fitness classes</option>
              <option value="cardio equip.html">Cardio Equipment</option>
              <option value="strength train.html">Strength Training</option>
              <option value="y and p.html">Yoga and Pilates</option>
            </select>
          </li>
        </ul>
      </nav>
    </header>

    <section id="home">
      <div class="banner">
        <h1>Welcome to My Gym</h1>
        <p>Get fit and stay healthy</p>
      </div>
    </section>

    <section id="about">
      <div class="container">
        <h2>About Us</h2>
        <p>
          At our gym, we believe that everyone has the power to achieve their
          fitness goals and live a healthy, active lifestyle. We are dedicated
          to providing a supportive and motivating environment that empowers our
          members to reach their full potential.
        </p>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <h2>Our Services</h2>
        <ul>
          <li><a href="Personal training.html">Personal Training</a></li>
          <li><a href="Groupfit.html"> Group Fitness Classes</a></li>
          <li><a href="cardio equip.html">Cardio Equipment</a></li>
          <li><a href="strength train.html">Strength Training</a></li>
          <li><a href="y and p.html">Yoga and Pilates</a></li>
        </ul>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <h2>Registration</h2>
        <p>If you have any questions, feel free to reach out to us.</p>
        <form action="connect.php" method="post">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required />
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required />
          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea>
          <button type="submit" name="submit">Submit</button>
        </form>
      </div>
    </section>

    <footer>
      <p>&copy; 2023 AHD Gym. All rights reserved.</p>
    </footer>
  </body>
</html>
