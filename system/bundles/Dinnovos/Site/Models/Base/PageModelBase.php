<?php
namespace Dinnovos\Site\Models\Base;
/** 
* @Table("paginas")
*/
Class PageModelBase
{
	const table = 'paginas';
	const title = 'title';
	const primary = 'id';
	const hasTimestampable = true;
	public function getFieldsSluggable()
	{
		return array("title");
	}

}