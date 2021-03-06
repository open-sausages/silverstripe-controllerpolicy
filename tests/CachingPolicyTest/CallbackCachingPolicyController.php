<?php

namespace SilverStripe\ControllerPolicy\Tests\CachingPolicyTest;

class CallbackCachingPolicyController extends CachingPolicyController
{
    private static $url_segment = 'CallbackCachingPolicyController';

    public function getCacheAge($age)
    {
        return '1001';
    }

    public function getVary($vary)
    {
        return 'X-HeightWeight';
    }

    public function getModificationTimestamp()
    {
        return '5000';
    }
}
