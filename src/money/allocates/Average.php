<?php
/**
 * Created by PhpStorm.
 * User: mysticzap <mysticzap@qq.com>
 * Date: 2018/5/17
 * Time: 19:10
 */

namespace innln\money\allocates;

use innln\money\Money;


/**
 * Class Average
 *
 * 平均分配方案
 *
 * @package innln\money\allocates
 * @author mysticzap <mysticzap@qq.com>
 */
class Average extends SchemeAbstract
{
    /**
     * 分配份数方案
     * @var array
     * @author mysticzap <mysticzap@qq.com>
     */
    protected $number;

    /**
     * @var Money
     * @author mysticzap <mysticzap@qq.com>
     */
    protected $money;

    /**
     * Average constructor.
     *
     * $oMoney = new Money(100, new Currency(4));
     * (new Average($oMoney,90))->handle();
     *
     * @param Money $money
     * @param array $ratios
     */
    public function __construct(Money $money, int $number)
    {
        $this->money = $money;
        $this->number = $number;
    }

    /**
     * 分配
     * @return array
     * @author mysticzap <mysticzap@qq.com>
     */
    public function handle()
    {
        $iLowMoney = intval($this->money->getAmount()/$this->number);
        $results = [];
        $remainder = $this->money->getAmount()%$this->number;
        for ($i=0;$i<$this->number;$i++) {
            $iMoney = $iLowMoney;
            if ($i<$remainder) {
                $iMoney++;
            }
            $results[$i] = $this->money->getRestoreAmount($iMoney);
        }

        return $results;
    }
}