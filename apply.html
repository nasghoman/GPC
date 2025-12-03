<?php
/**
 * apply.php — نموذج التقديم (حد أقصى 5 أعضاء)
 * جائزة رئيس الجامعة للابتكار
 */

declare(strict_types=1);
session_start();
mb_internal_encoding('UTF-8');

function esc(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
function generate_csrf(): string { return $_SESSION['csrf'] = bin2hex(random_bytes(16)); }
function check_csrf(string $t): bool { return isset($_SESSION['csrf']) && hash_equals($_SESSION['csrf'], $t); }

$UPLOAD_DIR = __DIR__ . DIRECTORY_SEPARATOR . 'uploads';
if (!is_dir($UPLOAD_DIR)) { @mkdir($UPLOAD_DIR, 0775, true); }

$fields_groups = [
  'تقنية'     => ['ذكاء اصطناعي','روبوتات','إنترنت الأشياء','أمن سيبراني','واقع افتراضي/معزز','حوسبة كمية'],
  'اقتصادية'  => ['تقنية مالية','بلوك تشين','نماذج أعمال مبتكرة'],
  'مجتمعية'   => ['التقنية الزراعية','التعليم الذكي','الاستدامة الخضراء','الصناعات الإبداعية'],
];
$pillars = [
  'التحول الرقمي','الاستدامة والتنمية الخضراء','الأمن الغذائي والمائي',
  'الثورة الصناعية الرابعة','رؤية عُمان 2040','أهداف التنمية المستدامة'
];

$errors = [];
$success_ref = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!check_csrf($_POST['csrf'] ?? '')) {
    $errors[] = 'انتهت صلاحية الجلسة. حدِّث الصفحة وحاول مرة أخرى.';
  }

  $team_name   = trim($_POST['team_name']   ?? '');
  $supervisor  = trim($_POST['supervisor']  ?? '');
  $email       = trim($_POST['email']       ?? '');
  $phone       = trim($_POST['phone']       ?? '');
  $title       = trim($_POST['title']       ?? '');
  $summary     = trim($_POST['summary']     ?? '');
  $group       = trim($_POST['group']       ?? '');
  $subcategory = trim($_POST['subcategory'] ?? '');
  $pillar      = trim($_POST['pillar']      ?? '');
  $members_num = (int)($_POST['members_num'] ?? 0);
  $members_arr = array_map('trim', $_POST['members'] ?? []);
  $agree       = isset($_POST['agree']);

  if ($team_name === '')  $errors[] = 'اسم الفريق مطلوب.';
  if ($supervisor === '') $errors[] = 'اسم المشرف الأكاديمي مطلوب.';
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'بريد إلكتروني غير صالح.';
  if ($phone === '')      $errors[] = 'رقم الهاتف مطلوب.';
  if ($title === '')      $errors[] = 'عنوان المشروع مطلوب.';
  if (mb_strlen($summary) < 80) $errors[] = 'الملخص يجب ألا يقل عن 80 حرفًا.';
  if ($group === '' || !array_key_exists($group, $fields_groups)) $errors[] = 'اختر مجالًا صحيحًا.';
  if ($subcategory === '' || !in_array($subcategory, $fields_groups[$group] ?? [], true)) $errors[] = 'اختر تخصصًا فرعيًا صحيحًا.';
  if ($pillar === '' || !in_array($pillar, $pillars, true)) $errors[] = 'اختر محورًا إستراتيجيًا.';
  if ($members_num < 1 || $members_num > 5) $errors[] = 'اختر عدد أعضاء صحيح (1–5).';

  $members_arr = array_slice($members_arr, 0, $members_num);
  if (count($members_arr) !== $members_num) $errors[] = 'أدخل أسماء جميع الأعضاء.';
  foreach ($members_arr as $name) {
    if ($name === '') { $errors[] = 'أدخل الاسم لجميع الأعضاء.'; break; }
  }

  if (!$agree) $errors[] = 'يجب الموافقة على الشروط والأحكام.';

  if (!$errors) {
    $ref = date('Ymd-His') . '-' . bin2hex(random_bytes(3));
    $dest = $UPLOAD_DIR . DIRECTORY_SEPARATOR . $ref;
    if (!@mkdir($dest, 0775, true)) {
      $errors[] = 'تعذر إنشاء مجلد الحفظ. تأكد من صلاحيات المجلد uploads.';
    } else {
      $payload = [
        'ref'         => $ref,
        'submitted_at'=> date('c'),
        'team_name'   => $team_name,
        'members_num' => $members_num,
        'members'     => array_values($members_arr),
        'supervisor'  => $supervisor,
        'email'       => $email,
        'phone'       => $phone,
        'title'       => $title,
        'summary'     => $summary,
        'group'       => $group,
        'subcategory' => $subcategory,
        'pillar'      => $pillar,
      ];
      file_put_contents($dest . DIRECTORY_SEPARATOR . 'submission.json', json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
      $success_ref = $ref;
      unset($_SESSION['csrf']);
    }
  }
}
if (!isset($_SESSION['csrf'])) generate_csrf();
?>
<!doctype html>
<html lang="ar" dir="rtl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>قدّم الآن — جائزة رئيس الجامعة للابتكار</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@400;600;700&display=swap" rel="stylesheet">
<style>
  :root{--primary:#155e75;--radius:16px}
  *{box-sizing:border-box}
  body{margin:0;background:#f8fafc;color:#0f172a;font-family:"Noto Kufi Arabic",system-ui,sans-serif;line-height:1.8;padding-bottom:56px;}
  a{color:var(--primary);text-decoration:none}
  header{background:#fff;border-bottom:1px solid #e2e8f0;position:sticky;top:0;z-index:10}
  .container{max-width:980px;margin-inline:auto;padding:12px 16px}
  h1{font-size:clamp(22px,4vw,34px);margin:8px 0}
  .card{background:#fff;border:1px solid #e2e8f0;border-radius:var(--radius);box-shadow:0 6px 18px rgba(2,6,23,.05)}
  .section{padding:24px 0}
  .grid-2{display:grid;grid-template-columns:1fr 1fr;gap:16px}
  label{display:block;font-weight:700;margin:10px 0 6px}
  input[type="text"],input[type="email"],input[type="tel"],textarea,select{
    width:100%;padding:10px 12px;border:1px solid #cbd5e1;border-radius:10px;background:#fff
  }
  textarea{min-height:140px;resize:vertical}
  input[type="checkbox"]{
    width:auto;height:auto;accent-color:var(--primary);transform:translateY(1px);
  }
  .help{color:#64748b;font-size:13px}
  .btn{display:inline-flex;align-items:center;gap:8px;padding:10px 16px;border-radius:999px;border:1px solid #cbd5e1;background:#fff;cursor:pointer;font-weight:700}
  .btn-primary{background:var(--primary);border-color:var(--primary);color:#fff}
  .errors{border:1px solid #fecaca;background:#fff1f2;color:#7f1d1d;border-radius:12px;padding:12px;margin-bottom:14px}
  .success{border:1px solid #86efac;background:#f0fdf4;color:#065f46;border-radius:12px;padding:12px;margin-bottom:14px}
  @media(max-width:720px){.grid-2{grid-template-columns:1fr}}
  /* ✅ تذييل مطابق لباقي الصفحات */
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
  @media(max-width:640px){.footer-container{flex-direction:column;gap:4px;text-align:center}}
</style>
</head>
<body>

<header>
  <div class="container" style="display:flex;justify-content:space-between;align-items:center;gap:12px">
    <a href="index.php" class="btn">← العودة للرئيسية</a>
    <strong>جائزة رئيس الجامعة للابتكار — نموذج التقديم</strong>
  </div>
</header>

<main class="section">
  <div class="container">
    <div class="card" style="padding:18px">
      <h1>قدّم مشروعك</h1>

      <?php if ($success_ref): ?>
        <div class="success">
          <strong>تم استلام طلبك بنجاح ✅</strong>
          <div>الرقم المرجعي: <code><?= esc($success_ref) ?></code></div>
          <div class="help">احتفظ بالرقم للمتابعة لاحقًا.</div>
          <div style="margin-top:10px"><a class="btn" href="index.php">العودة للرئيسية</a></div>
        </div>
      <?php else: ?>
        <?php if ($errors): ?>
          <div class="errors"><strong>تعذر الإرسال:</strong><ul style="margin:6px 0 0 0;padding:0 18px 0 0"><?php foreach($errors as $e): ?><li><?= esc($e) ?></li><?php endforeach; ?></ul></div>
        <?php endif; ?>

        <form method="post" novalidate>
          <input type="hidden" name="csrf" value="<?= esc($_SESSION['csrf'] ?? '') ?>">

          <div class="grid-2">
            <div><label>اسم الفريق *</label><input type="text" name="team_name" value="<?= esc($_POST['team_name'] ?? '') ?>" required></div>
            <div><label>اسم المشرف الأكاديمي *</label><input type="text" name="supervisor" value="<?= esc($_POST['supervisor'] ?? '') ?>" required></div>
          </div>

          <div class="grid-2">
            <div><label>عدد أعضاء الفريق *</label>
              <select name="members_num" id="members_num" onchange="renderMembers()" required>
                <option value="">— اختر العدد —</option>
                <?php $selNum=(int)($_POST['members_num']??0);for($i=1;$i<=5;$i++){echo"<option value=\"$i\"".($selNum===$i?' selected':'').">$i</option>";}?>
              </select>
            </div>
            <div><label>البريد الإلكتروني *</label><input type="email" name="email" value="<?= esc($_POST['email'] ?? '') ?>" required></div>
          </div>

          <div class="grid-2">
            <div><label>رقم الهاتف *</label><input type="tel" name="phone" value="<?= esc($_POST['phone'] ?? '') ?>" required></div>
            <div><label>المجال *</label>
              <select name="group" id="group" onchange="syncSubcats()" required>
                <option value="">— اختر المجال —</option>
                <?php foreach($fields_groups as $g=>$subs):?><option value="<?=esc($g)?>"<?=($_POST['group']??'')===$g?'selected':''?>><?=esc($g)?></option><?php endforeach;?>
              </select>
            </div>
          </div>

          <div class="grid-2">
            <div><label>التخصص الفرعي *</label>
              <select name="subcategory" id="subcategory" required>
                <option value="">— اختر التخصص —</option>
                <?php
                $gsel=$_POST['group']??'';$ssel=$_POST['subcategory']??'';
                if($gsel&&isset($fields_groups[$gsel]))foreach($fields_groups[$gsel] as $s){
                  $sel=$ssel===$s?'selected':'';echo"<option $sel value='".esc($s)."'>".esc($s)."</option>";
                } ?>
              </select>
            </div>
            <div><label>المحور الإستراتيجي *</label>
              <select name="pillar" required>
                <option value="">— اختر المحور —</option>
                <?php foreach($pillars as $p):?><option value="<?=esc($p)?>"<?=($_POST['pillar']??'')===$p?'selected':''?>><?=esc($p)?></option><?php endforeach;?>
              </select>
            </div>
          </div>

          <div id="members_box" class="card" style="padding:14px;margin-top:10px">
            <strong>أسماء الأعضاء</strong>
            <div id="members_fields" style="display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-top:8px"></div>
          </div>

          <label>عنوان المشروع *</label>
          <input type="text" name="title" value="<?= esc($_POST['title'] ?? '') ?>" required>

          <label>ملخص تنفيذي *</label>
          <textarea name="summary" required placeholder="المشكلة — الحل — التقنية — الأثر — قابلية التطبيق"><?= esc($_POST['summary'] ?? '') ?></textarea>

          <label style="display:flex;align-items:center;gap:8px;font-weight:400;margin-top:10px">
            <input type="checkbox" name="agree" value="1" <?=isset($_POST['agree'])?'checked':''?>> 
            أقرّ بصحة المعلومات وأوافق على الشروط والأحكام.
          </label>

          <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:16px">
            <button class="btn btn-primary" type="submit">إرسال الطلب</button>
            <a class="btn" href="index.php">إلغاء</a>
          </div>
        </form>
      <?php endif; ?>
    </div>
  </div>
</main>

<!-- ✅ تذييل مطابق لجميع الصفحات -->
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

<script>
  const groups = <?= json_encode($fields_groups, JSON_UNESCAPED_UNICODE) ?>;
  function syncSubcats(){
    const g=document.getElementById('group').value,s=document.getElementById('subcategory');
    const chosen="<?=esc($_POST['subcategory']??'')?>";s.innerHTML='<option value="">— اختر التخصص —</option>';
    if(groups[g])groups[g].forEach(v=>{const o=document.createElement('option');o.value=v;o.textContent=v;if(v===chosen)o.selected=true;s.appendChild(o);});
  }
  function renderMembers(){
    const n=parseInt(document.getElementById('members_num').value||'0',10);
    const wrap=document.getElementById('members_fields');wrap.innerHTML='';
    if(!n||n<1)return;
    const prev=<?= json_encode($_POST['members']??[],JSON_UNESCAPED_UNICODE) ?>;
    for(let i=1;i<=n;i++){
      const d=document.createElement('div');
      const l=document.createElement('label');l.textContent='عضو '+i;l.style.margin='0 0 6px 0';
      const inp=document.createElement('input');inp.type='text';inp.name='members[]';inp.required=true;inp.value=prev[i-1]||'';
      d.appendChild(l);d.appendChild(inp);wrap.appendChild(d);
    }
  }
  document.addEventListener('DOMContentLoaded',()=>{syncSubcats();renderMembers();});
</script>
</body>
</html>
