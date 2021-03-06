<?php

namespace CodelyTv\Context\Video\Module\VideoHighlight\Test\PhpUnit;

use CodelyTv\Context\Video\Module\Video\Domain\VideoRepository;
use CodelyTv\Context\Video\Test\PhpUnit\VideoContextFunctionalTestCase;

abstract class VideoHighlightModuleFunctionalTestCase extends VideoContextFunctionalTestCase
{
    protected function repository(): VideoRepository
    {
        return $this->service('codely.video.video_highlight.repository');
    }
}
