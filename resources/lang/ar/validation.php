<?php

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

return [
    'accepted'             => 'يجب قبول.',
    'accepted_if'          => 'يجب قبول في حالة :other يساوي :value.',
    'active_url'           => 'الحقل لا يُمثّل رابطًا صحيحًا.',
    'after'                => 'يجب على الحقل أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal'       => 'الحقل يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha'                => 'يجب أن لا يحتوي الحقل سوى على حروف.',
    'alpha_dash'           => 'يجب أن لا يحتوي الحقل سوى على حروف، أرقام ومطّات.',
    'alpha_num'            => 'يجب أن يحتوي الحقل على حروفٍ وأرقامٍ فقط.',
    'array'                => 'يجب أن يكون الحقل ًمصفوفة.',
    'before'               => 'يجب على الحقل أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal'      => 'الحقل يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date.',
    'between'              => [
        'array'   => 'يجب أن يحتوي الحقل على عدد من العناصر بين :min و :max.',
        'file'    => 'يجب أن يكون حجم ملف الحقل بين :min و :max كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل بين :min و :max.',
        'string'  => 'يجب أن يكون عدد حروف نّص الحقل بين :min و :max.',
    ],
    'boolean'              => 'يجب أن تكون قيمة الحقل إما true أو false .',
    'confirmed'            => 'الحقل التأكيد غير مُطابق للالحقل.',
    'current_password'     => 'كلمة المرور غير صحيحة.',
    'date'                 => 'الحقل ليس تاريخًا صحيحًا.',
    'date_equals'          => 'يجب أن يكون الحقل مطابقاً للتاريخ :date.',
    'date_format'          => 'لا يتوافق الحقل مع الشكل :format.',
    'declined'             => 'يجب رفض.',
    'declined_if'          => 'يجب رفض عندما يكون :other بقيمة :value.',
    'different'            => 'يجب أن يكون الالحقلان و :other مُختلفين.',
    'digits'               => 'يجب أن يحتوي الحقل على :digits رقمًا/أرقام.',
    'digits_between'       => 'يجب أن يحتوي الحقل بين :min و :max رقمًا/أرقام .',
    'dimensions'           => 'الحق يحتوي على أبعاد صورة غير صالحة.',
    'distinct'             => 'للالحقل قيمة مُكرّرة.',
    'email'                => 'يجب أن يكون الحقل عنوان بريد إلكتروني صحيح البُنية.',
    'ends_with'            => 'يجب أن ينتهي الحقل بأحد القيم التالية: :values',
    'enum'                 => 'الحقل المختار غير صالح.',
    'exists'               => 'القيمة المحددة غير موجودة.',
    'file'                 => 'الالحقل يجب أن يكون ملفا.',
    'filled'               => 'الحقل إجباري.',
    'gt'                   => [
        'array'   => 'يجب أن يحتوي الحقل على أكثر من :value عناصر/عنصر.',
        'file'    => 'يجب أن يكون حجم ملف الحقل أكبر من :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل أكبر من :value.',
        'string'  => 'يجب أن يكون طول نّص الحقل أكثر من :value حروفٍ/حرفًا.',
    ],
    'gte'                  => [
        'array'   => 'يجب أن يحتوي الحقل على الأقل على :value عُنصرًا/عناصر.',
        'file'    => 'يجب أن يكون حجم ملف الحقل على الأقل :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل مساوية أو أكبر من :value.',
        'string'  => 'يجب أن يكون طول نص الحقل على الأقل :value حروفٍ/حرفًا.',
    ],
    'image'                => 'يجب أن يكون الحقل صورةً.',
    'in'                   => 'الحقل غير موجود.',
    'in_array'             => 'الحقل غير موجود في :other.',
    'integer'              => 'يجب أن يكون الحقل عددًا صحيحًا.',
    'ip'                   => 'يجب أن يكون الحقل عنوان IP صحيحًا.',
    'ipv4'                 => 'يجب أن يكون الحقل عنوان IPv4 صحيحًا.',
    'ipv6'                 => 'يجب أن يكون الحقل عنوان IPv6 صحيحًا.',
    'json'                 => 'يجب أن يكون الحقل نصًا من نوع JSON.',
    'lt'                   => [
        'array'   => 'يجب أن يحتوي الحقل على أقل من :value عناصر/عنصر.',
        'file'    => 'يجب أن يكون حجم ملف الحقل أصغر من :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل أصغر من :value.',
        'string'  => 'يجب أن يكون طول نّص الحقل أقل من :value حروفٍ/حرفًا.',
    ],
    'lte'                  => [
        'array'   => 'يجب أن لا يحتوي الحقل على أكثر من :value عناصر/عنصر.',
        'file'    => 'يجب أن لا يتجاوز حجم ملف الحقل :value كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل مساوية أو أصغر من :value.',
        'string'  => 'يجب أن لا يتجاوز طول نّص الحقل :value حروفٍ/حرفًا.',
    ],
    'mac_address'          => 'الالحقل يجب أن يكون عنوان MAC صالحاً.',
    'max'                  => [
        'array'   => 'يجب أن لا يحتوي الحقل على أكثر من :max عناصر/عنصر.',
        'file'    => 'يجب أن لا يتجاوز حجم ملف الحقل :max كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل مساوية أو أصغر من :max.',
        'string'  => 'يجب أن لا يتجاوز طول نّص الحقل :max حروفٍ/حرفًا.',
    ],
    'mimes'                => 'يجب أن يكون ملفًا من نوع : :values.',
    'mimetypes'            => 'يجب أن يكون ملفًا من نوع : :values.',
    'min'                  => [
        'array'   => 'يجب أن يحتوي الحقل على الأقل على :min عُنصرًا/عناصر.',
        'file'    => 'يجب أن يكون حجم ملف الحقل على الأقل :min كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل مساوية أو أكبر من :min.',
        'string'  => 'يجب أن يكون طول نص الحقل على الأقل :min حروفٍ/حرفًا.',
    ],
    'multiple_of'          => 'الحقل يجب أن يكون من مضاعفات :value',
    'not_in'               => 'عنصر الالحقل غير صحيح.',
    'not_regex'            => 'صيغة الحقل غير صحيحة.',
    'numeric'              => 'يجب على الحقل أن يكون رقمًا.',
    'password'             => 'كلمة المرور غير صحيحة.',
    'present'              => 'يجب تقديم الحقل.',
    'prohibited'           => 'الحقل محظور.',
    'prohibited_if'        => 'الحقل محظور إذا كان :other هو :value.',
    'prohibited_unless'    => 'الحقل محظور ما لم يكن :other ضمن :values.',
    'prohibits'            => 'الالحقل يحظر تواجد الالحقل :other.',
    'regex'                => 'صيغة الحقل .غير صحيحة.',
    'required'             => 'الحقل مطلوب.',
    'required_if'          => 'الحقل مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless'      => 'الحقل مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with'        => 'الحقل مطلوب إذا توفّر :values.',
    'required_with_all'    => 'الحقل مطلوب إذا توفّر :values.',
    'required_without'     => 'الحقل مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => 'الحقل مطلوب إذا لم يتوفّر :values.',
    'same'                 => 'يجب أن يتطابق الحقل مع :other.',
    'size'                 => [
        'array'   => 'يجب أن يحتوي الحقل على :size عنصرٍ/عناصر بالضبط.',
        'file'    => 'يجب أن يكون حجم ملف الحقل :size كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة الحقل مساوية لـ :size.',
        'string'  => 'يجب أن يحتوي نص الحقل على :size حروفٍ/حرفًا بالضبط.',
    ],
    'starts_with'          => 'يجب أن يبدأ الحقل بأحد القيم التالية: :values',
    'string'               => 'يجب أن يكون الحقل نصًا.',
    'timezone'             => 'يجب أن يكون الحقل نطاقًا زمنيًا صحيحًا.',
    'unique'               => 'قيمة الحقل مُستخدمة من قبل.',
    'uploaded'             => 'فشل في تحميل الـ.',
    'url'                  => 'صيغة رابط الحقل غير صحيحة.',
    'uuid'                 => 'الحقل يجب أن يكون بصيغة UUID سليمة.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];