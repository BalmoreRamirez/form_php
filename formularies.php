<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <article class="main-content">

    <header>
      <h1>Test form</h1>
    </header>

    <form method="POST">
      <div class="form-group">
        <label>Your Name:</label>
        <input type="text" placeholder="First & last name" class="input-control" name="name" />
      </div>

      <div class="form-group">
        <label>Your Email:</label>
        <input placeholder="Your Name@email.com" class="input-control" name="email" />
      </div>

      <div class="form-group">
        <label>Your Phone:</label>
        <input placeholder="2222-2222" class="input-control" name="phone" />
      </div>

      <div class="form-group">
        <label>Your Zip Code:</label>
        <input placeholder="Enter zip code" class="input-control" name="code" />
      </div>

      <div class="form-group">
        <label>Your Role:</label>
        <select class="input-control" name="rol">
          <option value="Home Seller">Home Seller</option>
          <option value="Home Buyer">Home Buyer</option>
          <option value="Real Estate Investor">Real Estate Investor</option>
          <option value="Real Estate Agent">Real Estate Agent</option>
          <option value="Other">Other</option>
        </select>
      </div>

      <div class="form-group">
        <label>Subject:</label>
        <input placeholder="Subject" class="input-control" name="subject" />
      </div>

      <div class="form-group">
        <label>Message:</label>
        <textarea cols="45" maxlength="500" placeholder="Your Message" rows="8" class="input-control" name="message">
    </textarea>
      </div>

      <div class="form-group">
        <input type="submit" name="register">
      </div>


    </form>

    <?php
    include("desarrollo.php");
    ?>

  </article>
</body>

</html>