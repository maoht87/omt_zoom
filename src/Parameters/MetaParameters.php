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
 * Class MetaParameters
 * @package ZoomClient\Parameters
 */
abstract class MetaParameters extends BaseParameters
{
    /**
     * @var array
     */
    private $meta = [];

    /**
     * @param $key
     * @return mixed
     */
    public function getMeta($key)
    {
        return $this->meta[$key];
    }

    /**
     * @param string $key
     * @param string $value
     *
     * @return $this
     */
    public function addMeta($key, $value)
    {
        $this->meta[$key] = $value;

        return $this;
    }

    protected function buildMeta(&$queries)
    {
        if (count($this->meta) !== 0) {
            foreach ($this->meta as $k => $v) {
                if (!is_bool($v)) {
                    $queries['meta_' . $k] = $v;
                } else {
                    $queries['meta_' . $k] = $v ? 'true' : 'false';
                }
            }
        }
    }
}