<?php
/**
 * This file is part of the Kappa\Tester package.
 *
 * (c) Ondřej Záruba <zarubaondra@gmail.com>
 *
 * For the full copyright and license information, please view the license.md
 * file that was distributed with this source code.
 */

namespace Kappa\Tester;

/**
 * Class Helpers
 * @package Kappa\Tester
 */
class Helpers
{
	/**
	 * @param string|null $prefix
	 * @param string|null $ext
	 * @return string
	 */
	public static function getRandName($prefix = null, $ext = null)
	{
		$string = $prefix;
		$string .= rand(1000000, 9999999) . time();
		$string .= $ext;

		return $string;
	}
}
