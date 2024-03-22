<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerCommunity\Client\OpenAiClient;

use Spryker\Client\Kernel\AbstractBundleConfig;
use SprykerCommunity\Shared\OpenAiClient\OpenAiClientConstants;

class OpenAiClientConfig extends AbstractBundleConfig
{
    /**
     * @var string
     */
    protected const OPENAI_ENGINE = 'gpt-3.5-turbo';

    /**
     * @api
     *
     * @return string
     */
    public function getOpenAiEngine(): string
    {
        return static::OPENAI_ENGINE;
    }

    /**
     * @api
     *
     * @return string
     */
    public function getOpenAiApiToken(): string
    {
        return $this->get(OpenAiClientConstants::API_TOKEN);
    }
}
