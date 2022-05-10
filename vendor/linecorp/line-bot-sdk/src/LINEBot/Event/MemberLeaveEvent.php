<?php

/**
 * Copyright 2019 LINE Corporation
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

namespace LINE\LINEBot\Event;

/**
 * A class that represents the event of leaving.
 *
 * @package LINE\LINEBot\Event
 */
class MemberLeaveEvent extends BaseEvent
{
    /**
     * MemberLeaveEvent constructor.
     *
     * @param array $event
     */
    public function __construct($event)
    {
        parent::__construct($event);
    }

    /**
     * Returns left members.
     *
     * @return array
     */
    public function getMembers()
    {
        return $this->event['left']['members'];
    }
}
