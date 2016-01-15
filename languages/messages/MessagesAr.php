<?php
/** Arabic (العربية)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$linkPrefixExtension = true;
$fallback8bitEncoding = 'windows-1256';

$rtl = true;

/**
 * A list of date format preference keys which can be selected in user
 * preferences. New preference keys can be added, provided they are supported
 * by the language class's timeanddate(). Only the 5 keys listed below are
 * supported by the wikitext converter (DateFormatter.php).
 *
 * The special key "default" is an alias for either dmy or mdy depending on
 * $wgAmericanDates
 */
$datePreferences = array(
	'default',
	'mdy',
	'dmy',
	'ymd',
	'hijri',
	'ISO 8601',
	'jMY',
);

/**
 * The date format to use for generated dates in the user interface.
 * This may be one of the above date preferences, or the special value
 * "dmy or mdy", which uses mdy if $wgAmericanDates is true, and dmy
 * if $wgAmericanDates is false.
 */
$defaultDateFormat = 'dmy or mdy';

/**
 * Associative array mapping old numeric date formats, which may still be
 * stored in user preferences, to the new string formats.
 */
$datePreferenceMigrationMap = array(
	'default',
	'mdy',
	'dmy',
	'ymd'
);

/**
 * These are formats for dates generated by MediaWiki (as opposed to the wikitext
 * DateFormatter). Documentation for the format string can be found in
 * Language.php, search for sprintfDate.
 *
 * This array is automatically inherited by all subclasses. Individual keys can be
 * overridden.
 */
$dateFormats = array(
	'mdy time' => 'H:i',
	'mdy date' => 'xg j، Y', # Arabic comma
	'mdy both' => 'H:i، xg j، Y', # Arabic comma

	'dmy time' => 'H:i',
	'dmy date' => 'j xg Y',
	'dmy both' => 'H:i، j xg Y', # Arabic comma

	'ymd time' => 'H:i',
	'ymd date' => 'Y xg j',
	'ymd both' => 'H:i، Y xg j', # Arabic comma

	'hijri time' => 'H:i',
	'hijri date' => 'xmj xmF xmY',
	'hijri both' => 'H:i، xmj xmF xmY',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',

	'jMY time' => 'H:i',
	'jMY date' => 'j M Y',
	'jMY both' => 'H:i، j M Y', # Arabic comma
);

$digitTransformTable = array(
	'0' => '٠', # &#x0660;
	'1' => '١', # &#x0661;
	'2' => '٢', # &#x0662;
	'3' => '٣', # &#x0663;
	'4' => '٤', # &#x0664;
	'5' => '٥', # &#x0665;
	'6' => '٦', # &#x0666;
	'7' => '٧', # &#x0667;
	'8' => '٨', # &#x0668;
	'9' => '٩', # &#x0669;
	'.' => '٫', # &#x066b; wrong table ?
	',' => '٬', # &#x066c;
);

$namespaceNames = array(
	NS_MEDIA            => 'ميديا',
	NS_SPECIAL          => 'خاص',
	NS_TALK             => 'نقاش',
	NS_USER             => 'مستخدم',
	NS_USER_TALK        => 'نقاش_المستخدم',
	NS_PROJECT_TALK     => 'نقاش_$1',
	NS_FILE             => 'ملف',
	NS_FILE_TALK        => 'نقاش_الملف',
	NS_MEDIAWIKI        => 'ميدياويكي',
	NS_MEDIAWIKI_TALK   => 'نقاش_ميدياويكي',
	NS_TEMPLATE         => 'قالب',
	NS_TEMPLATE_TALK    => 'نقاش_القالب',
	NS_HELP             => 'مساعدة',
	NS_HELP_TALK        => 'نقاش_المساعدة',
	NS_CATEGORY         => 'تصنيف',
	NS_CATEGORY_TALK    => 'نقاش_التصنيف',
);

$namespaceAliases = array(
	'وسائط' => NS_MEDIA,
	'صورة' => NS_FILE,
	'نقاش_الصورة' => NS_FILE_TALK,
);

$namespaceGenderAliases = array(
	NS_USER => array(
		'male' => 'مستخدم',
		'female' => 'مستخدمة'
	),
	NS_USER_TALK => array(
		'male' => 'نقاش_المستخدم',
		'female' => 'نقاش_المستخدمة'
	),
);

$magicWords = array(
	'redirect'                  => array( '0', '#تحويل', '#REDIRECT' ),
	'notoc'                     => array( '0', '__لافهرس__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__لامعرض__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__لصق_فهرس__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__فهرس__', '__TOC__' ),
	'noeditsection'             => array( '0', '__لاتحريرقسم__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'شهر_حالي', 'شهر_حالي2', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'شهر_حالي1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'اسم_الشهر_الحالي', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'اسم_الشهر_الحالي_المولد', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'اختصار_الشهر_الحالي', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'يوم_حالي', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'يوم_حالي2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'اسم_اليوم_الحالي', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'عام_حالي', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'وقت_حالي', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'ساعة_حالية', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'شهر_محلي', 'شهر_محلي2', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'شهر_محلي1', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'اسم_الشهر_المحلي', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'اسم_الشهر_المحلي_المولد', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'اختصار_الشهر_المحلي', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'يوم_محلي', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'يوم_محلي2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'اسم_اليوم_المحلي', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'عام_محلي', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'وقت_محلي', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'ساعة_محلية', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'عدد_الصفحات', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'عدد_المقالات', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'عدد_الملفات', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'عدد_المستخدمين', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'عدد_المستخدمين_النشطين', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'عدد_التعديلات', 'NUMBEROFEDITS' ),
	'pagename'                  => array( '1', 'اسم_الصفحة', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'عنوان_الصفحة', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'نطاق', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'عنوان_نطاق', 'NAMESPACEE' ),
	'namespacenumber'           => array( '1', 'عدد_نطاق', 'NAMESPACENUMBER' ),
	'talkspace'                 => array( '1', 'نطاق_النقاش', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'عنوان_النقاش', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'نطاق_الموضوع', 'نطاق_المقالة', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'عنوان_نطاق_الموضوع', 'عنوان_نطاق_المقالة', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'اسم_الصفحة_الكامل', 'اسم_صفحة_كامل', 'اسم_كامل', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'عنوان_الصفحة_الكامل', 'عنوان_صفحة_كامل', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'اسم_الصفحة_الفرعي', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'عنوان_الصفحة_الفرعي', 'SUBPAGENAMEE' ),
	'rootpagename'              => array( '1', 'جذر_اسم_الصفحة', 'ROOTPAGENAME' ),
	'rootpagenamee'             => array( '1', 'عنوان_جذر_الصفحة', 'ROOTPAGENAMEE' ),
	'basepagename'              => array( '1', 'اسم_الصفحة_الأساسي', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'عنوان_الصفحة_الأساسي', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'اسم_صفحة_النقاش', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'عنوان_صفحة_النقاش', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'اسم_صفحة_الموضوع', 'اسم_صفحة_المقالة', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'عنوان_صفحة_الموضوع', 'عنوان_صفحة_المقالة', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                       => array( '0', 'رسالة:', 'MSG:' ),
	'subst'                     => array( '0', 'نسخ:', 'SUBST:' ),
	'safesubst'                 => array( '0', 'نسخ_آمن:', 'SAFESUBST:' ),
	'msgnw'                     => array( '0', 'رسالة_بدون_تهيئة:', 'MSGNW:' ),
	'img_thumbnail'             => array( '1', 'تصغير', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'تصغير=$1', 'مصغر=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'يمين', 'right' ),
	'img_left'                  => array( '1', 'يسار', 'left' ),
	'img_none'                  => array( '1', 'بدون', 'بلا', 'none' ),
	'img_width'                 => array( '1', '$1بك', '$1عن', '$1px' ),
	'img_center'                => array( '1', 'مركز', 'center', 'centre' ),
	'img_framed'                => array( '1', 'إطار', 'بإطار', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'لاإطار', 'frameless' ),
	'img_lang'                  => array( '1', 'لغة=$1', 'lang=$1' ),
	'img_page'                  => array( '1', 'صفحة=$1', 'صفحة_$1', 'page=$1', 'page $1' ),
	'img_upright'               => array( '1', 'معدول', 'معدول=$1', 'معدول_$1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'                => array( '1', 'حدود', 'border' ),
	'img_baseline'              => array( '1', 'خط_أساسي', 'baseline' ),
	'img_sub'                   => array( '1', 'فرعي', 'sub' ),
	'img_super'                 => array( '1', 'سوبر', 'سب', 'super', 'sup' ),
	'img_top'                   => array( '1', 'أعلى', 'top' ),
	'img_text_top'              => array( '1', 'نص_أعلى', 'text-top' ),
	'img_middle'                => array( '1', 'وسط', 'middle' ),
	'img_bottom'                => array( '1', 'أسفل', 'bottom' ),
	'img_text_bottom'           => array( '1', 'نص_أسفل', 'text-bottom' ),
	'img_link'                  => array( '1', 'وصلة=$1', 'رابط=$1', 'link=$1' ),
	'img_alt'                   => array( '1', 'بديل=$1', 'alt=$1' ),
	'img_class'                 => array( '1', 'رتبة=$1', 'class=$1' ),
	'int'                       => array( '0', 'محتوى:', 'INT:' ),
	'sitename'                  => array( '1', 'اسم_الموقع', 'SITENAME' ),
	'ns'                        => array( '0', 'نط:', 'NS:' ),
	'nse'                       => array( '0', 'نطم:', 'NSE:' ),
	'localurl'                  => array( '0', 'مسار_محلي:', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'عنوان_المسار_المحلي:', 'LOCALURLE:' ),
	'articlepath'               => array( '0', 'مسار_المقالة', 'ARTICLEPATH' ),
	'pageid'                    => array( '0', 'رقم_صفحة', 'PAGEID' ),
	'server'                    => array( '0', 'خادم', 'SERVER' ),
	'servername'                => array( '0', 'اسم_الخادم', 'SERVERNAME' ),
	'scriptpath'                => array( '0', 'مسار_السكريبت', 'مسار_سكريبت', 'SCRIPTPATH' ),
	'stylepath'                 => array( '0', 'مسار_الهيئة', 'STYLEPATH' ),
	'grammar'                   => array( '0', 'قواعد_اللغة:', 'GRAMMAR:' ),
	'gender'                    => array( '0', 'نوع:', 'GENDER:' ),
	'notitleconvert'            => array( '0', '__لاتحويل_عنوان__', '__لاتع__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'          => array( '0', '__لاتحويل_محتوى__', '__لاتم__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'               => array( '1', 'أسبوع_حالي', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'يوم_حالي_مأ', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'أسبوع_محلي', 'LOCALWEEK' ),
	'localdow'                  => array( '1', 'يوم_محلي_مأ', 'LOCALDOW' ),
	'revisionid'                => array( '1', 'رقم_المراجعة', 'REVISIONID' ),
	'revisionday'               => array( '1', 'يوم_المراجعة', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'يوم_المراجعة2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'شهر_المراجعة', 'REVISIONMONTH' ),
	'revisionmonth1'            => array( '1', 'شهر_المراجعة1', 'REVISIONMONTH1' ),
	'revisionyear'              => array( '1', 'عام_المراجعة', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'طابع_وقت_المراجعة', 'REVISIONTIMESTAMP' ),
	'revisionuser'              => array( '1', 'مستخدم_المراجعة', 'REVISIONUSER' ),
	'revisionsize'              => array( '1', 'حجم_المراجعة', 'REVISIONSIZE' ),
	'plural'                    => array( '0', 'جمع:', 'PLURAL:' ),
	'fullurl'                   => array( '0', 'عنوان_كامل:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'مسار_كامل:', 'FULLURLE:' ),
	'canonicalurl'              => array( '0', 'عنوان_قاعدة:', 'CANONICALURL:' ),
	'canonicalurle'             => array( '0', 'مسار_قاعدة:', 'CANONICALURLE:' ),
	'lcfirst'                   => array( '0', 'عنوان_كبير:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'عنوان_صغير:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'صغير:', 'LC:' ),
	'uc'                        => array( '0', 'كبير:', 'UC:' ),
	'raw'                       => array( '0', 'خام:', 'RAW:' ),
	'displaytitle'              => array( '1', 'عرض_العنوان', 'DISPLAYTITLE' ),
	'rawsuffix'                 => array( '1', 'أر', 'آر', 'R' ),
	'nocommafysuffix'           => array( '0', 'لا_سيب', 'NOSEP' ),
	'newsectionlink'            => array( '1', '__وصلة_قسم_جديد__', '__NEWSECTIONLINK__' ),
	'nonewsectionlink'          => array( '1', 'لا_وصلة_قسم_جديد__', '__NONEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'نسخة_حالية', 'CURRENTVERSION' ),
	'urlencode'                 => array( '0', 'كود_المسار:', 'URLENCODE:' ),
	'anchorencode'              => array( '0', 'كود_الأنكور', 'ANCHORENCODE' ),
	'currenttimestamp'          => array( '1', 'طابع_الوقت_الحالي', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'طابع_الوقت_المحلي', 'LOCALTIMESTAMP' ),
	'directionmark'             => array( '1', 'علامة_الاتجاه', 'علامة_اتجاه', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'                  => array( '0', '#لغة:', '#LANGUAGE:' ),
	'contentlanguage'           => array( '1', 'لغة_المحتوى', 'لغة_محتوى', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'صفحات_في_نطاق:', 'صفحات_في_نط:', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'عدد_الإداريين', 'NUMBEROFADMINS' ),
	'formatnum'                 => array( '0', 'صيغة_رقم', 'FORMATNUM' ),
	'padleft'                   => array( '0', 'باد_يسار', 'PADLEFT' ),
	'padright'                  => array( '0', 'باد_يمين', 'PADRIGHT' ),
	'special'                   => array( '0', 'خاص', 'special' ),
	'speciale'                  => array( '0', 'عنوان_خاص', 'speciale' ),
	'defaultsort'               => array( '1', 'ترتيب_افتراضي:', 'مفتاح_ترتيب_افتراضي:', 'ترتيب_تصنيف_افتراضي:', 'ترتيب_غيابي:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                  => array( '0', 'مسار_الملف:', 'FILEPATH:' ),
	'tag'                       => array( '0', 'وسم', 'tag' ),
	'hiddencat'                 => array( '1', '__تصنيف_مخفي__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'صفحات_في_التصنيف', 'صفحات_في_تصنيف', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'حجم_الصفحة', 'PAGESIZE' ),
	'index'                     => array( '1', '__فهرسة__', '__INDEX__' ),
	'noindex'                   => array( '1', '__لافهرسة__', '__NOINDEX__' ),
	'numberingroup'             => array( '1', 'عدد_في_المجموعة', 'عدد_في_مجموعة', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'            => array( '1', '__تحويلة_إستاتيكية__', '__تحويلة_ساكنة__', '__STATICREDIRECT__' ),
	'protectionlevel'           => array( '1', 'مستوى_الحماية', 'PROTECTIONLEVEL' ),
	'cascadingsources'          => array( '1', 'مصادر_مضمنة', 'CASCADINGSOURCES' ),
	'formatdate'                => array( '0', 'تهيئة_التاريخ', 'تهيئة_تاريخ', 'formatdate', 'dateformat' ),
	'url_path'                  => array( '0', 'مسار', 'PATH' ),
	'url_wiki'                  => array( '0', 'ويكي', 'WIKI' ),
	'url_query'                 => array( '0', 'استعلام', 'QUERY' ),
	'defaultsort_noerror'       => array( '0', 'لاخطأ', 'noerror' ),
	'defaultsort_noreplace'     => array( '0', 'لاتستبدل', 'noreplace' ),
	'displaytitle_noerror'      => array( '0', 'لا_خطأ', 'noerror' ),
	'displaytitle_noreplace'    => array( '0', 'لااستبدال', 'noreplace' ),
	'pagesincategory_all'       => array( '0', 'كل', 'all' ),
	'pagesincategory_pages'     => array( '0', 'صفحات', 'pages' ),
	'pagesincategory_subcats'   => array( '0', 'تصنيفات_فرعية', 'subcats' ),
	'pagesincategory_files'     => array( '0', 'ملفات', 'files' ),
);

$specialPageAliases = array(
	'Activeusers'               => array( 'مستخدمون_نشطون' ),
	'Allmessages'               => array( 'كل_الرسائل' ),
	'AllMyUploads'              => array( 'كل_ملفاتي' ),
	'Allpages'                  => array( 'كل_الصفحات' ),
	'ApiHelp'                   => array( 'مساعدة_إيه_بي_آي' ),
	'Ancientpages'              => array( 'صفحات_قديمة' ),
	'Badtitle'                  => array( 'عنوان_سيئ' ),
	'Blankpage'                 => array( 'صفحة_فارغة' ),
	'Block'                     => array( 'منع', 'منع_أيبي', 'منع_مستخدم' ),
	'Booksources'               => array( 'مصادر_كتاب' ),
	'BrokenRedirects'           => array( 'تحويلات_مكسورة' ),
	'Categories'                => array( 'تصنيفات' ),
	'ChangeEmail'               => array( 'تغيير_البريد' ),
	'ChangePassword'            => array( 'تغيير_كلمة_السر', 'ضبط_كلمة_السر' ),
	'ComparePages'              => array( 'مقارنة_الصفحات' ),
	'Confirmemail'              => array( 'تأكيد_البريد' ),
	'Contributions'             => array( 'مساهمات' ),
	'CreateAccount'             => array( 'إنشاء_حساب' ),
	'Deadendpages'              => array( 'صفحات_نهاية_مسدودة' ),
	'DeletedContributions'      => array( 'مساهمات_محذوفة' ),
	'Diff'                      => array( 'فرق' ),
	'DoubleRedirects'           => array( 'تحويلات_مزدوجة' ),
	'EditWatchlist'             => array( 'تعديل_قائمة_المراقبة' ),
	'Emailuser'                 => array( 'مراسلة_المستخدم' ),
	'ExpandTemplates'           => array( 'فرد_القوالب' ),
	'Export'                    => array( 'تصدير' ),
	'Fewestrevisions'           => array( 'الأقل_تعديلا' ),
	'FileDuplicateSearch'       => array( 'بحث_ملف_مكرر' ),
	'Filepath'                  => array( 'مسار_ملف' ),
	'Import'                    => array( 'استيراد' ),
	'Invalidateemail'           => array( 'تعطيل_البريد_الإلكتروني' ),
	'JavaScriptTest'            => array( 'اختبار_جافا_سكريبت' ),
	'BlockList'                 => array( 'قائمة_المنع', 'عرض_المنع', 'قائمة_منع_أيبي' ),
	'LinkSearch'                => array( 'بحث_الوصلات' ),
	'Listadmins'                => array( 'عرض_الإداريين' ),
	'Listbots'                  => array( 'عرض_البوتات' ),
	'Listfiles'                 => array( 'عرض_الملفات', 'قائمة_الملفات', 'قائمة_الصور' ),
	'Listgrouprights'           => array( 'عرض_صلاحيات_المجموعات', 'صلاحيات_مجموعات_المستخدمين' ),
	'Listredirects'             => array( 'عرض_التحويلات' ),
	'ListDuplicatedFiles'       => array( 'عرض_الملفات_المكررة', 'عرض_تكرار_الملفات' ),
	'Listusers'                 => array( 'عرض_المستخدمين', 'قائمة_المستخدمين' ),
	'Lockdb'                    => array( 'غلق_قب' ),
	'Log'                       => array( 'سجل', 'سجلات' ),
	'Lonelypages'               => array( 'صفحات_وحيدة', 'صفحات_يتيمة' ),
	'Longpages'                 => array( 'صفحات_طويلة' ),
	'MediaStatistics'           => array( 'إحصاءات_الميديا' ),
	'MergeHistory'              => array( 'دمج_التاريخ' ),
	'MIMEsearch'                => array( 'بحث_ميم' ),
	'Mostcategories'            => array( 'الأكثر_تصنيفا' ),
	'Mostimages'                => array( 'أكثر_الملفات_وصلا', 'أكثر_الملفات', 'أكثر_الصور' ),
	'Mostinterwikis'            => array( 'الأكثر_إنترويكي' ),
	'Mostlinked'                => array( 'أكثر_الصفحات_وصلا', 'الأكثر_وصلا' ),
	'Mostlinkedcategories'      => array( 'أكثر_التصنيفات_وصلا', 'أكثر_التصنيفات_استخداما' ),
	'Mostlinkedtemplates'       => array( 'أكثر_القوالب_وصلا', 'أكثر_القوالب_استخداما' ),
	'Mostrevisions'             => array( 'الأكثر_تعديلا' ),
	'Movepage'                  => array( 'نقل_صفحة' ),
	'Mycontributions'           => array( 'مساهماتي' ),
	'MyLanguage'                => array( 'لغتي' ),
	'Mypage'                    => array( 'صفحتي' ),
	'Mytalk'                    => array( 'نقاشي' ),
	'Myuploads'                 => array( 'رفوعاتي' ),
	'Newimages'                 => array( 'ملفات_جديدة', 'صور_جديدة' ),
	'Newpages'                  => array( 'صفحات_جديدة' ),
	'PagesWithProp'             => array( 'صفحات_بخاصية' ),
	'PageLanguage'              => array( 'لغة_الصفحة' ),
	'PasswordReset'             => array( 'إعادة_ضبط_كلمة_السر' ),
	'PermanentLink'             => array( 'وصلة_دائمة', 'رابط_دائم' ),
	'Preferences'               => array( 'تفضيلات' ),
	'Prefixindex'               => array( 'فهرس_بادئة' ),
	'Protectedpages'            => array( 'صفحات_محمية' ),
	'Protectedtitles'           => array( 'عناوين_محمية' ),
	'Randompage'                => array( 'عشوائي', 'صفحة_عشوائية' ),
	'RandomInCategory'          => array( 'عشوائي_في_تصنيف' ),
	'Randomredirect'            => array( 'تحويلة_عشوائية' ),
	'Randomrootpage'            => array( 'صفحة_جذر_عشوائية' ),
	'Recentchanges'             => array( 'أحدث_التغييرات' ),
	'Recentchangeslinked'       => array( 'أحدث_التغييرات_الموصولة', 'تغييرات_مرتبطة' ),
	'Redirect'                  => array( 'تحويل' ),
	'ResetTokens'               => array( 'إعادة_ضبط_المفاتيح' ),
	'Revisiondelete'            => array( 'حذف_مراجعة', 'حذف_نسخة' ),
	'RunJobs'                   => array( 'تشغيل_الوظائف' ),
	'Search'                    => array( 'بحث' ),
	'Shortpages'                => array( 'صفحات_قصيرة' ),
	'Specialpages'              => array( 'صفحات_خاصة' ),
	'Statistics'                => array( 'إحصاءات' ),
	'Tags'                      => array( 'وسوم' ),
	'TrackingCategories'        => array( 'تصنيفات_التتبع' ),
	'Unblock'                   => array( 'رفع_منع' ),
	'Uncategorizedcategories'   => array( 'تصنيفات_غير_مصنفة' ),
	'Uncategorizedimages'       => array( 'ملفات_غير_مصنفة', 'صور_غير_مصنفة' ),
	'Uncategorizedpages'        => array( 'صفحات_غير_مصنفة' ),
	'Uncategorizedtemplates'    => array( 'قوالب_غير_مصنفة' ),
	'Undelete'                  => array( 'استرجاع' ),
	'Unlockdb'                  => array( 'فتح_قب' ),
	'Unusedcategories'          => array( 'تصنيفات_غير_مستخدمة' ),
	'Unusedimages'              => array( 'ملفات_غير_مستخدمة', 'صور_غير_مستخدمة' ),
	'Unusedtemplates'           => array( 'قوالب_غير_مستخدمة' ),
	'Unwatchedpages'            => array( 'صفحات_غير_مراقبة' ),
	'Upload'                    => array( 'رفع' ),
	'UploadStash'               => array( 'رفع_مخفي' ),
	'Userlogin'                 => array( 'دخول_المستخدم' ),
	'Userlogout'                => array( 'خروج_المستخدم' ),
	'Userrights'                => array( 'صلاحيات_المستخدم', 'ترقية_مدير_نظام', 'ترقية_بوت' ),
	'Version'                   => array( 'نسخة' ),
	'Wantedcategories'          => array( 'تصنيفات_مطلوبة' ),
	'Wantedfiles'               => array( 'ملفات_مطلوبة' ),
	'Wantedpages'               => array( 'صفحات_مطلوبة', 'وصلات_مكسورة' ),
	'Wantedtemplates'           => array( 'قوالب_مطلوبة' ),
	'Watchlist'                 => array( 'قائمة_المراقبة' ),
	'Whatlinkshere'             => array( 'ماذا_يصل_هنا' ),
	'Withoutinterwiki'          => array( 'بدون_إنترويكي' ),
);

/**
 * Regular expression matching the "link trail", e.g. "ed" in [[Toast]]ed, as
 * the first group, and the remainder of the string as the second group. Modified to match
 * Arabic trails too.
 */
$linkTrail = '/^([a-zء-ي]+)(.*)$/sDu';

$imageFiles = array(
	'button-bold'     => 'ar/button_bold.png',
	'button-italic'   => 'ar/button_italic.png',
	'button-link'     => 'ar/button_link.png',
	'button-headline' => 'ar/button_headline.png',
	'button-nowiki'   => 'ar/button_nowiki.png',
);

