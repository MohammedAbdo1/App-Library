<?php
session_start();

// تفريغ كل المتغيرات المخزنة في الجلسة
session_unset();

// تدمير الجلسة
session_destroy();

// إعادة توجيه المستخدم إلى الصفحة الرئيسية أو أي صفحة أخرى
header("Location: http://localhost:9000");
exit();
?>