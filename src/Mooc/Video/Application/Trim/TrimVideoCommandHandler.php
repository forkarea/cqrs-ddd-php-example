<?php

declare (strict_types = 1);

namespace CodelyTv\Mooc\Video\Application\Trim;

use CodelyTv\Mooc\Video\Domain\VideoId;
use CodelyTv\Shared\Domain\SecondsInterval;

final class TrimVideoCommandHandler
{
    private $trimmer;

    public function __construct(VideoTrimmer $trimmer)
    {
        $this->trimmer = $trimmer;
    }

    public function __invoke(TrimVideoCommand $command)
    {
        $id       = new VideoId($command->videoId());
        $interval = SecondsInterval::fromValues($command->keepFromSecond(), $command->keepToSecond());

        $this->trimmer->trim($id, $interval);
    }
}
