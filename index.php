<?php
/**
 * index.php — مسابقة رئيس الجامعة لأفضل مشاريع التخرج (الصفحة الرئيسية)
 * PHP 8+ (يفضّل تفعيل php-intl لعرض التواريخ العربية، مع أن هذه الصفحة لا تعتمد عليها كثيرًا).
 * كل المحتوى قابل للتعديل من خلال المصفوفات أدناه.
 */

 $site = [
  'title'       => 'جائزة رئيس الجامعة للابتكار',
  'tagline'     => 'نحو مستقبل جامعي يقوده الإبداع والريادة',
  'description' => 'مبادرة من جامعة التقنية والعلوم التطبيقية تهدف إلى تعزيز ثقافة الابتكار والريادة بين الطلبة وتحويل الأفكار الإبداعية إلى مشاريع مؤثرة تسهم في الاقتصاد الوطني.',
  'year'        => 2025,
  'brand'       => [
    'primary'   => '#155e75',  // teal-800
    'primary50' => '#e0f2f1',
    'accent'    => '#0f172a',  // slate-900
  ],
  'contact' => [
    'email' => 'innovation@utas.edu.om',
    'platform' => 'رابط منصة الجائزة (يُضاف لاحقًا)',
    'phones' => 'أرقام التواصل مع منسقي الجائزة (يُضاف لاحقًا)',
    'social' => [
      ['name'=>'X','url'=>'#'],
      ['name'=>'LinkedIn','url'=>'#'],
      ['name'=>'YouTube','url'=>'#'],
    ],
  ],
];


$intro_points = [
  'تمكين الطلبة كمُنتجين للمعرفة ومساهمين في الاقتصاد الوطني القائم على الابتكار.',
  'دعم المشاريع المتميزة علميًا وتطبيقيًا وإبراز الأفكار الواعدة القابلة للتطوير والاحتضان.',
  'ربط المشاريع بسوق العمل والمجتمع والقطاع الاستثماري عبر برامج تدريبية وتقييم احترافي.'
];

$objectives = [
  'تحفيز الإبداع والابتكار لإيجاد حلول لتحديات مجتمعية واقتصادية.',
  'تعزيز ثقافة ريادة الأعمال وتحويل المشاريع الأكاديمية إلى مبادرات قابلة للتطبيق.',
  'تمكين الطلبة من تصميم نماذج عمل مبتكرة قادرة على دخول السوق.',
  'ربط المشاريع باحتياجات المجتمع والقطاعات الصناعية وترسيخ الاقتصاد المعرفي.',
  'تعزيز العمل الجماعي والتخصصات البينية.',
  'تطوير مهارات العرض والإقناع وإدارة المشاريع وبناء النماذج المالية.',
  'إنشاء قاعدة بيانات للمشاريع الريادية الطلابية للوصول الداعمين والمستثمرين.',
];

$importance = [
  'تحويل مشاريع التخرج من متطلب أكاديمي إلى فرصة ريادية قابلة للاستثمار.',
  'بناء منظومة ابتكار تواكب رؤية عُمان 2040 وأهداف التنمية المستدامة.',
  'تمكين تواصل فعّال مع الصناعة والمستثمرين لرفع قابلية التطبيق.',
  'رفع جودة مخرجات التعليم بدمج الأكاديمي بالتطبيقي.',
  'تمكين الطلبة كرواد قادرين على خلق فرص عمل.',
  'تسليط الضوء على المواهب الطلابية محليًا ودوليًا.',
];

$stakeholders = [
  [
    'title' => 'الطلبة المشاركون',
    'items' => [
      'طلبة جامعة التقنية والعلوم التطبيقية (جميع الفروع والتخصصات).',
      'تكوين فرق (2–5 طلاب) وتطوير الفكرة ضمن مجالات المسابقة.',
      'تسليم: تقرير، عرض تقديمي، فيديو قصير، وملخص تنفيذي.',
      'المشاركة في التدريب والتوجيه وعرض المشروع أمام التحكيم.',
    ]
  ],
  [
    'title' => 'المشرفون الأكاديميون',
    'items' => [
      'توجيه أكاديمي وتقني وربط بالمجتمع واحتياجاته.',
      'متابعة الالتزام بالمراحل الزمنية والشروط.',
      'المساهمة في تقييم المشاريع على مستوى الفروع.',
    ]
  ],
  [
    'title' => 'الشركاء والداعمون',
    'items' => [
      'جهات صناعية وشركات ناشئة ومستثمرون ومؤسسات تمويل.',
      'دعم مالي/فني، تدريب واحتضان، وفرص استثمار وتسويق.',
      'رعاية المسابقة والتعريف بها.',
    ]
  ],
];

$committees = [
  'اللجنة الرئيسية' => ['رئيس القطاع (إشراف مباشر)','نائب الرئيس للدراسات العليا والابتكار','رئيس اللجنة (د. ناصر البيماني)','ممثل من الأفرع','2–3 فنيين'],
  'اللجان الداخلية للفروع (التحكيم)' => ['مساعد الرئيس للفرع','نائب مساعد الرئيس','3 ممثلين من الأقسام الأكاديمية','عضو مقرر (إداري)'],
  'اللجنة الفنية والتقنية' => ['أعضاء من الفروع الثلاثة الداعمة وفرع المصنعة'],
  'لجنة الإعلام والتسويق' => ['أعضاء من الفروع الثلاثة الداعمة وفرع المصنعة'],
  'لجنة العلاقات العامة (التمويل والرعاية)' => ['رئيس دائرة العلاقات من الفروع الداعمة وفرع المصنعة'],
  'لجنة التدريب والتأهيل' => ['نائب الرئيس للدراسات العليا والبحث العلمي والابتكار','أعضاء أقسام الابتكار من كل الفروع'],
];

$tracks = [
  'المجالات التقنية' => [
    'الذكاء الاصطناعي وتحليل البيانات والتنبؤ والأتمتة الذكية',
    'الروبوتات والأتمتة الصناعية',
    'الطائرات بدون طيار والأنظمة غير المأهولة',
    'إنترنت الأشياء والمدن الذكية',
    'الأمن السيبراني والخصوصية',
    'الحوسبة الكمية',
    'الواقع الافتراضي/المعزز',
  ],
  'المجالات الاقتصادية والمالية' => [
    'التقنية المالية والتمويل الرقمي',
    'البلوك تشين والتطبيقات اللامركزية',
    'النماذج التجارية المبتكرة',
  ],
  'المجالات التنموية والمجتمعية' => [
    'التقنية الزراعية والأمن الغذائي',
    'التعليم الذكي وابتكارات التعليم',
    'الاستدامة الخضراء والطاقة المتجددة',
    'الصناعات الإبداعية',
  ],
];

$pillars = [
  ['title' => 'التحول الرقمي',                        'desc' => 'دعم توجهات الاقتصاد الرقمي في السلطنة.'],
  ['title' => 'الاستدامة والتنمية الخضراء',            'desc' => 'التركيز على حلول تقلل من الأثر البيئي.'],
  ['title' => 'الأمن الغذائي والمائي',                 'desc' => 'ابتكارات تسهم في تحقيق الاكتفاء والأمن الوطني.'],
  ['title' => 'الثورة الصناعية الرابعة',               'desc' => 'مواكبة أحدث التقنيات المستقبلية.'],
  ['title' => 'رؤية عُمان 2040 (التوجهات الوطنية)',    'desc' => 'مواءمة المشاريع مع الأولويات الوطنية.'],
  ['title' => 'أهداف التنمية المستدامة (التوجهات العالمية)', 'desc' => 'ربط المشاريع بقضايا عالمية مثل الصحة، التعليم، والطاقة النظيفة.'],
];


$phases = [
  [
    'title'  => 'الإعداد والتحضير',
    'period' => 'بداية الإطلاق',
    'desc'   => 'إطلاق الحملة التعريفية، فتح التسجيل عبر المنصة، استقبال المشاريع، والفرز الأولي على مستوى الفروع.'
  ],
  [
    'title'  => 'التدريب ما قبل المسابقة',
    'period' => 'قبل العروض',
    'desc'   => 'ورش متخصصة: نموذج العمل، التحليل المالي وخطط التمويل، الملكية الفكرية، استراتيجيات الدخول للسوق، وتجهيز فرق العرض.'
  ],
  [
    'title'  => 'المسابقة (العروض والتقييم)',
    'period' => 'أيام العروض',
    'desc'   => 'تقديم العروض النهائية أمام لجنة التحكيم وفق معايير معلنة (ابتكار، جدوى، قابلية التطبيق، جودة العرض) واختيار الفائزين.'
  ],
  [
    'title'  => 'الاحتضان',
    'period' => 'لاحقًا للفوز',
    'desc'   => 'انضمام المشاريع الفائزة لبرامج الاحتضان الجامعية: دعم فني وإداري واستشاري، تطوير نماذج أولية، وربط بالصناعة.'
  ],
  [
    'title'  => 'مسرعة الأعمال',
    'period' => 'بعد الاحتضان',
    'desc'   => 'تمويل بذري، تدريب مكثّف على التوسع، جلسات مع مستثمرين، دعم تسجيل الملكية الفكرية، وتأهيل للإطلاق في السوق.'
  ],
];


$requirements = [
  'الشروط العامة' => [
    'المشاركة مخصصة لطلبة جامعة التقنية والعلوم التطبيقية.',
    'أن يكون المشروع جزءًا من متطلبات التخرج الأكاديمية.',
    'جِدّة الفكرة وألّا تكون نُفّذت أو سُوّقت سابقًا.',
    'متاحة لجميع التخصصات الأكاديمية.',
    'قابلية التطبيق التجاري أو التحول إلى منتج/خدمة.',
    'مشاركة فردية أو جماعية (2–5) مع مشرف أكاديمي.',
  ],
  'المتطلبات الفنية' => [
    'تقرير المشروع','عرض تقديمي (PowerPoint)','فيديو قصير (3 دقائق)','ملخص تنفيذي',
    'إبراز الأثر الاقتصادي والاجتماعي المتوقع','الالتزام بالمواعيد النهائية للتسجيل والتسليم',
  ],
  'شروط إضافية' => [
    'الالتزام بجميع مراحل التدريب والإرشاد.',
    'الانضمام إلى برامج الاحتضان في حال الفوز.',
    'احترام حقوق الملكية الفكرية وفق الإرشادات.',
  ]
];

$criteria = [
  ['name'=>'الابتكار والأصالة','desc'=>'جِدّة الفكرة والإبداع وابتعادها عن التكرار.','weight'=>40],
  ['name'=>'قابلية التطبيق والجدوى','desc'=>'إمكانية التنفيذ والتوافق مع الموارد والسياق.','weight'=>30],
  ['name'=>'قابلية السوق والنمو','desc'=>'الأثر الاقتصادي والاجتماعي والقدرة على التوسع.','weight'=>20],
  ['name'=>'جودة العرض والإقناع','desc'=>'وضوح العرض وقوة الإقناع والتفاعل مع التحكيم.','weight'=>10],
];

$incentives = [
  'الحوافز المباشرة' => [
    'جوائز مالية للفرق الفائزة ومشرفيهم.',
    'شهادات مشاركة وفوز معتمدة.',
    'تكريم إعلامي ورسمي في حفل ختامي.',
  ],
  'الدعم الأكاديمي والمهني' => [
    'ورش متخصصة: نموذج عمل، تحليل مالي، ملكية فكرية، تسويق.',
    'إرشاد أكاديمي وتقني من خبراء وهيئة التدريس.',
    'برامج احتضان جامعية توفر بيئة عمل ودعم فني واستشاري.',
  ],
  'الدعم القانوني والمالي' => [
    'تسجيل الملكية الفكرية وبراءات الاختراع بدعم قانوني.',
    'تمويل بذري للمشاريع الواعدة.',
    'إتاحة فرص استثمارية مع مستثمرين محليين ودوليين.',
  ],
  'فرص المشاركة والانتشار' => [
    'تمثيل الجامعة في معارض ومسابقات محلية ودولية.',
    'الترويج الإعلامي عبر المنصات الرسمية.',
    'الدخول لبرامج مسرّعة للتوسع والنمو.',
  ],
];

$training = [
  'تطوير نموذج العمل (Business Model)' => [
    'قيمة العرض، شرائح العملاء، القنوات، الإيرادات والتكاليف، الأنشطة والشركاء.'
  ],
  'Pitching Skills (العرض للمستثمرين)' => [
    'عرض جذّاب خلال 3–5 دقائق والتركيز على التقنية والسوق والربحية.'
  ],
  'التحليل المالي وخطط التمويل' => [
    'تقديرات مالية ونموذج مالي أولي ومصادر التمويل وخطة واقعية.'
  ],
  'الملكية الفكرية والتسجيل' => [
    'أنواع الملكية، حماية الأفكار، التوقيت والإجراءات، وأهمية اتفاقيات السرية.'
  ],
  'استراتيجيات الدخول إلى السوق' => [
    'تحديد السوق والمنافسين، عناصر التميز، قنوات الوصول، وخطة تسويق أولية.'
  ],
];

$incubation = [
  'الهدف' => [
    'تمكين التطوير العملي للنماذج الأولية وربط الفرق بالصناعة والمجتمع وإعداد خطط نمو واقعية.'
  ],
  'الآليات' => [
    'موارد مادية ولوجستية (مكاتب، مختبرات، خدمات تقنية).',
    'إرشاد قانوني وتجاري ومتابعات نصف سنوية وتقارير تقدم.',
    'نشر قصص النجاح وترشيح المشاريع المتميزة لتمثيل الجامعة.'
  ],
  'المسرعة' => [
    'تمويل بذري، تدريب مكثف، Pitching للمستثمرين، تطوير النموذج المالي، والاستعداد للاستثمار/الإطلاق.'
  ],
  'الملكية والتمويل' => [
    'ملكية لا تتجاوز 10% للمشاريع ذات البراءات (5% للجامعة + 5% للجهة الراعية) مع منظومة تمويلية مستدامة.'
  ],
];

// Helpers
function esc($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

?>
<!doctype html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= esc($site['title']) ?> — <?= esc($site['tagline']) ?></title>
  <meta name="description" content="<?= esc($site['description']) ?>">
  <meta name="theme-color" content="<?= esc($site['brand']['primary']) ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    :root{
      --primary: <?= $site['brand']['primary']?>;
      --primary-50: <?= $site['brand']['primary50']?>;
      --accent: <?= $site['brand']['accent']?>;
      --radius: 16px;
    }
    *{box-sizing:border-box}
    html,body{margin:0;padding:0}
    body{font-family:"Noto Kufi Arabic", system-ui, -apple-system, "Segoe UI", Roboto, sans-serif; color:#0f172a; background:#ffffff; line-height:1.8}
    a{color:var(--primary); text-decoration:none}
    a:hover{text-decoration:underline}
    .container{max-width:1200px; margin-inline:auto; padding-inline:16px}
    header.nav{position:sticky; top:0; z-index:40; background:#fff; border-bottom:1px solid #e2e8f0; backdrop-filter:saturate(180%) blur(6px)}
    .nav-inner{display:flex; align-items:center; justify-content:space-between; gap:16px; padding:14px 0}
    .brand{display:flex; align-items:center; gap:10px}
    .brand-logo{width:40px;height:40px;border-radius:50%;background:var(--primary)}
    .brand-title{font-weight:700}
    .menu{display:flex; gap:16px; align-items:center; flex-wrap:wrap}
    .btn{display:inline-flex; align-items:center; justify-content:center; gap:8px; padding:10px 16px; border-radius:999px; border:1px solid #cbd5e1; background:#fff; color:#0f172a; font-weight:600; cursor:pointer}
    .btn-primary{background:var(--primary); border-color:var(--primary); color:#fff}
    .btn-ghost{background:#fff}
    .hero{background: radial-gradient(1000px 400px at 70% -10%, var(--primary-50), transparent), conic-gradient(from 180deg at 50% -20%, #ffffff 0deg, #eef2ff 200deg, #ffffff 360deg)}
    .hero-grid{display:grid; grid-template-columns:1.2fr .8fr; gap:24px; padding:56px 0}
    .chip{display:inline-block; font-size:13px; padding:6px 12px; background:#ecfeff; color:#0e7490; border:1px solid #cffafe; border-radius:999px}
    .card{background:#fff; border:1px solid #e2e8f0; border-radius:var(--radius); box-shadow:0 6px 18px rgba(2,6,23,.06)}
    .section{padding:48px 0}
    .muted{color:#475569}
    .grid-2{display:grid; grid-template-columns:repeat(2,1fr); gap:18px}
    .grid-3{display:grid; grid-template-columns:repeat(3,1fr); gap:18px}
    .grid-4{display:grid; grid-template-columns:repeat(4,1fr); gap:18px}
    .timeline{display:grid; grid-template-columns:repeat(3,1fr); gap:14px}
    .badge{display:inline-block; font-size:12px; padding:4px 10px; background:#f1f5f9; border-radius:999px; color:#334155}
    footer{border-top:1px solid #e2e8f0; padding:28px 0; background:#fff}
    @media (max-width: 1024px){ .hero-grid{grid-template-columns:1fr} .grid-4{grid-template-columns:repeat(2,1fr)} .timeline{grid-template-columns:1fr 1fr}}
    @media (max-width: 640px){ .grid-3,.grid-2,.grid-4{grid-template-columns:1fr} .menu{display:none}}
  </style>
</head>
<body>

<header class="nav" role="banner">
  <div class="container nav-inner">
    <a class="brand" href="#top" aria-label="الرئيسية">
      <span class="brand-logo" aria-hidden="true"></span>
      <span class="brand-title"><?= esc($site['title']) ?></span>
    </a>
    <nav class="menu" aria-label="التنقل">
      <a href="#about">عن المسابقة</a>
      <a href="#tracks">المجالات والمحاور</a>
      <a href="#pillars">المحاور الإستراتيجية</a>
      <a href="#timeline">المراحل</a>
      <a href="#criteria">معايير التحكيم</a>
      <a href="#incentives">الحوافز والدعم</a>
      <a href="#training">البرامج التدريبية</a>
      <a href="#incubation">الاحتضان والمسرعة</a>
      <a href="#contact">تواصل</a>
      <a class="btn btn-ghost" href="login.php">تسجيل الدخول</a>
      <a class="btn btn-primary" href="apply.php">قدّم الآن</a>
    </nav>
  </div>
</header>
<main id="top">
  <!-- Hero -->
  <section class="hero">
    <div class="container hero-grid">
      <div>
        <span class="chip">الدورة <?= (int)$site['year'] ?></span>
        <h1 style="margin:10px 0 6px 0; font-size:clamp(26px,4.5vw,44px)"> <?= esc($site['tagline']) ?> </h1>
        <p class="muted" style="margin:0 0 16px 0"><?= esc($site['description']) ?></p>
        <div style="display:flex; gap:10px; flex-wrap:wrap">
          <a class="btn btn-primary" href="apply.php">ابدأ التسجيل</a>
          <a class="btn" href="#tracks">استكشاف المجالات</a>
        </div>
        <ul style="margin:16px 0 0 0; padding:0 18px 0 0; color:#334155">
          <?php foreach($intro_points as $p): ?>
            <li><?= esc($p) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      
    </div>
  </section>


  <!-- About -->
  <section id="about" class="section">
    <div class="container">
      <h2>عن المسابقة</h2>
      <p class="muted">تأتي المبادرة امتدادًا لجهود الجامعة في تعزيز جودة المخرجات وربط المشاريع بسوق العمل من خلال بيئة تنافسية محفزة على الابتكار والريادة.</p>

      <div class="grid-3" style="margin-top:16px">
        <div class="card" style="padding:16px">
          <h3 style="margin:0 0 6px 0">الأهداف</h3>
          <ul style="margin:0; padding:0 18px 0 0">
            <?php foreach($objectives as $o): ?><li><?= esc($o) ?></li><?php endforeach; ?>
          </ul>
        </div>
        <div class="card" style="padding:16px">
          <h3 style="margin:0 0 6px 0">الأهمية</h3>
          <ul style="margin:0; padding:0 18px 0 0">
            <?php foreach($importance as $o): ?><li><?= esc($o) ?></li><?php endforeach; ?>
          </ul>
        </div>
        <div class="card" style="padding:16px">
          <h3 style="margin:0 0 6px 0">الفئات المستهدفة</h3>
          <?php foreach($stakeholders as $g): ?>
            <div style="margin-bottom:10px">
              <div class="badge"><?= esc($g['title']) ?></div>
              <ul style="margin:6px 0 0 0; padding:0 18px 0 0">
                <?php foreach($g['items'] as $it): ?><li><?= esc($it) ?></li><?php endforeach; ?>
              </ul>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="card" style="padding:16px; margin-top:16px">
        <h3 style="margin:0 0 6px 0">اللجان</h3>
        <div class="grid-2">
          <?php foreach($committees as $name=>$list): ?>
            <div>
              <div class="badge"><?= esc($name) ?></div>
              <ul style="margin:6px 0 0 0; padding:0 18px 0 0">
                <?php foreach($list as $it): ?><li><?= esc($it) ?></li><?php endforeach; ?>
              </ul>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Tracks -->
  <section id="tracks" class="section" style="background:#f8fafc">
    <div class="container">
      <h2>المجالات والمحاور</h2>
      <div class="grid-3" style="margin-top:16px">
        <?php foreach($tracks as $group=>$items): ?>
          <article class="card" style="padding:16px">
            <h3 style="margin:0 0 6px 0"><?= esc($group) ?></h3>
            <ul class="muted" style="margin:0; padding:0 18px 0 0">
              <?php foreach($items as $it): ?><li><?= esc($it) ?></li><?php endforeach; ?>
            </ul>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Strategic Pillars -->
  <section id="pillars" class="section">
  <div class="container">
    <h2>المحاور الإستراتيجية للمسابقة</h2>
    <div class="grid-3" style="margin-top:16px">
      <?php foreach($pillars as $p): ?>
        <div class="card" style="padding:16px">
          <strong><?= esc($p['title']) ?></strong>
          <p class="muted" style="margin:6px 0 0 0"><?= esc($p['desc']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


  <!-- Timeline -->
  <section id="timeline" class="section" style="background:#f8fafc">
    <div class="container">
      <h2>المراحل والجدول الزمني</h2>
      <p class="muted">يمتد المسار من الإعداد والتسجيل مرورًا بالعروض والتحكيم، ثم الاحتضان والمسرعة.</p>
      <div class="timeline" style="margin-top:16px">
        <?php foreach($phases as $i=>$ph): ?>
          <div class="card" style="padding:16px">
            <span class="badge">المرحلة <?= $i+1 ?></span>
            <h3 style="margin:8px 0 4px 0"><?= esc($ph['title']) ?></h3>
            <div class="muted"><strong>الفترة:</strong> <?= esc($ph['period']) ?></div>
            <p class="muted" style="margin:6px 0 0 0"><?= esc($ph['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
      <div style="margin-top:12px">
        <a class="btn" href="apply.php">قدّم الآن</a>
      </div>
    </div>
  </section>

  <!-- Requirements -->
  <section id="requirements" class="section">
    <div class="container">
      <h2>الشروط والمتطلبات</h2>
      <div class="grid-3" style="margin-top:16px">
        <?php foreach($requirements as $title=>$items): ?>
          <div class="card" style="padding:16px">
            <h3 style="margin:0 0 6px 0"><?= esc($title) ?></h3>
            <ul class="muted" style="margin:0; padding:0 18px 0 0">
              <?php foreach($items as $it): ?><li><?= esc($it) ?></li><?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Criteria -->
  <section id="criteria" class="section" style="background:#f8fafc">
    <div class="container">
      <h2>معايير التحكيم</h2>
      <div class="grid-2" style="margin-top:16px">
        <?php foreach($criteria as $c): ?>
          <div class="card" style="padding:16px">
            <div class="badge">الوزن: <?= (int)$c['weight'] ?>%</div>
            <h3 style="margin:8px 0 6px 0"><?= esc($c['name']) ?></h3>
            <p class="muted" style="margin:0"><?= esc($c['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
      <p class="muted" style="margin-top:8px"><strong>إجمالي التقييم = 100%</strong></p>
    </div>
  </section>

  <!-- Incentives -->
  <section id="incentives" class="section">
    <div class="container">
      <h2>الحوافز والدعم</h2>
      <div class="grid-2" style="margin-top:16px">
        <?php foreach($incentives as $group=>$items): ?>
          <div class="card" style="padding:16px">
            <h3 style="margin:0 0 6px 0"><?= esc($group) ?></h3>
            <ul class="muted" style="margin:0; padding:0 18px 0 0">
              <?php foreach($items as $it): ?><li><?= esc($it) ?></li><?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Training -->
  <section id="training" class="section" style="background:#f8fafc">
    <div class="container">
      <h2>برامج التدريب المصاحبة</h2>
      <div class="grid-2" style="margin-top:16px">
        <?php foreach($training as $title=>$points): ?>
          <div class="card" style="padding:16px">
            <h3 style="margin:0 0 6px 0"><?= esc($title) ?></h3>
            <ul class="muted" style="margin:0; padding:0 18px 0 0">
              <?php foreach($points as $pt): ?><li><?= esc($pt) ?></li><?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Incubation & Accelerator -->
  <section id="incubation" class="section">
    <div class="container">
      <h2>الاحتضان ومسرعة الأعمال</h2>
      <div class="grid-2" style="margin-top:16px">
        <?php foreach($incubation as $title=>$points): ?>
          <div class="card" style="padding:16px">
            <h3 style="margin:0 0 6px 0"><?= esc($title) ?></h3>
            <ul class="muted" style="margin:0; padding:0 18px 0 0">
              <?php foreach($points as $pt): ?><li><?= esc($pt) ?></li><?php endforeach; ?>
            </ul>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="section" style="background:#f8fafc">
    <div class="container">
      <h2>قنوات التواصل</h2>
      <div class="card" style="padding:16px">
        <ul class="muted" style="margin:0; padding:0 18px 0 0">
          <li><strong>البريد الإلكتروني:</strong> <a href="mailto:<?= esc($site['contact']['email']) ?>"><?= esc($site['contact']['email']) ?></a></li>
          <li><strong>المنصة الإلكترونية:</strong> <?= esc($site['contact']['platform']) ?></li>
          <li><strong>هواتف المنسقين:</strong> <?= esc($site['contact']['phones']) ?></li>
        </ul>
        <div style="display:flex; gap:10px; flex-wrap:wrap; margin-top:12px">
          <?php foreach($site['contact']['social'] as $s): ?>
            <a class="btn" href="<?= esc($s['url']) ?>" target="_blank" rel="noopener"><?= esc($s['name']) ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
</main>

<footer role="contentinfo">
  <div class="container" style="display:flex; justify-content:space-between; align-items:center; gap:10px; flex-wrap:wrap">
    <small>© <?= date('Y') ?> <?= esc($site['title']) ?> — جميع الحقوق محفوظة.</small>
    <div style="display:flex; gap:10px">
      <a href="terms.php">الشروط والأحكام</a>
      <span aria-hidden="true">·</span>
      <a href="guide.php">دليل المشاركين</a>
      <span aria-hidden="true">·</span>
      <a href="#top">عودة للأعلى</a>
    </div>
  </div>
</footer>

<script>
  // سلاسة التنقل للرؤوس
  document.querySelectorAll('a[href^="#"]').forEach(a=>{
    a.addEventListener('click', e=>{
      const id = a.getAttribute('href');
      if(id && id.length>1){
        const el = document.querySelector(id);
        if(el){ e.preventDefault(); el.scrollIntoView({behavior:'smooth', block:'start'}); }
      }
    });
  });

  // احترام تفضيل تقليل الحركة
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const css = document.createElement('style'); css.textContent='*{scroll-behavior:auto!important}'; document.head.appendChild(css);
  }
</script>
</body>
</html>
