<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.0.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Farha Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'editdong@rabbani.co.id',
		'to' => 'editdong@rabbani.co.id'
	),
	'fields' => array(
		'custom_U3223' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'NAMA',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'NAMA\' is required.'
			)
		),
		'Email' => array(
			'order' => 4,
			'type' => 'email',
			'label' => 'EMAIL',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'EMAIL\' is required.',
				'format' => 'Field \'EMAIL\' has an invalid email.'
			)
		),
		'custom_U3227' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'ALAMAT',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'ALAMAT\' is required.'
			)
		),
		'custom_U3188' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'No.TELEPON/WA',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'No.TELEPON/WA\' is required.'
			)
		),
		'custom_U3874' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Quantity',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U4022' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Quantity',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U4118' => array(
			'order' => 12,
			'type' => 'string',
			'label' => 'Quantity',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U4522' => array(
			'order' => 15,
			'type' => 'string',
			'label' => 'Quantity',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U4543' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Size',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U4844' => array(
			'order' => 10,
			'type' => 'string',
			'label' => 'Size',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5029' => array(
			'order' => 13,
			'type' => 'string',
			'label' => 'Size',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U5136' => array(
			'order' => 16,
			'type' => 'string',
			'label' => 'Size',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U4563' => array(
			'order' => 6,
			'type' => 'checkboxgroup',
			'label' => 'ST. PIYAMA FARHA DAD',
			'required' => false,
			'optionItems' => array(
				'Grey',
				'Dusty Pink',
				'Sand'
			),
			'errors' => array(
				'format' => 'Field \'ST. PIYAMA FARHA DAD\' has an invalid value.'
			)
		),
		'custom_U4870' => array(
			'order' => 11,
			'type' => 'checkboxgroup',
			'label' => 'ST. PIYAMA FARHA BOY',
			'required' => false,
			'optionItems' => array(
				'Grey',
				'Dusty Pink',
				'Sand'
			),
			'errors' => array(
				'format' => 'Field \'ST. PIYAMA FARHA BOY\' has an invalid value.'
			)
		),
		'custom_U5049' => array(
			'order' => 14,
			'type' => 'checkboxgroup',
			'label' => 'ST. PIYAMA FARHA GIRL',
			'required' => false,
			'optionItems' => array(
				'Grey',
				'Dusty Pink',
				'Sand'
			),
			'errors' => array(
				'format' => 'Field \'ST. PIYAMA FARHA GIRL\' has an invalid value.'
			)
		),
		'custom_U4754' => array(
			'order' => 8,
			'type' => 'checkboxgroup',
			'label' => 'ST. PIYAMA FARHA MOM',
			'required' => false,
			'optionItems' => array(
				'Grey',
				'Dusty Pink',
				'Sand'
			),
			'errors' => array(
				'format' => 'Field \'ST. PIYAMA FARHA MOM\' has an invalid value.'
			)
		)
	)
);

process_form($form);
?>
