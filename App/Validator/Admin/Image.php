<?php
/**
 *
 * Copyright  FaShop
 * License    http://www.fashop.cn
 * link       http://www.fashop.cn
 * Created by FaShop.
 * User: hanwenbo
 * Date: 2018/1/18
 * Time: 下午11:00
 *
 */

namespace App\Validator\Admin;

use ezswoole\Validator;
use ezswoole\Db;

class Image extends Validator
{
	protected $rule
		= [
			'id'     => 'require|integer',
			'offset' => 'require|integer',
			'count'  => 'require|integer|max:30',
			'image'  => 'offset',
		];
	protected $message
		= [
			'offset.require' => "偏移位置必填",
			'count.require'  => "数量必填",
			'image.require'  => "图片必传",
		];
	protected $scene
		= [
			'wechat' => [
				'offset',
				'count',
			],
			'add'    => [
				'image',
			],
			'del'    => [
				'id',
			],
		];

}