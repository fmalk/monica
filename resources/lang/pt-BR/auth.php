<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'Credenciais informadas não correspondem com nossos registros.',
    'throttle' => 'Você realizou muitas tentativas de login. Por favor, tente novamente em :seconds segundos.',
    'not_authorized' => 'Você não está autorizado a executar esta ação',
    'signup_disabled' => 'Registro está temporariamente suspenso',
    'back_homepage' => 'Voltar à página inicial',
    'mfa_auth_otp' => 'Autenticar com seu dispositivo de dois fatores',
    'mfa_auth_u2f' => 'Autenticar com um dispositivo U2F',
    'mfa_auth_webauthn' => 'Autenticar com uma chave de segurança (WebAuthn)',
    '2fa_title' => 'Autenticação de Dois Fatores',
    '2fa_wrong_validation' => 'A autenticação de dois fatores falhou.',
    '2fa_one_time_password' => 'Código de autenticação dois fatores',
    '2fa_recuperation_code' => 'Entre com um código de recuperação de dois fatores',
    '2fa_otp_help' => 'Abra seu app mobile de autenticação dois fatores e copie o código',
	'u2f_otp_extension' => 'U2F é suportado nativamente pelo Chrome, <a href="{urlquantum}" lang="en">Firefox</a> e Opera. Em versões antigas do Firefox, instale o <a href="{urlext}">U2F Support Add-on</a>.',

    'login_to_account' => 'Login na sua conta',
    'login_with_recovery' => 'Login com um código de recuperação',
    'login_again' => 'Por favor faça login novamente na sua conta',
    'email' => 'Email',
    'password' => 'Senha',
    'recovery' => 'Código de recuperação',
    'login' => 'Login',
    'button_remember' => 'Lembre-me',
    'password_forget' => 'Esqueceu sua senha?',
    'password_reset' => 'Redefina sua senha',
    'use_recovery' => 'Ou você pode usar um <a href=":url">código de recuperação</a>',
    'signup_no_account' => 'Não tem uma conta?',
    'signup' => 'Inscrever',
    'create_account' => 'Cria a primeira conta <a href=":url">se inscrevendo</a>',
    'change_language_title' => 'Mudar idioma:',
    'change_language' => 'Mudar idioma para :lang',

    'password_reset_title' => 'Redefinir Senha',
    'password_reset_email' => 'Endereço de E-Mail',
    'password_reset_send_link' => 'Enviar Link de Redefinição de Senha',
    'password_reset_password' => 'Senha',
    'password_reset_password_confirm' => 'Confirme a Senha',
    'password_reset_action' => 'Redefinir Senha',
    'password_reset_email_content' => 'Clique aqui para redefinir sua senha:',

    'register_title_welcome' => 'Bem-vindo À sua recém-instalada instância Monica',
    'register_create_account' => 'Você precisa criar uma conta para usar Monica',
    'register_title_create' => 'Cria sua conta Monica',
    'register_login' => '<a href=":url">Log in</a> se você já tem uma conta.',
    'register_email' => 'Digite um endereço de email válido',
    'register_email_example' => 'voce@casa',
    'register_firstname' => 'Primeiro nome',
    'register_firstname_example' => 'ex: João',
    'register_lastname' => 'Sobrenome',
    'register_lastname_example' => 'ex: Silva',
    'register_password' => 'Senha',
    'register_password_example' => 'Digite uma senha segura',
    'register_password_confirmation' => 'Confirme a senha',
    'register_action' => 'Registre',
    'register_policy' => 'Registrar significa que você leu e concorda com nossas <a href=":url" hreflang=":hreflang">Políticas de Privacidade</a> e <a href=":urlterm" hreflang=":hreflang">Termos de Uso</a>.',
    'register_invitation_email' => 'Por razões de segurança, por favor indique o email da pessoa que a convidou para ingressar nesta conta. Esta informação foi fornecida no email de convite.',

    'confirmation_title' => 'Verifique seu Endereço de Email',
    'confirmation_fresh' => 'Um novo link de verificação foi enviado ao seu endereço de email.',
    'confirmation_check' => 'Antes de proceder, por favor confira seu email para o link de verificação.',
    'confirmation_request_another' => 'Se você não recebeu um email <a href=":url">clique aqui para requisitar outro</a>.',

    'confirmation_again' => 'Se você quiser mudar seu endereço de email <a href=":url" class="alert-link">clique aqui</a>.',
    'email_change_current_email' => 'Endereço de email atual:',
    'email_change_title' => 'Mude seu endereço de email',
    'email_change_new' => 'Novo endereço de email',
    'email_changed' => 'Seu email foi alterado. Confira sua caixa de entrada para validá-lo.',
];
