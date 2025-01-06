<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.svg" type="image/x-icon">
    <title>Excuse Notes Generator</title>
    <link rel="stylesheet" href="assets/styles.css">
  </head>

  <body>
    <div class="container">
      <header>
        <img src="./assets/favicon.svg" alt="Excuse Generator Logo by &copy;OpenMoji" class="logo">
        <h1>Excuse Notes Generator</h1>
      </header>
      <form action="excuse.php" method="POST" class="excuse-form">
        <div class="form-group">
          <label for="child_name">Child's Name:</label>
          <input type="text" id="child_name" name="child_name" required
                 placeholder="Enter your child's name">
        </div>

        <div class="form-group">
          <label for="gender">Child's Gender:</label>
          <select id="gender" name="gender" required>
            <option value="" disabled selected hidden>Select Gender</option>
            <option value="girl">Girl</option>
            <option value="boy">Boy</option>
          </select>
        </div>

        <div class="form-group">
          <label for="teacher_name">Teacher's Name:</label>
          <input type="text" id="teacher_name" name="teacher_name" required
                 placeholder="Enter teacher's name">
        </div>

        <fieldset>
          <legend>Reason for Absence:</legend>
          <div class="radio-group">
            <div class="radio-container">
              <input type="radio" id="illness" name="reason" value="illness" required>
              <label for="illness" class="radio-label">Illness</label>
            </div>

            <div class="radio-container">
              <input type="radio" id="pet" name="reason" value="pet" required>
              <label for="pet" class="radio-label">Death of a Pet</label>
            </div>

            <div class="radio-container">
              <input type="radio" id="activity" name="reason" value="activity" required>
              <label for="activity" class="radio-label">Extra-Curricular Activity</label>
            </div>

            <div class="radio-container">
              <input type="radio" id="other" name="reason" value="other" required>
              <label for="other" class="radio-label">Other</label>
            </div>
          </div>
        </fieldset>

        <button type="submit" class="btn-primary">Generate Excuse</button>
      </form>
    </div>
  </body>

</html>