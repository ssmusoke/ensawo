<?php

dataset('mobile-money-transaction-messages', [
    // mtn
    // agent deposit
    ['You have received 400000 UGX from Lobortis Company . (256710557834 Gil Conan) on your mobile money account at 2021-03-16 13:58:55. Message from sender: 2. Your new balance: 401726 UGX. Loyalty fee was 0 and loyalty reward was 0. Promotion was 0. Financial Transaction Id: 11996357875.', ['transaction_type' => 'received', 'amount' => '400000', 'agent_name' => 'Lobortis Company', 'sender_number' => '256710557834','sender_name' => 'Gil Conan', 'txn_date' => '2021-03-16 13:58:55', 'reason' => '2', 'txn_id' => '11996357875', 'balance' => '401726']],
    // agent withdrawal
    ['You have withdrawn UGX 610000 from Luctus Incorporated on 2021-07-18 12:52:21. New balance: UGX 1013. ID: 13080886177.', ['transaction_type' => 'withdrawn', 'amount' => '610000', 'agent_name' => 'Luctus Incorporated', 'txn_date' => '2021-07-18 12:52:21', 'balance' => '1013', 'txn_id' => '13080886177']],
    // bill payment
    ['You have paid UGX 105,000 for UMEME at a Fee of UGX 3700.00. AccountNo.: 49418158999. New balance is UGX 70,876. Transaction ID: 12484546377.', ['transaction_type' => 'paid', 'amount' => '105,000', 'vendor_name' => 'UMEME', 'fee' => '3700.00', 'payer_account_number' => '49418158999', 'balance' => '70,876', 'txn_id' => '12484546377']],
    // bill payment - 2
    ["Y'ello. SAFEBODA . has deducted UGX 20000 from your mobile money account. Message: charge for 20000 UGX. New balance is:UGX 29608. Your Bonus was: 0. Be safe. Do NOT share your Mobile Money PIN.", ['vendor_name' => 'SAFEBODA .', 'amount' => '20000', 'reason' => 'charge for 20000 UGX', 'balance' => '29608']],
    ["Y'ello. JUMIAUG  has deducted UGX 36000 from your mobile money account. Message: u0xy71b6. New balance is:UGX 10458. Your Bonus was: 0. Be safe. Do NOT share your Mobile Money PIN.", ['vendor_name' => 'JUMIAUG', 'amount' => '36000', 'reason' => 'u0xy71b6', 'balance' => '10458']],
    // bill payment - 3
    ["Y'ello. You have paid UGX 200,000 for Zuku. Account No.: 106974. Transaction ID: 13317950669. Your Mobile Money Account balance is now UGX 101,007.5.", ['vendor_name' => 'Zuku', 'amount' => '200,000', 'payer_account_number' => '106974', 'txn_id' => '13317950669', 'balance' => '101,007']],
    // receive money
    ['You have received 1021725 UGX from TERRA PAYMENT SERVICES (MAURITIUS)  (256731034186) on your mobile money account at 2021-01-21 17:10:12. Message from sender: International Remittance. Your new balance:1026447 UGX. Financial Transaction Id: 11546334190.', ['transaction_type' => 'received', 'amount' => '1021725', 'sender_name' => 'TERRA PAYMENT SERVICES (MAURITIUS)', 'sender_number' => '256731034186', 'txn_date' => '2021-01-21 17:10:12', 'reason' => 'International Remittance', 'balance' => '1026447', 'txn_id' => '11546334190']],
    ['You have received UGX 33000 from John Anthony Doe, 256735614661 on 2021-07-08 16:30:20. Reason: Eggs. New balance: UGX 359506. ID: 12995826225.', ['transaction_type' => 'received', 'amount' => '33000', 'sender_name' => 'John Anthony Doe', 'sender_number' => '256735614661', 'reason' => 'Eggs', 'balance' => '359506', 'txn_id' => '12995826225']],
    // send money
    ['You have sent UGX 204725 to Oscar Paloma, 256725106069 on 2021-07-22 09:18:34, fee: 1100. Reason: .. New balance: 408926. ID :13114283719.', ['amount' => 204725, 'recipient_name' => 'Oscar Paloma', 'recipient_number' => '256725106069', 'txn_date' => '2021-07-22 09:18:34', 'fee' => 1100, 'transaction_type' => 'sent', 'reason' => '.', 'txn_id' => '13114283719' ]],
    ['You have transferred 35000 UGX to Indigo Baxter (256743680270) from your mobile money account 68577050 at 2021-05-07 15:18:57. Your new balance: 15076 UGX. Message from sender: Poster. Message to receiver: Poster. Financial Transaction Id: 12446326789.', ['transaction_type' => 'transferred', 'amount' => '35000', 'recipient_name' => 'Indigo Baxter', 'recipient_number' => '256743680270', 'sender_account_number' => '68577050', 'txn_date' => '2021-05-07 15:18:57', 'reason' => 'Poster', 'recipient_message' => 'Poster', 'txn_id' => '12446326789']],
    // service payment
   ['You have paid UGX 105,000 for UMEME at a Fee of UGX 3700.00. AccountNo.: 88575789299. New balance is UGX 70,876. Transaction ID: 12484546377.', ['transaction_type' => 'paid', 'amount' => '105,000', 'vendor_name' => 'UMEME', 'fee' => '3700.00', 'payer_account_number' => '88575789299', 'balance' => '70,876', 'txn_id' => '12484546377']],

    // airtel
    // agent deposit
    ['Cash deposit of UGX 130,000 with Agent ID:98791286399. Balance UGX 184,139. Trans ID:57136016342. Date 08-July-2021 17:21.',  ['transaction_type' => 'Cash deposit', 'amount' => '130,000', 'agent_id' => '98791286399', 'balance' => '184,139', 'txn_id' => '57136016342', 'txn_date' => '08-July-2021 17:21']],
    // agent withdrawal
    ['Cash withdrawal of UGX400,000 with Agent ID: 22282254399.ChargeUGX7,000. Bal UGX 9,762.TID: 57803548319. Date 23-July-2021 10:37.Tax UGX 2,000.', ['transaction_type' => 'Cash withdrawal', 'amount' => '400,000', 'agent_id' => '22282254399', 'fee' => '7,000', 'balance' => '9,762', 'txn_id' => '57803548319']],
    // bill payment
    ['You have sent UGX 400,000 to NWSC NWSC UGANDA . Date  09-June-2021 09:42, Your Balance is UGX 99,699. Txn Id: 55825852045.', ['transaction_type' => 'sent', 'amount' => '400,000', 'vendor_name' => 'NWSC NWSC UGANDA', 'txn_date' => '09-June-2021 09:42', 'balance' => '99,699', 'txn_id' => '55825852045']],
    // receive money
    ['You have received UGX 34,000 from 256748793631, September Emmanuel. Your Balance is UGX 45,299. Trans ID: 56155199376.', ['transaction_type' => 'received', 'sender_number' => '256748793631', 'sender_name' => 'September Emmanuel', 'amount' => '34,000', 'balance' => '45,299', 'txn_id' => '56155199376']],
    // send money
    ['SENT UGX 50,000 to Zeph Jemima  256735019678. Fee UGX 500. Bal UGX 68,639. Trans ID: 57792151851.', ['transaction_type' => 'SENT', 'amount' => '50,000', 'recipient_name' => 'Zeph Jemima', 'recipient_number' => '256735019678', 'fee' => '500', 'balance' => '68,639', 'txn_id' => '57792151851']],
    // service payment
    ['You have paid UGX 105,000 for UMEME at a Fee of UGX 3700.00. AccountNo.: 31998760699. New balance is UGX 70,876. Transaction ID: 12484546377.', ['transaction_type' => 'paid', 'amount' => '105,000', 'vendor_name' => 'UMEME', 'fee' => '3700.00', 'payer_account_number' => '31998760699', 'balance' => '70,876', 'txn_id' => '12484546377']]
]);