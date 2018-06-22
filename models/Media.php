<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * Model for work with images
 *
 */
class Media extends ActiveRecord
{

	public $image;



    /**
     * Single image upload method
     */
	public function uploadImage($file)
	{
		$name = md5(time()) . '.' . pathinfo($file->name, PATHINFO_EXTENSION);
		if( $file->saveAs( Yii::getAlias('@web') . 'uploads/images/' . $name ) )
		{
			$image = new Media();
			$image->name = $name;
			$image->title = $file->name;
			$image->alt = '';


			$image->save();
		}
	}

}