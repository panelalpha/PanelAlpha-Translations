<?php

return [

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

    'accepted' => 'השדה :attribute חייב להיות מאושר.',
    'accepted_if' => 'השדה :attribute חייב להיות מאושר כאשר :other הוא :value.',
    'active_url' => 'השדה :attribute אינו כתובת אתר תקינה.',
    'after' => 'השדה :attribute חייב להיות תאריך אחרי :date.',
    'after_or_equal' => 'השדה :attribute חייב להיות תאריך אחרי או שווה ל-:date.',
    'alpha' => 'השדה :attribute חייב להכיל רק אותיות.',
    'alpha_dash' => 'השדה :attribute חייב להכיל רק אותיות, מספרים, מקפים וקווים תחתונים.',
    'alpha_num' => 'השדה :attribute חייב להכיל רק אותיות ומספרים.',
    'array' => 'השדה :attribute חייב להיות מערך.',
    'before' => 'השדה :attribute חייב להיות תאריך לפני :date.',
    'before_or_equal' => 'השדה :attribute חייב להיות תאריך לפני או שווה ל-:date.',
    'between' => [
        'numeric' => 'השדה :attribute חייב להיות בין :min ל-:max.',
        'file' => 'השדה :attribute חייב להיות בין :min ל-:max קילובייט.',
        'string' => 'השדה :attribute חייב להיות בין :min ל-:max תווים.',
        'array' => 'השדה :attribute חייב להכיל בין :min ל-:max פריטים.',
    ],
    'boolean' => 'השדה :attribute חייב להיות אמת או שקר.',
    'confirmed' => 'אימות השדה :attribute אינו תואם.',
    'current_password' => 'הסיסמה שגויה.',
    'date' => 'השדה :attribute אינו תאריך תקף.',
    'date_equals' => 'השדה :attribute חייב להיות תאריך זהה ל-:date.',
    'date_format' => 'השדה :attribute אינו תואם את הפורמט :format.',
    'declined' => 'השדה :attribute חייב להידחות.',
    'declined_if' => 'השדה :attribute חייב להידחות כאשר :other הוא :value.',
    'different' => 'השדה :attribute וה-:other חייבים להיות שונים.',
    'digits' => 'השדה :attribute חייב להיות בעל :digits ספרות.',
    'digits_between' => 'השדה :attribute חייב להיות בין :min ל-:max ספרות.',
    'dimensions' => 'לשדה :attribute יש ממדי תמונה לא תקינים.',
    'distinct' => 'לשדה :attribute יש ערך כפול.',
    'email' => 'השדה :attribute חייב להיות כתובת אימייל תקינה.',
    'ends_with' => 'השדה :attribute חייב להסתיים באחד מהערכים הבאים: :values.',
    'enum' => 'הערך שנבחר ב-:attribute אינו חוקי.',
    'exists' => 'הערך שנבחר ב-:attribute אינו תקף.',
    'file' => 'השדה :attribute חייב להיות קובץ.',
    'filled' => 'השדה :attribute חייב להכיל ערך.',
    'gt' => [
        'numeric' => 'השדה :attribute חייב להיות גדול מ-:value.',
        'file' => 'השדה :attribute חייב להיות גדול מ-:value קילובייט.',
        'string' => 'השדה :attribute חייב להיות גדול מ-:value תווים.',
        'array' => 'השדה :attribute חייב להכיל יותר מ-:value פריטים.',
    ],
    'gte' => [
        'numeric' => 'השדה :attribute חייב להיות גדול או שווה ל-:value.',
        'file' => 'השדה :attribute חייב להיות גדול או שווה ל-:value קילובייט.',
        'string' => 'השדה :attribute חייב להיות גדול או שווה ל-:value תווים.',
        'array' => 'השדה :attribute חייב להכיל :value פריטים או יותר.',
    ],
    'image' => 'השדה :attribute חייב להיות תמונה.',
    'in' => 'הערך שנבחר ב-:attribute אינו חוקי.',
    'in_array' => 'השדה :attribute אינו קיים ב-:other.',
    'integer' => 'השדה :attribute חייב להיות מספר שלם.',
    'ip' => 'השדה :attribute חייב להיות כתובת IP תקינה.',
    'ipv4' => 'השדה :attribute חייב להיות כתובת IPv4 תקינה.',
    'ipv6' => 'השדה :attribute חייב להיות כתובת IPv6 תקינה.',
    'json' => 'השדה :attribute חייב להיות מחרוזת JSON תקינה.',
    'lt' => [
        'numeric' => 'השדה :attribute חייב להיות קטן מ-:value.',
        'file' => 'השדה :attribute חייב להיות קטן מ-:value קילובייט.',
        'string' => 'השדה :attribute חייב להיות קטן מ-:value תווים.',
        'array' => 'השדה :attribute חייב להכיל פחות מ-:value פריטים.',
    ],
    'lte' => [
        'numeric' => 'השדה :attribute חייב להיות קטן או שווה ל-:value.',
        'file' => 'השדה :attribute חייב להיות קטן או שווה ל-:value קילובייט.',
        'string' => 'השדה :attribute חייב להיות קטן או שווה ל-:value תווים.',
        'array' => 'השדה :attribute לא יכול להכיל יותר מ-:value פריטים.',
    ],
    'mac_address' => 'השדה :attribute חייב להיות כתובת MAC תקינה.',
    'max' => [
        'numeric' => 'השדה :attribute לא יכול להיות גדול מ-:max.',
        'file' => 'השדה :attribute לא יכול להיות גדול מ-:max קילובייט.',
        'string' => 'השדה :attribute לא יכול להיות גדול מ-:max תווים.',
        'array' => 'השדה :attribute לא יכול להכיל יותר מ-:max פריטים.',
    ],
    'mimes' => 'השדה :attribute חייב להיות קובץ מסוג: :values.',
    'mimetypes' => 'השדה :attribute חייב להיות קובץ מסוג: :values.',
    'min' => [
        'numeric' => 'השדה :attribute חייב להיות לפחות :min.',
        'file' => 'השדה :attribute חייב להיות לפחות :min קילובייט.',
        'string' => 'השדה :attribute חייב להיות לפחות :min תווים.',
        'array' => 'השדה :attribute חייב להכיל לפחות :min פריטים.',
    ],
    'multiple_of' => 'השדה :attribute חייב להיות כפולה של :value.',
    'not_in' => 'הערך שנבחר ב-:attribute אינו חוקי.',
    'not_regex' => 'הפורמט של השדה :attribute אינו חוקי.',
    'numeric' => 'השדה :attribute חייב להיות מספר.',
    'password' => 'הסיסמה אינה נכונה.',
    'present' => 'השדה :attribute חייב להיות נוכח.',
    'prohibited' => 'השדה :attribute אסור.',
    'prohibited_if' => 'השדה :attribute אסור כאשר :other הוא :value.',
    'prohibited_unless' => 'השדה :attribute אסור אלא אם :other ב-:values.',
    'prohibits' => 'השדה :attribute אוסר על :other להיות נוכח.',
    'regex' => 'הפורמט של השדה :attribute אינו חוקי.',
    'required' => 'השדה :attribute נדרש.',
    'required_array_keys' => 'השדה :attribute חייב להכיל ערכים עבור: :values.',
    'required_if' => 'השדה :attribute נדרש כאשר :other הוא :value.',
    'required_unless' => 'השדה :attribute נדרש אלא אם :other ב-:values.',
    'required_with' => 'השדה :attribute נדרש כאשר :values נוכח.',
    'required_with_all' => 'השדה :attribute נדרש כאשר :values נוכחים.',
    'required_without' => 'השדה :attribute נדרש כאשר :values אינו נוכח.',
    'required_without_all' => 'השדה :attribute נדרש כאשר אף אחד מ-:values אינו נוכח.',
    'same' => 'השדה :attribute וה-:other חייבים להתאים.',
    'size' => [
        'numeric' => 'השדה :attribute חייב להיות :size.',
        'file' => 'השדה :attribute חייב להיות :size קילובייט.',
        'string' => 'השדה :attribute חייב להיות :size תווים.',
        'array' => 'השדה :attribute חייב להכיל :size פריטים.',
    ],
    'starts_with' => 'השדה :attribute חייב להתחיל עם אחד מהערכים הבאים: :values.',
    'string' => 'השדה :attribute חייב להיות מחרוזת.',
    'timezone' => 'השדה :attribute חייב להיות אזור זמן תקף.',
    'unique' => 'השדה :attribute כבר תפוס.',
    'uploaded' => 'השדה :attribute נכשל בהעלאה.',
    'url' => 'השדה :attribute חייב להיות כתובת URL תקינה.',
    'uuid' => 'השדה :attribute חייב להיות UUID תקף.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'הודעה מותאמת אישית',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
