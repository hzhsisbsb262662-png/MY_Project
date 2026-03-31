<?php
include './inc/db.php';
include './inc/form.php';
include './inc/db_close.php';
include './inc/select.php';

?>
<?php  include_once './parts/header.php'; ?>
 


<!DOCTYPE html>
<html lang="en" dir="rtl">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="container">

  <div class="center-section">
    
    <img src="images/khalid.png" class="img-fluid mb-3">

    <h1 class="display-4 fw-normal">اربح مع خالد</h1>
    <p class="lead fw-normal">باقي على فتح التسجيل</p>
    <h3 id="countdown"></h3>

    <a class="btn btn-outline-secondary mb-3" href="#">
      للسحب على ربح نسخة مجانية من برنامج
    </a>

    <ul class="list-group list-group-flush">
      <li class="list-group-item">تابع البث المباشر على فيسبوك بالتاريخ المذكور اعلاه</li>
      <li class="list-group-item">ساقوم ببث لمده ساعة عباره عن اسئلة واجوبه حره للجميع</li>
      <li class="list-group-item">خلال فترة الساعه سيتم فتح صفحه التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك</li>
      <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
      <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
    </ul>

  </div>

</div>

    




<div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form  action="project.php" <?php $_SERVER['PHP_SELF']?> method="POST">
    <h3>الرجاء ادخل معلوماتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>">
    <div id="emailHelp" class="form-text erorr"><?php echo $errors['firstNameError'] ?></div> 
  </div>
 
<div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>">
    <div id="emailHelp" class="form-text erorr"><?php echo $errors['lastNameError'] ?></div>
  </div>
  
 
<div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
    <div id="emailHelp" class="form-text erorr"><?php echo $errors['emailError'] ?></div>
  </div>



  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>
</div>
  </div>



</div>

<div class="container my-5">
      <div class="loder-con">
    <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>
    <h2 class="mb-4 text-center">المستخدمون المسجلون</h2>

  
<div class="d-grid gap-2 col-6 mx-auto">

<button  id="winner" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="model">
  اختيارالرابح
</button>
</div>

<div class="modal fade" id="model" tabindex="-1" aria-labelledby="modelLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modelLabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                        <?php foreach($users as $user): ?>
        <h1 class=" display-1 text-center modal-title" id="modelLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']); ?></h1>

                                            <?php endforeach; ?>

      </div>
      
    </div>
  </div>
</div>






    <div id="cards">
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">
                            <strong>البريد الإلكتروني:</strong> <?php echo htmlspecialchars($user['email']); ?>
                        </p>
                    </div>
                </div>
            </div>
    </div>
</div>


<footer class="site-footer mt-5">
  <div class="container">
    <div class="row text-center text-md-start align-items-center">

      <div class="col-md-6 mb-3 mb-md-0">
        <h5 class="fw-bold">اربح مع خالد</h5>
        <p class="small mb-0">
          &copy; <?php echo date("Y"); ?> خالد وليد هوساوي. جميع الحقوق محفوظة.
        </p>
      </div>

      <div class="col-md-6 text-md-end">
        <a href="#" class="footer-link">سياسة الخصوصية</a>
        <a href="#" class="footer-link">اتصل بنا</a>
      </div>

    </div>
  </div>
</footer>


<style>
.site-footer {
    background: linear-gradient(135deg, #1e1e1e, #2c2c2c);
    color: #fff;
    padding: 30px 0;
    border-top: 3px solid #0d6efd;
}

.site-footer h5 {
    margin-bottom: 10px;
}

.footer-link {
    color: #ccc;
    margin-left: 15px;
    text-decoration: none;
    transition: 0.3s;
}

.footer-link:hover {
    color: #0d6efd;
}

</style>



<?php  include_once './parts/foter.php'; ?>
