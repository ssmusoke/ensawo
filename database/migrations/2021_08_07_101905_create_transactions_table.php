<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->integer('amount');
            $table->string('agent_id')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('agent_number')->nullable();
            $table->integer('balance')->nullable();
            $table->string('txn_id')->nullable();
            $table->dateTime('txn_date')->nullable();
            $table->integer('fee')->nullable();
            $table->integer('tax')->nullable();
            $table->string('vendor_name')->nullable();
            $table->string('sender_number')->nullable();
            $table->string('sender_name')->nullable();
            $table->string('sender_account_number')->nullable();
            $table->string('recipient_number')->nullable();
            $table->string('recipient_name')->nullable();
            $table->string('recipient_message')->nullable();
            $table->string('payer_account_number')->nullable();
            $table->string('reason')->nullable();
            $table->uuid('uuid');
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('phone_number_id')->nullable()->constrained();
            $table->foreignId('network_id')->constrained();
            $table->foreignId('transaction_type_id')->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}