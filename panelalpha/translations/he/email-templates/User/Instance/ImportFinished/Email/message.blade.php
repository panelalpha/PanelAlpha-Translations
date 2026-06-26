<p>שלום <strong>{{ $client_first_name }}</strong>,</p>
<p>האתר שלך <strong>{{ $import_from_domain }}</strong> יובא בהצלחה אל {{ $app_name }}! You can now proceed to manage it in our system at {{ $app_url }}.</p>

@if ($import_from_domain != $instance_domain)
    <p>המופע שלך הוגדר על דומיין זמני: {{ $instance_domain }}</p>
    <p>כאשר תהיה מוכן לעלות לאוויר, תוכל לשנות זאת מאוחר יותר בלוח הבקרה שלנו.</p>
@else
    <p>השלב הבא הוא להפנות את הדומיין שלך לשרתי השמות שלנו. יש שתי שיטות לעשות זאת:</p>
    <p>אפשרות 1: הגדרת רשומות DNS</p>
    <p>הגדר את רשומות ה-DNS עבור הדומיין <strong>{{ $instance_domain }}</strong> :</p>
    <ul>
        <li>{{ $instance_domain }} (or @) A {{ $ip_address }}</li>
        <li>www.{{ $instance_domain }} CNAME {{ $instance_domain }}</li>
    </ul>
    <p>אפשרות 2: החלפת שרתי שמות</p>
    <p>החלף את שרתי השמות של הדומיין שלך ל:</p>
    <ul>
        @foreach ($dns_nameservers as $ns)
        <li>{{ $ns }}</li>
        @endforeach
    </ul>
    <p><strong>שים לב:</strong> שימוש בשיטה זו לא יעביר את רשומות ה-DNS מהספק הנוכחי. יהיה עליך להגדיר את הרשומות שוב במערכת שלנו.</p>
@endif

@if (!empty($skipped_files))
    @php
        $skippedCount = count($skipped_files);
        $skippedPreview = array_slice($skipped_files, 0, 10);
    @endphp

    <p><strong>אזהרה:</strong> {{ $skippedCount }} {{ $skippedCount === 1 ? 'file was' : 'files were' }} במהלך ההעברה.</p>

    @if ($skippedCount > 0)
        <ul>
            @foreach ($skippedPreview as $file)
                <li>{{ $file }}</li>
            @endforeach
        </ul>

        @if ($skippedCount > 10)
            <p>מציג את 10 הקבצים הראשונים.</p>
        @endif
    @endif
@endif
