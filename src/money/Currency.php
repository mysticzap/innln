<?php
/**
 * Created by PhpStorm.
 * User: mysticzap <mysticzap@qq.com>
 * Date: 2018/5/17
 * Time: 17:54
 */

namespace innln\money;

/**
 * 货币类
 */
class Currency
{

    private $_abbr = 'RMB';
    // 默认币种默认小数位数, 暂时最大允许5位
    private $_defaultFractionDigits = 2;

    private $_fractionDigits;

    /**
     * Currency constructor.
     * @param int|null $fractionDigits
     */
    public function __construct(int $fractionDigits = null)
    {
        $this->_fractionDigits = (null !== $fractionDigits && $fractionDigits>=0) ? $fractionDigits : $this->_defaultFractionDigits;
    }

    /**
     * 有效小数位数
     * @return int|null
     * @author mysticzap <mysticzap@qq.com>
     */
    public function getFractionDigits()
    {
        return $this->_fractionDigits;
    }

    public function getAbbr()
    {
        return $this->_abbr;
    }

    public function isSame(Currency $currency)
    {
        return $this->_abbr === $currency->getAbbr() && $this->_fractionDigits === $currency->getFractionDigits();
    }

}