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
                        <label>First Name</label>
                        <input placeholder="First Name" class="input-control" name="fname" />

                        <label class="right-inline">Address</label>
                        <input placeholder="Street" class="input-control" name="street" />
                  </div>
                  <div class="form-group">
                        <label>Last Name</label>
                        <input placeholder="Last Name" class="input-control" name="lname" />

                        <label class="right-inline">City</label>
                        <input placeholder="City" class="input-control" name="city" />
                  </div>
                  <div class="form-group">
                        <label>Email Address</label>
                        <input placeholder="Email" class="input-control" name="emailadd" />

                        <label class="right-inline">State</label>
                        <select class="input-control" name="state">
                              <option value="AL">Alabama</option>
                              <option value="AK">Alaska</option>
                              <option value="AZ">Arizona</option>
                              <option value="AR">Arkansas</option>
                              <option value="CA">California</option>
                              <option value="CO">Colorado</option>
                              <option value="CT">Connecticut</option>
                              <option value="DE">Delaware</option>
                              <option value="DC">District of Columbia</option>
                              <option value="FL">Florida</option>
                              <option value="GA">Georgia</option>
                              <option value="HI">Hawaii</option>
                              <option value="ID">Idaho</option>
                              <option value="IL">Illinois</option>
                              <option value="IN">Indiana</option>
                              <option value="IA">Iowa</option>
                              <option value="KS">Kansas</option>
                              <option value="KY">Kentucky</option>
                              <option value="LA">Louisiana</option>
                              <option value="ME">Maine</option>
                              <option value="MD">Maryland</option>
                              <option value="MA">Massachusetts</option>
                              <option value="MI">Michigan</option>
                              <option value="MN">Minnesota</option>
                              <option value="MS">Mississippi</option>
                              <option value="MO">Missouri</option>
                              <option value="MT">Montana</option>
                              <option value="NE">Nebraska</option>
                              <option value="NV">Nevada</option>
                              <option value="NH">New Hampshire</option>
                              <option value="NJ">New Jersey</option>
                              <option value="NM">New Mexico</option>
                              <option value="NY">New York</option>
                              <option value="NC">North Carolina</option>
                              <option value="ND">North Dakota</option>
                              <option value="OH">Ohio</option>
                              <option value="OK">Oklahoma</option>
                              <option value="OR">Oregon</option>
                              <option value="PA">Pennsylvania</option>
                              <option value="RI">Rhode Island</option>
                              <option value="SC">South Carolina</option>
                              <option value="SD">South Dakota</option>
                              <option value="TN">Tennessee</option>
                              <option value="TX">Texas</option>
                              <option value="UT">Utah</option>
                              <option value="VT">Vermont</option>
                              <option value="VA">Virginia</option>
                              <option value="WA">Washington</option>
                              <option value="WV">West Virginia</option>
                              <option value="WI">Wisconsin</option>
                              <option value="WY">Wyoming</option>
                        </select>
                  </div>
                  <div class="form-group">
                        <label>Phone Number</label>
                        <input placeholder="Phone Number" class="input-control" name="phonumber" />

                        <label class="right-inline">Zip Code</label>
                        <input placeholder="ZipCode" class="input-control" name="zip" />
                  </div>

                  <div class="form-group">
                        <label>Alternate Phone Number</label>
                        <input placeholder="Phone Number" class="input-control" name="altphonumber" />
                  </div>
                  <!----second form -->

                  <div class="form-group">
                        <label>Bedrooms</label>
                        <select class="input-control" name="bedrooms">
                              <option value="0">--Select--</option>
                              <option value="0.0">0.0</option>
                              <option value="0.5">0.5</option>
                              <option value="1.0">1.0</option>
                              <option value="1.5">1.5</option>
                              <option value="2.0">2.0</option>
                              <option value="2.5">2.5</option>
                              <option value="3.0">3.0</option>
                              <option value="3.5">3.5</option>
                              <option value="4.0">4.0</option>
                              <option value="4.5">4.5</option>
                              <option value="5.0">5.0</option>
                              <option value="5.5">5.5</option>
                              <option value="6.0">6.0</option>
                              <option value="6.5">6.5</option>
                              <option value="7.0">7.0</option>
                              <option value="7+">7+</option>
                        </select>
                        <label class="right-inline">Bathrooms</label>
                        <select class="input-control" name="bathrooms">
                              <option value="0">--Select--</option>
                              <option value="0.0">0.0</option>
                              <option value="0.5">0.5</option>
                              <option value="1.0">1.0</option>
                              <option value="1.5">1.5</option>
                              <option value="2.0">2.0</option>
                              <option value="2.5">2.5</option>
                              <option value="3.0">3.0</option>
                              <option value="3.5">3.5</option>
                              <option value="4.0">4.0</option>
                              <option value="4.5">4.5</option>
                              <option value="5.0">5.0</option>
                              <option value="5.5">5.5</option>
                              <option value="6.0">6.0</option>
                              <option value="6.5">6.5</option>
                              <option value="7.0">7.0</option>
                              <option value="7+">7+</option>
                        </select>
                  </div>

<!--
                  <div class="form-group">
                        <label for="">Listed with an Agent?</label>
                        <input  type="checkbox" name="listenagent" value="1">
                        <label for="">Is House Occupied?</label>
                        <input type="checkbox" name="statehouse"  value="1">
                  </div>
-->              
                  <div class="form-group">
                        <label>Property Type</label>
                        <select class="input-control" name="typeproper">
                              <option value="0">--Select--</option>
                              <option value="Single-Family">Single-Family</option>
                              <option value="Multi-Family">Multi-Family</option>
                              <option value="Condo">Condo</option>
                              <option value="Land">Land</option>
                              <option value="Mobile Only">Mobile Only</option>
                              <option value="Mobile w/Land">Mobile w/Land</option>
                              <option value="TownHouse">TownHouse</option>
                              <option value="Timeshare">Timeshare</option>
                              <option value="Other">Other</option>
                        </select>
                        <label class="right-inline">Asking Price (Approximate)</label>
                        <select class="input-control" name="price">
                              <option value="0">--Select--</option>
                              <option value="Below $25,000.00">Below $25,000.00</option>
                              <option value="$25,000.00 - $50,000.00">$25,000.00 - $50,000.00</option>
                              <option value="$50,000.00 - $75,000.00">$50,000.00 - $75,000.00</option>
                              <option value="$75,000.00 - $100,000.00">$75,000.00 - $100,000.00</option>
                              <option value="$100,000.00 - $125,000.00">$100,000.00 - $125,000.00</option>
                              <option value="$125,000.00 - $150,000.00">$125,000.00 - $150,000.00</option>
                              <option value="$150,000.00 - $175,000.00">$150,000.00 - $175,000.00</option>
                              <option value="$175,000.00 - $200,000.00">$175,000.00 - $200,000.00</option>
                              <option value="$200,000.00 - $225,000.00">$200,000.00 - $225,000.00</option>
                              <option value="$225,000.00 - $250,000.00">$225,000.00 - $250,000.00</option>
                              <option value="$250,000.00 - $275,000.00">$250,000.00 - $275,000.00</option>
                              <option value="$275,000.00 - $300,000.00">$275,000.00 - $300,000.00</option>
                              <option value="$300,000.00 - $325,000.00">$300,000.00 - $325,000.00</option>
                              <option value="$325,000.00 - $350,000.00">$325,000.00 - $350,000.00</option>
                              <option value="$350,000.00 - $375,000.00">$350,000.00 - $375,000.00</option>
                              <option value="$375,000.00 - $400,000.00">$375,000.00 - $400,000.00</option>
                              <option value="$400,000.00 - $425,000.00">$400,000.00 - $425,000.00</option>
                              <option value="$425,000.00 - $450,000.00">$425,000.00 - $450,000.00</option>
                              <option value="$450,000.00 - $475,000.00">$450,000.00 - $475,000.00</option>
                              <option value="$475,000.00 - $500,000.00">$475,000.00 - $500,000.00</option>
                              <option value="$500,000.00 - $525,000.00">$500,000.00 - $525,000.00</option>
                              <option value="$525,000.00 - $550,000.00">$525,000.00 - $550,000.00</option>
                              <option value="$550,000.00 - $575,000.00">$550,000.00 - $575,000.00</option>
                              <option value="$575,000.00 - $600,000.00">$575,000.00 - $600,000.00</option>
                              <option value="$600,000.00 - $625,000.00">$600,000.00 - $625,000.00</option>
                              <option value="$625,000.00 - $650,000.00">$625,000.00 - $650,000.00</option>
                              <option value="$650,000.00 - $675,000.00">$650,000.00 - $675,000.00</option>
                              <option value="$675,000.00 - $700,000.00">$675,000.00 - $700,000.00</option>
                              <option value="$700,000.00 - $725,000.00">$700,000.00 - $725,000.00</option>
                              <option value="$725,000.00 - $750,000.00">$725,000.00 - $750,000.00</option>
                              <option value="$750,000.00 - $775,000.00">$750,000.00 - $775,000.00</option>
                              <option value="$775,000.00 - $800,000.00">$775,000.00 - $800,000.00</option>
                              <option value="$800,000.00 - $825,000.00">$800,000.00 - $825,000.00</option>
                              <option value="$825,000.00 - $850,000.00">$825,000.00 - $850,000.00</option>
                              <option value="$850,000.00 - $875,000.00">$850,000.00 - $875,000.00</option>
                              <option value="$875,000.00 - $900,000.00">$875,000.00 - $900,000.00</option>
                              <option value="$900,000.00 - $925,000.00">$900,000.00 - $925,000.00</option>
                              <option value="$925,000.00 - $950,000.00">$925,000.00 - $950,000.00</option>
                              <option value="$950,000.00 - $975,000.00">$950,000.00 - $975,000.00</option>
                              <option value="$975,000.00 - $1,000,000.00">$975,000.00 - $1,000,000.00</option>
                              <option value="$1,000,000.00 - $1,025,000.00">$1,000,000.00 - $1,025,000.00</option>
                              <option value="$1,025,000.00 - $1,050,000.00">$1,025,000.00 - $1,050,000.00</option>
                              <option value="$1,050,000.00 - $1,075,000.00">$1,050,000.00 - $1,075,000.00</option>
                              <option value="$1,075,000.00 - $1,100,000.00">$1,075,000.00 - $1,100,000.00</option>
                              <option value="$1,100,000.00 - $1,125,000.00">$1,100,000.00 - $1,125,000.00</option>
                              <option value="$1,125,000.00 - $1,150,000.00">$1,125,000.00 - $1,150,000.00</option>
                              <option value="$1,150,000.00 - $1,175,000.00">$1,150,000.00 - $1,175,000.00</option>
                              <option value="$1,175,000.00 - $1,200,000.00">$1,175,000.00 - $1,200,000.00</option>
                              <option value="$1,200,000.00 - $1,225,000.00">$1,200,000.00 - $1,225,000.00</option>
                              <option value="$1,225,000.00 - $1,250,000.00">$1,225,000.00 - $1,250,000.00</option>
                              <option value="$1,250,000.00 - $1,275,000.00">$1,250,000.00 - $1,275,000.00</option>
                              <option value="$1,275,000.00 - $1,300,000.00">$1,275,000.00 - $1,300,000.00</option>
                              <option value="$1,300,000.00 - $1,325,000.00">$1,300,000.00 - $1,325,000.00</option>
                              <option value="$1,325,000.00 - $1,350,000.00">$1,325,000.00 - $1,350,000.00</option>
                              <option value="$1,350,000.00 - $1,375,000.00">$1,350,000.00 - $1,375,000.00</option>
                              <option value="$1,375,000.00 - $1,400,000.00">$1,375,000.00 - $1,400,000.00</option>
                              <option value="$1,400,000.00 - $1,425,000.00">$1,400,000.00 - $1,425,000.00</option>
                              <option value="$1,425,000.00 - $1,450,000.00">$1,425,000.00 - $1,450,000.00</option>
                              <option value="$1,450,000.00 - $1,475,000.00">$1,450,000.00 - $1,475,000.00</option>
                              <option value="$1,475,000.00 - $1,500,000.00">$1,475,000.00 - $1,500,000.00</option>
                              <option value="$1,500,000.00 - $1,525,000.00">$1,500,000.00 - $1,525,000.00</option>
                              <option value="$1,525,000.00 - $1,550,000.00">$1,525,000.00 - $1,550,000.00</option>
                              <option value="$1,550,000.00 - $1,575,000.00">$1,550,000.00 - $1,575,000.00</option>
                              <option value="$1,575,000.00 - $1,600,000.00">$1,575,000.00 - $1,600,000.00</option>
                              <option value="$1,600,000.00 - $1,625,000.00">$1,600,000.00 - $1,625,000.00</option>
                              <option value="$1,625,000.00 - $1,650,000.00">$1,625,000.00 - $1,650,000.00</option>
                              <option value="$1,650,000.00 - $1,675,000.00">$1,650,000.00 - $1,675,000.00</option>
                              <option value="$1,675,000.00 - $1,700,000.00">$1,675,000.00 - $1,700,000.00</option>
                              <option value="$1,700,000.00 - $1,725,000.00">$1,700,000.00 - $1,725,000.00</option>
                              <option value="$1,725,000.00 - $1,750,000.00">$1,725,000.00 - $1,750,000.00</option>
                              <option value="$1,750,000.00 - $1,775,000.00">$1,750,000.00 - $1,775,000.00</option>
                              <option value="$1,775,000.00 - $1,800,000.00">$1,775,000.00 - $1,800,000.00</option>
                              <option value="$1,800,000.00 - $1,825,000.00">$1,800,000.00 - $1,825,000.00</option>
                              <option value="$1,825,000.00 - $1,850,000.00">$1,825,000.00 - $1,850,000.00</option>
                              <option value="$1,850,000.00 - $1,875,000.00">$1,850,000.00 - $1,875,000.00</option>
                              <option value="$1,875,000.00 - $1,900,000.00">$1,875,000.00 - $1,900,000.00</option>
                              <option value="$1,900,000.00 - $1,925,000.00">$1,900,000.00 - $1,925,000.00</option>
                              <option value="$1,925,000.00 - $1,950,000.00">$1,925,000.00 - $1,950,000.00</option>
                              <option value="$1,950,000.00 - $1,975,000.00">$1,950,000.00 - $1,975,000.00</option>
                              <option value="$1,975,000.00 - $2,000,000.00">$1,975,000.00 - $2,000,000.00</option>
                              <option value="$2,000,000.00 - $2,025,000.00">$2,000,000.00 - $2,025,000.00</option>
                              <option value="$2,025,000.00 - $2,050,000.00">$2,025,000.00 - $2,050,000.00</option>
                              <option value="$2,050,000.00 - $2,075,000.00">$2,050,000.00 - $2,075,000.00</option>
                              <option value="$2,075,000.00 - $2,100,000.00">$2,075,000.00 - $2,100,000.00</option>
                              <option value="$2,100,000.00 - $2,125,000.00">$2,100,000.00 - $2,125,000.00</option>
                              <option value="$2,125,000.00 - $2,150,000.00">$2,125,000.00 - $2,150,000.00</option>
                              <option value="$2,150,000.00 - $2,175,000.00">$2,150,000.00 - $2,175,000.00</option>
                              <option value="$2,175,000.00 - $2,200,000.00">$2,175,000.00 - $2,200,000.00</option>
                              <option value="$2,200,000.00 - $2,225,000.00">$2,200,000.00 - $2,225,000.00</option>
                              <option value="$2,225,000.00 - $2,250,000.00">$2,225,000.00 - $2,250,000.00</option>
                              <option value="$2,250,000.00 - $2,275,000.00">$2,250,000.00 - $2,275,000.00</option>
                              <option value="$2,275,000.00 - $2,300,000.00">$2,275,000.00 - $2,300,000.00</option>
                              <option value="$2,300,000.00 - $2,325,000.00">$2,300,000.00 - $2,325,000.00</option>
                              <option value="$2,325,000.00 - $2,350,000.00">$2,325,000.00 - $2,350,000.00</option>
                              <option value="$2,350,000.00 - $2,375,000.00">$2,350,000.00 - $2,375,000.00</option>
                              <option value="$2,375,000.00 - $2,400,000.00">$2,375,000.00 - $2,400,000.00</option>
                              <option value="$2,400,000.00 - $2,425,000.00">$2,400,000.00 - $2,425,000.00</option>
                              <option value="$2,425,000.00 - $2,450,000.00">$2,425,000.00 - $2,450,000.00</option>
                              <option value="$2,450,000.00 - $2,475,000.00">$2,450,000.00 - $2,475,000.00</option>
                              <option value="$2,475,000.00 - $2,500,000.00">$2,475,000.00 - $2,500,000.00</option>
                              <option value="$2,500,000.00 - $2,525,000.00">$2,500,000.00 - $2,525,000.00</option>
                              <option value="$2,525,000.00 - $2,550,000.00">$2,525,000.00 - $2,550,000.00</option>
                              <option value="$2,550,000.00 - $2,575,000.00">$2,550,000.00 - $2,575,000.00</option>
                              <option value="$2,575,000.00 - $2,600,000.00">$2,575,000.00 - $2,600,000.00</option>
                              <option value="$2,600,000.00 - $2,625,000.00">$2,600,000.00 - $2,625,000.00</option>
                              <option value="$2,625,000.00 - $2,650,000.00">$2,625,000.00 - $2,650,000.00</option>
                              <option value="$2,650,000.00 - $2,675,000.00">$2,650,000.00 - $2,675,000.00</option>
                              <option value="$2,675,000.00 - $2,700,000.00">$2,675,000.00 - $2,700,000.00</option>
                              <option value="$2,700,000.00 - $2,725,000.00">$2,700,000.00 - $2,725,000.00</option>
                              <option value="$2,725,000.00 - $2,750,000.00">$2,725,000.00 - $2,750,000.00</option>
                              <option value="$2,750,000.00 - $2,775,000.00">$2,750,000.00 - $2,775,000.00</option>
                              <option value="$2,775,000.00 - $2,800,000.00">$2,775,000.00 - $2,800,000.00</option>
                              <option value="$2,800,000.00 - $2,825,000.00">$2,800,000.00 - $2,825,000.00</option>
                              <option value="$2,825,000.00 - $2,850,000.00">$2,825,000.00 - $2,850,000.00</option>
                              <option value="$2,850,000.00 - $2,875,000.00">$2,850,000.00 - $2,875,000.00</option>
                              <option value="$2,875,000.00 - $2,900,000.00">$2,875,000.00 - $2,900,000.00</option>
                              <option value="$2,900,000.00 - $2,925,000.00">$2,900,000.00 - $2,925,000.00</option>
                              <option value="$2,925,000.00 - $2,950,000.00">$2,925,000.00 - $2,950,000.00</option>
                              <option value="$2,950,000.00 - $2,975,000.00">$2,950,000.00 - $2,975,000.00</option>
                              <option value="$2,975,000.00 - $3,000,000.00">$2,975,000.00 - $3,000,000.00</option>
                              <option value="$3,000,000.00 - $3,025,000.00">$3,000,000.00 - $3,025,000.00</option>
                              <option value="$3,025,000.00 - $3,050,000.00">$3,025,000.00 - $3,050,000.00</option>
                              <option value="$3,050,000.00 - $3,075,000.00">$3,050,000.00 - $3,075,000.00</option>
                              <option value="$3,075,000.00 - $3,100,000.00">$3,075,000.00 - $3,100,000.00</option>
                              <option value="$3,100,000.00 - $3,125,000.00">$3,100,000.00 - $3,125,000.00</option>
                              <option value="$3,125,000.00 - $3,150,000.00">$3,125,000.00 - $3,150,000.00</option>
                              <option value="$3,150,000.00 - $3,175,000.00">$3,150,000.00 - $3,175,000.00</option>
                              <option value="$3,175,000.00 - $3,200,000.00">$3,175,000.00 - $3,200,000.00</option>
                              <option value="$3,200,000.00 - $3,225,000.00">$3,200,000.00 - $3,225,000.00</option>
                              <option value="$3,225,000.00 - $3,250,000.00">$3,225,000.00 - $3,250,000.00</option>
                              <option value="$3,250,000.00 - $3,275,000.00">$3,250,000.00 - $3,275,000.00</option>
                              <option value="$3,275,000.00 - $3,300,000.00">$3,275,000.00 - $3,300,000.00</option>
                              <option value="$3,300,000.00 - $3,325,000.00">$3,300,000.00 - $3,325,000.00</option>
                              <option value="$3,325,000.00 - $3,350,000.00">$3,325,000.00 - $3,350,000.00</option>
                              <option value="$3,350,000.00 - $3,375,000.00">$3,350,000.00 - $3,375,000.00</option>
                              <option value="$3,375,000.00 - $3,400,000.00">$3,375,000.00 - $3,400,000.00</option>
                              <option value="$3,400,000.00 - $3,425,000.00">$3,400,000.00 - $3,425,000.00</option>
                              <option value="$3,425,000.00 - $3,450,000.00">$3,425,000.00 - $3,450,000.00</option>
                              <option value="$3,450,000.00 - $3,475,000.00">$3,450,000.00 - $3,475,000.00</option>
                              <option value="$3,475,000.00 - $3,500,000.00">$3,475,000.00 - $3,500,000.00</option>
                              <option value="$3,500,000.00 - $3,525,000.00">$3,500,000.00 - $3,525,000.00</option>
                              <option value="$3,525,000.00 - $3,550,000.00">$3,525,000.00 - $3,550,000.00</option>
                              <option value="$3,550,000.00 - $3,575,000.00">$3,550,000.00 - $3,575,000.00</option>
                              <option value="$3,575,000.00 - $3,600,000.00">$3,575,000.00 - $3,600,000.00</option>
                              <option value="$3,600,000.00 - $3,625,000.00">$3,600,000.00 - $3,625,000.00</option>
                              <option value="$3,625,000.00 - $3,650,000.00">$3,625,000.00 - $3,650,000.00</option>
                              <option value="$3,650,000.00 - $3,675,000.00">$3,650,000.00 - $3,675,000.00</option>
                              <option value="$3,675,000.00 - $3,700,000.00">$3,675,000.00 - $3,700,000.00</option>
                              <option value="$3,700,000.00 - $3,725,000.00">$3,700,000.00 - $3,725,000.00</option>
                              <option value="$3,725,000.00 - $3,750,000.00">$3,725,000.00 - $3,750,000.00</option>
                              <option value="$3,750,000.00 - $3,775,000.00">$3,750,000.00 - $3,775,000.00</option>
                              <option value="$3,775,000.00 - $3,800,000.00">$3,775,000.00 - $3,800,000.00</option>
                              <option value="$3,800,000.00 - $3,825,000.00">$3,800,000.00 - $3,825,000.00</option>
                              <option value="$3,825,000.00 - $3,850,000.00">$3,825,000.00 - $3,850,000.00</option>
                              <option value="$3,850,000.00 - $3,875,000.00">$3,850,000.00 - $3,875,000.00</option>
                              <option value="$3,875,000.00 - $3,900,000.00">$3,875,000.00 - $3,900,000.00</option>
                              <option value="$3,900,000.00 - $3,925,000.00">$3,900,000.00 - $3,925,000.00</option>
                              <option value="$3,925,000.00 - $3,950,000.00">$3,925,000.00 - $3,950,000.00</option>
                              <option value="$3,950,000.00 - $3,975,000.00">$3,950,000.00 - $3,975,000.00</option>
                              <option value="$3,975,000.00 - $4,000,000.00">$3,975,000.00 - $4,000,000.00</option>
                              <option value="$4,000,000.00 - $4,025,000.00">$4,000,000.00 - $4,025,000.00</option>
                              <option value="$4,025,000.00 - $4,050,000.00">$4,025,000.00 - $4,050,000.00</option>
                              <option value="$4,050,000.00 - $4,075,000.00">$4,050,000.00 - $4,075,000.00</option>
                              <option value="$4,075,000.00 - $4,100,000.00">$4,075,000.00 - $4,100,000.00</option>
                              <option value="$4,100,000.00 - $4,125,000.00">$4,100,000.00 - $4,125,000.00</option>
                              <option value="$4,125,000.00 - $4,150,000.00">$4,125,000.00 - $4,150,000.00</option>
                              <option value="$4,150,000.00 - $4,175,000.00">$4,150,000.00 - $4,175,000.00</option>
                              <option value="$4,175,000.00 - $4,200,000.00">$4,175,000.00 - $4,200,000.00</option>
                              <option value="$4,200,000.00 - $4,225,000.00">$4,200,000.00 - $4,225,000.00</option>
                              <option value="$4,225,000.00 - $4,250,000.00">$4,225,000.00 - $4,250,000.00</option>
                              <option value="$4,250,000.00 - $4,275,000.00">$4,250,000.00 - $4,275,000.00</option>
                              <option value="$4,275,000.00 - $4,300,000.00">$4,275,000.00 - $4,300,000.00</option>
                              <option value="$4,300,000.00 - $4,325,000.00">$4,300,000.00 - $4,325,000.00</option>
                              <option value="$4,325,000.00 - $4,350,000.00">$4,325,000.00 - $4,350,000.00</option>
                              <option value="$4,350,000.00 - $4,375,000.00">$4,350,000.00 - $4,375,000.00</option>
                              <option value="$4,375,000.00 - $4,400,000.00">$4,375,000.00 - $4,400,000.00</option>
                              <option value="$4,400,000.00 - $4,425,000.00">$4,400,000.00 - $4,425,000.00</option>
                              <option value="$4,425,000.00 - $4,450,000.00">$4,425,000.00 - $4,450,000.00</option>
                              <option value="$4,450,000.00 - $4,475,000.00">$4,450,000.00 - $4,475,000.00</option>
                              <option value="$4,475,000.00 - $4,500,000.00">$4,475,000.00 - $4,500,000.00</option>
                              <option value="$4,500,000.00 - $4,525,000.00">$4,500,000.00 - $4,525,000.00</option>
                              <option value="$4,525,000.00 - $4,550,000.00">$4,525,000.00 - $4,550,000.00</option>
                              <option value="$4,550,000.00 - $4,575,000.00">$4,550,000.00 - $4,575,000.00</option>
                              <option value="$4,575,000.00 - $4,600,000.00">$4,575,000.00 - $4,600,000.00</option>
                              <option value="$4,600,000.00 - $4,625,000.00">$4,600,000.00 - $4,625,000.00</option>
                              <option value="$4,625,000.00 - $4,650,000.00">$4,625,000.00 - $4,650,000.00</option>
                              <option value="$4,650,000.00 - $4,675,000.00">$4,650,000.00 - $4,675,000.00</option>
                              <option value="$4,675,000.00 - $4,700,000.00">$4,675,000.00 - $4,700,000.00</option>
                              <option value="$4,700,000.00 - $4,725,000.00">$4,700,000.00 - $4,725,000.00</option>
                              <option value="$4,725,000.00 - $4,750,000.00">$4,725,000.00 - $4,750,000.00</option>
                              <option value="$4,750,000.00 - $4,775,000.00">$4,750,000.00 - $4,775,000.00</option>
                              <option value="$4,775,000.00 - $4,800,000.00">$4,775,000.00 - $4,800,000.00</option>
                              <option value="$4,800,000.00 - $4,825,000.00">$4,800,000.00 - $4,825,000.00</option>
                              <option value="$4,825,000.00 - $4,850,000.00">$4,825,000.00 - $4,850,000.00</option>
                              <option value="$4,850,000.00 - $4,875,000.00">$4,850,000.00 - $4,875,000.00</option>
                              <option value="$4,875,000.00 - $4,900,000.00">$4,875,000.00 - $4,900,000.00</option>
                              <option value="$4,900,000.00 - $4,925,000.00">$4,900,000.00 - $4,925,000.00</option>
                              <option value="$4,925,000.00 - $4,950,000.00">$4,925,000.00 - $4,950,000.00</option>
                              <option value="$4,950,000.00 - $4,975,000.00">$4,950,000.00 - $4,975,000.00</option>
                              <option value="$4,975,000.00 - $5,000,000.00">$4,975,000.00 - $5,000,000.00</option>
                              <option value="Above $5,000,000.00">Above $5,000,000.00</option>
                        </select>
                  </div>

                  <div class="form-group">
                        <label>Comments</label>
                        <textarea cols="45" maxlength="500" placeholder="Your Message" rows="8" class="input-control" name="comments"></textarea>
                        <label>Reason You're Selling</label>
                        <textarea cols="45" maxlength="500" placeholder="Your Message" rows="8" class="input-control" name="selling"></textarea>
                  </div>
                  <div class="form-group">
                        <input type="submit" class="input-control" name="register2">
                  </div>

            </form>

            <?php
            include("desarrollo2.php");
            ?>

      </article>
</body>

</html>