<html>
<head> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 </head>
 
 <body dir="rtl" >
 
 



<form method="get" action="details.php" >



  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">إسم المتدرب</label>

    <input type="text"  name="text"  id="exampleInputEmail1" aria-describedby="emailHelp">
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">الرقم اﻷكاديمي</label>

    <input type="text" name="No"  >
  </div>



    <div class="form-check">
    
    <legend> الفترة </legend>
  <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault1"> صباحي  </label>
  <label class= "form-check-label"  for="flexRadioDefault1">



</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault2" checked> مسائي  </label>
  <label class="form-check-label" for="flexRadioDefault2">
 

</div>
<br>
<br>

  
  

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">البريد اﻹلكتروني</label>
    <input type="email" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">

  

  <div class="mb-3">

  <br>
  
    <label for="exampleInputPassword1" class="form-label">درجة الإختبار اﻷول</label>
    <input type="text"  name="G1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">درجة الإختبار الثاني</label>
    <input type="text"  name="G2">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >درجة الإختبار الثالث</label>
    <input type="text"  name="G3">
  </div>

<br>

  <select name="S" aria-label="Default select example">
  <option selected>الفصل التدريبي </option>
  <option value="الأول">الأول</option>
  <option value="الثاني">الثاني</option>
  <option value="الصيفي">الصيفي</option>
</select>

  <div class="mb-3 form-check">
  <legend> الحالة </legend>

    <input type="checkbox" value="حاضر" class="form-check-input" name="St">
    
    <label class="form-check-label" for="exampleCheck1"> حاضر  </label>
    <br>
    <br>
    <input type="submit" value="ارسال"  >    </input>


  </div>
</form>
</body>



</html>