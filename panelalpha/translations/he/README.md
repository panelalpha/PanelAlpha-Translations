# הוספת חבילות שפה ל-PanelAlpha

כאן תלמד איך להוסיף את חבילות השפה עבור PanelAlpha בשתי דרכים שונות: באופן ידני ובאופן אוטומטי.

> הערה: טקסט זה תורגם באופן אוטומטי, לכן ייתכנו שגיאות או אי-דיוקים.

## באופן אוטומטי

כדי להתקין ולהשתמש בתרגומים אלה באופן אוטומטי עם PanelAlpha, עקוב אחר השלבים הבאים:

1. <b>הורד את הסקריפט ל-/opt/panelalpha:</b>
    ```sh
    curl -sL -o /opt/panelalpha/sync-translations.sh https://raw.githubusercontent.com/panelalpha/PanelAlpha-Translations/refs/heads/main/scripts/sync-translations.sh
    ```

2. <b>הפעל את הסקריפט עם השפה הרצויה:</b>
    ```sh
    bash /opt/panelalpha/sync-translations.sh --lang "he"
    ```

## באופן ידני

כדי להתקין את התרגומים בצורה ידנית, בצע את השלבים הבאים:

1. <b>העתק את קבצי התרגום למיקום המתאים:</b>
    ```sh
    mkdir -p /opt/panelalpha/resources/lang/he
    cp -R /path/to/translation/he/* /opt/panelalpha/resources/lang/he/
    ```

2. <b>הוסף את קוד השפה לרשימת השפות הנתמכות:</b>

    ערוך את הקובץ `config/app.php` והוסף את `'he' => 'עברית'` לרשימת השפות הנתמכות.

3. <b>נקה את המטמון:</b>
    ```sh
    cd /opt/panelalpha
    php artisan cache:clear
    php artisan config:clear
    php artisan view:clear
    ```

4. <b>הפעל מחדש את PanelAlpha:</b>
    ```sh
    systemctl restart panelalpha
    ```

## שאלות נפוצות

### איפה ניתן למצוא את קבצי התרגום?

קבצי התרגום מאוחסנים בתיקייה `resources/lang/{language_code}` בהתקנת PanelAlpha.

### איך ניתן לשנות את שפת ברירת המחדל?

עדכן את הגדרת `locale` בקובץ `config/app.php` לקוד השפה הרצוי.

### מה לעשות אם יש שגיאות תרגום?

אם גילית שגיאות או בעיות בתרגום, אתה מוזמן לתרום תיקונים ישירות במאגר GitHub המכיל את קבצי התרגום.
