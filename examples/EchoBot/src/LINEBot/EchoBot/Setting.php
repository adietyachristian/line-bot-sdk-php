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

namespace LINE\LINEBot\EchoBot;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => false, // set to false in production

                'logger' => [
                    'name' => 'slim-app',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    'channelToken' => 'fwTcQCWQcE7dYMTlg//ETmtER2mrat3h6XTUwmQokI7vmBpk9n6ldGtgt+iJwpgzR+zn8f5ZGLBkU2TVBbwKfeMFUbFdjVc84GaTug7dUGejGQRgILOoXMnMDpYFGhhmpI1NSWsG6bOjidWy0qdQnQdB04t89/1O/w1cDnyilFU=',
                    'channelSecret' => 'a095170597ca4bceaff8864803193473'
                ]

                // 'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}