<?php
/**
 * Authentication Language Lines
 * The following language lines are used during authentication for various
 * messages that we need to display to the user.
 */
return [

    'failed' => 'Учетная запись не найдена.',
    'throttle' => 'Слишком много попыток входа. Пожалуйста, повторите попытку через :seconds секунд.',

    // Login & Register
    'sign_up' => 'Регистрация',
    'log_in' => 'Вход',
    'log_in_with' => 'Вход с :socialDriver',
    'sign_up_with' => 'Регистрация с :socialDriver',
    'logout' => 'Выход',

    'name' => 'Имя',
    'username' => 'Логин',
    'email' => 'Адрес электронной почты',
    'password' => 'Пароль',
    'password_confirm' => 'Подтверждение пароля',
    'password_hint' => 'Минимум 8 символов',
    'forgot_password' => 'Забыли пароль?',
    'remember_me' => 'Запомнить меня',
    'ldap_email_hint' => 'Введите адрес электронной почты для этой учетной записи.',
    'create_account' => 'Создать аккаунт',
    'already_have_account' => 'Уже есть аккаунт?',
    'dont_have_account' => 'У вас нет аккаунта?',
    'social_login' => 'Вход через Соцсеть',
    'social_registration' => 'Регистрация через Соцсеть',
    'social_registration_text' => 'Регистрация и вход через другой сервис.',

    'register_thanks' => 'Благодарим за регистрацию!',
    'register_confirm' => 'Проверьте свою электронную почту и нажмите кнопку подтверждения для доступа к :appName.',
    'registrations_disabled' => 'Регистрация отключена',
    'registration_email_domain_invalid' => 'Данный домен электронной почты недоступен для регистрации',
    'register_success' => 'Спасибо за регистрацию! Регистрация и вход в систему выполнены.',

    // Password Reset
    'reset_password' => 'Сброс пароля',
    'reset_password_send_instructions' => 'Введите свой адрес электронной почты ниже, и вам будет отправлено письмо со ссылкой для сброса пароля.',
    'reset_password_send_button' => 'Сбросить пароль',
    'reset_password_sent' => 'Ссылка для сброса пароля будет выслана на :email, если этот адрес находится в системе.',
    'reset_password_success' => 'Ваш пароль был успешно сброшен.',
    'email_reset_subject' => 'Сброс пароля от :appName',
    'email_reset_text' => 'Вы получили это письмо, потому что запросили сброс пароля для вашей учетной записи.',
    'email_reset_not_requested' => 'Если вы не запрашивали сброса пароля, то никаких дополнительных действий не требуется.',

    // Email Confirmation
    'email_confirm_subject' => 'Подтвердите ваш почтовый адрес на :appName',
    'email_confirm_greeting' => 'Благодарим за участие :appName!',
    'email_confirm_text' => 'Пожалуйста, подтвердите свой адрес электронной почты нажав на кнопку ниже:',
    'email_confirm_action' => 'Подтвердить адрес электронной почты',
    'email_confirm_send_error' => 'Требуется подтверждение электронной почты, но система не может отправить письмо. Свяжитесь с администратором, чтобы убедиться, что адрес электронной почты настроен правильно.',
    'email_confirm_success' => 'Your email has been confirmed! You should now be able to login using this email address.',
    'email_confirm_resent' => 'Письмо с подтверждение выслано снова. Пожалуйста, проверьте ваш почтовый ящик.',

    'email_not_confirmed' => 'Адрес электронной почты не подтвержден',
    'email_not_confirmed_text' => 'Ваш email адрес все еще не подтвержден.',
    'email_not_confirmed_click_link' => 'Пожалуйста, нажмите на ссылку в письме, которое было отправлено при регистрации.',
    'email_not_confirmed_resend' => 'Если вы не можете найти электронное письмо, вы можете снова отправить его с подтверждением по форме ниже.',
    'email_not_confirmed_resend_button' => 'Переотправить письмо с подтверждением',

    // User Invite
    'user_invite_email_subject' => 'Вас приглашают присоединиться к :appName!',
    'user_invite_email_greeting' => 'Для вас создан аккаунт в :appName.',
    'user_invite_email_text' => 'Нажмите кнопку ниже, чтобы задать пароль и получить доступ:',
    'user_invite_email_action' => 'Установить пароль для аккаунта',
    'user_invite_page_welcome' => 'Добро пожаловать в :appName!',
    'user_invite_page_text' => 'Завершите настройку аккаунта, установите пароль для дальнейшего входа в :appName.',
    'user_invite_page_confirm_button' => 'Подтвердите пароль',
    'user_invite_success_login' => 'Password set, you should now be able to login using your set password to access :appName!',

    // Multi-factor Authentication
    'mfa_setup' => 'Двухфакторная аутентификация',
    'mfa_setup_desc' => 'Двухфакторная аутентификация повышает степень безопасности вашей учетной записи.',
    'mfa_setup_configured' => 'Настроено',
    'mfa_setup_reconfigure' => 'Перенастроить',
    'mfa_setup_remove_confirmation' => 'Вы уверены, что хотите удалить этот двухфакторный метод аутентификации?',
    'mfa_setup_action' => 'Настройка',
    'mfa_backup_codes_usage_limit_warning' => 'У вас осталось менее 5 резервных кодов, пожалуйста, создайте и сохраните новый набор перед тем, как закончатся коды, чтобы предотвратить блокировку вашей учетной записи.',
    'mfa_option_totp_title' => 'Мобильное приложение',
    'mfa_option_totp_desc' => 'Для использования двухфакторной аутентификации вам понадобится мобильное приложение, поддерживающее TOTP, например Google Authenticator, Authy или Microsoft Authenticator.',
    'mfa_option_backup_codes_title' => 'Резервные коды',
    'mfa_option_backup_codes_desc' => 'Безопасно хранить набор одноразовых резервных кодов, которые вы можете ввести для проверки вашей личности.',
    'mfa_gen_confirm_and_enable' => 'Подтвердить и включить',
    'mfa_gen_backup_codes_title' => 'Настройка резервных кодов',
    'mfa_gen_backup_codes_desc' => 'Сохраните приведенный ниже список кодов в безопасном месте. При доступе к системе вы сможете использовать один из кодов в качестве второго механизма аутентификации.',
    'mfa_gen_backup_codes_download' => 'Скачать коды',
    'mfa_gen_backup_codes_usage_warning' => 'Каждый код может быть использован только один раз',
    'mfa_gen_totp_title' => 'Настройка мобильного приложения',
    'mfa_gen_totp_desc' => 'Для использования двухфакторной аутентификации вам понадобится мобильное приложение, поддерживающее TOTP, например Google Authenticator, Authy или Microsoft Authenticator.',
    'mfa_gen_totp_scan' => 'Отсканируйте QR-код, используя приложение для аутентификации.',
    'mfa_gen_totp_verify_setup' => 'Проверить настройки',
    'mfa_gen_totp_verify_setup_desc' => 'Проверьте, что все работает введя код, сгенерированный внутри вашего приложения для аутентификации, в поле ввода ниже:',
    'mfa_gen_totp_provide_code_here' => 'Введите код, сгенерированный приложением',
    'mfa_verify_access' => 'Подтвердите доступ',
    'mfa_verify_access_desc' => 'Ваша учетная запись требует подтверждения личности на дополнительном уровне верификации, прежде чем вам будет предоставлен доступ. Для продолжения подтвердите вход, используя один из настроенных методов.',
    'mfa_verify_no_methods' => 'Методы не настроены',
    'mfa_verify_no_methods_desc' => 'Для вашей учетной записи не найдены двухфакторные методы аутентификации. Вам нужно настроить хотя бы один метод, прежде чем получить доступ.',
    'mfa_verify_use_totp' => 'Проверить используя мобильное приложение',
    'mfa_verify_use_backup_codes' => 'Проверить используя резервный код',
    'mfa_verify_backup_code' => 'Резервный код',
    'mfa_verify_backup_code_desc' => 'Введите один из оставшихся резервных кодов ниже:',
    'mfa_verify_backup_code_enter_here' => 'Введите резервный код',
    'mfa_verify_totp_desc' => 'Введите код, сгенерированный с помощью мобильного приложения, ниже:',
    'mfa_setup_login_notification' => 'Двухфакторный метод настроен, пожалуйста, войдите снова, используя сконфигурированный метод.',
];
