<?php
namespace innln\money\allocates;

use innln\money\Currency;
use innln\money\Money;

/**
 * Created by PhpStorm.
 * User: mysticzap <mysticzap@qq.com>
 * Date: 2018/5/17
 * Time: 19:07
 */
abstract class SchemeAbstract implements SchemeInterface
{
    /**
     * @param float $money 分摊的总额度
     * @param int $fractionDigits 保留小数点位数
     * @param array $ratio 分摊比例
     * @return static
     * @author mysticzap <mysticzap@qq.com>
     */
    public static function allociate(float $money, int $fractionDigits, $ratio = [])
    {
        return (new static(new Money($money, new Currency($fractionDigits)),$ratio));
    }
}