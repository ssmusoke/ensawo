<?php

dataset('mobile-money-transaction-messages', [
    // mtn
    // agent deposit
    // ['You have received 400000 UGX from OLIVES CONSULT KAMWOKYA . (256781722941 Kinobere Herbert Kinobere Herbert) on your mobile money account at 2021-03-16 13:58:55. Message from sender: 2. Your new balance: 401726 UGX. Loyalty fee was 0 and loyalty reward was 0. Promotion was 0. Financial Transaction Id: 11996357875.', []],
    // agent withdrawal
    //['You have withdrawn UGX 610000 from KYOLINA KYEKIKWEYIMIRIRA LIMITED on 2021-07-18 12:52:21. New balance: UGX 1013. ID: 13080886177.', []],
    // bill payment
    //['You have paid UGX 105,000 for UMEME at a Fee of UGX 3700.00. AccountNo.: 04265342297. New balance is UGX 70,876. Transaction ID: 12484546377.', []],
    // receive money
    //['You have received 1021725 UGX from TERRA PAYMENT SERVICES (MAURITIUS)  (256789561147) on your mobile money account at 2021-01-21 17:10:12. Message from sender: International Remittance. Your new balance:1026447 UGX. Financial Transaction Id: 11546334190.', []],
    //['You have received UGX 33000 from George Bwambale, 256772006344 on 2021-07-08 16:30:20. Reason: Eggs. New balance: UGX 359506. ID: 12995826225.', []],
    // send money
    ['You have sent UGX 204725 to Alex Musoke, 256784380644 on 2021-07-22 09:18:34, fee: 1100. Reason: .. New balance: 408926. ID :13114283719.', ['amount' => 204725, 'recipient_name' => 'Alex Musoke', 'recipient_number' => '256784380644', 'txn_date' => '2021-07-22 09:18:34', 'fee' => 1100, 'transaction_type' => 'sent', 'reason' => '.', 'txn_id' => '13114283719' ]],
    //['You have transferred 35000 UGX to FRANCIS BWANGO (256786702802) from your mobile money account 68577050 at 2021-05-07 15:18:57. Your new balance: 15076 UGX. Message from sender: Poster. Message to receiver: Poster. Financial Transaction Id: 12446326789.', []],
    // service payment
   // ['You have paid UGX 105,000 for UMEME at a Fee of UGX 3700.00. AccountNo.: 04265342297. New balance is UGX 70,876. Transaction ID: 12484546377.', []]

    // airtel
    // agent deposit
    //['Cash deposit of UGX 130,000 with Agent ID:10386701. Balance UGX 184,139. Trans ID:57136016342. Date 08-July-2021 17:21.', []],
    // agent withdrawal
    //['Cash withdrawal of UGX400,000 with Agent ID: 10374946.ChargeUGX7,000. Bal UGX 9,762.TID: 57803548319. Date 23-July-2021 10:37.Tax UGX 2,000.', []],
    // bill payment
    //['You have sent UGX 400,000 to NWSC NWSC UGANDA . Date  09-June-2021 09:42, Your Balance is UGX 99,699. Txn Id: 55825852045.', []],
    // receive money
    //['You have received UGX 34,000 from 0757346390, OTANDEKA SIMON. Your Balance is UGX 45,299. Trans ID: 56155199376.', []],
    // send money
    //['SENT UGX 50,000 to BEN MUSOKE  0751409120. Fee UGX 500. Bal UGX 68,639. Trans ID: 57792151851.', []],
    // service payment
    //['You have paid UGX 105,000 for UMEME at a Fee of UGX 3700.00. AccountNo.: 04265342297. New balance is UGX 70,876. Transaction ID: 12484546377.', []]
]);
