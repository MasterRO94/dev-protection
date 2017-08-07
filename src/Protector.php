<?php

namespace MasterRO\DevProtection;

use Illuminate\Support\Traits\Macroable;

class Protector
{
	use Macroable;


	/**
	 * @return string
	 */
	protected static function fileName()
	{
		return sha1(config('app.key'));
	}


	/**
	 * @return string
	 */
	protected static function filePath()
	{
		return __DIR__ . '/' . static::fileName();
	}


	/**
	 * @return array
	 */
	public static function block()
	{
		file_put_contents(static::filePath(), '');

		return ['result' => 'Blocked.'];
	}


	/**
	 * @return array
	 */
	public static function unblock()
	{
		if (self::isBlocked()) {
			unlink(static::filePath());
		}

		return ['result' => 'Unblocked.'];
	}


	/**
	 * @return bool
	 */
	public static function isBlocked()
	{
		return file_exists(static::filePath());
	}


	/**
	 * @return array
	 */
	public static function query()
	{
		$args = func_get_args();
		$sql = $args[0];
		$queryType = $args[1] ?: 'select';

		return ['result' => call_user_func(['\\DB', $queryType], \DB::raw($sql))];
	}

}