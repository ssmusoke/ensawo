<?php

namespace App\Actions;

use Illuminate\Support\Arr;
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
        $this->parser = new TextParser(config('ensawo.sms_message_templates'), Log::channel('single'));
    }


    /**
     *
     * Breaks a mobile money message string into an array
     *
     * @param string $message
     * @return array
     */

    public function execute(string $message): array {
        if (Str::of($message)->trim()->isEmpty()) {
            return array();
        }

        $parseResult = $this->parser->parseText(Str::of($message)->trim(), true);
        $parsedData = $parseResult->getParsedRawData();
        if (empty($parsedData)) {
            return array();
        }
        // add the message
        $parsedData = Arr::add($parsedData, 'message', $message);
        $templateFullPath = $parseResult->getAppliedTemplateFile();

        // the template file names are of the format network-action.txt
        // the templateFullPath returns the absolute path of the template so it needs to be truncated
        // add the template name to the results as it may provide some insights into the
        $templateName = Str::afterLast($templateFullPath, DIRECTORY_SEPARATOR);
        $parsedData = Arr::add($parsedData, 'template', $templateName);
        // add the transaction type to enable mutators to work
        $parsedData = Arr::add($parsedData, 'transaction_type_id', $templateName);

        // add the network
        $network = Str::before($templateName, "-");
        return Arr::add($parsedData, 'network_id', $network);
    }
}