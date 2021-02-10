<html>
<head> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> </head>


<body>

<table border="1bx" class="table table-dark table-striped"">
  <thead>
    <tr>
      <th scope="col">اسم المتدرب</th>
      <th scope="col">الرقم الأكاديمي</th>
      <th scope="col">الفترة</th>
      <th scope="col">البريد الألكتروني</th>
      <th scope="col">درجة الإختبار الأول</th>
      <th scope="col">درجة الإختبار الثاني</th>
      <th scope="col">درجة الإختبار الثالث</th>
      <th scope="col">الفصل التدريبي</th>
      <th scope="col">الحالة</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td> <?php $Nm= $_GET["text"]; echo $Nm;?> </td>

      <td><?php $No= $_GET["No"]; echo $No;?> </td>

      <td> <?php $T= $_GET["radio"]; echo $T;?> </td>

      <td> <?php $Ma= $_GET["email"]; echo $Ma;?> </td>

      <td> <?php $G1= $_GET["G1"]; echo $G1;?> </td>

      <td><?php $G2= $_GET["G2"]; echo $G2;?> </td>

      <td> <?php $G3= $_GET["G3"]; echo $G3;?> </td>

      <td> <?php $S= $_GET["S"]; echo $S;?> </td>

      <td><?php $St= $_GET["St"]; echo $St;?> </td>

      

   

    </tr>
  
  </tbody>
</table>





</body>




</html>






