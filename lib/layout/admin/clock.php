<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 12.09.2017
 * Time: 15:22
 *
 * @author Pavel Shulaev (https://rover-it.me)
 */

namespace Rover\Fadmin\Layout\Admin;

use Rover\Fadmin\Layout\Admin;

class Clock extends Admin
{
    /**
     * @author Pavel Shulaev (https://rover-it.me)
     */
    public function showInput()
    {
        global $APPLICATION;

        $APPLICATION->IncludeComponent("bitrix:main.clock","",[
            "INPUT_ID"      => "",
            "INPUT_NAME"    => $this->input->getValueName(),
            "INPUT_TITLE"   => $this->input->getLabel(),
            "INIT_TIME"     => $this->input->getValue(),
            "STEP"          => "5"
        ],
            ['HIDE_ICONS' => 'Y']
        );
    }
}