<?php

namespace spec\ConstructionsIncongrues\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use ConstructionsIncongrues\Entity\AudioFile;

class PlaylistSpec extends ObjectBehavior
{
    function let()
    {
        $dirTracks = __DIR__.'/../../../fixtures/tracks/real';
        $this->push(new AudioFile(new \SplFileInfo($dirTracks.'/001.mp3')));
        $this->push(new AudioFile(new \SplFileInfo($dirTracks.'/002.mp3')));
        $this->push(new AudioFile(new \SplFileInfo($dirTracks.'/003.mp3')));
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('ConstructionsIncongrues\Entity\Playlist');
    }

    function it_can_return_duration()
    {
        $this->getDuration()->shouldEqual(468.357011);
    }

    function it_can_be_shrinked_to_time_limit()
    {
        $this->shrinkTo(300)->shouldReturn(233.372);
    }

    function it_can_combine_files_into_one()
    {
    }

    function it_can_be_mirrored_to_a_directory()
    {
    }
}
