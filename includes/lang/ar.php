<?php
    function lang($phrase) {
        static $words = array (
            // ==================== components ====================
            'SITE_NAME'                 => 'نظام ادارة المدرسة ',
            'CLOSE'                     => 'اغلاق',         
            'EDIT'                      => 'تعديل',          
            'REFRESH'                   => 'تحديث',
            'SEARCH'                    => 'بحث',
            'RESET'                     => 'أعادة تعيين ',
            'SAVE'                      => 'حفظ',
            'IMG-150'                    => 'ارفع صور بالمقاسات  (150px X 150px)',
            // ====================   sidebar  ====================
            'DASHBOARD'                 => 'اللوحة',
            'ADMIN'                     => 'الادمين',
            'STUDENTS'                   => 'الطلاب',
            'PARENTS'                   => 'الاباء',
            'TEACHERS'                  => 'المعلمين',
            'STUDENTS'                  => 'المعلمين',
            'STUDENT_DETAILS'           => 'تفاصيل الطالب ',
            'ADD_NEW_STUDENT'           => 'أضافة طالب جديد', 
            'PROMOTION_STUDENTS'        => 'عروض الطلاب',
            'TEACHER'                   => 'معلم',
            'ALL_TEACHERS'              => 'كل المعلمين',
            'ADD_NEW_TEACHER'           => 'أضافة معلم جديد',
            'PAYMENT_TEACHERS'          => 'رواتب المعلمين',
            'TEACHER_DETAILS'           => 'تفاصيل المعلم',
            'PARENTS'                   => 'الأباء',
            'ALL_PARENTS'               => 'كل الأباء ',
            'ADD_NEW_PARENT'            => 'أضافة أب جديد ',
            'PARENTS_DETAILS'           => 'تفاصيل الاباء',
            'LIBRARY'                   => 'المكتبة ',
            'ALL_BOOKS'                 => 'كل الكتب ',
            'ADD_NEW_BOOK'              => 'اضافة كتاب جديد',
            'ACCOUNTS'                  => 'الحساب', 
            'ALL_FEE_COLLECTION'        => 'كل تحصيل الرسوم',
            'ALL_EXPENSES'              => 'كل المصاريف',
            'EXPENSES'                  => 'المصاريف', 
            'CLASSES'                   => 'الصفوف', 
            'ALL_CLASSES'               => 'كل الصفوف', 
            'ADD_NEW_CLASS'             => 'أضافة صف جديد', 
            'ALL_SUBJECT'               => 'كل المواد ',
            'SUBJECTS'                   => 'المواد',  
            'CLASS_ROUTINE'             => 'حصص الصف',
            'ATTENDANCE'                => 'الحضور ',  
            'EXAMS'                     => 'الامتحانات',
            'EXAMS_SCHEDULE'            => 'جدولة الامتحانات ',
            'EXAM_GRADES'               => 'درجات الامتحان',
            'TRANSPORT'                 => 'النقل',
            'HOSTEL'                    => 'المبيت', 
            'NOTES'                     => 'الملاحظات', 
            'MESSAGE'                   => 'الرسائل', 
            'UI_ELEMENTS'               => 'ui elements', 
            'ALERT'                     => 'alert', 
            'BUTTON'                    => 'button', 
            'GRID'                      => 'grid', 
            'MODEL'                     => 'model', 
            'PROGRESS_BAR'              => 'progress bar', 
            'TAB'                       => 'tab', 
            'WIDGET'                    => 'widget', 
            'NOTIFICATION_ALTER'        => 'notification alert', 
            'MAP'                       => 'الخريطة', 
            'ACCOUNT'                   => 'الحساب', 
            // ====================   header  ====================
            'NOTIFICATIONS'             => 'الأشعارات',
            'NOTIFICATION'              => 'الأشعارات',
            'FIND_SOMETHING'            => 'ابحث عن شي ما ', // placeholder in header input search
            'MY_PROFILE'                => 'ملفي',
            'TASK'                      => 'مهمة ',
            'MASSAGES'                  => 'الرسائل',
            'MASSAGE'                   => 'الرسالة',
            'ACCOUNT'                   => 'الحساب',
            'SETTING'                   => 'الضبط',
            'LOGOUT'                    => 'تسجيل الخروج',
            'SETTING'                   => 'الضبط',
            'SETTING'                   => 'الضبط',
            'TODAY'                     => 'يوم',
            'MINS'                      => 'دقا\ق',
            'AGO'                       => 'مضى',
            // ==================== home ====================
            'CATEGORIES'                => 'التصنيفات',
            'HOME'                      => 'الرئيسية ', 
            'ADMIN'                     => 'الادمن', 
            'DASHBOARD'                 => 'لوحة التحكم', 
            'TEACHERS'                  => 'المعلم', 
            'PARENTS'                   => 'الاباء', 
            'EARINGS'                   => 'الايرادات', 
            // ====================    footer   ====================
            'COPYRIGHTS'                => 'حقوق النشر', 
            'YOUR_RIGHTS'               => 'كل الحقوق محفوطة ', 
            'DESIGNED_BY'               => 'صمم من قبل ', 
            'NAME_COMPANY'              => 'يحيى رشاد', 
            // ====================  PAGE NAME   ====================
            'HOME'                      => 'الرئيسية ', //index.php
            'ADD_BOOK'                  => 'أضافة كتاب', 
            'ADD_CLASS'                 => 'أضافة صف', 
            'ADD_EXPENSE'               => 'أضافة مصاريف ', 
            'ADD_PARENTS'               => 'أضافة اباء', 
            'ADD_PARENTS'               => 'أضافة اباء', 
            'ADD_TEACHER'               => 'أضافة معلم ', 
            'ALL_BOOK'                  => 'كل الكتب', 
            'ALL_CLASS'                 => 'كل الصفوف', 
            'ALL_EXPENSE'               => 'كل المصاريف ', 
            'ALL_FEES'                  => 'كل الضرائب', 
            'ALL_PARENTS'               => 'كل الأباء', 
            'ALL_STUDENTS'              => 'كل المعلمين', 
            'ALL_SUBJECTS'              => 'كل المواد ', 
            'ALL_TEACHERS'              => 'كل المعلمين', 
            'BUTTON'                    => 'button', 
            'CLASS_ROUTINE'             => 'حصص الصف', 
            'EXAM_GRADE'                => 'درجات الامتحان', 
            'EXAM_SCHEDULE'             => 'جدول الامتحانات ', 
            'GRID'                      => 'grid', 
            'HOSTEL'                    => 'المبيت', 
            'INDEX3'                    => 'الرئيسية', 
            'INDEX4'                    => 'الرئيسية', 
            'INDEX5'                    => 'الرئيسية', 
            'LOGIN'                     => 'تسجيل الدخول', 
            'MAP'                       => 'الخريطة ', 
            'MESSAGING'                 => 'الرسائل', 
            'UI_TAB'                    => 'ul tab', 
            'UI_WIDGET'                 => 'ui widget', 
            'MODAL'                     => 'modal', 
            'NOTICE_BOARD'              => 'لوحة الملاحظات', 
            'ACCOUNT_SETTING'           => 'أعدادات الحساب', 
            'NOTIFICATION_ALERT'        => 'الأشعارات', 
            'PARENTS_DETAILS'           => 'تفاصيل الطلاب', 
            'PROGRESS_BAR'              => 'progress bar', 
            'STUDENT_ATTENDANCE'        => 'حضور الطلاب', 
            'STUDENTS_PROMOTION'        => 'ترقية الطلاب', 
            'TEACHER_DETAILS'           => 'تغاصيل المعلم', 
            'TEACHER_PAYMENT'           => 'دفعات المعلم', 
            'CURRENT_SCHOOL'            => 'المدرسة الحالية ', 
            'PREV_SCHOOL'               => 'المدرسة السابقة', 
            'JOINING_DATE'              => 'تاريخ الانضمام ', 
            'ADDRESS'                   => 'العنوان', 
            'PARENT_NAME'               => 'أسم الأب', 
            'PATENT_NUM_ID'             => 'رقم هويه الأب', 
            'PATENT_NUM_PHONE'          => 'رقم هاتف الأب', 
            'MOTHER_NAME'               => 'أسم الأم', 
            'ADD_STUDENT'               => 'أضافة طالب ',
            // ====================  ACCOUNT-SETTING.PHP   ====================
            'ADD_NEW_USER'              => 'أضافة مستخدم جديد',
            'FIRST_NAME'                => 'الأسم الأول',
            'LAST_NAME'                 => 'الأسم الخير ',
            'USER_DETAILS'              => 'تفاصيل المستخدم',
            'NAME'                      => 'الاسم',
            'USER_TYPE'                 => 'نوع المستخدم',
            'GENDER'                    => 'الجنس',
            'FATHER_NAME'               => 'اسم الأب',
            'MOTHER_NAME'               => 'اسم الأم ',
            'BIRTHDAY'                  => 'تاريخ الميلاد',
            'RELIGION'                  => 'الديانة',
            'JOINING_DATE'              => 'تاريخ الانضمام',
            'EMAIL'                     => 'البريد الالكتروني ',
            'SUBJECT'                   => 'Subject:',
            'CLASS'                     => 'الصف',
            'SECTION'                   => 'الفصل',
            'ID_NUMBER'                 => 'رقم الهويه',
            'ADDRESS'                   => 'العنوان',
            'PHONE'                     => 'الهاتف',
            'ALL_USER'                  => 'كل المستخدمين',
            // ====================  ADD-BOOK.PHP   ====================
            'ADD_NEW_BOOK'              => 'أضافة كتاب جديد',
            'BOOK_NAME'                 => 'اسم الكتاب',
            'SUBJECT'                   => 'المادة',
            'WRITER_NAME'               => 'اسم الكاتب',
            'CLASS'                     => 'الصف',
            'ID_NUMBER'                 => 'رقم الهويه',
            'PUBLISH_DATE'              => 'تاريخ النشر',
            'UPLOAD_DATE'               => 'تاريخ الرفع',
            // ====================  ADD-CLASS.PHP   ====================
            'ADD_NEW_CLASS_SCHEDULE'    => 'أضافة جدول صف جديد',
            'TEACHER_NAME'              => 'أسم المعلم',
            'ID_NUMBER'                 => 'رقم الهويه',
            'GENDER'                    => 'الجنس',
            'CLASS'                     => 'الصف',
            'SUBJECT'                   => 'المادة',
            'SECTION'                   => 'القسم',
            'DATE'                      => 'التاريخ',
            'TIME'                      => 'الوقت',
            'PHONE'                     => 'الهاتف',
            'EMAIL'                     => 'البريد الالكتروني',
            // ====================  ADD-EXPENSE.PHP   ====================
            'ADD_NEW_EXPENSE'           => 'أضافة مصروف جديد',
            'NAME'                      => 'اسم',
            'ID_NUMBER'                 => 'رقم الهويه',
            'EXPANSE_TYPE'              => 'نوع المصارف',
            'AMOUNT'                    => 'الكمية',
            'PHONE'                     => 'الهاتف',
            'EMAIL'                     => 'البريد الالكتروني',
            'STATUS'                    => 'الحالة',
            'DATE'                      => 'التاريخ',
            // ====================  ADD-PARENT.PHP   ====================
            'ADD_NEW_PARENT'            => 'أضافة أب جديد',
            'FIRST_NAME'                => 'الاسم الاول',
            'LAST_NAME'                 => 'الاسم الاخير',
            'GENDER'                    => 'الجنس',
            'OCCUPATION'                => 'المهنة',
            'ID_NUMBER'                 => 'رقم الهويه',
            'BLOOD_GROUP'               => 'فصيلة الدم',
            'RELIGION'                  => 'الديانة',
            'EMAIL'                     => 'البريد الالكتروني ',
            'ADDRESS'                   => 'العنوان',
            'PHONE'                     => 'الهاتف',
            'SHORT_BIO'                 => 'وصف قصير ',
            'SEASON'                    => 'الفصل ',
            // ====================  ADD-STUDENT.PHP   ====================
            'ADD_NEW_STUDENT'           => 'أضافة طالب جديد',
            'FULL_AR_NAME'              => 'الاسم العربي كامل',
            'EN_FULL_NAME'              => 'الاسم بالانجليزي كامل',
            'SELECT_GENDER'             => 'اختر الجنس',
            'DATE_OF_BIRTH'             => 'تاريخ الميلاد',
            'PLACE_OF_BIRTH'            => 'مكان الميلاد',
            'BLOOD_GROUP'               => 'فصيلة الدم',
            'STUDENT_EMAIL'             => 'بريد الطالب',
            'STUDENT_ID_NUMBER'         => 'رقم هويه الطالب',
            'ID_ACADEMY'                => 'الرقم الاكاديمي',
            'CLASS'                     => 'الصف',
            'CURRENT_SCHOOL'            => 'المدرسة الحالية',
            'JOINING_DATE'              => 'تاريخ الانصمام',
            'ADDRESS'                   => 'العنوان',
            'PARENT_NAME'               => 'اسم الاب',
            'PATENT_NUM_ID'             => 'رقم هويه الأب',
            'PATENT_NUM_PHONE'          => 'رقم هاتف الأب',
            'MOTHER_NAME'               => 'اسم الام ',
            'SHORT_BIO'                 => 'وصف قصير',
            // ====================  ADD-TEACHER.PHP   ====================
            'ADD_NEW_TEACHER'           => 'أضافة معلم جديد',
            'FIRST_NAME'                => 'الاسم الاول',
            'LAST_NAME'                 => 'الاسم الاخير ',
            'GENDER'                    => 'الجنس',
            'BIRTHDAY'                  => 'تاريخ الميلاد',
            'IN_NUMBER'                 => 'رقم الهويه',
            'BLOOD_GROUP'               => 'فصيلة الدم',
            'RELIGION'                  => 'الديانة',
            'EMAIL'                     => 'البريد الالكتروني ',
            'ADDRESS'                   => 'العنوان',
            'PHONE'                     => 'الهاتف',
            // ====================  ALL-BOOK.PHP   ====================
            'ALL_BOOK'                  => 'كل الكتب ',
            'SEARCH_BY_ID'              => 'البحث عن طريق المعرف',
            'SEARCH_BY_NAME'              => 'بحث طريق الاسم ',
            'SEARCH_BY_PHONE'           => 'البحث عن طريف الهاتف ',
            'SEARCH'                    => 'بحث',
            // ====================  ALL-CLASS.PHP   ====================
            'ALL_CLASS_SCHEDULES'       => 'جدول كل الصفوف',
            // ====================  ALL-EXPENSE.PHP   ====================
            'ALL_EXPENSES'              => 'كل المصاريف',
            // ====================  ALL-FESS.PHP   ====================
            'ALL_FEES_COLLECTION'       => 'تحصيل كافة الرسوم',
            'FEES'                      => 'الرسوم',
            // ====================  ALL-PARENTS.PHP   ====================
            'ALL_PARENTS_DATA'          => 'كل معلومات الاباء', 
            // ====================  ALL-STUDENT-.PHP   ====================
            'ADD_NEW_SUBJECT'           => 'اضافة مادة جديد', 
            // ====================  ALL-TEACHER-.PHP   ====================
            'ADD_TEACHERS_DATA'         => 'كل معلومات المعلمين', 
            // ====================  CLASS-ROUTINE.PHP   ====================
            'ADD_CLASS_ROUTINE'         => 'اضافة حصة ', 
            'SUBJECT_NAME'              => 'اسم مادة', 
            'SUBJECT_TYPE'              => 'نوع مادة', 
            'SELECT_CLASS'              => 'اختر الصف', 
            'SELECT_CODE'               => 'اختر الرمز', 
            'CLASS_ROUTINE'             => 'حصص الفصل', 
            // ====================  EXAM-GRADE.PHP   ====================
            'ADD_NEW_GRADE'             => 'إضافة تقدير جديد', 
            'GRADE_NAME'                => 'اسم الدرجة ', 
            'GRADE_NAME'                => 'التراكمي', 
            'PERCENTAGE_FROM'           => 'النسبة من', 
            'PERCENTAGE_UPTO'           => 'النسبة تصل ل', 
            'COMMENTS'                  => 'التعليقات', 
            'EXAM_GRADE_LISTS'          => 'قائمة درجات الامتجان', 
            'GRADE_NAME'                => 'اسم الدرجة ', 
            // ====================  EXAM-SCHEDULE.PHP   ====================
            'ALL_EXAM_SCHEDULE'         => 'جدول كل الامتحانات', 
            'ADD_NEW_EXAM'              => 'أضافة امتحان جديد', 
            'EXAM_NAME'                 => 'اسم الامتحان', 
            'SUBJECT_TYPE'              => 'نوع  المادة ', // المادة 
            'SELECT_CLASS'              => 'اختر الصف', 
            'SELECT_SEASON'             => 'اختر القسم ', 
            'SELECT_DATE'               => 'اختر التاريخ', 
            'SEARCH_BY_EXAM'            => 'بحث عن طريق الامتحان', 
            'SEARCH_BY_SUBJECT'         => 'بجث عن طريق المادة .', 
            'SEARCH_BY_DATE'            => 'بحث عن طريق التاريخ.', 
            'SUBJECT'                   => 'المادة', 
            'home'                      => 'الصف', 
            'SECTION'                   => 'الفصل', 
            'home'                      => 'الوقت', 
            'DATE'                      => 'التاريخ', 
            'OPTION'                    => 'خيارات', 
            // ====================  HOSTEL.PHP   ====================
            'ADD_NEW_ROOM'              => 'اضافة غرفة جديد', 
            'HOSTEL_NAME'               => 'اسم المبيت', 
            'ROOM_NUMBER'               => 'رقم الغرفة', 
            'ROOM_TYPE'                 => 'نوع الغرفة ', 
            'NUMBER_OF_BED'             => 'رقم السرير', 
            'COST_PER_BED'              => 'تكلفة السرير', 
            // ====================  INDEX.PHP   ====================
            'DASHBOARD_ADMIN'           => 'لوحة تحكم الادمين', 
            'HOME'                      => 'الرئيسية', 
            'ADMIN'                     => 'الادمين', 
            'STUDENTS'                  => 'الطلاب', 
            'TEACHERS'                  => 'الملعمين', 
            'PARENTS'                   => 'الاباء', 
            'EARINGS'                   => 'الايرادات', 
            'TOTAL_COLLECTIONS'         => 'إجمالي المجموعات', 
            'FEES_COLLECTION'           => 'تحصيل الرسوم', 
            'EXPENSES'                  => 'المصاريف', 
            'STUDENTS'                  => 'الطلاب', 
            'FEMALE_STUDENTS'           => 'الطلاب الاناث', 
            'MALE_STUDENTS'             => 'الطلاب الذكور', 
            'EVENT_CALENDER'            => 'تقويم الحدث', 
            'NOTICE_BOARD'              => 'لوحة الملاحظات', 
            'LIKE_ON_FACEBOOK'          => 'تابعنا على الفيس', 
            'FOLLOW_TWITTER'            => 'تابعنا على توتير ', 
            'FOLLOW_GOOGLE'             => 'تابعنا على جوجل ', 
            'FOLLOW_LINKED'             => 'تابعنا على ليبنكيد ', 
            // ====================  INDEX3.PHP   ====================
            'ALL_EXAM_RESULTS'          => 'نتائج كل الامتحانات', 
            'ATTENDANCE'                => 'الحضور', 
            'ABSENT'                    => 'غائب', 
            'PRESENT'                   => 'حاضر', 
            'EVENT_CALENDER'            => 'تقويم الحدث', 
            'NOTIFICATION'              => 'الاشعارات', 
            'STUDENT'                   => 'الطالب', 
            // ====================  INDEX4.PHP   ====================
            'DUE_FEES'                  => 'الرسوم المستحقة', 
            'NOTIFICATION'              => 'الاشعارات', 
            'RESULT'                    => 'النتائج', 
            'EXPENSES'                  => 'المصاريف', 
            'MY_KIDS'                   => ' أطفالي', 
            'NAME'                      => 'الاسم', 
            'GENDER'                    => 'الجنس ', 
            'ROLL'                      => 'قائمة ', 
            'SECTION'                   => 'الفصل', 
            'ADMISSION_ID'              => 'معرف القبول', 
            'ADMISSION_DATE'            => 'تاريخ القبول', 
            'ALL_EXAM_RESULTS'          => 'كل نتائج الامتحانات', 
            // ====================  INDEX5.PHP   ====================
            'TOTAL_STUDENTS'            => 'مجموع الطلاب', 
            'TOTAL_EXAMS'               => 'مجموع الامتحانات ', 
            'GRADUATE_STUDENTS'         => 'الدراسات العليا', 
            'TOTAL_INCOME'              => 'مجموع الايرادات', 
            'STUDENTS'                  => 'الطلاب', 
            'FEMALE_STUDENTS'           => 'الطلاب الاناث', 
            'MALE_STUDENTS'             => 'الطلاب الذكور', 
            'NOTIFICATIONS'             => 'الاشعارات', 
            'MY_STUDENTS'               => 'طلابي', 
            // ====================  MAP.PHP   ====================
            'MARKER_MAP'                => 'صانع الخريطة', 
            // ====================  massaging.php   ====================
            'WRITE_NEW_MESSAGE'         => 'كتابة رسالة جديدة', 
            'TITLE'                     => 'العنوان', 
            'RECIPIENT'                 => 'المستلم', 
            'MESSAGE'                   => 'الرسالة', 
            'SUCCESSFUL_MESSAGE'        => 'الرسائل الناجحة', 
            'SUCCESSFUL_MESSAGE_SEND'   => ' الرسائل المرسلة ', 
            'ERROR_MESSAGE'             => 'الرسائل الخطأ', 
            'SOME_REQUIRED'             => 'الحقل مطلوب هنا ', 
            // ====================  NOTICE-BOARD.PHP   ====================
            'CREATE_NOTICE'             => 'أنشاء ملاحظة', 
            'TITLE'                     => 'العوان', 
            'DETAILS'                   => 'التفاصيل', 
            'POSTED_BY'                 => ' نشر بواسطة ', 
            'DATE'                      => 'التاريخ ', 
            'NOTICE_BOARD'              => 'لوحة الملاحظات', 
            'SEARCH_BY_DATE'            => 'بحث عن طريق التاريخ', 
            'SEARCH_BY_TITLE'           => 'بحث عن طريق العنوان', 
            // ====================  PARENTS-DETAILS.PHP   ====================
            'ABOUT_ME'                  => 'معومات عني', 
            // ====================  STUDENT-ATTENDANCE.PHP   ====================
            'STUDENT_ATTENDANCE'        => 'حضور الطلاب', 
            // ====================  student-promotion.php   ====================
            'SEARCH_STUDENT_PROMOTION'  => 'ابحث عن ترقية الطالب', 
            // ====================  TEACHER-DETAILS.php   ====================
            'USERNAMWE'                 => '', 
            // ====================  TEACHER-DETAILS.php   ====================
            'TEACHERS_PAYMENT_HISTORY'  => 'سجل دفع جميع المعلمين', 
            // ====================  transport.php   ====================
            'ADD_NEW_TRANSPORT'         => 'أضف وسيلة نقل جديدة', 
            'TRANSPORT_LISTS'         => 'كل قوائم النقل', 
            'PATH'                      => 'المسار', 
            'VEHICLE_NUM'               => 'رقم الحالفة ', 
            'DRIVER_NAME'               => 'أسم السائق', 
            'LICENSE_NUM'               => 'رقم الرخصة ', 
            'PHONE_NUM'                 => 'رقم الهاتف', 
            'SEARCH_BY_ROUTE'           => 'بحث عن طريق المسار', 
            'SEARCH_BY_ID_NUM'          => 'بحث عن طريق رقم الهويه', 
            'SEARCH_BY_PHONE'           => 'بحث عن طريق رقم الهاتف', 
            // ====================  e-regestrtion.php   ====================
            'E-REGESTRTION' => 'التسجيل الألكتروني',
            'E-RESGETR_STUDENT_TEMPALTE' => 'نموذج تسجيل طالب ألكتروني',
            // ====================  LOGIN   ====================
            'USERNAME'                  => 'اسم المستخدم', 
            'ENTER_USERNAME'            => 'أدخل اسم المستخدم', 
            'PASSWORD'                  => 'كلمة السر', 
            'ENTER_PASSWORD'            => 'أدخل كلمة السر', 
            'REMEMBER_ME'               => 'تذكرني', 
            'FORGET_PASSWORD'           => 'نسيت كلمة السر ؟', 
            'LOGIN'                     => 'تسجيل الدخول '
        );
        return $words[$phrase];
    }

