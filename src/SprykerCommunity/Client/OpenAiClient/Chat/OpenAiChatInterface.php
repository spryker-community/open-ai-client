<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerCommunity\Client\OpenAiClient\Chat;

use Generated\Shared\Transfer\OpenAiChatResponseTransfer;

interface OpenAiChatInterface
{
    /**
     * @param string $message
     *
     * @return \Generated\Shared\Transfer\OpenAiChatResponseTransfer
     */
    public function chat(string $message): OpenAiChatResponseTransfer;
}
