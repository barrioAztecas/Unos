<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content=""/>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tests</title>
        <!-- Styles and Scripts -->
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
        <link href="css/square.css" rel="stylesheet"/>
        <!-- <meta name="csrf-token" content="{{ csrf_token() }}" /> -->
    </head>
    <body>
        <div class="flex-center position-ref">
            <div class="content">
                <div class=" m-b-md" id="title-test">СОЗДАТЬ ТЕСТ</div>
                <div class="test-name">
                <p>Наименование теста: <input id="testname" type="text"></p>
                </div>
            </div>
        </div>

        <div class="flex-center questionsContainer">
            <div id="questions">
            </div>
            <button id="btnCreateQuestion" type="button">Добавить вопрос</button>
        </div>

        <div class="flex-center position-ref">
            <div class="content main">
                <button class="btnMain btnSave" type="button">Сохранить</button>
                <button class="btnMain btnExit" type="button">Выйти</button>
            </div>
            <div class="content askuser test-name">
                <h3>Сохранить тест перед выходом?</h3>
                <button class="btnMain btnYes" type="button">Выйти без сохранения</button>
                <button class="btnMain btnNo" type="button">Отмена</button>
                <button class="btnMain btnSave" type="button">Сохранить и выйти</button>
            </div>
        </div>

    </body>
</html>
