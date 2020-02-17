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
 * Class DeleteRecordingsParameters
 * @package ZoomClient\Parameters
 */
class DeleteRecordingsParameters extends BaseParameters
{
    /**
     * @var string
     */
    private $recordingId;

    /**
     * DeleteRecordingsParameters constructor.
     *
     * @param $recordingId
     */
    public function __construct($recordingId)
    {
        $this->recordingId = $recordingId;
    }

    /**
     * @return string
     */
    public function getRecordingId()
    {
        return $this->recordingId;
    }

    /**
     * @param  string                     $recordingId
     * @return DeleteRecordingsParameters
     */
    public function setRecordingId($recordingId)
    {
        $this->recordingId = $recordingId;

        return $this;
    }

    /**
     * @return string
     */
    public function getHTTPQuery()
    {
        return $this->buildHTTPQuery(['recordID' => $this->recordingId]);
    }
}
