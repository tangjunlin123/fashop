<?php
/**
 * 物流数据模型
 *
 *
 *
 *
 * @copyright  Copyright (c) 2019 MoJiKeJi Inc. (http://www.fashop.cn)
 * @license    http://www.fashop.cn
 * @link       http://www.fashop.cn
 * @since      File available since Release v1.1
 */

namespace App\Model;



class Extend extends Model
{
	protected $softDelete = true;
	protected $createTime = true;

	/**
	 * @param array $data
	 * @return bool|int
	 */
	public function addExtend( array $data )
	{
		return $this->add( $data );
	}

	/**
	 * @param array $condition
	 * @param array $data
	 * @return bool|mixed
	 */
	public function editExtend( $condition = [], $data = [] )
	{
		return $this->where( $condition )->edit( $data );
	}

	/**
	 * @param array $condition
	 * @return bool|null
	 */
	public function delExtend( $condition = [] )
	{
		return $this->where( $condition )->del();
	}

	/**
	 * @param $condition
	 * @return array|bool|int|null
	 */
	public function getExtendCount( $condition )
	{
		return $this->where( $condition )->count();
	}

	/**
	 * @param array  $condition
	 * @param string $field
	 * @return array|bool
	 */
	public function getExtendInfo( $condition = [], $field = '*' )
	{
		$info = $this->where( $condition )->field( $field )->find();
		return $info;
	}

	/**
	 * @param array  $condition
	 * @param string $field
	 * @param string $order
	 * @param array  $page
	 * @return array|bool|false|null
	 * @throws \EasySwoole\Mysqli\Exceptions\OrderByFail
	 */
	public function getExtendList( $condition = [], $field = '*', $order = 'id desc', $page = [1, 10] )
	{
		$list = $this->where( $condition )->order( $order )->field( $field )->page( $page )->select();
		return $list;
	}


}

?>