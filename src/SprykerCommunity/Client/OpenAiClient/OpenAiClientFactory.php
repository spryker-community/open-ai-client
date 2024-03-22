<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerCommunity\Client\OpenAiClient;

use OpenAI;
use OpenAI\Client;
use Spryker\Client\Kernel\AbstractFactory;
use SprykerCommunity\Client\OpenAiClient\Chat\OpenAiChat;
use SprykerCommunity\Client\OpenAiClient\Chat\OpenAiChatInterface;

/**
 * @method \SprykerCommunity\Client\OpenAiClient\OpenAiClientConfig getConfig()
 */
class OpenAiClientFactory extends AbstractFactory
{
    /**
     * @return \SprykerCommunity\Client\OpenAiClient\Chat\OpenAiChatInterface
     */
    public function createOpenAiChat(): OpenAiChatInterface
    {
        return new OpenAiChat($this->createOpenAiClient(), $this->getConfig());
    }

    /**
     * @return \OpenAI\Client
     */
    public function createOpenAiClient(): Client
    {
        return OpenAi::client(
            $this->getConfig()->getOpenAiApiToken(),
        );
    }
}
