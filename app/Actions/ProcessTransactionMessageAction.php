<?php

namespace App\Actions;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use aymanrb\UnstructuredTextParser\TextParser;

class ProcessTransactionMessageAction
{
    /**
     * Parser for the Transaction SMS message
     */
    public $parser;
    /**
     * ProcessTransactionMessageAction constructor.
     */
    public function __construct()
    {
        $this->parser = new TextParser(config('app.sms_message_templates'), Log::channel('single'));
    }


    /**
     *
     * Breaks a mobile money message string into an array
     *
     * @param string $message
     * @return array
     */

    public function execute(string $message): array {
        $result = array();
        if (Str::of($message)->trim()->isEmpty()) {
            return $result;
        }

        return $this->parser->parseText(Str::of($message)->trim(), true)->getParsedRawData();
    }
}
