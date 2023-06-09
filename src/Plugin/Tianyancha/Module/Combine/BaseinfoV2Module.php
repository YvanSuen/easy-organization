<?php

declare(strict_types=1);

namespace JuCloud\EasyOrganization\Plugin\Tianyancha\Module\Combine;

use Closure;
use JuCloud\EasyOrganization\Plugin\Tianyancha\GeneralPlugin;
use JuCloud\EasyOrganization\Logger;
use JuCloud\EasyOrganization\Rocket;
use JuCloud\EasyOrganization\Supports\Collection;

/**
 * @see https://open.tianyancha.com/open/818
 */
class BaseinfoV2Module extends GeneralPlugin
{
    /**
     * @throws InvalidParamsException
     */
    protected function getUri(Rocket $rocket): string
    {
        $query = new Collection([
            'keyword' => $rocket->getPayload()->get('keyword')
        ]);

        return 'ic/baseinfoV2/2.0?' . $query->query();
    }

    protected function doSomething(Rocket $rocket): void
    {
        $rocket->setPayload(null);
    }
}
