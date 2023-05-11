<?php

return [

    'auth'                  => 'Автентикација',
    'profile'               => 'Профил',
    'logout'                => 'Одјави се',
    'login'                 => 'Најави се',
    'forgot'                => 'Заборавено',
    'login_to'              => 'Најави се за да ја започнеш сесијата',
    'remember_me'           => 'Запомни ме',
    'forgot_password'       => 'Заборавена лозинка',
    'reset_password'        => 'Ресетирај лозинка',
    'change_password'       => 'Смени Лозинка',
    'enter_email'           => 'Внеси ја твојата е-маил адреса',
    'current_email'         => 'Е-маил адреса',
    'reset'                 => 'Ресетирај',
    'never'                 => 'никогаш',
    'landing_page'          => 'Почетна страница',
    'personal_information'  => 'Лични информации',
    'register_user'         => 'Регистрирајте корисник',
    'register'              => 'Регистрирај',

    'form_description' => [
        'personal'          => 'Линкот со покана ќе биде испратена до новиот корисник, затоа проверете дали адресата на е-пошта е точна. Тие ќе можат да ја внесат своја лозинка.',
        'assign'            => 'Корисникот ќе има пристап до избраните компании. Можете да го ограничите пристапот од <a href=":url" class="border-b border-black">roles</a> страната.',
        'preferences'       => 'Изберете го стандардниот јазик на корисникот. Можете исто така да ја поставите почетната страница откако корисникот ќе се најави.',
    ],

    'password' => [
        'pass'              => 'Лозинка',
        'pass_confirm'      => 'Потврда на лозинката',
        'current'           => 'Лозинка',
        'current_confirm'   => 'Потврдете ја лозинката',
        'new'               => 'Нова лозинка',
        'new_confirm'       => 'Потврдете ја новата лозинка',
    ],

    'error' => [
        'self_delete'       => 'Грешка: Неможете да се избришете самите!',
        'self_disable'      => 'Грешка: Неможете да се оневозможите самите!',
        'unassigned'        => 'Error:  Не може да се одвои компанијата!  На :company компанијата  мора да и се додели најмалку еден корисник.',
        'no_company'        => 'Грешка: Ниедна компанија не е додадена во вашиот профил. Ве молиме контактирајте го системскиот администратор.',
    ],

    'login_redirect'        => 'Верификацијата е завршена! Се пренасочувате...',
    'failed'                => 'Внесените детали не се совпаѓаат со нашите записи.',
    'throttle'              => 'Премногу обиди за најава. Ве молиме пробајте пак за :seconds секунди.',
    'disabled'              => 'Овој профил е оневозможен. Ве молиме, контактирајте го системскиот администратор.',

    'notification' => [
        'message_1'         => 'Ја добивте оваа е-маил порака затоа што до нас пристигна барање за ресетирање на вашата лозинка.',
        'message_2'         => 'Доколку вие не побаравте ресетирање на вашата лозинка, дополнителна акција не е потребна.',
        'button'            => 'Ресетирај лозинка',
    ],

    'invitation' => [
        'message_1'         => 'Ја добивате оваа е-пошта затоа што сте поканети да се придружите на Akaunting.',
        'message_2'         => 'Ако не сакате да се придружите, не е потребно дополнително дејство.',
        'button'            => 'Започни',
    ],

    'information' => [
        'invoice'           => 'Лесно креирајте фактури',
        'reports'           => 'Добијте детални извештаи',
        'expense'           => 'Следете било кој трошок',
        'customize'         => 'Прилагодете го вашиот Akaunting',
    ],

    'roles' => [
        'admin' => [
            'name'          => 'Админ',
            'description'   => 'Тие добиваат целосен пристап до вашиот Akaunting вклучувајќи клиенти, фактури, извештаи, поставки и апликации.',
        ],
        'manager' => [
            'name'          => 'Менаџер',
            'description'   => 'Тие добиваат целосен пристап до вашиот Akaunting, но не можат да управуваат со корисници и апликации.',
        ],
        'customer' => [
            'name'          => 'Клиент',
            'description'   => 'Тие можат да пристапат до Порталот за Клиенти и да ги плаќаат своите фактури онлајн преку начините на плаќање што ги поставивте.',
        ],
        'accountant' => [
            'name'          => 'Сметководител',
            'description'   => 'Тие можат да пристапат до фактури, трансакции, извештаи и да креираат записи во дневникот.',
        ],
        'employee' => [
            'name'          => 'Вработен',
            'description'   => 'Тие можат да креираат барања за трошоци и да го следат времето за доделените проекти, но можат да ги видат само своите информации.',
        ],
    ],

];
