<?php
namespace innln\money\allocates;

use innln\money\Money;


/**
 * Created by PhpStorm.
 * User: mysticzap <mysticzap@qq.com>
 * Date: 2018/5/17
 * Time: 19:06
 */
interface schemeInterface
{
    /**
     * @return mixed
     * @author mysticzap <mysticzap@qq.com>
     */
    public function handle();
}