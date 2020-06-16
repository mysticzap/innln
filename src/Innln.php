<?php
require __DIR__ . '/BaseInnln.php';

/**
 * Innln is a helper class serving common framework functionalities.
 *
 * It extends from [[\innln\BaseInnln]] which provides the actual implementation.
 * By writing your own Innln class, you can customize some functionalities of [[\innln\BaseInnln]].
 *
 * @author mysticzap <mysticzap@qq.com>
 * @since 1.0.0
 */
class Innln extends \innln\BaseInnln
{
}

spl_autoload_register(['Innln', 'autoload'], true, true);
Innln::$classMap = require __DIR__ . '/classes.php';
Innln::$container = new innln\di\Container();
