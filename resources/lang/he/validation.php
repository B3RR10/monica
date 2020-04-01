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

    'accepted' => ':attribute חייב להתקבל.',
    'active_url' => ':attribute אינה כתובת תקנית.',
    'after' => ':attribute חייב להיות תאריך לאחר :date.',
    'after_or_equal' => ':attribute חייב להיות התאריך :date או אחריו.',
    'alpha' => ':attribute יכול להכיל אותיות בלבד.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => ':attribute יכול להכיל אותיות ומספרים בלבד.',
    'array' => ':attribute חייב להיות מערך.',
    'before' => ':attribute חייב להיות תאריך לפני :date.',
    'before_or_equal' => ':attribute חייב להיות התאריך :date או לפניו.',
    'between' => [
        'numeric' => ':attribute חייב להיות בין :min לבין :max.',
        'file' => ':attribute חייב להיות בין :min לבין :max קילובתים.',
        'string' => ':attribute חייב להיות בין :min לבין :max תווים.',
        'array' => ':attribute חייב להיות בין :min לבין :max פריטים.',
    ],
    'boolean' => 'השדה :attribute חייב להיות אמת או שקר.',
    'confirmed' => 'האימות של :attribute לא תואם.',
    'date' => ':attribute אינו תאריך תקני.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => ':attribute לא תואם את המבנה :format.',
    'different' => ':attribute וגם :other חייבים להיות שונים זה מזה.',
    'digits' => ':attribute חייב להיות באורך :digits ספרות.',
    'digits_between' => ':attribute חייב להיות בין :min ל־:max ספרות.',
    'dimensions' => 'ממדי התמונה של :attribute שגויים.',
    'distinct' => 'לשדה :attribute יש ערך כפול.',
    'email' => ':attribute חייב להיות כתובת דוא״ל תקנית.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => ':attribute הנבחר שגוי.',
    'file' => ':attribute חייב להיות קובץ.',
    'filled' => 'השדה :attribute חייב להכיל לערך.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => ':attribute חייב להיות תמונה.',
    'in' => ':attribute הנבחר שגוי.',
    'in_array' => 'השדה :attribute לא קיים תחת :other.',
    'integer' => ':attribute חייב להיות מספר שלם וחיובי.',
    'ip' => ':attribute חייב להיות כתובת IP תקנית.',
    'ipv4' => ':attribute חייב להיות כתובת IPv4 תקנית.',
    'ipv6' => ':attribute חייב להיות כתובת IPv6 תקנית.',
    'json' => ':attribute חייב להיות מחרוזת JSON תקנית.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':attribute לא יכול להיות יותר גדול מאשר :max.',
        'file' => ':attribute לא יכול להיות גדול מ־:max קילובתים.',
        'string' => ':attribute לא יכול להיות גדול מ־:max תווים.',
        'array' => 'תחת :attribute לא יכולים להיות יותר מ־:max פריטים.',
    ],
    'mimes' => ':attribute חייב להיות קובץ מסוג: :values.',
    'mimetypes' => ':attribute חייב להיות קובץ מסוג: :values.',
    'min' => [
        'numeric' => ':attribute חייב להיות לפחות :min.',
        'file' => ':attribute חייב להיות בגודל של לפחות :min קילובתים.',
        'string' => ':attribute חייב להיות באורך של לפחות :min תווים.',
        'array' => 'תחת :attribute חייבים להיות לפחות :min פריטים.',
    ],
    'not_in' => ':attribute הנבחר שגוי.',
    'not_regex' => 'התבנית :attribute שגויה.',
    'numeric' => ':attribute חייב להיות מספר.',
    'password' => 'הססמה שגויה.',
    'present' => 'השדה :attribute חייב להיות נוכח.',
    'regex' => 'המבנה :attribute שגוי.',
    'required' => 'השדה :attribute נחוץ.',
    'required_if' => 'השדה :attribute נחוץ כאשר :other הוא :value.',
    'required_unless' => 'השדה :attribute נחוץ אלמלא :other קיים בתוך :values.',
    'required_with' => 'השדה :attribute נחוץ כאשר :values קיימים.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'השדה :attribute נחוץ כאשר :values אינם קיימים.',
    'required_without_all' => 'השדה :attribute נחוץ כאשר אף אחד מבין :values קיים.',
    'same' => ':attribute וגם :other חייבים להיות תואמים.',
    'size' => [
        'numeric' => ':attribute חייב להיות בגודל :size.',
        'file' => ':attribute חייב להיות בגודל של :size קילובתים.',
        'string' => ':attribute חייב להיות באורך של :size תווים.',
        'array' => ':attribute חייב להכיל :size פריטים.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => ':attribute חייב להיות קובץ.',
    'timezone' => ':attribute חייב להיות אזור תקני.',
    'unique' => ':attribute כבר תפוס.',
    'uploaded' => 'העלאת :attribute נכשלה.',
    'url' => 'התבנית :attribute שגויה.',
    'uuid' => 'The :attribute must be a valid UUID.',

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
            'rule-name' => 'custom-message',
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
