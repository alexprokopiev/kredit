<?php
if (isset($_GET['utm_source'])) {
    $utm_source = $_GET['utm_source'];
    setcookie("utm_source", $utm_source, time() + 60 * 60 * 24 * 50);
}
if (isset($_GET['utm_medium'])) {
    $utm_medium = $_GET['utm_medium'];
    setcookie("utm_medium", $utm_medium, time() + 60 * 60 * 24 * 50);
}
if (isset($_GET['utm_campaign'])) {
    $utm_campaign = $_GET['utm_campaign'];
    setcookie("utm_campaign", $utm_campaign, time() + 60 * 60 * 24 * 50);
}
if (isset($_GET['utm_content'])) {
    $utm_content = $_GET['utm_content'];
    setcookie("utm_content", $utm_content, time() + 60 * 60 * 24 * 50);
}
if (isset($_GET['utm_term'])) {
    $utm_term = $_GET['utm_term'];
    setcookie("utm_term", $utm_term, time() + 60 * 60 * 24 * 50);
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кредит без проблем!</title>
    <meta name="description" content="Помощь в получении кредита">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.min.css">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(69205342, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/69205342" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Pixel -->
<script type="text/javascript">
    (function (d, w) {
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://qoopler.ru/index.php?ref="+d.referrer+"&cookie=" + encodeURIComponent(document.cookie);

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
    })(document, window);
</script>
<!-- /Pixel -->
    <script async src="https://allstat-pp.ru/1008051/73347321a075d197d0fe75aa3ca142f547eb67fb.js"></script>
</head>

<body>
    <section class="main">
        <div class="container">
            <div class="main__img"></div>
            <div class="main__wrapper">
                <div class="main__header">
                    <a href="/" class="main__logo"><img src="img/logo.png" alt="logo"></a>
                    <h1 class="main__title">Кредит без проблем!</h1>
                </div>
                <h2 class="main__descr">Есть проблемы в получении кредита? Отказывают банки? Тогда МЫ поможем вам в том, что вы задумали!
                </h2>
                <div class="main__text">Помощь в получении от 5 000 до 1 500 000 рублей в Уфе и Башкортостане за 1 день.<br><br>
                    Пройдите тест и ответьте на вопросы для оценки возможности получения кредита.</div>
                <button class="button button_ml3">Пройти тест</button>
                <div class="main__banks">
                    <h2 class="main__banks-title">Мы работаем с ТОП-10 надежных банков</h2>
                    <div class="main__banks-wrapper">
                        <img src="img/sberbank.png" alt="sber" class="main__banks-img">
                        <img src="img/vtb.png" alt="vtb" class="main__banks-img">
                        <img src="img/alfabank.png" alt="alfa" class="main__banks-img">
                        <img src="img/gazprombank.png" alt="gazprom" class="main__banks-img">
                        <img src="img/rosselhozbank.png" alt="rsh" class="main__banks-img">
                        <img src="img/pochtabank.png" alt="pochta" class="main__banks-img">
                        <img src="img/otkrytie.png" alt="otkrytie" class="main__banks-img">
                        <img src="img/tinkoff.png" alt="tinkoff" class="main__banks-img">
                        <img src="img/rosbank.png" alt="rosbank" class="main__banks-img">
                        <img src="img/sovkombank.png" alt="sovkom" class="main__banks-img">
                    </div>
                </div>
                <div class="main__footer">
                    <a href="tel:+79659252507" class="main__phone">+7 (965) 925-25-07</a>
                    <div class="main__info">ООО "Транс+", ОГРН 1130280069523, г.Уфа, ул.Пархоменко, 153, корп.1</div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer"><a href="#">Политика конфиденциальности</a></footer>
    <form action="#" class="overlay" onsubmit="ym(70784119,'reachGoal','kredityvsem102.ru'); return true;">
        <div class="modal">
            <div class="modal__close">&times;</div>
            <div class="modal__header">
                <div class="modal__descr"><img src="img/icon.svg" alt="icon">Ответьте на наши вопросы и увеличьте шансы
                    на одобрение кредита</div>
                <div class="modal__counter"></div>
            </div>
            <div class="modal__percents">Шанс одобрения Вашей заявки увеличился на <span>10%</span>
            </div>
            <div class="modal__progressbar">
                <hr>
                <hr>
            </div>
            <div class="modal__form modal__form_active">
                <h2 class="modal__title">Какая сумма кредита Вас интересует?</h2>
                <label class="modal__label">
                    <input type="radio" name="question_1" value="До 100 000 руб.">До 100 000 руб.
                </label>
                <label class="modal__label">
                    <input type="radio" name="question_1" value="100 000 - 300 000 руб.">100 000 - 300 000 руб.
                </label>
                <label class="modal__label">
                    <input type="radio" name="question_1" value="300 000 - 1 000 000 руб.">300 000 - 1 000 000
                    руб.
                </label>
                <label class="modal__label">
                    <input type="radio" name="question_1" value="Свыше 1 000 000 руб.">Свыше 1 000 000 руб.
                </label>
                <div class="modal__buttons">
                    <div class="button button_prev">&larr; Назад</div>
                    <div class="button button_next">Вперед &rarr;</div>
                </div>
            </div>
            <div class="modal__form">
                <h2 class="modal__title">Как у Вас обстоят дела с кредитной историей?</h2>
                <label class="modal__label">
                    <input type="radio" name="question_2" value="Кредитная история существует">Кредитная история
                    существует
                </label>
                <label class="modal__label">
                    <input type="radio" name="question_2" value="Кредитная история отсутствует">Кредитная история
                    отсутствует
                </label>
                <div class="modal__buttons">
                    <div class="button button_prev">&larr; Назад</div>
                    <div class="button button_next">Вперед &rarr;</div>
                </div>
            </div>
            <div class="modal__form">
                <h2 class="modal__title">Вы работаете официально?</h2>
                <label class="modal__label">
                    <input type="radio" name="question_3" value="Да">Да
                </label>
                <label class="modal__label">
                    <input type="radio" name="question_3" value="Нет">Нет
                </label>
                <div class="modal__buttons">
                    <div class="button button_prev">&larr; Назад</div>
                    <div class="button button_next">Вперед &rarr;</div>
                </div>
            </div>
            <div class="modal__form">
                <h2 class="modal__title">Ваш уровень заработной платы?</h2>
                <label class="modal__label">
                    <input type="radio" name="question_4" value="До 20 000 р.">До 20 000 р.
                </label>
                <label class="modal__label">
                    <input type="radio" name="question_4" value="20 000 - 30 000 р.">20 000 - 30 000 р.
                </label>
                <label class="modal__label">
                    <input type="radio" name="question_4" value="30 000 - 50 000 р.">30 000 - 50 000 р.
                </label>
                <label class="modal__label">
                    <input type="radio" name="question_4" value="Более 50 000 р.">Более 50 000 р.
                </label>
                <div class="modal__buttons">
                    <div class="button button_prev">&larr; Назад</div>
                    <div class="button button_next">Вперед &rarr;</div>
                </div>
            </div>
            <div class="modal__form">
                <h2 class="modal__title">Есть ли у Вас возможность предоставить справку о доходах?</h2>
                <label class="modal__label">
                    <input type="radio" name="question_5" value="Да">Да
                </label>
                <label class="modal__label">
                    <input type="radio" name="question_5" value="Нет">Нет
                </label>
                <div class="modal__buttons">
                    <div class="button button_prev">&larr; Назад</div>
                    <div class="button button_next">Вперед &rarr;</div>
                </div>
            </div>
            <div class="modal__form">
                <h2 class="modal__title">Есть ли у Вас действующая просрочка по существующим кредитам?</h2>
                <label class="modal__label">
                    <input type="radio" name="question_6" value="Нет">Нет
                </label>
                <label class="modal__label">
                    <input type="radio" name="question_6" value="Да, до месяца">Да, до месяца
                </label>
                <label class="modal__label">
                    <input type="radio" name="question_6" value="Да, больше месяца">Да, больше месяца
                </label>
                <div class="modal__buttons">
                    <div class="button button_prev">&larr; Назад</div>
                    <div class="button button_next">Вперед &rarr;</div>
                </div>
            </div>
            <div class="modal__form">
                <h2 class="modal__title">Были ли у Вас просрочки в текущем году?</h2>
                <label class="modal__label">
                    <input type="radio" name="question_7" value="Нет">Нет
                </label>
                <label class="modal__label">
                    <input type="radio" name="question_7" value="Да, до месяца">Да, до месяца
                </label>
                <label class="modal__label">
                    <input type="radio" name="question_7" value="Да, больше месяца">Да, больше месяца
                </label>
                <div class="modal__buttons">
                    <div class="button button_prev">&larr; Назад</div>
                    <div class="button button_next">Вперед &rarr;</div>
                </div>
            </div>
            <div class="modal__form">
                <h2 class="modal__title">Есть ли у Вас задолженности в службе судебных приставов?</h2>
                <label class="modal__label">
                    <input type="radio" name="question_8" value="Нет">Нет
                </label>
                <label class="modal__label">
                    <input type="radio" name="question_8" value="Да, штрафы ГИБДД до 3 000 р.">Да, штрафы ГИБДД до 3 000
                    р.
                </label>
                <label class="modal__label">
                    <input type="radio" name="question_8" value="Да, иные задолженности в ФССП">Да, иные задолженности в
                    ФССП
                </label>
                <div class="modal__fssp">Вам нужно погасить задолженность и иметь на руках справку</div>
                <div class="modal__buttons">
                    <div class="button button_prev">&larr; Назад</div>
                    <div class="button button_next">Вперед &rarr;</div>
                </div>
            </div>
            <div class="modal__form">
                <h2 class="modal__title">Есть ли у Вас незакрытая судимость?</h2>
                <label class="modal__label">
                    <input type="radio" name="question_9" value="Нет">Нет
                </label>
                <label class="modal__label">
                    <input type="radio" name="question_9" value="Да">Да
                </label>
                <div class="modal__buttons">
                    <div class="button button_prev">&larr; Назад</div>
                    <div class="button button_next">Вперед &rarr;</div>
                </div>
            </div>
            <div class="modal__form">
                <h2 class="modal__title">Обращались ли Вы за кредитом в банки в текущем месяце?</h2>
                <label class="modal__label">
                    <input type="radio" name="question_10" value="Нет">Нет
                </label>
                <label class="modal__label">
                    <input type="radio" name="question_10" value="Да, до 5 обращений">Да, до 5 обращений
                </label>
                <label class="modal__label">
                    <input type="radio" name="question_10" value="Да, 6 и более обращений">Да, 5 и более обращений
                </label>
                <div class="modal__buttons">
                    <div class="button button_prev">&larr; Назад</div>
                    <div class="button button_next">Вперед &rarr;</div>
                </div>
            </div>
            <div class="modal__form">
                <h2 class="modal__title">В какие банки Вы обращались?</h2>
                <label class="modal__label">
                    <input type="text" name="question_11">
                </label>
                <div class="modal__buttons">
                    <div class="button button_prev">&larr; Назад</div>
                    <div class="button button_next">Вперед &rarr;</div>
                </div>
            </div>
            <div class="modal__form">
                <label class="modal__label modal__label_final">
                    Ваше имя<input type="text" name="name">
                </label>
                <label class="modal__label modal__label_final">
                    Email<input type="email" name="email">
                </label>
                <label class="modal__label modal__label_final">
                    Ваш телефон<input type="tel" name="phone">
                </label>
                <label class="modal__privacy">
                    <input type="checkbox" checked>Нажимая на кнопку, вы даете согласие на обработку
                    персональных данных и соглашаетесь c <a href="#">политикой конфиденциальности</a>
                </label>
                <input type="hidden" name="city" value="Уфа">
                <input type="hidden" name="type" value="Кредит">
                <input type="hidden" name="leadtype" value="Заявка на расчет">
                <div class="modal__buttons">
                    <div class="button button_prev">&larr; Назад</div>
                    <button type="submit" class="button button_final">Узнать
                        результат</button>
                </div>
            </div>
            <div class="modal__thanks">Данные успешно отправлены! По этому номеру с вами свяжется оператор, ожидайте
                звонка в ближайшее время с телефона <a href="tel:+79659252507">+7 (965) 925-25-07</a> !</div>
        </div>
        <div class="nohistory">
            <div class="nohistory__close">&times;</div>
            <div class="nohistory__text">Вы можете рассчитывать на кредит не более 50 000 р. Для оформления требуется запрос в бюро кредитных историй.
                Просим позвонить по номеру <a href="tel:+79659252507">+7 (965) 925-25-07</a> для уточнения</div>
        </div>
        <div class="failure">
            <div class="failure__close">&times;</div>
            <div class="failure__text">К сожалению, в Вашей ситуации выдача кредита невозможна</div>
        </div>
    </form>
    <section class="privacy">
        <div class="privacy__wrapper">
            <button class="privacy__back">Перейти обратно на сайт</button>
            <h2 class="privacy__header">Политика в отношении обработки персональных данных</h2>
            <p>Обращаем ваше внимание на то, что данный Интернет-сайт носит исключительно информационный характер и
                ни
                при каких условиях не является публичной офертой, определяемой положениями Статьи 437 Гражданского
                кодекса Российской Федерации.</p>
            <p>Проект осуществляет подбор займов между лицом, желающим взять займ, и кредитными учреждениями которые
                на
                основании ФЗ "О потребительском кредите (займе)" от 21.12.2013 № 353-ФЗ имеет право осуществлять
                профессиональную деятельность по предоставлению потребительских займов. Проект не является
                финансовым
                учреждением, банком или кредитором, и не несёт ответственности за любые заключенные договоры
                кредитования или условия.</p>
            <ol class="privacy__rules">
                <li class="privacy__item">Общие положения Настоящая политика обработки персональных данных
                    составлена в
                    соответствии с требованиями Федерального закона от 27.07.2006. №152-ФЗ «О персональных данных» и
                    определяет порядок обработки персональных данных и меры по обеспечению безопасности персональных
                    данных
                    ООО Транс+ (далее – Оператор).
                    <ol>
                        <li>Оператор ставит своей важнейшей целью и условием осуществления своей деятельности
                            соблюдение
                            прав и свобод человека и гражданина при обработке его персональных данных, в том числе
                            защиты
                            прав на неприкосновенность частной жизни, личную и семейную тайну.</li>
                        <li>Настоящая политика Оператора в отношении обработки персональных данных (далее –
                            Политика)
                            применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта
                            <a href="http://kredityvsem102.ru/">http://kredityvsem102.ru/</a>.
                        </li>
                    </ol>
                </li>
                <li class="privacy__item">Основные понятия, используемые в Политике
                    <ol>
                        <li>Автоматизированная обработка персональных данных – обработка персональных данных с
                            помощью
                            средств вычислительной техники;</li>
                        <li>Блокирование персональных данных – временное прекращение обработки персональных данных
                            (за
                            исключением случаев, если обработка необходима для уточнения персональных данных);</li>
                        <li>Веб-сайт – совокупность графических и информационных материалов, а также программ для
                            ЭВМ и
                            баз
                            данных, обеспечивающих их доступность в сети интернет по сетевому адресу <a href="http://kredityvsem102.ru/">http://kredityvsem102.ru/</a>;</li>
                        <li>Информационная система персональных данных — совокупность содержащихся в базах данных
                            персональных данных, и обеспечивающих их обработку информационных технологий и
                            технических
                            средств;</li>
                        <li>Обезличивание персональных данных — действия, в результате которых невозможно определить
                            без
                            использования дополнительной информации принадлежность персональных данных конкретному
                            Пользователю или иному субъекту персональных данных;</li>
                        <li>Обработка персональных данных – любое действие (операция) или совокупность действий
                            (операций),
                            совершаемых с использованием средств автоматизации или без использования таких средств с
                            персональными данными, включая сбор, запись, систематизацию, накопление, хранение,
                            уточнение
                            (обновление, изменение), извлечение, использование, передачу (распространение,
                            предоставление,
                            доступ), обезличивание, блокирование, удаление, уничтожение персональных данных;</li>
                        <li>Оператор – государственный орган, муниципальный орган, юридическое или физическое лицо,
                            самостоятельно или совместно с другими лицами организующие и (или) осуществляющие
                            обработку
                            персональных данных, а также определяющие цели обработки персональных данных, состав
                            персональных данных, подлежащих обработке, действия (операции), совершаемые с
                            персональными
                            данными;</li>
                        <li>Персональные данные – любая информация, относящаяся прямо или косвенно к определенному
                            или
                            определяемому Пользователю веб-сайта <a href="http://kredityvsem102.ru/">http://kredityvsem102.ru/</a>;
                        </li>
                        <li>Пользователь – любой посетитель веб-сайта <a href="http://kredityvsem102.ru/">http://kredityvsem102.ru/</a>;</li>
                        <li>Предоставление персональных данных – действия, направленные на раскрытие персональных
                            данных
                            определенному лицу или определенному кругу лиц;</li>
                        <li>Распространение персональных данных – любые действия, направленные на раскрытие
                            персональных
                            данных неопределенному кругу лиц (передача персональных данных) или на ознакомление с
                            персональными данными неограниченного круга лиц, в том числе обнародование персональных
                            данных в
                            средствах массовой информации, размещение в информационно-телекоммуникационных сетях или
                            предоставление доступа к персональным данным каким-либо иным способом;</li>
                        <li>Трансграничная передача персональных данных – передача персональных данных на территорию
                            иностранного государства органу власти иностранного государства, иностранному
                            физическому
                            или
                            иностранному юридическому лицу;</li>
                        <li>Уничтожение персональных данных – любые действия, в результате которых персональные
                            данные
                            уничтожаются безвозвратно с невозможностью дальнейшего восстановления содержания
                            персональных
                            данных в информационной системе персональных данных и (или) уничтожаются материальные
                            носители
                            персональных данных.</li>
                    </ol>
                </li>
                <li class="privacy__item">Оператор может обрабатывать следующие персональные данные Пользователя
                    <ol>
                        <li>Фамилия, имя, отчество;</li>
                        <li>Электронный адрес;</li>
                        <li>Номера телефонов;</li>
                        <li>Также на сайте происходит сбор и обработка обезличенных данных о посетителях (в т.ч.
                            файлов
                            «cookie») с помощью сервисов интернет-статистики (Яндекс Метрика и Гугл Аналитика и
                            других).
                        </li>
                        <li>Вышеперечисленные данные далее по тексту Политики объединены общим понятием Персональные
                            данные.
                        </li>
                    </ol>
                </li>
                <li class="privacy__item">Цели обработки персональных данных
                    <ol>
                        <li>Цель обработки персональных данных Пользователя — информирование Пользователя
                            посредством
                            отправки электронных писем; заключение, исполнение и прекращение гражданско-правовых
                            договоров;
                            предоставление доступа Пользователю к сервисам, информации и/или материалам,
                            содержащимся на
                            веб-сайте.</li>
                        <li>Также Оператор имеет право направлять Пользователю уведомления о новых продуктах и
                            услугах,
                            специальных предложениях и различных событиях. Пользователь всегда может отказаться от
                            получения
                            информационных сообщений, направив Оператору письмо на адрес электронной почты <a href="email:kredit_ufa@inbox.ru">kredit_ufa@inbox.ru</a> с пометкой «Отказ от
                            уведомлений о новых продуктах и услугах и специальных предложениях».</li>
                        <li>Обезличенные данные Пользователей, собираемые с помощью сервисов интернет-статистики,
                            служат
                            для
                            сбора информации о действиях Пользователей на сайте, улучшения качества сайта и его
                            содержания.
                        </li>
                    </ol>
                </li>
                <li class="privacy__item">Правовые основания обработки персональных данных
                    <ol>
                        <li>Оператор обрабатывает персональные данные Пользователя только в случае их заполнения
                            и/или
                            отправки Пользователем самостоятельно через специальные формы, расположенные на сайте
                            <a href="http://kredityvsem102.ru/">http://kredityvsem102.ru/</a>. Заполняя соответствующие формы
                            и/или
                            отправляя свои персональные данные
                            Оператору, Пользователь выражает свое согласие с данной Политикой.
                        </li>
                        <li>Оператор обрабатывает обезличенные данные о Пользователе в случае, если это разрешено в
                            настройках браузера Пользователя (включено сохранение файлов «cookie» и использование
                            технологии
                            JavaScript).</li>
                    </ol>
                </li>
                <li class="privacy__item">Порядок сбора, хранения, передачи и других видов обработки персональных
                    данных
                    Безопасность персональных данных, которые обрабатываются Оператором, обеспечивается путем
                    реализации
                    правовых, организационных и технических мер, необходимых для выполнения в полном объеме
                    требований
                    действующего законодательства в области защиты персональных данных.
                    <ol>
                        <li>Оператор обеспечивает сохранность персональных данных и принимает все возможные меры,
                            исключающие доступ к персональным данным неуполномоченных лиц.</li>
                        <li>Персональные данные Пользователя никогда, ни при каких условиях не будут переданы
                            третьим
                            лицам,
                            за исключением случаев, связанных с исполнением действующего законодательства.</li>
                        <li>В случае выявления неточностей в персональных данных, Пользователь может актуализировать
                            их
                            самостоятельно, путем направления Оператору уведомление на адрес электронной почты
                            Оператора
                            <a href="email:kredit_ufa@inbox.ru">kredit_ufa@inbox.ru</a> с пометкой «Актуализация
                            персональных данных».
                        </li>
                        <li>Срок обработки персональных данных является неограниченным. Пользователь может в любой
                            момент
                            отозвать свое согласие на обработку персональных данных, направив Оператору уведомление
                            посредством электронной почты на электронный адрес Оператора <a href="email:kredit_ufa@inbox.ru">kredit_ufa@inbox.ru</a> с пометкой «Отзыв
                            согласия
                            на
                            обработку персональных данных».</li>
                    </ol>
                </li>
                <li class="privacy__item">Трансграничная передача персональных данных
                    <ol>
                        <li>Оператор до начала осуществления трансграничной передачи персональных данных обязан
                            убедиться в
                            том, что иностранным государством, на территорию которого предполагается осуществлять
                            передачу
                            персональных данных, обеспечивается надежная защита прав субъектов персональных данных.
                        </li>
                        <li>Трансграничная передача персональных данных на территории иностранных государств, не
                            отвечающих
                            вышеуказанным требованиям, может осуществляться только в случае наличия согласия в
                            письменной
                            форме субъекта персональных данных на трансграничную передачу его персональных данных
                            и/или
                            исполнения договора, стороной которого является субъект персональных данных.</li>
                    </ol>
                </li>
                <li class="privacy__item">Заключительные положения
                    <ol>
                        <li>Пользователь может получить любые разъяснения по интересующим вопросам, касающимся
                            обработки
                            его
                            персональных данных, обратившись к Оператору с помощью электронной почты <a href="email:kredit_ufa@inbox.ru">kredit_ufa@inbox.ru</a>.</li>
                        <li>В данном документе будут отражены любые изменения политики обработки персональных данных
                            Оператором. Политика действует бессрочно до замены ее новой версией.</li>
                        <li>Актуальная версия Политики в свободном доступе расположена в сети Интернет по адресу <a href="kredityvsem102.ru/privacy-policy.html">kredityvsem102.ru/privacy-policy.html</a>.</li>
                    </ol>
                </li>
            </ol>
            <button class="privacy__back">Перейти обратно на сайт</button>
        </div>
    </section>
</body>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/script.js"></script>

</html>