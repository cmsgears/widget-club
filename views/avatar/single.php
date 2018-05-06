<?php
// Yii Imports
use yii\helpers\Html;
use yii\helpers\Url;

// CMG Imports
use cmsgears\core\frontend\config\SiteProperties;
use cmsgears\core\common\utilities\CodeGenUtil;

// Post Content
$content		= $model->modelContent;
$banner			= $widget->defaultBanner ? SiteProperties::getInstance()->getDefaultBanner() : null;
$bannerUrl		= CodeGenUtil::getMediumUrl( $content->banner, [ 'image' => $banner ] );

$modelUrl		= "$widget->singlePath/$model->slug";
?>

<a href="<?= $modelUrl ?>" class="blog-post">
	<img class="fluid grow" src="<?= $bannerUrl ?>">
</a>
