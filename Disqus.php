<?php
namespace plance\widget;

use Yii;

class Disqus extends yii\base\Widget
{
	public $disqus_shortname;
	public $disqus_url = null;
	
    public function run()
    {
		if(isset(Yii::$app -> params['disqus_shortname']) && Yii::$app -> params['disqus_shortname'])
		{
			$Request = Yii::$app -> getRequest();
			
			if($this -> disqus_url === null)
			{
				$disqus_url = $Request -> getHostInfo().$Request -> getUrl();
			}
			else
			{
				$disqus_url = $Request -> getHostInfo().$this -> disqus_url;
			}
			
			return $this -> render('disqus',[
				'disqus_shortname' => Yii::$app -> params['disqus_shortname'],
				'disqus_url' => $disqus_url,
			]);
		}
		return '';
    }
}