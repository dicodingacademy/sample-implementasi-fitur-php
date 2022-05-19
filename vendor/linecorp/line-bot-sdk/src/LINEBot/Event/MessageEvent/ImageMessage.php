<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\Event\MessageEvent;

use LINE\LINEBot\Event\MessageEvent;
use LINE\LINEBot\Event\MessageEvent\ImageMessasge\ImageSet;

/**
 * A class that represents the message event of image.
 *
 * @package LINE\LINEBot\Event\MessageEvent
 */
class ImageMessage extends MessageEvent
{
    /** @var ContentProvider */
    private $contentProvider;
    /** @var ImageSet */
    private $imageSet;

    /**
     * ImageMessage constructor.
     *
     * @param array $event
     */
    public function __construct($event)
    {
        parent::__construct($event);
        $this->contentProvider = new ContentProvider($this->message['contentProvider']);
        // Only included when multiple images are sent simultaneously.
        if (isset($this->message['imageSet'])) {
            $this->imageSet = new ImageSet($this->message['imageSet']);
        }
    }

    /**
     * Returns contentProvider of the image message.
     *
     * @return ContentProvider
     */
    public function getContentProvider()
    {
        return $this->contentProvider;
    }

    /**
     * Returns image set of the image message.
     *
     * @return ImageSet|null
     */
    public function getImageSet()
    {
        return $this->imageSet;
    }
}
