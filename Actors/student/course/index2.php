<!DOCTYPE html>
<html lang="en">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-nlTQm9jZ9raA8qk4Mk4pGvS2Zz5cDgKPzFDLW1WWCJo=" crossorigin="anonymous"></script>

<!-- Mirrored from www.urbanui.com/melody/template/pages/layout/rtl-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:05:55 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Melody Admin</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">


  <?php
    $navbar_path = "tools/css.php";
for ($i = 0; $i < 9; $i++) {
    $path = str_repeat("../", $i) . $navbar_path;
    if (file_exists($path)) {
      include $path;
        break;
    }
}


    ?>

  <style>
    <?php
    $navbar_path = "tools/tools.php";
for ($i = 0; $i < 9; $i++) {
    $path = str_repeat("../", $i) . $navbar_path;
    if (file_exists($path)) {
      include $path;
        break;
    }
}
    download_css();
    print_css();
    ?>

.table thead th, .jsgrid .jsgrid-table thead th {
    border-top: 0;
    border-bottom-width: 1px;
    font-weight: bold;
    font-size: 1rem;
    background-color: #392e6e;
    color: #fff;
}
  </style>
</head>
<body class="rtl">
  <div class="container-scroller">


<?php 
$navbar_path = "Navbar/rtl/nav.php";
for ($i = 0; $i < 9; $i++) {
    $path = str_repeat("../", $i) . $navbar_path;
    if (file_exists($path)) {
      include $path;
        break;
    }
}
?>


      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="raw">
          <div class="col-md-12 grid-margin ">
            <div class="card">
                <div class="card-body">               
                  <div class="template-demo">
                    <nav>
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                         الصفحة الرئيسية 
                      </li>
                      </ol>
                    </nav>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page-header">
            <h3 class="page-title">
النتائج
المتوقعه من التنبؤ
          </h3>
          </div>

          <div class="row">
            







        <!-- Sales Card -->
        <div class="col-xxl-12 col-md-12">
  <div class="card info-card sales-card">
    <div class="card-body">
<h2>التنبؤ بدرجه الماده</h2>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">اسم المقرر</th>
              <th scope="col">الساعات</th>
              <th scope="col">الدرجة</th>
              <th scope="col">اللون</th>
            </tr>
          </thead>
          <tbody>
          <?php
           if(isset($_SESSION['Account_ID'])) {
                        // استعلام SQL لاسترداد بيانات معينة من الجدول
                        $sql = "SELECT a.Account_ID, c.subject_code, c.Semester_Number, s.subject_name, s.credit_hours, CONCAT(a2.First_Name, ' ', a2.Last_Name) AS Faculty_Name
                            FROM current_semester c
                            INNER JOIN accounts a ON a.Account_ID = c.student_id 
                            INNER JOIN accounts a2 ON a2.Account_ID = c.Faculty_member_ID
                            INNER JOIN subjects s ON c.subject_code = s.subject_code
                            WHERE c.student_id = {$_SESSION['Account_ID']}
                            AND c.Semester_Number = (SELECT MAX(Semester_Number) FROM current_semester WHERE student_id = {$_SESSION['Account_ID']})
                            ORDER BY c.Semester_Number DESC;";
                        $result = $conn->query($sql);

                        // التحقق من وجود بيانات للعرض
                        if ($result->num_rows > 0) {
                            // عرض البيانات
                            $sql2 = "SELECT * from academic_record where subject_code = $row[subject_code] and  student_id = {$_SESSION['Account_ID']} ";
                          $result2 = $conn->query($sql2);
                          $row2 = $result2->fetch_assoc();
                            while ($row = $result->fetch_assoc()) {
                              
                                // عرض الصفوف لكل بيان في الجدول
                                echo '<tr>';
                                echo '<td>' . $row["subject_code"] . '</td>';
                                echo '<td>' . $row["subject_name"] . '</td>';
                                echo '<td>' . $row["credit_hours"] . '</td>';
                                echo "<td>";
                                echo "<div class='progress'>";
                                if ($row["grade"]  < 50) {
                                    echo "<div class='progress-bar bg-danger' role='progressbar' style='width:  " . $row["grade"] . "%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'></div>";
                                } else if($row["grade"]  < 70){
                                    echo "<div class='progress-bar bg-warning' role='progressbar' style='width:  " . $row["grade"] . "%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'></div>";
                                }else if($row["grade"]  < 100){
                                  echo "<div class='progress-bar bg-success' role='progressbar' style='width:  " . $row["grade"] . "%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'></div>";
                                }else{
                                  echo "<div class='progress-bar bg-primary' role='progressbar' style='width:  " . $row["grade"] . "%' aria-valuenow='20' aria-valuemin='0' aria-valuemax='100'></div>";
                            
                                }
                                echo "</div>";
                                echo "</td>";
                                echo '</tr>';
                            }
                        } else {
                            // إذا لم يتم العثور على بيانات
                            echo '<tr><td colspan="4">لا يوجد بيانات لعرضها</td></tr>';
                        }
                      }else {
                          echo"
                          <div class='alert alert-danger'>
                          تنبيه
                          <hr>
                              <p>
                        هناك مشكله في السشن
                              </p>
                        </div>";
                        }
                        ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- End Sales Card -->


<h1></h1><h1></h1>



 


<h1></h1>
<h1></h1>

        <!-- Sales Card -->
        <div class="col-xxl-12 col-md-12">
  <div class="card info-card sales-card">
    <div class="card-body">
      <h2>التنبؤ بالتخرج</h2>
      <hr>
 <h5>
التقدير المتوقع الحصول عليه  </h5><br>
 <h5>
B+
 </h5>
 <h5>
اللون 
</h5>
 <!-- دائره بداخلها الدرجه b+ والدائره فيها اللون -->
 <!--



 من
 student_gpa
 
	Semster_Number 

مثلا 
451
الفصل الاول 
452 الثاني
-->
    </div>
  </div>
</div>
<!-- End Sales Card -->


          </div>
       
       
       


        </div>
        <!-- content-wrapper ends -->

        
<?php
$navbar_path = "footer/Footer.php";
for ($i = 0; $i < 9; $i++) {
    $path = str_repeat("../", $i) . $navbar_path;
    if (file_exists($path)) {
      include $path;
        break;
    }
}
?>



        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

</body>















<?php
 download_js();
 print_js();
?>



  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- تضمين Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-nlTQm9jZ9raA8qk4Mk4pGvS2Zz5cDgKPzFDLW1WWCJo=" crossorigin="anonymous"></script>
  <!-- تضمين Bootstrap السكريبت -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<?php
    $navbar_path = "tools/js.php";
for ($i = 0; $i < 9; $i++) {
    $path = str_repeat("../", $i) . $navbar_path;
    if (file_exists($path)) {
      include $path;
        break;
    }
}


?>






<!-- Mirrored from www.urbanui.com/melody/template/pages/layout/rtl-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:05:55 GMT -->
</html>