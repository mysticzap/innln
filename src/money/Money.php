<?php
/**
 * Created by PhpStorm.
 * User: mysticzap <mysticzap@qq.com>
 * Date: 2018/5/17
 * Time: 17:51
 */

namespace innln\money;


class Money
{
    /**
     * @var int|float 额度值
     * @author mysticzap <mysticzap@qq.com>
     */
    private $_amount;

    /**
     * @var Currency 币种
     * @author mysticzap <mysticzap@qq.com>
     */
    private $_currency;
    /**
     * @var int 小数位数
     * @author mysticzap <mysticzap@qq.com>
     */
//    private $_fractionDigits = 2;

    /**
     * 货币单位
     * 如 1:元，10：角，100：分 ...
     * 当输入amount=10.238时，如果单位为分，则amount的值为 1023.8
     * @var array
     * @author mysticzap <mysticzap@qq.com>
     */
    private static $_cents = [
        1,
        10,
        100,
        1000,
        10000,
        100000,
        1000000,
        10000000,
        100000000,
        1000000000,
    ];

    public function __construct($amount, Currency $currency)
    {
        $this->setCurrency($currency);
        $this->_amount = intval($amount*$this->_centFactor());
    }

    public function getAmount()
    {
        return $this->_amount;
    }

    /**
     * 还原成输入格式
     * @return float|int|null
     * @author mysticzap <mysticzap@qq.com>
     */
    public function getRestoreAmount($money = null)
    {
        return (null === $money? $this->_amount : $money)/$this->_centFactor();
    }


    public function setCurrency($value)
    {
        $this->_currency = $value;
        return $this;
    }

    /**
     *
     * @return Currency 货币类
     * @author mysticzap <mysticzap@qq.com>
     */
    public function getCurrency()
    {
        return $this->_currency;
    }

    /**
     * @return mixed
     * @author mysticzap <mysticzap@qq.com>
     */
    private function _centFactor()
    {
        $fractionDigits = $this->_currency->getFractionDigits();
//        return $fractionDigits;
        return static::$_cents[isset(static::$_cents[$fractionDigits])?$fractionDigits:2];
    }

    /**
     * 加
     * @param Money $money
     * @return int|float
     * @author mysticzap <mysticzap@qq.com>
     */
//    public function add(Money $money)
//    {
//        $this->_amount =  $this->getAmount() + $money->getAmount();
//        return $this->_amount;
//    }
//
//    /**
//     * @param Money $money
//     * @return int|float
//     * @author mysticzap <mysticzap@qq.com>
//     */
//    public function sub(Money $money)
//    {
//        $this->_amount =  $this->getAmount() - $money->getAmount();
//        return $this->_amount;
//    }
//
//    /**
//     * 乘
//     * @param Money $money
//     * @return int|float
//     * @author mysticzap <mysticzap@qq.com>
//     */
//    public function multi(Money $money)
//    {
//        $this->_amount =  $this->getAmount() * $money->getAmount();
//        return $this->_amount;
//
//    }
//
//    /**
//     * 除
//     * @param Money $money
//     * @return float|int
//     * @author mysticzap <mysticzap@qq.com>
//     */
//    public function div(Money $money)
//    {
//        $this->_amount =  $this->getAmount() / $money->getAmount();
//        return $this->_amount;
//
//    }
//
//    /**
//     * 判断是否相等
//     * @param Money $money
//     * @return bool
//     * @author mysticzap <mysticzap@qq.com>
//     */
//    public function isEquals(Money $money)
//    {
//        return $this->getCurrency()->isSame($money->getCurrency())
//            && $this->getAmount() === $money->getAmount();
//    }
}