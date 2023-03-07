# Some description:

## Structure of all files:
- index.php
- etatcivil.php
- etatcivil.txt
- formation.php
- formation.txt
- experience.php
- experience.txt
- hobbies.php
- hobbies.txt
- myresume.php
- connection.php

index.php is the main file and contains links to the other sections. etatcivil.php, formation.php, experience.php, and hobbies.php are the files that contain the forms for each section. myresume.php is the final page that displays the user's resume. connection.php contains the login functionality.

The text files (etatcivil.txt, formation.txt, experience.txt, and hobbies.txt) are used to store the user's data.

we can make time real live change by adding this scripte:
  <script>
    setInterval(function() {
        var date = new Date();
        var dateString = date.toLocaleString();
        document.getElementById("date").innerHTML = "Date/hour: " + dateString;
    }, 1000); // Update the date every second
    </script>


    