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
 * 按比例分配方案
 *
 * @package innln\money\allocates
 * @author mysticzap <mysticzap@qq.com>
 */
class Ratio extends SchemeAbstract
{
    /**
     * 分配比例方案
     * @var array
     * @author mysticzap <mysticzap@qq.com>
     */
    protected $ratios;

    /**
     * @var Money
     * @author mysticzap <mysticzap@qq.com>
     */
    protected $money;

    /**
     * Ratio constructor.
     *
     * $oMoney = new Money(100, new Currency(4));
     * (new Ratio($oMoney,['abc' => 1,1,1,2,3.3,2,2,3,4,5]))->handle();
     *
     * @param Money $money
     * @param array $ratios
     */
    public function __construct(Money $money, array $ratios)
    {
        $this->money = $money;
        $this->ratios = $ratios;
    }

    /**
     * 返回分配后数据
     * @return array
     * @author mysticzap <mysticzap@qq.com>
     */
    public function handle()
    {
        // 总份数
        $length = count($this->ratios);
        // 各份数比例总和
        $total = array_sum($this->ratios);
        $remainder = $this->money->getAmount();
        $aMoney = $results = [];
        foreach ($this->ratios as $key => $value) {
            $money = intval($this->money->getAmount()*$value/$total);
            $aMoney[$key] = $money;
            $remainder -= $aMoney[$key];
        }

        foreach($aMoney as $key => $value) {
            if ($remainder > 0) {
                $value++;
                $remainder--;
            }
            $results[$key] = $this->money->getRestoreAmount($value);

        }
        return $results;
    }
}