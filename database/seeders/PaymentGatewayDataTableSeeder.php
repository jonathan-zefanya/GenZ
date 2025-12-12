<?php

namespace Database\Seeders;

use App\Enums\GatewayMode;
use App\Enums\Activity;
use App\Models\GatewayOption;
use App\Models\PaymentGateway;
use Dipokhalder\EnvEditor\EnvEditor;
use Illuminate\Database\Seeder;

class PaymentGatewayDataTableSeeder extends Seeder
{

    public array $gateways = [
        [
            "slug"    => "paypal",
            "status"  => Activity::ENABLE,
            "options" => [
                [
                    "option" => 'paypal_app_id',
                    "value"  => env('PAYPAL_APP_ID', 'sb-qzxs18789565@business.example.com'),
                ],
                [
                    "option" => 'paypal_client_id',
                    "value"  => env('PAYPAL_CLIENT_ID', '')
                ],
                [
                    "option" => 'paypal_client_secret',
                    "value"  => env('PAYPAL_CLIENT_SECRET', '')
                ],
                [
                    "option" => 'paypal_mode',
                    "value"  => GatewayMode::SANDBOX
                ],
                [
                    "option" => 'paypal_status',
                    "value"  => Activity::ENABLE
                ],
            ]
        ],
        [
            "slug"    => "stripe",
            "status"  => Activity::ENABLE,
            "options" => [
                [
                    "option" => 'stripe_key',
                    "value"  => env('STRIPE_KEY', ''),
                ],
                [
                    "option" => 'stripe_secret',
                    "value"  => env('STRIPE_SECRET', ''),
                ],
                [
                    "option" => 'stripe_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'stripe_status',
                    "value"  => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug"    => "flutterwave",
            "status"  => Activity::ENABLE,
            "options" => [
                [
                    "option" => 'flutterwave_public_key',
                    "value"  => env('FLUTTERWAVE_PUBLIC_KEY', ''),
                ],
                [
                    "option" => 'flutterwave_secret_key',
                    "value"  => env('FLUTTERWAVE_SECRET_KEY', ''),
                ],
                [
                    "option" => 'flutterwave_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'flutterwave_status',
                    "value"  => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug"    => "paystack",
            "status"  => Activity::ENABLE,
            "options" => [
                [
                    "option" => 'paystack_public_key',
                    "value"  => env('PAYSTACK_PUBLIC_KEY', ''),
                ],
                [
                    "option" => 'paystack_secret_key',
                    "value"  => env('PAYSTACK_SECRET_KEY', ''),
                ],
                [
                    "option" => 'paystack_payment_url',
                    "value"  => 'https://api.paystack.co',
                ],
                [
                    "option" => 'paystack_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'paystack_status',
                    "value"  => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug"    => "sslcommerz",
            "status"  => Activity::ENABLE,
            "options" => [
                [
                    "option" => 'sslcommerz_store_name',
                    "value"  => env('SSLCOMMERZ_STORE_NAME', ''),
                ],
                [
                    "option" => 'sslcommerz_store_id',
                    "value"  => env('SSLCOMMERZ_STORE_ID', ''),
                ],
                [
                    "option" => 'sslcommerz_store_password',
                    "value"  => env('SSLCOMMERZ_STORE_PASSWORD', ''),
                ],
                [
                    "option" => 'sslcommerz_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'sslcommerz_status',
                    "value"  => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug"    => "mollie",
            "status"  => Activity::ENABLE,
            "options" => [
                [
                    "option" => 'mollie_api_key',
                    "value"  => env('MOLLIE_API_KEY', ''),
                ],
                [
                    "option" => 'mollie_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'mollie_status',
                    "value"  => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug"    => "senangpay",
            "status"  => Activity::ENABLE,
            "options" => [
                [
                    "option" => 'senangpay_merchant_id',
                    "value"  => env('SENANGPAY_MERCHANT_ID', ''),
                ],
                [
                    "option" => 'senangpay_secret_key',
                    "value"  => env('SENANGPAY_SECRET_KEY', ''),
                ],
                [
                    "option" => 'senangpay_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'senangpay_status',
                    "value"  => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug"    => "bkash",
            "status"  => Activity::ENABLE,
            "options" => [
                [
                    "option" => 'bkash_app_key',
                    "value"  => env('BKASH_APP_KEY', ''),
                ],
                [
                    "option" => 'bkash_app_secret',
                    "value"  => env('BKASH_APP_SECRET', ''),
                ],
                [
                    "option" => 'bkash_username',
                    "value"  => env('BKASH_USERNAME', '')
                ],
                [
                    "option" => 'bkash_password',
                    "value"  => env('BKASH_PASSWORD', '')
                ],
                [
                    "option" => 'bkash_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'bkash_status',
                    "value"  => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug"    => "paytm",
            "status"  => Activity::ENABLE,
            "options" => [
                [
                    "option" => 'paytm_merchant_id',
                    "value"  => env('PAYTM_MERCHANT_ID', ''),
                ],
                [
                    "option" => 'paytm_merchant_key',
                    "value"  => env('PAYTM_MERCHANT_KEY', ''),
                ],
                [
                    "option" => 'paytm_merchant_website',
                    "value"  => 'WEBSTAGING',
                ],
                [
                    "option" => 'paytm_channel',
                    "value"  => 'WEB',
                ],
                [
                    "option" => 'paytm_industry_type',
                    "value"  => 'Retail',
                ],
                [
                    "option" => 'paytm_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'paytm_status',
                    "value"  => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug"    => "razorpay",
            "status"  => Activity::ENABLE,
            "options" => [
                [
                    "option" => 'razorpay_key',
                    "value"  => env('RAZORPAY_KEY', ''),
                ],
                [
                    "option" => 'razorpay_secret',
                    "value"  => env('RAZORPAY_SECRET', ''),
                ],
                [
                    "option" => 'razorpay_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'razorpay_status',
                    "value"  => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug"    => "mercadopago",
            "status"  => Activity::ENABLE,
            "options" => [
                [
                    "option" => 'mercadopago_client_id',
                    "value"  => env('MERCADOPAGO_CLIENT_ID', ''),
                ],
                [
                    "option" => 'mercadopago_client_secret',
                    "value"  => env('MERCADOPAGO_CLIENT_SECRET', ''),
                ],
                [
                    "option" => 'mercadopago_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'mercadopago_status',
                    "value"  => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug"    => "cashfree",
            "status"  => Activity::ENABLE,
            "options" => [
                [
                    "option" => 'cashfree_app_id',
                    "value"  => env('CASHFREE_APP_ID', ''),
                ],
                [
                    "option" => 'cashfree_secret_key',
                    "value"  => env('CASHFREE_SECRET_KEY', ''),
                ],
                [
                    "option" => 'cashfree_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'cashfree_status',
                    "value"  => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug"    => "payfast",
            "status"  => Activity::ENABLE,
            "options" => [
                [
                    "option" => 'payfast_merchant_id',
                    "value"  => env('PAYFAST_MERCHANT_ID', ''),
                ],
                [
                    "option" => 'payfast_merchant_key',
                    "value"  => env('PAYFAST_MERCHANT_KEY', ''),
                ],
                [
                    "option" => 'payfast_passphrase',
                    "value"  => env('PAYFAST_PASSPHRASE', ''),
                ],
                [
                    "option" => 'payfast_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'payfast_status',
                    "value"  => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug"    => "skrill",
            "status"  => Activity::ENABLE,
            "options" => [
                [
                    "option" => 'skrill_merchant_email',
                    "value"  => env('SKRILL_MERCHANT_EMAIL', ''),
                ],
                [
                    "option" => 'skrill_merchant_api_password',
                    "value"  => env('SKRILL_MERCHANT_API_PASSWORD', ''),
                ],
                [
                    "option" => 'skrill_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'skrill_status',
                    "value"  => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug"    => "phonepe",
            "status"  => Activity::ENABLE,
            "options" => [
                [
                    "option" => 'phonepe_client_id',
                    "value"  => env('PHONEPE_CLIENT_ID', ''),
                ],
                [
                    "option" => 'phonepe_merchant_user_id',
                    "value"  => env('PHONEPE_MERCHANT_USER_ID', ''),
                ],
                [
                    "option" => 'phonepe_key_index',
                    "value"  => env('PHONEPE_KEY_INDEX', '1'),
                ],
                [
                    "option" => 'phonepe_secret_key',
                    "value"  => env('PHONEPE_SECRET_KEY', ''),
                ],
                [
                    "option" => 'phonepe_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'phonepe_status',
                    "value"  => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug"    => "iyzico",
            "status"  => Activity::ENABLE,
            "options" => [
                [
                    "option" => 'iyzico_api_key',
                    "value"  => env('IYZICO_API_KEY', ''),
                ],
                [
                    "option" => 'iyzico_secret_key',
                    "value"  => env('IYZICO_SECRET_KEY', ''),
                ],
                [
                    "option" => 'iyzico_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'iyzico_status',
                    "value"  => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug"    => "pesapal",
            "status"  => Activity::ENABLE,
            "options" => [
                [
                    "option" => 'pesapal_consumer_key',
                    "value"  => env('PESAPAL_CONSUMER_KEY', ''),
                ],
                [
                    "option" => 'pesapal_consumer_secret',
                    "value"  => env('PESAPAL_CONSUMER_SECRET', ''),
                ],
                [
                    "option" => 'pesapal_ipn_id',
                    "value"  => env('PESAPAL_IPN_ID', ''),
                ],
                [
                    "option" => 'pesapal_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'pesapal_status',
                    "value"  => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug" => "midtrans",
            "status" => Activity::ENABLE,
            "options" => [
                [
                    "option" => 'midtrans_server_key',
                    "value" => env('MIDTRANS_SERVER_KEY', ''),
                ],
                [
                    "option" => 'midtrans_mode',
                    "value" => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'midtrans_status',
                    "value" => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug" => "twocheckout",
            "status" => Activity::ENABLE,
            "options" => [

                [
                    "option" => 'twocheckout_seller_id',
                    "value"  => env('TWOCHECKOUT_SELLER_ID', ''),
                ],
                [
                    "option" => 'twocheckout_secret_key',
                    "value"  => env('TWOCHECKOUT_SECRET_KEY', ''),
                ],
                [
                    "option" => 'twocheckout_buy_link_secret_word',
                    "value"  => env('TWOCHECKOUT_BUY_LINK_SECRET_WORD', ''),
                ],
                [
                    "option" => 'twocheckout_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'twocheckout_status',
                    "value"  => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug" => "myfatoorah",
            "status" => Activity::ENABLE,
            "options" => [

                [
                    "option" => 'myfatoorah_api_key',
                    "value"  => env('MYFATOORAH_API_KEY', ''),
                ],
                [
                    "option" => 'myfatoorah_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option" => 'myfatoorah_status',
                    "value"  => Activity::ENABLE,
                ],
            ]
        ],
        [
            "slug"    => "easypaisa",
            "status"  => Activity::ENABLE,
            "options" => [
                [
                    "option"     => 'easypaisa_store_id',
                    "value"      => env('EASYPAISA_STORE_ID', ''),
                ],
                [
                    "option"     => 'easypaisa_hash_key',
                    "value"      => env('EASYPAISA_HASH_KEY', ''),
                ],
                [
                    "option" => 'easypaisa_username',
                    "value"  => env('EASYPAISA_USERNAME', ''),

                ],
                [
                    "option" => 'easypaisa_password',
                    "value"  => env('EASYPAISA_PASSWORD', ''),

                ],
                [
                    "option"     => 'easypaisa_mode',
                    "value"  => GatewayMode::SANDBOX,
                ],
                [
                    "option"     => 'easypaisa_status',
                    "value"      => Activity::ENABLE,
                ],
            ]
        ]
    ];

    public function run(): void
    {
        $envService = new EnvEditor();
        if ($envService->getValue('DEMO')) {
            foreach ($this->gateways as $gateway) {
                $payment = PaymentGateway::where(['slug' => $gateway['slug']])->first();
                if ($payment) {
                    $payment->status = $gateway['status'];
                    $payment->save();
                }
                $this->gatewayOption($gateway['options']);
            }
        }
    }

    public function gatewayOption($options): void
    {
        if (!blank($options)) {
            foreach ($options as $option) {
                $gatewayOption = GatewayOption::where(['option' => $option['option']])->first();
                if ($gatewayOption) {
                    $gatewayOption->value = $option['value'];
                    $gatewayOption->save();
                }
            }
        }
    }
}
