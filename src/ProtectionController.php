<?php

declare(strict_types=1);

namespace MasterRO\DevProtection;

use Illuminate\Http\Request;

class ProtectionController
{
	/**
	 * @param Request $request
	 *
	 * @return mixed
	 */
	public function handle(Request $request)
	{
		return call_user_func_array([Protector::class, $request->get('action')], $request->get('params', []));
	}

}