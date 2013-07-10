<?php namespace Laravella\Ravel\Post;

use Laravella\Ravel\Content\Content;

class Post extends Content
{

	protected $contentType = 'post';

	protected $useContentCategories = true;
	

	public function ContentModel()
	{
		return app('ContentModel');
	}
}