<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerCommunity\Client\OpenAiClient;

use Generated\Shared\Transfer\OpenAiChatResponseTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * {@inheritDoc}
 *
 * @api
 *
 * @method \SprykerCommunity\Client\OpenAiClient\OpenAiClientFactory getFactory()
 */
class OpenAiClientClient extends AbstractClient implements OpenAiClientClientInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param string $message
     *
     * @return \Generated\Shared\Transfer\OpenAiChatResponseTransfer
     */
    public function chat(string $message): OpenAiChatResponseTransfer
    {
        return $this->getFactory()->createOpenAiChat()->chat($message);
    }
}
