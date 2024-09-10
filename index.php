<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restaurant Reservation Form</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

  <?php
if (isset($_POST['signup'])) {
  $first_name = $_POST['first-name'];
  $last_name = $_POST['last-name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $reservation_date = $_POST['reservation-date'];
  $reservation_time = $_POST['reservation-time'];
  $people = $_POST['people'];
  $notes = $_POST['notes'];

//   echo "Thank you for your reservation. Your reservation details are as follows:";
//   echo "<br>";
//   echo "Name: " . $first_name . " " . $last_name;
//   echo "<br>";
//   echo "Email: " . $email;
//   echo "<br>";
//   echo "Phone: " . $phone;
//   echo "<br>";
//   echo "Reservation Date: " . $reservation_date;
//   echo "<br>";
//   echo "Reservation Time: " . $reservation_time;
//   echo "<br>";
//   echo "Number of People: " . $people;
//   echo "<br>";
//   echo "Notes: " . $notes;
if (empty($first_name)){
  $errName = "Name is required";
}elseif (strlen($first_name) < 3){
  $errName = "Very short name";
}elseif (!preg_match("/^[a-zA-Z-' ]*$/",$first_name)){
  $errName = "Only letters and white space allowed";
}else{
    $crrName=$first_name;
}
if (empty($last_name)){
  $lrrName = "Last name is required";
}elseif (strlen($last_name) < 2){
  $lrrName = "Very short name";
}elseif (!preg_match("/^[a-zA-Z-' ]*$/",$last_name)){
  $lrrName = "Only letters and white space allowed";
}else{
    $crrLastName=$last_name;
}

if (empty($email)){
  $errEmail = "Email is required";
}else{
    $crrEmail=$email;
} 
if (empty($phone)){
  $errPhone = "Phone is required";
}else{
    $crrPhone=$phone;
}


if (empty($reservation_date)){
  $errDate = "Reservation date is required";
}else{
    $crrDate=$reservation_date;
}
if (empty($reservation_time)){
  $errTime = "Reservation time is required";
}else{
    $crrTime=$reservation_time;
}

if (empty($people)){
  $errPeople = "Number of people is required";
}else{
    $crrPeople=$people;
}

if (empty($notes)){
  $errNotes = "Notes are required";
}else{
    $crrNotes=$notes;
}
if (isset($crrName) && isset($crrLastName) && isset($crrEmail) && isset($crrPhone) && isset($crrDate) && isset($crrTime) && isset($crrPeople) && isset($crrNotes)){
  $first_name =$last_name = $email = $phone = $reservation_date = $reservation_time = $people = $notes = null;
}

}
?>
    <div class="form-container">
      <form
        class="reservation-form"
       action=""
        method="post">
        <h2>Restaurant Reservation Form</h2>
         <br>
        <div class="date-time">
          <div>
         
            <label for="email">Name</label>
            <br>
            <span style="color:red"> <?= $errName ?? null ?></span>
            <input
            type="text"
            id="first-name"
            placeholder="First"
            name="first-name"
            value="<?= $first_name ?? null ?>" />
          </div>

          <div>
            <label for="phone">Last</label>
            <br>
            <span style="color:red"> <?= $lrrName ?? null ?></span>
            <input
            type="text"
            id="last-name"
            placeholder="Last"
            name="last-name"
            value="<?= $last_name ?? null ?>" />
          </div>
        </div>

        <div class="date-time">
          <div>
            <label for="email">Email</label>
            <br>
            <span style="color:red"> <?= $errEmail ?? null ?></span>
            <input
              type="email"
              id="email"
              placeholder="Email"
              name="email"
              value="<?= $email ?? null ?>" />
          </div>

          <div>
            <label for="phone">Phone</label>
            <br>
            <span style="color:red"> <?= $errPhone ?? null ?></span>
            <input
              type="tel"
              id="phone"
              placeholder="### ### ####"
              name="phone"
              value="<?= $phone ?? null ?>" />
          </div>
        </div>

        <div class="date-time">
          <div>
            <label for="reservation-date">Reservation Date</label>
            <br>
            <span style="color:red"> <?= $errDate ?? null ?></span>
            <input
              type="date"
              id="reservation-date"
              name="reservation-date"
              value="<?= $reservation_date ?? null ?>" />
          </div>

          <div>
            <label for="reservation-time">Reservation Time</label>
            <br>
            <span style="color:red"> <?= $errTime ?? null ?></span>
            <input
              type="time"
              id="reservation-time"
              name="reservation-time"
              value="<?= $reservation_time ?? null ?>" />
          </div>
        </div>

        <label for="people">How many persons will you be with?</label>
        <span style="color:red" > <?= $errPeople ?? null ?></span>
        <input class="people"
          type="number"
          id="people"
          min="1"
          placeholder="Number of persons"
          name="people"
          value ="<?= $people ?? null ?>" />

        <label for="notes">Notes</label>

        <span style="color:red"> <?= $errNotes ?? null ?></span>
        <textarea
        class="people"
          id="notes"
          rows="4"
          placeholder="Share your Notes"
          name="notes"><?= $notes ?? null ?></textarea>

        <button class="people" type="submit" name="signup">Send</button>
      </form>
    </div>

    <div>
    <?php
  if (isset($crrName) && isset($crrLastName) && isset($crrEmail) && isset($crrPhone) && isset($crrDate) && isset($crrTime) && isset($crrPeople) && isset($crrNotes)){
    echo "Thank you for your reservation. Your reservation details are as follows:";
  echo "<br>";
  echo "Name: " . $crrName . " " . $crrLastName;
  echo "<br>";
  echo "Email: " . $crrEmail;  
  echo "<br>";
  echo "Phone: " . $crrPhone;  
  echo "<br>";  
  echo "Reservation Date: " . $crrDate;    
  echo "<br>";
  echo "Reservation Time: " . $crrTime;
  echo "<br>";
  echo "Number of People: " . $crrPeople;
  echo "<br>";
  echo "Notes: " . $crrNotes;
  }
?>
    </div>
  </body>
</html>

