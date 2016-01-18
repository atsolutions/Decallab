<?php

$lang = array(
	// payment gateways
	'merchant_2checkout'					=> '2Checkout',
	'merchant_authorize_net'				=> 'Authorize.Net AIM',
	'merchant_authorize_net_sim'			=> 'Authorize.Net SIM',
	'merchant_buckaroo'						=> 'Buckaroo',
	'merchant_cardsave'						=> 'Cardsave',
	'merchant_dps_pxpay'					=> 'DPS PaymentExpress PxPay',
	'merchant_dps_pxpost'					=> 'DPS PaymentExpress PxPost',
	'merchant_dummy'						=> 'Dummy',
	'merchant_eway'							=> 'eWay Hosted',
	'merchant_eway_shared'					=> 'eWay Shared',
	'merchant_eway_shared_uk'				=> 'eWay Shared (UK)',
	'merchant_ideal'						=> 'iDEAL',
	'merchant_inipay'						=> 'INIpay',
	'merchant_gocardless'					=> 'GoCardless',
	'merchant_manual'						=> 'Käsiraamat',
	'merchant_mollie'						=> 'Mollie',
	'merchant_netaxept'						=> 'Nets Netaxept',
	'merchant_ogone_directlink'				=> 'Ogone DirectLink',
	'merchant_payflow_pro'					=> 'Payflow Pro',
	'merchant_paymate'						=> 'Paymate',
	'merchant_paypal_express'				=> 'PayPal Express',
	'merchant_paypal_pro'					=> 'PayPal Pro',
	'merchant_rabo_omnikassa'				=> 'Rabo OmniKassa',
	'merchant_sagepay_direct'				=> 'Sagepay Direct',
	'merchant_sagepay_server'				=> 'Sagepay Server',
	'merchant_stripe'						=> 'Stripe',
	'merchant_webteh_direct'				=> 'Webteh Direct',
	'merchant_worldpay'						=> 'WorldPay',

	// payment gateway settings
	'merchant_api_login_id'					=> 'API Login ID',
	'merchant_transaction_key'				=> 'Tehingu võti',
	'merchant_test_mode'					=> 'Testimise režiim',
	'merchant_developer_mode'				=> 'Arendaja režiim',
	'merchant_simulator_mode'				=> 'Simulatsiooni režiim',
	'merchant_user_id'						=> 'Kasutaja ID',
	'merchant_app_id'						=> 'App ID',
	'merchant_psp_id'						=> 'PSP ID',
	'merchant_api_key'						=> 'API võti',
	'merchant_key'							=> 'Võti',
	'merchant_key_version'					=> 'Versiooni võti',
	'merchant_username'						=> 'Kasutajanimi',
	'merchant_vendor'						=> 'Tarnija',
	'merchant_partner_id'					=> 'Partneri ID',
	'merchant_password'						=> 'Salasõna',
	'merchant_signature'					=> 'Allkiri',
	'merchant_customer_id'					=> 'Kliendi ID',
	'merchant_merchant_id'					=> 'Kaupmehe ID',
	'merchant_account_no'					=> 'Konto nr',
	'merchant_installation_id'				=> 'Installatsiooni ID',
	'merchant_website_key'					=> 'Veebilehe võti',
	'merchant_secret_word'					=> 'Salajane sõna',
	'merchant_secret'						=> 'Salajane',
	'merchant_app_secret'					=> 'App saladus',
	'merchant_secret_key'					=> 'Salajane võti',
	'merchant_token'						=> 'Token',
	'merchant_access_token'					=> 'Juurdepääsuluba',
	'merchant_payment_response_password'	=> 'Laekumise tagasiside salasõna',
	'merchant_company_name'					=> 'Firma nimi',
	'merchant_company_logo'					=> 'Firma logo',
	'merchant_page_title'					=> 'Lehekülje pealkiri',
	'merchant_page_banner'					=> 'Lehekülje bänner',
	'merchant_page_description'				=> 'Lehekülje kirjeldus',
	'merchant_page_footer'					=> 'Lehekülje jalus',
	'merchant_enable_token_billing'			=> 'Salvestada maksekaardi andmed teostatud laekumisele',
	'merchant_paypal_email'					=> 'PayPal-i konto e-mail',
	'merchant_acquirer_url'					=> 'Omandaja URL',
	'merchant_public_key_path'				=> 'Avaliku võtme rada',
	'merchant_private_key_path'				=> 'Privaatvõtme rada',
	'merchant_private_key_password'			=> 'Privaatvõtme salasõna',
	'merchant_solution_type'				=> 'PayPal-i konto on kohustuslik',
	'merchant_landing_page'					=> 'Valitud laekumise sakk',
	'merchant_solution_type_mark'			=> 'PayPal-i konto on kohustuslik',
	'merchant_solution_type_sole'			=> 'PayPal-i konto on valikuline',
	'merchant_landing_page_billing'			=> 'Külalise vormistus või registreeru kasutajaks',
	'merchant_landing_page_login'			=> 'PayPal-i kontole sisselogimine',

	// payment gateway fields
	'merchant_card_type'					=> 'Kaardi tüüp',
	'merchant_card_no'						=> 'Kaardi number',
	'merchant_name'							=> 'Nimi',
	'merchant_first_name'					=> 'Eesnimi',
	'merchant_last_name'					=> 'Perekonnanimi',
	'merchant_card_issue'					=> 'Kaardi väljaandja number',
	'merchant_exp_month'					=> 'Aegumise kuu',
	'merchant_exp_year'						=> 'Aegumise aasta',
	'merchant_start_month'					=> 'Alguskuu',
	'merchant_start_year'					=> 'Algusaasta',
	'merchant_csc'							=> 'CSC',
	'merchant_issuer'						=> 'Väljastaja',

	// status/error messages
	'merchant_insecure_connection'			=> 'Kaardi andmed tuleb edastada turvalise ühenduse kaudu.',
	'merchant_required'						=> 'Väli %s on kohustuslik.',
	'merchant_invalid_card_no'				=> 'Kaardi number ei sobi.',
	'merchant_card_expired'					=> 'Kaart on aegunud.',
	'merchant_invalid_status'				=> 'Sobimatu makse staatus',
	'merchant_invalid_method'				=> 'Värav ei toeta seda meetodit.',
	'merchant_invalid_response'				=> 'Vale vastus makse väravast.',
	'merchant_payment_failed'				=> 'Makse ebaõnnestus. Palun proovige uuesti.',
	'merchant_payment_redirect'				=> 'Palun oodake, suundume maksmise lehele...',
	'merchant_3dauth_redirect'				=> 'Palun oodake, kuni suundume sinu kaardi väljaandja juurde autentimiseks...'
);

/* End of file ./language/english/merchant_lang.php */