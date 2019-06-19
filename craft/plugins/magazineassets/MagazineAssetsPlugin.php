<?php
namespace Craft;

class MagazineAssetsPlugin extends BasePlugin
{
	public function getName()
	{
		return 'Magazine Assets';
	}

	public function getVersion()
	{
		return '1.0';
	}

	public function getDeveloper()
	{
		return 'James Nock Web Development & Management';
	}

	public function getDeveloperUrl()
	{
		return 'https://www.james-nock.co.uk';
	}

	public function registerSiteRoutes()
	{
		return [
			'magazine/(?P<issue>.*)/(?P<folder>.*)/(?P<file>.*)' =>
						['action' => 'magazineAssets/getMagAsset'],
		];
	}
}
