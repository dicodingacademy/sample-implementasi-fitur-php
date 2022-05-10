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

/**
 * A class that represents the message event of sticker.
 *
 * @package LINE\LINEBot\Event\MessageEvent
 */
class StickerMessage extends MessageEvent
{
    /**
     * StickerMessage constructor.
     *
     * @param array $event
     */
    public function __construct($event)
    {
        parent::__construct($event);
    }

    /**
     * Returns the identifier of the sticker package.
     *
     * @return string
     */
    public function getPackageId()
    {
        return $this->message['packageId'];
    }

    /**
     * Returns the identifier of the sticker.
     *
     * @return string
     */
    public function getStickerId()
    {
        return $this->message['stickerId'];
    }

    /**
     * Returns the sticker resource type.
     *
     * @return string
     */
    public function getStickerResourceType()
    {
        return $this->message['stickerResourceType'];
    }

    /**
     * Returns keywords
     *
     * List of up to 15 keywords describing the sticker.
     * If a sticker has 16 or more keywords, a random selection of 15 keywords will be returned.
     * The keyword selection is random for each event,
     * so different keywords may be returned for the same sticker.
     *
     * NOTICE:
     * The keywords property is currently in an experimental phase.
     * And discontinuation or spec changes may occur in the future.
     * So this parameter is nullable.
     *
     * @return string[]|null
     */
    public function getKeywords()
    {
        return isset($this->message['keywords']) ? $this->message['keywords'] : null;
    }

    /**
     * Returns text.
     *
     * Any text entered by the user. This property is only included for message stickers.
     * @return string|null
     */
    public function getText()
    {
        return isset($this->message['text']) ? $this->message['text'] : null;
    }
}
