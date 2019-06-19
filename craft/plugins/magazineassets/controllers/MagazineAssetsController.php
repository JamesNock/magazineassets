<?php
namespace Craft;

class MagazineAssetsController extends BaseController
{
	public function init()
	{
		if (!craft()->plugins->getPlugin('MagazineAssets'))
			throw new Exception('Couldn\'t find the Magazine Assets Plugin!');
	}

	public function actionGetMagAsset(array $variables = [])
	{
		$path = craft()
			->config
			->get('environmentVariables')['internalAssetsPath'] .
			'magazines' . DIRECTORY_SEPARATOR . $variables['issue'] .
			DIRECTORY_SEPARATOR . $variables['folder'] .
			DIRECTORY_SEPARATOR . $variables['file'];

		if (IOHelper::fileExists($path)) {
	         	$content = IOHelper::getFileContents($path);
	         	craft()
	         	->request
	         	->sendFile($path, $content, [ 'forceDownload' => false ]);
	        } else {
	        	die('file not found at: '.$path);
	        }
	}
}
