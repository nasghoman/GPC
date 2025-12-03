<?php
/**
 * login.php — تسجيل الدخول ولوحة عرض الطلبات
 * PHP 8+
 */

declare(strict_types=1);
session_start();
mb_internal_encoding('UTF-8');

// إعداد الحساب
const ADMIN_USER = 'admin';
const ADMIN_PASS_HASH = '$2y$10$8c0W2N1w7QdRkC1rVgG3CuRk8yXQe0m8y5yTj2e5cO5KQ8m1s3mte'; // كلمة المرور الافتراضية: Admin@123

$UPLOAD_DIR = __DIR__ . DIRECTORY_SEPARATOR . 'uploads';

function esc(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
function generate_csrf(): string { return $_SESSION['csrf_login'] = bin2hex(random_bytes(16)); }
function check_csrf(?string $t): bool {
  return isset($_SESSION['csrf_login']) && is_string($t) && hash_equals($_SESSION['csrf_login'], $t);
}
function require_auth(): bool { return !empty($_SESSION['auth_ok']); }

// معالجة الدخول / الخروج
$login_error = null;

if (isset($_GET['logout'])) {
  $_SESSION = [];
  session_destroy();
  header('Location: login.php'); exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['do_login'])) {
  if (!check_csrf($_POST['csrf'] ?? '')) {
    $login_error = 'انتهت صلاحية الجلسة. حدِّث الصفحة ثم حاول مجددًا.';
  } else {
    $u = $_POST['username'] ?? '';
    $p = $_POST['password'] ?? '';
    $valid = ($u === ADMIN_USER) && (
      $p === 'Admin@123' || password_verify($p, ADMIN_PASS_HASH)
    );
    if ($valid) {
      $_SESSION['auth_ok'] = true;
      unset($_SESSION['csrf_login']);
      header('Location: login.php'); exit;
    } else {
      $login_error = 'بيانات الدخول غير صحيحة.';
    }
  }
}

if (!isset($_SESSION['csrf_login'])) generate_csrf();

// قراءة الطلبات
$submissions = [];
if (require_auth() && is_dir($UPLOAD_DIR)) {
  foreach (scandir($UPLOAD_DIR, SCANDIR_SORT_DESCENDING) as $dir) {
    if ($dir === '.' || $dir === '..') continue;
    $path = "$UPLOAD_DIR/$dir";
    if (!is_dir($path)) continue;
    $json = "$path/submission.json";
    if (is_file($json)) {
      $data = json_decode(file_get_contents($json), true);
      if (is_array($data)) {
        $data['_ref'] = $dir;
        $data['_json'] = $json;
        $submissions[] = $data;
      }
    }
  }
  usort($submissions, fn($a,$b)=>strcmp($b['submitted_at']??$b['_ref'],$a['submitted_at']??$a['_ref']));
}

$q = $_GET['q'] ?? '';
$groupFilter = $_GET['group'] ?? '';
if ($q) {
  $submissions = array_values(array_filter($submissions, function($s) use ($q){
    $hay = mb_strtolower(json_encode($s, JSON_UNESCAPED_UNICODE));
    return str_contains($hay, mb_strtolower($q));
  }));
}
if ($groupFilter) {
  $submissions = array_values(array_filter($submissions, fn($s)=>($s['group'] ?? '') === $groupFilter));
}
?>
<!doctype html>
<html lang="ar" dir="rtl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>تسجيل الدخول — جائزة رئيس الجامعة للابتكار</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@400;600;700&display=swap" rel="stylesheet">
<style>
  :root{--primary:#155e75;--radius:16px}
  *{box-sizing:border-box}
  body{margin:0;background:#f8fafc;color:#0f172a;font-family:"Noto Kufi Arabic",system-ui,sans-serif;line-height:1.8;padding-bottom:56px;}
  a{color:var(--primary);text-decoration:none}
  header{background:#fff;border-bottom:1px solid #e2e8f0;position:sticky;top:0;z-index:10}
  .container{max-width:1100px;margin-inline:auto;padding:12px 16px}
  h1{font-size:clamp(22px,4vw,34px);margin:8px 0}
  .card{background:#fff;border:1px solid #e2e8f0;border-radius:var(--radius);box-shadow:0 6px 18px rgba(2,6,23,.05)}
  .section{padding:24px 0}
  label{display:block;font-weight:700;margin:10px 0 6px}
  input[type="text"],input[type="password"],input[type="search"],select{
    width:100%;padding:10px 12px;border:1px solid #cbd5e1;border-radius:10px;background:#fff
  }
  .btn{display:inline-flex;align-items:center;gap:8px;padding:10px 16px;border-radius:999px;border:1px solid #cbd5e1;background:#fff;cursor:pointer;font-weight:700}
  .btn-primary{background:var(--primary);border-color:var(--primary);color:#fff}
  .btn-ghost{background:#fff}
  .muted{color:#64748b}
  .errors{border:1px solid #fecaca;background:#fff1f2;color:#7f1d1d;border-radius:12px;padding:12px;margin-bottom:14px}
  table{width:100%;border-collapse:separate;border-spacing:0 8px}
  th,td{padding:10px 12px;text-align:right;vertical-align:top}
  tr{background:#fff;border:1px solid #e2e8f0}
  tr td:first-child, tr th:first-child{border-top-right-radius:12px;border-bottom-right-radius:12px}
  tr td:last-child,  tr th:last-child {border-top-left-radius:12px;border-bottom-left-radius:12px}
  code{background:#f1f5f9;border:1px solid #e2e8f0;padding:2px 6px;border-radius:8px}
  @media (max-width:900px){table{display:block;overflow:auto;white-space:nowrap}}

  /* ✅ تذييل مطابق لتذييل apply.php */
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
    max-width:1100px;
    margin:auto;
    padding:0 16px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    font-family:"Noto Kufi Arabic",sans-serif;
    font-size:14px;
    color:#0f172a;
  }
  .footer-left a{
    color:#155e75;
    text-decoration:none;
    margin:0 4px;
  }
  .footer-left a:hover{text-decoration:underline;}
  .footer-left span{color:#155e75;opacity:0.6;margin:0 4px;}
  @media(max-width:640px){
    .footer-container{flex-direction:column;gap:4px;text-align:center;}
  }
    /* force same footer as apply.php */
    body{padding-bottom:56px !important;}
  .bottom-footer{
    width:100% !important;
    border-top:1px solid #e2e8f0 !important;
    background:#fff !important;
    position:fixed !important;
    bottom:0; right:0; left:0;
    z-index:9999 !important;
    padding:8px 0 !important;
  }
  .footer-container{
    max-width:1100px; margin:auto; padding:0 16px;
    display:flex; justify-content:space-between; align-items:center;
    font-family:"Noto Kufi Arabic",sans-serif; font-size:14px; color:#0f172a;
  }
  .footer-left a{ color:#155e75; text-decoration:none; margin:0 4px; }
  .footer-left a:hover{ text-decoration:underline; }
  .footer-left span{ color:#155e75; opacity:.6; margin:0 4px; }
  @media(max-width:640px){ .footer-container{flex-direction:column; gap:4px; text-align:center;} }
</style>
</head>
<body>

<header>
  <div class="container" style="display:flex;justify-content:space-between;align-items:center;gap:12px">
    <a href="index.php" class="btn">← العودة للرئيسية</a>
    <strong>جائزة رئيس الجامعة للابتكار — لوحة الطلبات</strong>
    <?php if (require_auth()): ?>
      <a class="btn" href="?logout=1">تسجيل خروج</a>
    <?php endif; ?>
  </div>
</header>

<main class="section">
  <div class="container">

    <?php if (!require_auth()): ?>
      <div class="card" style="max-width:480px;margin:0 auto;padding:18px">
        <h1>تسجيل الدخول</h1>
        <?php if ($login_error): ?>
          <div class="errors"><?= esc($login_error) ?></div>
        <?php endif; ?>
        <form method="post" novalidate>
          <input type="hidden" name="csrf" value="<?= esc($_SESSION['csrf_login'] ?? '') ?>">
          <input type="hidden" name="do_login" value="1">
          <label>اسم المستخدم</label>
          <input type="text" name="username" required autofocus>
          <label>كلمة المرور</label>
          <input type="password" name="password" required>
          <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:16px">
            <button class="btn btn-primary" type="submit">دخول</button>
            <a class="btn btn-ghost" href="index.php">إلغاء</a>
          </div>
        </form>
      </div>

    <?php else: ?>

      <div class="card" style="padding:18px">
        <h1>الطلبات المستلمة</h1>
        <form method="get" style="display:grid;grid-template-columns:1fr 220px auto;gap:10px;align-items:end;margin:12px 0">
          <div>
            <label>بحث عام</label>
            <input type="search" name="q" value="<?= esc($q) ?>" placeholder="بحث باسم فريق، عنوان مشروع، مشرف...">
          </div>
          <div>
            <label>تصفية حسب المجال</label>
            <select name="group">
              <option value="">— الكل —</option>
              <?php
                $groups=[];
                foreach($submissions as $s){$groups[$s['group']??'']=true;}
                foreach(array_keys($groups) as $g){
                  if($g==='')continue;
                  $sel=($groupFilter===$g)?'selected':'';
                  echo'<option '.$sel.' value="'.esc($g).'">'.esc($g).'</option>';
                }
              ?>
            </select>
          </div>
          <div>
            <button class="btn">تطبيق</button>
            <a class="btn btn-ghost" href="login.php">إزالة</a>
          </div>
        </form>

        <?php if (empty($submissions)): ?>
          <p class="muted">لا توجد طلبات بعد.</p>
        <?php else: ?>
          <div style="overflow:auto">
            <table>
              <thead>
                <tr>
                  <th>المرجع</th>
                  <th>التاريخ</th>
                  <th>الفريق / الأعضاء</th>
                  <th>عنوان المشروع</th>
                  <th>المجال / التخصص</th>
                  <th>المشرف</th>
                  <th>عرض</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($submissions as $s): ?>
                  <tr>
                    <td><code><?= esc($s['_ref'] ?? '') ?></code></td>
                    <td><?= esc(isset($s['submitted_at']) ? date('Y-m-d H:i', strtotime($s['submitted_at'])) : '-') ?></td>
                    <td>
                      <div><strong><?= esc($s['team_name'] ?? '-') ?></strong></div>
                      <div class="muted"><?= esc(implode('، ', $s['members'] ?? [])) ?></div>
                    </td>
                    <td><?= esc($s['title'] ?? '-') ?></td>
                    <td>
                      <div><?= esc($s['group'] ?? '-') ?></div>
                      <div class="muted"><?= esc($s['subcategory'] ?? '-') ?></div>
                    </td>
                    <td><?= esc($s['supervisor'] ?? '-') ?></td>
                    <td>
                      <a class="btn" href="?view=<?= urlencode($s['_ref']) ?>">تفاصيل</a>
                      
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        <?php endif; ?>
      </div>

      <?php
      if (isset($_GET['view']) && is_string($_GET['view'])) {
        $ref = basename($_GET['view']);
        $json = "$UPLOAD_DIR/$ref/submission.json";
        if (is_file($json)) {
          $d = json_decode(file_get_contents($json), true) ?: [];
      ?>
        <div class="card" style="padding:18px;margin-top:16px">
          <h2>تفاصيل الطلب — <code><?= esc($ref) ?></code></h2>
          <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:14px">
            <div><div class="muted">اسم الفريق</div><div><strong><?= esc($d['team_name'] ?? '-') ?></strong></div></div>
            <div><div class="muted">التاريخ</div><div><?= esc(isset($d['submitted_at']) ? date('Y-m-d H:i', strtotime($d['submitted_at'])) : '-') ?></div></div>
            <div><div class="muted">الأعضاء</div><div><?= esc(implode('، ', $d['members'] ?? [])) ?></div></div>
            <div><div class="muted">المشرف</div><div><?= esc($d['supervisor'] ?? '-') ?></div></div>
            <div><div class="muted">البريد</div><div><?= esc($d['email'] ?? '-') ?></div></div>
            <div><div class="muted">الهاتف</div><div><?= esc($d['phone'] ?? '-') ?></div></div>
            <div style="grid-column:1/-1"><div class="muted">العنوان</div><div><strong><?= esc($d['title'] ?? '-') ?></strong></div></div>
            <div><div class="muted">المجال</div><div><?= esc($d['group'] ?? '-') ?></div></div>
            <div><div class="muted">التخصص</div><div><?= esc($d['subcategory'] ?? '-') ?></div></div>
            <div><div class="muted">المحور</div><div><?= esc($d['pillar'] ?? '-') ?></div></div>
            <div style="grid-column:1/-1"><div class="muted">الملخص التنفيذي</div><div style="white-space:pre-wrap"><?= esc($d['summary'] ?? '-') ?></div></div>
          </div>
          <div style="margin-top:12px;display:flex;gap:10px;flex-wrap:wrap">
          
            <a class="btn btn-ghost" href="login.php">رجوع</a>
          </div>
        </div>
      <?php } } ?>

    <?php endif; ?>
  </div>
</main>

<!-- ✅ تذييل مطابق لتذييل apply.php -->
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
