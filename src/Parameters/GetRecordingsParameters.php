<?php
/**
 * ZoomClient open source conferencing system - https://www.bigbluebutton.org/.
 *
 * Copyright (c) 2016-2018 ZoomClient Inc. and by respective authors (see below).
 *
 * This program is free software; you can redistribute it and/or modify it under the
 * terms of the GNU Lesser General Public License as published by the Free Software
 * Foundation; either version 3.0 of the License, or (at your option) any later
 * version.
 *
 * ZoomClient is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
 * PARTICULAR PURPOSE. See the GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License along
 * with ZoomClient; if not, see <http://www.gnu.org/licenses/>.
 */
namespace Omt\BigBlueButton\Parameters;

/**
 * Class GetRecordingsParameters
 * @package ZoomClient\Parameters
 */
class GetRecordingsParameters extends MetaParameters
{
    /**
     * @var string
     */
    private $meetingId;

    /**
     * @var string
     */
    private $recordId;

    /**
     * @var string
     */
    private $state;

    /**
     * @return string
     */
    public function getMeetingId()
    {
        return $this->meetingId;
    }

    /**
     * @param  string                  $meetingId
     * @return GetRecordingsParameters
     */
    public function setMeetingId($meetingId)
    {
        $this->meetingId = $meetingId;

        return $this;
    }

    /**
     * @return string
     */
    public function getRecordId()
    {
        return $this->recordId;
    }

    /**
     * @param  string                  $recordId
     * @return GetRecordingsParameters
     */
    public function setRecordId($recordId)
    {
        $this->recordId = $recordId;

        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param  string                  $state
     * @return GetRecordingsParameters
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getHTTPQuery()
    {
        $queries = [
            'meetingID' => $this->meetingId,
            'recordID'  => $this->recordId,
            'state'     => $this->state
        ];

        $this->buildMeta($queries);

        return $this->buildHTTPQuery($queries);
    }
}
