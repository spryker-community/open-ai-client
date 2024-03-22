<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerCommunity\Client\OpenAiClient;

use Generated\Shared\Transfer\OpenAiChatResponseTransfer;

/**
 * @api
 *
 * @method \SprykerCommunity\Client\OpenAiClient\OpenAiClientFactory getFactory()
 */
interface OpenAiClientClientInterface
{
    /**
     * Specification:
     * - Sends a message to ChatGPT engine.
     * - Returns `OpenAiChatResponseTransfer` object.
     *
     * @api
     *
     * @param string $message
     *
     * @return \Generated\Shared\Transfer\OpenAiChatResponseTransfer
     */
    public function chat(string $message): OpenAiChatResponseTransfer;
}
