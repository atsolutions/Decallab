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
	'merchant_manual'						=> 'يدوي',
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
	'merchant_transaction_key'				=> 'مفتاح العملية',
	'merchant_test_mode'					=> 'وضع الاختبار',
	'merchant_developer_mode'				=> 'وضع المطور',
	'merchant_simulator_mode'				=> 'وضع محاكاة',
	'merchant_user_id'						=> 'معرف المستخدم',
	'merchant_app_id'						=> 'App ID',
	'merchant_psp_id'						=> 'رمز PSP',
	'merchant_api_key'						=> 'مفتاح API',
	'merchant_key'							=> 'مفتاح',
	'merchant_key_version'					=> 'الإصدار الرئيسي',
	'merchant_username'						=> 'اسم المستخدم',
	'merchant_vendor'						=> 'المورد',
	'merchant_partner_id'					=> 'رمز الشريك',
	'merchant_password'						=> 'كلمة المرور',
	'merchant_signature'					=> 'التوقيع',
	'merchant_customer_id'					=> 'رمز العميل',
	'merchant_merchant_id'					=> 'معرف التاجر',
	'merchant_account_no'					=> 'رقم الحساب',
	'merchant_installation_id'				=> 'رمز التثبيت',
	'merchant_website_key'					=> 'مفتاح الموقع',
	'merchant_secret_word'					=> 'كلمة سر',
	'merchant_secret'						=> 'سر',
	'merchant_app_secret'					=> 'سر التطبيق',
	'merchant_secret_key'					=> 'المفتاح السري',
	'merchant_token'						=> 'Token',
	'merchant_access_token'					=> 'الرمز المميز للوصول',
	'merchant_payment_response_password'	=> 'دفعة تتطلب كلمة سر',
	'merchant_company_name'					=> 'اسم الشركة',
	'merchant_company_logo'					=> 'شعار الشركة',
	'merchant_page_title'					=> 'عنوان الصفحة',
	'merchant_page_banner'					=> 'إعلان الصفحة',
	'merchant_page_description'				=> 'وصف الصفحة',
	'merchant_page_footer'					=> 'تذييل الصفحة',
	'merchant_enable_token_billing'			=> 'تخزين تفاصيل البطاقة للفواتير المنجزة',
	'merchant_paypal_email'					=> 'حساب البريد الإلكتروني PayPal',
	'merchant_acquirer_url'					=> 'عنوان المشتري',
	'merchant_public_key_path'				=> 'المفتاح العام لمسار المخدم',
	'merchant_private_key_path'				=> 'المفتاح الخاص لمسار المخدم',
	'merchant_private_key_password'			=> 'المفتاح الخاص لكلمة السر',
	'merchant_solution_type'				=> 'مطلوب حساب PayPal',
	'merchant_landing_page'					=> 'التبويب المحدد للدفع',
	'merchant_solution_type_mark'			=> 'مطلوب حساب PayPal',
	'merchant_solution_type_sole'			=> 'حساب PayPal اختياري',
	'merchant_landing_page_billing'			=> 'إتهاء وضع ضيف/إنشاء حساب',
	'merchant_landing_page_login'			=> 'تسجيل الدخول حساب PayPal',

	// payment gateway fields
	'merchant_card_type'					=> 'نوع البطاقة',
	'merchant_card_no'						=> 'رقم البطاقة',
	'merchant_name'							=> 'الاسم',
	'merchant_first_name'					=> 'الاسم الأول',
	'merchant_last_name'					=> 'اسم العائلة',
	'merchant_card_issue'					=> 'رقم مصدر البطاقة',
	'merchant_exp_month'					=> 'شهر الانتهاء',
	'merchant_exp_year'						=> 'الإنتهاء سنة',
	'merchant_start_month'					=> 'البدء شهر',
	'merchant_start_year'					=> 'البدء سنة',
	'merchant_csc'							=> 'الرمز الآمن للبطاقة',
	'merchant_issuer'						=> 'المصدر',

	// status/error messages
	'merchant_insecure_connection'			=> 'يجب إرسال تفاصيل البطاقة عبر إتصال آمن.',
	'merchant_required'						=> 'مطلوب الحقل %s.',
	'merchant_invalid_card_no'				=> 'رقم البطاقة غير صالح.',
	'merchant_card_expired'					=> 'انتهت مدة صلاحية البطاقة.',
	'merchant_invalid_status'				=> 'حالة الدفع غير صالحة',
	'merchant_invalid_method'				=> 'الأسلوب غير معتمد في هذا القسم.',
	'merchant_invalid_response'				=> 'استجابة غير صالحة من قسم الدفع.',
	'merchant_payment_failed'				=> 'فشل إنجاز الدفعة. الرجاء المحاولة مرة أخرى.',
	'merchant_payment_redirect'				=> 'الرجاء الانتظار يتم توجيهك إلى صفحة الدفع...',
	'merchant_3dauth_redirect'				=> 'الرجاء الانتظار بينما يتم إعادة توجيهك إلى مصدر البطاقة للمصادقة...'
);

/* End of file ./language/english/merchant_lang.php */