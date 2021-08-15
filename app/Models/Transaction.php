<?php

namespace App\Models;

use Cknow\Money\Money;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use RyanChandler\Uuid\Concerns\HasUuid;

class Transaction extends Model
{
    use HasFactory;
    use HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'message',
        'amount',
        'agent_id',
        'agent_name',
        'agent_number',
        'balance',
        'txn_id',
        'txn_date',
        'fee',
        'tax',
        'vendor_name',
        'sender_number',
        'sender_name',
        'sender_account_number',
        'recipient_number',
        'recipient_name',
        'payer_account_number',
        'reason',
        'uuid',
        'created_by',
        'phone_number_id',
        'transaction_type_id',
        'network_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'txn_date' => 'immutable_datetime',
        'created_by' => 'integer',
        'phone_number_id' => 'integer',
        'transaction_type_id' => 'integer',
        'network_id' => 'integer',
    ];


    public function createdBy()
    {
        return $this->belongsTo(User::class);
    }

    public function phoneNumber()
    {
        return $this->belongsTo(PhoneNumber::class);
    }

    public function transactionType()
    {
        return $this->belongsTo(TransactionType::class);
    }
    public function network()
    {
        return $this->belongsTo(Network::class);
    }

    // attributes

    public function setTransactionTypeIdAttribute($value) {
        // get the list of template to transaction type mappings
        $transaction_types = config("ensawo.sms_template_to_transaction_type_mapping");
        $this->attributes['transaction_type_id'] = TransactionType::firstWhere('code', $transaction_types[$value])->id;
    }

    public function setNetworkIdAttribute($value) {
        $this->attributes['network_id'] = Network::firstWhere('code', $value)->id;
    }

    public function setAmountAttribute($value) {
        $this->attributes['amount'] = Str::remove(",", $value);
    }

    public function getAmountDisplayAttribute() {
        return Money::UGX($this->attributes['amount'])->format();
    }

    public function setTaxAttribute($value) {
        $this->attributes['tax'] = Str::remove(",", $value);
    }

    public function getTaxDisplayAttribute() {
        return Money::UGX($this->attributes['tax'])->format();
    }

    public function setFeeAttribute($value) {
        $this->attributes['fee'] = Str::remove(",", $value);
    }

    public function getFeeDisplayAttribute() {
        return Money::UGX($this->attributes['fee'])->format();
    }

    public function setBalanceAttribute($value) {
        $this->attributes['balance'] = Str::remove(",", $value);
    }

    public function getBalanceDisplayAttribute() {
        return Money::UGX($this->attributes['balance'])->format();
    }

    public function getAgentIdDisplayAttribute() {
        return empty($this->agent_id) ? "" : "Agent ID: ".$this->agent_id;
    }

    public function getSenderAttribute() {
        $senders = [
            $this->sender_name,
            $this->agent_name,
            $this->agent_number,
            $this->agent_id_display


        ];
        return implode(",", array_filter($senders));
    }

    public function getReceiverAttribute() {
        $receivers = [
            $this->agent_name,
            $this->agent_number,
            $this->vendor_name,
            $this->recipient_name
        ];

        return implode(",", array_filter($receivers));
    }
}