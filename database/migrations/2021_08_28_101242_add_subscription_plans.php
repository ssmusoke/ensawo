<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Rinvex\Subscriptions\Models\PlanFeature;

class AddSubscriptionPlans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $solo_plan = app('rinvex.subscriptions.plan')->create([
            'id' => 1,
            'name' => 'Solo',
            'description' => 'Starter plan for those trying out the service for the first time',
            'price' => 0,
            'signup_fee' => 0,
            'invoice_period' => 1,
            'invoice_interval' => 'month',
            'sort_order' => 1,
            'currency' => 'UGX',
        ]);

        $solo_plan->features()->saveMany([
            new PlanFeature(['name' => 'transactions', 'value' => 25, 'description' => '25 Transactions'])
        ]);

        $pro_plan = app('rinvex.subscriptions.plan')->create([
            'id' => 2,
            'name' => 'Pro',
            'description' => 'Best value for individuals',
            'price' => 10000,
            'signup_fee' => 0,
            'invoice_period' => 1,
            'invoice_interval' => 'month',
            'sort_order' => 2,
            'currency' => 'UGX',
        ]);

        $pro_plan->features()->saveMany([
            new PlanFeature(['name' => 'transactions', 'value' => true, 'description' => 'Unlimited Transactions']),
            new PlanFeature(['name' => 'categories', 'value' => 5, 'description' => '5 Transaction Categories']),
            new PlanFeature(['name' => 'share_messages', 'value' => true, 'description' => 'Share Messages']),
            new PlanFeature(['name' => 'add_phone_numbers_to_messages', 'value' => true, 'description' => 'Add Phone Numbers for Messages']),
        ]);

        $business_plan = app('rinvex.subscriptions.plan')->create([
            'id' => 3,
            'name' => 'Business',
            'description' => 'for individuals and organizations needing to use one account',
            'price' => 50000,
            'signup_fee' => 0,
            'invoice_period' => 1,
            'invoice_interval' => 'month',
            'sort_order' => 3,
            'currency' => 'UGX',
        ]);

        $business_plan->features()->saveMany([
            new PlanFeature(['name' => 'transactions', 'value' => true, 'description' => 'Unlimited Transactions']),
            new PlanFeature(['name' => 'categories', 'value' => true, 'description' => 'Unlimited Transaction Categories']),
            new PlanFeature(['name' => 'share_messages', 'value' => true, 'description' => 'Share Messages']),
            new PlanFeature(['name' => 'add_phone_numbers_to_messages', 'value' => true, 'description' => 'Add Phone Numbers for Messages']),
            new PlanFeature(['name' => 'transaction_notification_thresholds', 'value' => true, 'Transaction Notification Thresholds'])
        ]);
    }
}