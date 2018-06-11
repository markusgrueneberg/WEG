<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title></title>
  </head>
  <body>
     <form method="POST" action="submit.php">
     <strong>Vorname:</strong>
     <input type="text" name="firstname" />
     <br />
     <strong>Nachname:</strong>
     <input type="text" name="surname" />
     <br /> 
     <strong>Tags - Elektronik:</strong>
     <input type="checkbox" name="tags[]"  value="Elektronik"/>
     <br /> 
     <strong>Tags - Obst:</strong>
     <input type="checkbox" name="tags[]"  value="Obst"/>
     <br />            
     <input type="submit" />    
     </form>
  </body>
</html>
