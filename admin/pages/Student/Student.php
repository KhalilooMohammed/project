<!DOCTYPE html>
<html lang="ar">

<head> 

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../../assets/img/favicon.png" rel="icon">
  <link href="../../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../../assets/css/style.css" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>لوحة التحكم</title>
  <!-- تضمين Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- تضمين CSS الخاص -->
  <link href="styles.css" rel="stylesheet">
  <style>


.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-control {
  display: block;
  width: 100%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.btn-outline-success {
  color: #fff;
  background-color: #198754;
  border-color: #198754;
}

.btn-outline-success:hover {
  color: #fff;
  background-color: #177a4a;
  border-color: #177a4a;
}

.btn-outline-secondary {
  color: #495057;
  background-color: #fff;
  border-color: #ced4da;
}

.btn-outline-secondary:hover {
  color: #495057;
  background-color: #e6e6e6;
  border-color: #ced4da;
}




















  body {
  direction: rtl;
  font-family: 'Arial', sans-serif;
}

.sidebar {
  position: fixed;
  top: 56px; /* ارتفاع الناف بار العلوي */
  right: 0;
  bottom: 0;
  width: 250px;
  padding-top: 15px;
  background-color: #343a40; /* لون الخلفية */
  transition: width 0.3s; /* تأثير التحول */
}

.sidebar.collapse {
  width: 56px; /* العرض عند الطي */
}

.sidebar .nav-link {
  color: #fff; /* لون النص */
}

/* استبدال هامش المحتوى بعد الناف بار الجانبي */
.content {
  padding: 20px;
}

/* تعديل هامش المحتوى عند إظهار وإخفاء الناف بار الجانبي */
@media (min-width: 992px) {
  .content {
    margin-right: 250px;
  }
}
@media (max-width: 992px) {
  .content {
    margin-right: 0;
  }
}









   .navbar-toggler {
      order: 1;
    }

    .navbar-brand {
      order: 2;
    }

    .sidebar {
      position: fixed;
      top: 56px;
      right: 0;
      bottom: 0;
      width: 250px;
      height: 100%;
      padding-top: 15px;
      background-color: #343a40;
      transition: width 0.5s ease-in-out, right 0.5s ease-in-out; /* تحديد تأثير التحول */
      overflow-x: hidden;
    }

    .sidebar.collapse {
      width: 56px;
      right: -250px;
    }

    .sidebar.collapse.show {
      right: 0;
    }

    .content {
      margin-right: 250px;
      padding: 20px;
      padding-top: 96px; /* ارتفاع الناف بار العلوي */
      transition: margin-right 0.5s ease-in-out; /* تحديد تأثير التحول */
    }

    /* تعديل موقع المحتوى عند الانكماش */
    @media (max-width: 992px) {
      .content {
        margin-right: 0;
      }
    }






 
    .rrrt {
    position: fixed;
    bottom: 0;
    padding-bottom: 21px;
}



    #sidebarCollapse > hr {
    margin: 1rem 0;
    color: #fff;
    border: 0;
    border-top: var(--bs-border-width) solid;
    opacity: .25;
}

























  </style>
</head>

<body>
  
<?php include '../../../navbar/admin/navbar.php'; ?>





  <!-- المحتوى الرئيسي -->
  <div class="content" >
    <div class=" container-fluid" >
   
<div class="pagetitle">
  <h1>لوحه الطلاب</h1>
 
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row " >

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">

           

         
            <div class="card-body">
              <h5 class="card-title"> </h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6> عدد الطلاب <span> | </span> 34688</h6>

                </div>
              </div>
            </div>
          

          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">

      <a href="Student2.php">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="ps-3">
                  <h6>الطلاب المتعثرين</h6>

                </div>
              </div>
            </div>
            </a>



          </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-xl-12">

          <div align="right" dir="rtl" class="card info-card customers-card">

         
            <div class="card-body">
              <h5 class="card-title"></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>وكلاء الجامعة</h6>

                </div>
              </div>

            </div>


          </div>

        </div><!-- End Customers Card -->
        </div>
      </div>
    </div>
    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
          
        


        <div class="card">
            <div class="card-body">
              <h5 class="card-title">معدلات الطلاب</h5>

              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels: ['90+', '80+', '70+', '60+', '50+', '<50'],
                      datasets: [{
                        label: 'المجموع',
                        data: [65, 59, 80, 81, 56, 55],
                        backgroundColor: [
                         
                    
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 99, 132, 0.2)'
                    
                    
                        ],
                        borderColor: [

                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(255, 205, 86)',
                          'rgb(255, 205, 86)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 99, 132)'



                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>
          </div>







        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
          




          <div class="card">
            <div class="card-body">
              <h5 class="card-title">معدلات الطلاب</h5>

              <!-- Bar Chart -->
              <canvas id="barChart2" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart2'), {
                    type: 'bar',
                    data: {
                      labels: ['90+', '80+', '70+', '60+', '50+', '<50'],
                      datasets: [{
                        label: 'المجموع',
                        data: [65, 59, 80, 81, 56, 55],
                        backgroundColor: [
                         
                    
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(255, 205, 86, 0.2)',
                          'rgba(255, 159, 64, 0.2)',
                          'rgba(255, 99, 132, 0.2)'
                    
                    
                        ],
                        borderColor: [

                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(255, 205, 86)',
                          'rgb(255, 205, 86)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 99, 132)'



                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>
          </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-xl-12">

          





          <!-- Website Traffic -->
          <div class="card">
 

            <div class="card-body pb-0">
              <h5 class="card-title">عدد الطلاب</h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'المجموع',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [
                        
                        
                        {
                          value: 484,
                          name: 'الطلاب'
                        },
                        {
                          value: 300,
                          name: 'الطالبات'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->



















        </div><!-- End Customers Card -->
               



        




    


        <!-- Recent Sales -->
        <div class="col-12">
          <div  class="card recent-sales overflow-auto">



            <div class="card-body" >
              <h5 class="card-title">جدول البيانات</h5>
              <p>هنا تعرض البيانات.</p>

              <!-- Table with stripped rows -->
              <?php include '../../../db/data.php'; ?>
              <!-- End Table with stripped rows -->

            </div>

          </div>
        </div><!-- End Recent Sales -->


















    </div><!-- End Right side columns -->

  </div>
</section>

    </div>
  </div>
<script>
// تحديد الناف بار الجانبي والمحتوى
const sidebar = document.querySelector('.sidebar');
const content = document.querySelector('.content');

// السماح بفتح وإغلاق الناف بار الجانبي عبر الناف العلوي
document.querySelector('.navbar-toggler').addEventListener('click', function() {
  sidebar.classList.toggle('collapse');
  if (sidebar.classList.contains('collapse')) {
    // إذا تمت إخفاء الناف بار الجانبي، زيادة هامش المحتوى
    content.style.marginRight = '0';
  } else {
    // إذا تمت إظهاره، تقليل هامش المحتوى
    content.style.marginRight = sidebar.offsetWidth + 'px';
  }
});

// ضبط هامش المحتوى عند التحميل الأولي
if (sidebar.classList.contains('collapse')) {
  content.style.marginRight = '0';
} else {
  content.style.marginRight = sidebar.offsetWidth + 'px';
}

// ضبط هامش المحتوى عند تغيير حجم الناف بار الجانبي
window.addEventListener('resize', function() {
  if (!sidebar.classList.contains('collapse')) {
    content.style.marginRight = sidebar.offsetWidth + 'px';
  }
});
</script>

  <!-- تضمين Bootstrap السكريبت -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
   <!-- Vendor JS Files -->
   <script src="../../../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../../../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../../../assets/vendor/quill/quill.min.js"></script>
  <script src="../../../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../../assets/js/main.js"></script>
</body>

</html>
