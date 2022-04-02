<?php

namespace App\Constants;

use Illuminate\Contracts\Support\Arrayable;

class TodoStatus implements Arrayable
{

	public const PENDING='PENDING';
	public const PROCESSING='PROCESSING';
	public const FINISHED='FINISHED';

	public function toArray(): array  
	{
		return [
			self::PENDING,
			self::PROCESSING,
			self::FINISHED
		];
	} 

}