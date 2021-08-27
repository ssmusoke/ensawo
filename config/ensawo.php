<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Path to the SMS templates
    |--------------------------------------------------------------------------
    |
    | The path to the SMS templates
    |
    */
    'sms_message_templates' => resource_path('views/sms/'),
    /*
    |--------------------------------------------------------------------------
    | Template to Transaction Type Mapping
    |--------------------------------------------------------------------------
    |
    | The mapping of templates to the transaction type - which allows the handling
    | different messages for an activity type
    |
    */
    'sms_template_to_transaction_type_mapping' => [
        "airtel-agent-deposit.txt" => 'AGENT_DEPOSIT',
        "airtel-send-money.txt" => 'SEND',
        "mtn-bill-payment.txt" => 'SERVICE_PAYMENT',
        "mtn-send-money.txt" => 'SEND',
        "airtel-agent-withdrawal.txt" => 'AGENT_WITHDRAW',
        "airtel-service-payment.txt" => 'SERVICE_PAYMENT',
        "mtn-receive-money-2.txt" => 'RECEIVE',
        "airtel-bill-payment.txt" => 'SERVICE_PAYMENT',
        "mtn-agent-deposit.txt" => 'AGENT_DEPOSIT',
        "mtn-receive-money.txt" => 'RECEIVE',
        "airtel-receive-money.txt" => 'RECEIVE',
        "mtn-agent-withdrawal.txt" => 'AGENT_WITHDRAW',
        "mtn-send-money-2.txt" => 'SEND',
        "mtn-vendor-payment.txt" => 'SERVICE_PAYMENT',
        "mtn-vendor-payment-2.txt" => 'SERVICE_PAYMENT',
    ],
    /*
    |--------------------------------------------------------------------------
    | Name of the cookie used to store a transaction executed without registration
    |--------------------------------------------------------------------------
    |
    |
    */
    'transaction_cookie_name' => 'transaction_uuid',
    /*
   |--------------------------------------------------------------------------
   | Number of transactions in the free plan
   |--------------------------------------------------------------------------
   |
   |
   */
    'free_transactions_count' => env('FREE_TRANSACTIONS', '25'),
];