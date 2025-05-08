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

    'accepted' => ':attribute doit être approuvé.',
    'accepted_if' => ':attribute doit être approuvé quand :other est :value.',
    'active_url' => ':attribute n’est pas une URL valide.',
    'after' => ':attribute doit être une date postérieure à :date.',
    'after_or_equal' => ':attribute doit être une date postérieure ou identique à :date.',
    'alpha' => ':attribute ne peut contenir que des lettres.',
    'alpha_dash' => ':attribute ne peut contenir que des lettres, des chiffres, des tirets et des underscores.',
    'alpha_num' => ':attribute ne peut contenir que des lettres et des chiffres.',
    'array' => ':attribute doit être un tableau.',
    'before' => ':attribute doit être une date antérieure à :date.',
    'before_or_equal' => ':attribute doit être une date antérieure ou identique à :date.',
    'between' => [
        'numeric' => ':attribute doit être compris entre :min and :max.',
        'file' => ':attribute doit être compris entre :min and :max kilobytes.',
        'string' => ':attribute doit être compris entre :min and :max characters.',
        'array' => 'T:attribute doit être compris entre :min and :max items.',
    ],
    'boolean' => 'Le champ :attribute doit être true ou false.',
    'confirmed' => 'La confirmation :attribute ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => ':attribute n’est pas une date valide.',
    'date_equals' => ':attribute doit être une date identique à :date.',
    'date_format' => ':attribute n’est pas au format :format.',
    'declined' => ':attribute doit être refusé.',
    'declined_if' => ':attribute doit être décliné quand :other est :value.',
    'different' => ':attribute et :other doivent être différents.',
    'digits' => ':attribute doit faire :digits digits.',
    'digits_between' => ':attribute doit être compris entre :min et :max digits.',
    'dimensions' => ':attribute a des dimensions d’image non valides.',
    'distinct' => 'Le champ :attribute contient des valeurs duppliquées.',
    'email' => ':attribute doit être une adresse e-mail valide.',
    'ends_with' => ':attribute doit se terminer par : :values.',
    'exists' => ':attribute est non valide.',
    'file' => ':attribute doit être un fichier.',
    'filled' => ':attribute doit avoir une valeur.',
    'gt' => [
        'numeric' => ':attribute doit être plus grand que :value.',
        'file' => ':attribute doit être plus grand que :value kilobytes.',
        'string' => ':attribute doit être plus grand que :value characters.',
        'array' => ':attribute doit contenir plus de :value élèments.',
    ],
    'gte' => [
        'numeric' => ':attribute doit être plus grand que ou égal à :value.',
        'file' => ':attribute doit être plus grand que ou égal à :value kilo octets.',
        'string' => ':attribute doit être plus grand que ou égal à :value caractères.',
        'array' => ':attribute doit contenir au moins :value élèments.',
    ],
    'image' => ':attribute doit être une image.',
    'in' => ':attribute est non valide.',
    'in_array' => ':attribute n’existe pas dans :other.',
    'integer' => ':attribute doit être un entier.',
    'ip' => ':attribute doit être une adresse IP valide.',
    'ipv4' => ':attribute doit être une adresse IPv4 valide.',
    'ipv6' => ':attribute doit être une adresse IPv6 valide.',
    'json' => ':attribute doit être une chaîne JSON valide.',
    'lt' => [
        'numeric' => ':attribute doit être plus petit que :value.',
        'file' => ':attribute doit être plus petit que :value kilo octets.',
        'string' => ':attribute doit être plus petit que :value caractères.',
        'array' => ':attribute doit contenir moins de :value élèments.',
    ],
    'lte' => [
        'numeric' => ':attribute doit être plus petit que ou égal à :value.',
        'file' => ':attribute doit être plus petit que ou égal à :value kilo octets.',
        'string' => ':attribute doit être plus petit que ou égal à :value caractères.',
        'array' => ':attribute doit contenir au plus :value élèments.',
    ],
    'max' => [
        'numeric' => ':attribute ne doit pas être plus grand que :max.',
        'file' => ':attribute ne doit pas être plus grand que :max kilo octets.',
        'string' => ':attribute ne doit pas être plus grand que :max caractères.',
        'array' => ':attribute ne doit pas contenir plus de :max élèments.',
    ],
    'mimes' => ':attribute doit être un fichier de type : :values.',
    'mimetypes' => ':attribute doit être un fichier de type : :values.',
    'min' => [
        'numeric' => ':attribute ne doit pas être plus petit que :min.',
        'file' => ':attribute ne doit pas être plus petit que :min kilo octets.',
        'string' => ':attribute ne doit pas être plus petit que :min caractères.',
        'array' => ':attribute ne doit pas contenir moins de :min élèments.',
    ],
    'multiple_of' => ':attribute doit être un multiple de  :value.',
    'not_in' => ':attribute n’est pas valide.',
    'not_regex' => 'Le format de :attribute n’est pas valide.',
    'numeric' => ':attribute doit être un nombre.',
    'password' => 'Le mot de passe est incorrect.',
    'present' => 'Le champ :attribute doit être présent.',
    'regex' => 'Le format de :attribute n’est pas valide.',
    'required' => 'Le champ :attribute doit être présent.',
    'required_if' => 'Le champ :attribute doit être présent quand :other est :value.',
    'required_unless' => 'Le champ :attribute doit être présent à moins que :other soit dans :values.',
    'required_with' => 'Le champ :attribute doit être présent quand :values est présent·e.',
    'required_with_all' => 'Le champ :attribute doit être présent quand :values sont présent·es.',
    'required_without' => 'Le champ :attribute doit être présent quand :values n’est pas présent·e.',
    'required_without_all' => 'Le champ :attribute doit être présent quand :values ne sont pas présent·es.',
    'prohibited' => ':attribute est interdit.',
    'prohibited_if' => ':attribute est interdit quand :other est :value.',
    'prohibited_unless' => ':attribute interdit à moins que :other soit dans :values.',
    'prohibits' => 'Le champ :attribute interdit :other d’être présent·e.',
    'same' => ':attribute et :other doivent correspondre.',
    'size' => [
        'numeric' => ':attribute doit être :size.',
        'file' => ':attribute doit être :size kilobytes.',
        'string' => ':attribute doit être :size characters.',
        'array' => ':attribute doit contenir :size élèments.',
    ],
    'starts_with' => ':attribute doit commencer par : :values.',
    'string' => ':attribute doit êtyre une chaîne de caractères.',
    'timezone' => ':attribute doit être un fuseau horaire valide.',
    'unique' => ':attribute est déjà pris·e.',
    'uploaded' => ':attribute est en échec de téléversement.',
    'url' => ':attribute doit être une URL valide.',
    'uuid' => ':attribute doit être un UUID valide.',

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
