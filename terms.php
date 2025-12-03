<?php
/**
 * terms.php — الشروط والأحكام
 * جائزة رئيس الجامعة للابتكار
 */
?>
<!doctype html>
<html lang="ar" dir="rtl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>الشروط والأحكام — جائزة رئيس الجامعة للابتكار</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@400;600;700&display=swap" rel="stylesheet">
<style>
  :root{--primary:#155e75;--radius:16px}
  *{box-sizing:border-box}
  body{margin:0;background:#f8fafc;color:#0f172a;font-family:"Noto Kufi Arabic",system-ui,sans-serif;line-height:1.9;padding-bottom:56px;}
  a{color:var(--primary);text-decoration:none}
  header{background:#fff;border-bottom:1px solid #e2e8f0;position:sticky;top:0;z-index:10}
  .container{max-width:1000px;margin-inline:auto;padding:16px 20px}
  h1{font-size:clamp(22px,4vw,34px);margin:8px 0}
  h2{color:var(--primary);margin-top:24px;font-size:20px}
  p{margin:8px 0}
  ul{margin:8px 20px 8px 0;padding:0}
  li{margin-bottom:6px}
  .card{background:#fff;border:1px solid #e2e8f0;border-radius:var(--radius);padding:20px;box-shadow:0 6px 18px rgba(2,6,23,.05)}
  /* التذييل الثابت */
  .bottom-footer{
    width:100%;
    border-top:1px solid #e2e8f0;
    background:#fff;
    position:fixed;
    bottom:0;right:0;left:0;
    z-index:9999;
    padding:8px 0;
  }
  .footer-container{
    max-width:1100px;margin:auto;padding:0 16px;
    display:flex;justify-content:space-between;align-items:center;
    font-family:"Noto Kufi Arabic",sans-serif;font-size:14px;color:#0f172a;
  }
  .footer-left a{
    color:#155e75;text-decoration:none;margin:0 4px;
  }
  .footer-left a:hover{text-decoration:underline;}
  .footer-left span{color:#155e75;opacity:0.6;margin:0 4px;}
  @media(max-width:640px){
    .footer-container{flex-direction:column;gap:4px;text-align:center;}
  }
</style>
</head>
<body>

<header>
  <div class="container" style="display:flex;justify-content:space-between;align-items:center;gap:12px">
    <a href="index.php" class="btn" style="text-decoration:none;color:var(--primary);font-weight:600">← العودة للرئيسية</a>
    <strong>جائزة رئيس الجامعة للابتكار — الشروط والأحكام</strong>
  </div>
</header>

<main class="section">
  <div class="container">
    <div class="card">
      <h1>الشروط والأحكام</h1>
      <p>
        تهدف جائزة رئيس الجامعة للابتكار إلى دعم مشاريع التخرج والمبادرات الطلابية ذات الأثر المجتمعي والاقتصادي، 
        وتعزيز ثقافة الابتكار وريادة الأعمال في جامعة التقنية والعلوم التطبيقية.
      </p>

      <h2>١. أهلية المشاركة</h2>
      <ul>
        <li>أن يكون المتقدّم أو الفريق من طلبة جامعة التقنية والعلوم التطبيقية أو خريجيها خلال العام الأكاديمي الحالي.</li>
        <li>أن يكون المشروع ضمن أحد المجالات والمحاور المحددة في دليل الجائزة.</li>
        <li>أن لا يكون المشروع قد حصل على جائزة مماثلة من جهة أخرى قبل التقديم.</li>
      </ul>

      <h2>٢. آلية التقديم</h2>
      <ul>
        <li>يتم التقديم إلكترونيًا عبر منصة الجائزة خلال فترة التسجيل المحددة.</li>
        <li>يجب تعبئة جميع البيانات المطلوبة بشكل دقيق وواضح.</li>
        <li>يحق للفريق تعديل بياناته قبل إغلاق باب التقديم.</li>
      </ul>

      <h2>٣. حقوق الملكية الفكرية</h2>
      <ul>
        <li>تبقى حقوق الملكية الفكرية للمشاركين، مع احتفاظ الجامعة بحق استخدام المعلومات لأغراض التقييم والتوثيق الأكاديمي.</li>
        <li>يجب على الفريق مراعاة حقوق الآخرين وعدم انتهاك براءات أو علامات تجارية قائمة.</li>
      </ul>

      <h2>٤. عملية التحكيم</h2>
      <ul>
        <li>تتم عملية التحكيم من قبل لجنة مختصة وفق معايير الابتكار، الجدوى، والتأثير المجتمعي.</li>
        <li>قرارات اللجنة نهائية وغير قابلة للطعن.</li>
      </ul>

      <h2>٥. الجوائز والدعم</h2>
      <ul>
        <li>تُمنح الجوائز المالية والعينية للمراكز الأولى وفق فئات الجائزة المعلنة.</li>
        <li>يُتاح للمشاريع الفائزة فرصة الانضمام لبرامج الاحتضان والمسرعات الجامعية.</li>
      </ul>

      <h2>٦. أحكام عامة</h2>
      <ul>
        <li>تحتفظ إدارة الجائزة بحق تعديل أو تحديث هذه الشروط في أي وقت.</li>
        <li>يعد تقديم الطلب موافقة ضمنية على جميع الشروط والأحكام.</li>
      </ul>
    </div>
  </div>
</main>

<!-- ✅ التذييل الثابت المطابق لباقي الصفحات -->
<footer class="bottom-footer">
  <div class="footer-container">
    <div class="footer-right">© 2025 جائزة رئيس الجامعة للابتكار</div>
    <div class="footer-left">
      <a href="terms.php">الشروط والأحكام</a>
      <span>·</span>
      <a href="guide.php">دليل المشاركين</a>
    </div>
  </div>
</footer>

</body>
</html>
