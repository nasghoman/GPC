<?php
/**
 * guide.php — دليل المشاركين
 * جائزة رئيس الجامعة للابتكار
 */
?>
<!doctype html>
<html lang="ar" dir="rtl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>دليل المشاركين — جائزة رئيس الجامعة للابتكار</title>
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
  .grid-2{display:grid;grid-template-columns:1fr 1fr;gap:16px}
  .quick-actions a{display:inline-flex;align-items:center;gap:8px;border:1px solid #cbd5e1;border-radius:999px;padding:10px 16px;background:#fff;font-weight:700}
  .quick-actions a.primary{background:var(--primary);border-color:var(--primary);color:#fff}
  .muted{color:#64748b}
  .steps{counter-reset:step}
  .steps li{list-style:none;position:relative;padding-right:40px;margin:12px 0}
  .steps li::before{
    counter-increment:step;content:counter(step);
    position:absolute;right:0;top:0;
    width:28px;height:28px;display:grid;place-items:center;
    background:var(--primary);color:#fff;border-radius:50%;font-size:13px;font-weight:700;
  }
  /* التذييل الثابت (مطابق للصفحات الأخرى) */
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
  .footer-left a{color:#155e75;text-decoration:none;margin:0 4px}
  .footer-left a:hover{text-decoration:underline;}
  .footer-left span{color:#155e75;opacity:.6;margin:0 4px}
  @media(max-width:640px){.grid-2{grid-template-columns:1fr}.footer-container{flex-direction:column;gap:4px;text-align:center}}
</style>
</head>
<body>

<header>
  <div class="container" style="display:flex;justify-content:space-between;align-items:center;gap:12px">
    <a href="index.php" style="text-decoration:none;color:var(--primary);font-weight:600">← العودة للرئيسية</a>
    <strong>جائزة رئيس الجامعة للابتكار — دليل المشاركين</strong>
  </div>
</header>

<main class="section">
  <div class="container">
    <!-- بطاقة مقدمة وروابط سريعة -->
    <div class="card">
      <h1>دليل المشاركين</h1>
      <p class="muted">اتّبع الخطوات التالية لتقديم مشروعك بنجاح والتأكد من استكمال جميع المتطلبات.</p>
      <div class="quick-actions" style="margin-top:10px;display:flex;gap:10px;flex-wrap:wrap">
        <a class="primary" href="apply.php">قدّم الآن</a>
        <a href="terms.php">الشروط والأحكام</a>
        <a href="#steps">الخطوات</a>
        <a href="#requirements">المتطلبات</a>
        <a href="#tips">نصائح</a>
        <a href="#faq">الأسئلة الشائعة</a>
      </div>
    </div>

    <!-- الخطوات -->
    <section id="steps" class="card" style="margin-top:16px">
      <h2>الخطوات الأساسية للتقديم</h2>
      <ol class="steps">
        <li>اقرأ <a href="terms.php">الشروط والأحكام</a> للتأكد من أهلية مشروعك والفريق.</li>
        <li>حضّر ملخصًا تنفيذيًا واضحًا: المشكلة، الحل، التقنية، الأثر، وقابلية التطبيق.</li>
        <li>ادخل إلى <a href="apply.php">نموذج التقديم</a>، اختر عدد أعضاء الفريق (حتى 5)، وأدخل الأسماء والبيانات المطلوبة بدقة.</li>
        <li>اختر المجال والتخصص الفرعي والمحور الاستراتيجي الأنسب لمشروعك.</li>
        <li>أرسل الطلب وتأكد من حفظ <span class="muted">الرقم المرجعي</span> الذي سيظهر بعد الإرسال للمتابعة لاحقًا.</li>
      </ol>
    </section>

    <!-- المتطلبات -->
    <section id="requirements" class="card" style="margin-top:16px">
      <h2>المتطلبات</h2>
      <div class="grid-2">
        <div>
          <h3 style="margin:6px 0;color:#0f172a;font-size:18px">بيانات الفريق</h3>
          <ul>
            <li>اسم الفريق والمشرف الأكاديمي.</li>
            <li>عدد الأعضاء (١–٥) وأسماؤهم الثلاثية.</li>
            <li>بريد إلكتروني ورقم هاتف صالحان للتواصل.</li>
          </ul>
        </div>
        <div>
          <h3 style="margin:6px 0;color:#0f172a;font-size:18px">بيانات المشروع</h3>
          <ul>
            <li>عنوان مشروع دقيق وواضح.</li>
            <li>ملخص تنفيذي (لا يقل عن 80 حرفًا).</li>
            <li>اختيار المجال والتخصص الفرعي والمحور الاستراتيجي المناسب.</li>
          </ul>
        </div>
      </div>
      <p class="muted">قد تطلب اللجنة لاحقًا وثائق إضافية أو عرضًا تقديميًا عند الحاجة.</p>
    </section>

    <!-- نصائح -->
    <section id="tips" class="card" style="margin-top:16px">
      <h2>نصائح لزيادة فرص القبول</h2>
      <ul>
        <li><strong>وضوح المشكلة والسوق:</strong> حدّد شريحة المستخدمين وحجم المشكلة بدقة.</li>
        <li><strong>تميّز الحل:</strong> ما الذي يجعلك مختلفًا؟ تقنية مبتكرة؟ نموذج عمل جديد؟</li>
        <li><strong>قابلية التطبيق:</strong> وضّح الموارد والوقت والخطة للوصول لنموذج أولي.</li>
        <li><strong>الأثر:</strong> صف الفائدة الاقتصادية/المجتمعية المتوقعة وربطها بمحاور الجائزة.</li>
        <li><strong>التناسق اللغوي:</strong> اكتب ملخصًا متماسكًا وخاليًا من الأخطاء.</li>
      </ul>
    </section>

    <!-- الأسئلة الشائعة -->
    <section id="faq" class="card" style="margin-top:16px">
      <h2>الأسئلة الشائعة</h2>
      <h3 style="margin:8px 0;font-size:18px">هل المشاركة فردية أم جماعية؟</h3>
      <p>يمكن المشاركة بفريق من 1 إلى 5 أعضاء مع مشرف أكاديمي.</p>

      <h3 style="margin:8px 0;font-size:18px">هل أستطيع تعديل الطلب بعد الإرسال؟</h3>
      <p>يمكن طلب التعديل عبر التواصل مع منسقي الجائزة خلال فترة التقديم، وفق سياسات اللجنة.</p>

      <h3 style="margin:8px 0;font-size:18px">ما هي آلية التواصل بعد الإرسال؟</h3>
      <p>ستصلكم تحديثات عبر البريد والهاتف المُدخلين في الطلب عند الحاجة.</p>

      <h3 style="margin:8px 0;font-size:18px">هل هناك التزام برفع ملفات الآن؟</h3>
      <p>لا يطلب النموذج الحالي رفع ملفات. قد تطلب اللجنة لاحقًا مستندات أو عرضًا.</p>

      <div style="margin-top:10px">
        <a class="quick-actions a primary" href="apply.php" style="display:inline-flex;align-items:center;gap:8px;border:1px solid #cbd5e1;border-radius:999px;padding:10px 16px;background:#155e75;color:#fff;font-weight:700">قدّم الآن</a>
        <a class="quick-actions a" href="terms.php" style="display:inline-flex;align-items:center;gap:8px;border:1px solid #cbd5e1;border-radius:999px;padding:10px 16px;background:#fff;font-weight:700">الشروط والأحكام</a>
      </div>
    </section>
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
