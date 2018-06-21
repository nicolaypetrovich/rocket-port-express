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

//			$imageSizes=array('');
//
//			(Image::getImagine()->open(Yii::getAlias('@web') . 'uploads/images/'.$name)->thumbnail(new Box(200, 200))->save(Yii::getAlias('@runtime/'.$name) , ['quality' => 90]));
//                        var_dump(Yii::getAlias('@runtime/'.$model->media->name));
//                        var_dump(Url::to('@runtime/'.$model->media->name));
//                        $imagine=new Imagine\Imagick\Imagine();
//                            $imagetest=Image::getImagine()->open(Yii::getAlias('@runtime/'.$model->media->name))->show();
//                        $image = Image::getImagine();
//                        var_dump($imagetest);
//                        var_dump($image->open(Yii::getAlias('@runtime/'.$model->media->name))->show('jpg'));



			$image->save();
		}
	}

}